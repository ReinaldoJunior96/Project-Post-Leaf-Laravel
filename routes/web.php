<?php

use Illuminate\Support\Facades\Route;

/*
* Here is where you can register web routes for your application. These
* routes are loaded by the RouteServiceProvider within a group which
* contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
/*
 * @resource [Gera todas as rotas necessárias ]
 * @names [Renomeia as todas as rotas fornecidas pelo resource ]
 * @parameters [Renomeia o parametro passado na URL]
 * @App/Providers/AppServiceProvider.php [Implemento ao método boot a mudança dos "endpoint"]
*/
Route::resource('usuarios','UserController')
    ->names('user')
    ->parameters(['usuarios' => 'user']);
