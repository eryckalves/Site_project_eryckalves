<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //ignora permissao do laravel pq ja esta sendo tratado no PostsController.php
    protected $guarded = [];
    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // teste para pegar o primeiro registro da tabela 
    static function firstrableroll()
    {
         // teste para pegar o primeiro registro da tabela tem usar query sql do manual laravel
        return Post::first();
    }

}
