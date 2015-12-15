<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('postagem',function()
{
    return'Listando as postagem';
});

Route::get('/', function () {
        return view('exemplo');
});

Route::get('postagem/adicionar', function()
{
    return 'Adicionar uma nova postagem';
});

Route::get('posts','PosterControler@index');
