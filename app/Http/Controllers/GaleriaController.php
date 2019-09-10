<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class GaleriaController extends Controller
{


    public function index(User $user)
    {

        //pega o primeiro retristo da tabela vem do Model Post a função
        $firstrableroll = Post::firstrableroll();
        //pega todos os posts da tabela posts
        $posts = Post::all();
        return view('galeria.index',compact('posts','user'));
    }

}
