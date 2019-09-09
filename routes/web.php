<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage.index');
});

Auth::routes(['register' => false]);
//Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sobre', 'SobreController@index')->name('sobre.index');
Route::get('/produto', 'ProdutoController@index')->name('produto.index');

Route::get('/galeria', 'GaleriaController@index')->name('galeria.index');
//rota para a pagina de criar imagem (imagem + caption) metodo controller -> @create - /photo/create
Route::get('/galeria/create','PostsController@create')->name('posts.create');
//rota para chamar Controller que vai salvar o FILE no banco
Route::post('/galeria/create','PostsController@store');


//rota para dar Destruir post
Route::delete('/galeria/{galeria}', 'PostsController@destroy')->name('galeria.destroy');

Route::get('/contato', 'ContatoController@create')->name('contato.create');
Route::post('/contato', 'ContatoController@store')->name('contato.create');





