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
//rota inicial
Route::get('/', 'ControllerLink@linkHome');
Route::get('login', 'ControllerLink@linkLogin');
Route::get('home', 'ControllerLink@linkHome');


Route::get('gerente', ['as' => 'sistema.gerente', 'uses' => 'ControllerLink@linkGerente']);
Route::get('home', ['as' => 'home', 'uses' => 'ControllerLink@linkHome']);


Route::get('index', function () { // rota com metodo get e url amigavel login, onde busca dentro da pasta view o login.blade.php '/' é a rota
    return view('sistema.index');
});



/*Route::get('login', function () { // rota com metodo get e url amigavel login, onde busca dentro da pasta view o login.blade.php '/' é a rota
    return view('login');
});

vc vai colocar la no link <a href="{{ route('sistema.gerente') }}">Link</a>
na rota vc vai colocar
Route::get('gerente', ['as' => 'sistema.gerente', 'uses' => 'ControllerLink@linkGerente']);
 la no ControllerLink vc vai colocar:
public function linkGerente()
{
return view('sistema.gerente');
}


Route::get('criar-post', function () { // rota 'de link' abrir em outra página login esqueceu senha {{url('criar-post')}}
    return view('sistema.gerente');
});
*/
