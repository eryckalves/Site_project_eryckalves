<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Post;
use App\User;
use Aws\S3\S3Client;


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {

        //metodo para validar se os campos estao preenchidos.
        // o post da pagina carregado na variavel $data
        $data = request()->validate([
            'image' => ['required','image'],
            'caption' =>['required']
        ],
        [
            'image.required' => 'Obrigatorio escolher uma Imagem',
            'caption.required' => 'Obrigatorio escrever uma menssagem'
        ]
        );

       
        // store('nome da pasta' , 'drive')
        // drive vem do arquivo config/filesystems.php
        // driver do s3 precisa instalar : composer require league/flysystem-aws-s3-v3 ~1.0
        // configurar o env. para aws (s3)
    
        $ImagePath=request()->file('image')->store('images','s3public');

        // ********* ver a url aws s3 para onde esta indo o arquivo. ***********
        //Storage::cloud()->url('images');
        
        
        
        // precisa do pacote *  comando composer require intervention/image
        // requer pacote use Intervention\Image\Facades\Image;
        // redimenciona a imagem , metodo fit nao eh igual ao resize
       // $image = Image::make(public_path("storage/{$ImagePath}"))->fit(1000,1000);
        
        //$image->save();

        //metodo para graver no banco com dependencia auth()->user()->posts()->create([]);
        // auth() : precisa estar logado 
        //user() esse usuario precisa ter um id  para a chave estrangeira na tabela posts
        //posts() vai gerar id da tabela posts e colocar as informacoes na tabela posts
        // **************        create() para gravar no banco  *******************************************************
        $infoimage = auth()->user()->posts()->create([
        //para obter as informacoes da imagem gravada usar $infoimage mas nao precisa existir
            'image' =>$ImagePath,
            'caption' => $data['caption']
        ]);

        return redirect()->route('galeria.index');
        
    }

    public function destroy($post_id)
    {
        $post = Post::find($post_id);

        // *** local
        //$pathfile = 'public'.'/'.$post->image;
        //Storage::delete($pathfile); //delete from storage

        //*** aws s3 bucket

        $s3 = S3Client::factory([
            'region' => env('AWS_DEFAULT_REGION'),
            'version'  => 'latest'
        ]);

        $bucket = 'eryckalves-page';
        $keyname = $post->image;

        
        //aws s3 bucket

        $result = $s3->deleteObject(array(
            'Bucket' => $bucket,
            'Key'    => $keyname
        )); 

        $post->delete(); // delete from db
        return redirect()->route('galeria.index');
    }


}
