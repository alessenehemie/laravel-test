<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); 


Route::get('/hello', function () {
    return('hhheeeeeeeeellllllllllllllllllllloooooooooooooooooooooooooooooooooo');
}); 

route :: prefix('dashboard')-> group(function(){
    
       Route::get('/admin', function () {
                       return('page admin');
                 }); 
       Route::get('/user', function () {
                       return('page user');
                 }); 
});