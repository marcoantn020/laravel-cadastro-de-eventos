<?php

use Illuminate\Support\Facades\Route;

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
    $nome = "Marco";
    $idade = 31;
    $arr = [1,2,56,32,6,5];
    $nomes = ['antoni', 'xulia', 'rodrigo', 'leonel', 'rayara'];
    return view('welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => 'programador',
            'arr' => $arr,
            'nomes' => $nomes
        ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    $search = request('search');
    return view('products', ['busca' => $search]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});
