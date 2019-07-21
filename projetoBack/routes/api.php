<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('mostraLivro/{id}','LivroController@showLivro');
route::get('listaLivro','LivroController@listLivro');
route::post('criaLivro','LivroController@createLivro');
route::put('atualizaLivro/{id}','LivroController@updateLivro');
route::delete('deletaLivro/{id}','LivroController@deleteLivro');

route::get('mostraSocio/{id}','SocioController@showSocio');
route::get('listaSocio','SocioController@listSocio');
route::post('criaSocio','SocioController@createSocio');
route::put('atualizaSocio/{id}','SocioController@updateSocio');
route::delete('deletaSocio/{id}','SocioController@deleteSocio');

route::put('emprestaLivro/{livro_id}/{socio_id}','EmprestimoController@emprestaLivro');
route::put('devolveLivro/{livro_id}/{socio_id}','EmprestimoController@devolveLivro');
