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
    return view('welcome');
});

Route::get('/ABOUT', function () {
    return '<title>WOY, DENGARKANLAH!!!</title>
    		<h1>Halo</h1><br>
    		Selamat Datang Di Webapp Saya<br>
    		LARAVEL, Emang Keren';
});


Route::get('/kantin/{mkn}/{mnm}/{mil}',function($mk,$mn,$ml){
	return 'Makan <b>'.$mk.'</b><br>Minum <b>'.$mn.'</b><br>Ngemil <b>'.$ml.'</b>';
	});

Route::get('/test/{u?}',function($a="Dadang"){
	return $a;
});