<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/naty', function () { 
    echo 'ola naty';
 });

 route::get('/filmes/{filme}', function($filme) { 
    echo 'Acessando dados do filme: ' . $filme;
 });
  
 Route::view('/conheca ' , 'sobre');

 