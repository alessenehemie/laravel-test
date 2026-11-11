<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); 

// exemple de route
Route::get('/hello', function () {
    return('heeeeeellllllllloooooooo');
}); 

Route::post('/user', function () {
    return('utilisateur creer');
}); 

Route::put('/user/{id}', function (%id) {// modifie entierement une ressource 
    return"utilisateur $id modifier";
}); 

Route::patch('/user/{id}', function (%id) { // modifie partiellement une ressource 
    return"utilisateur $id modifier";
}); 

Route::delete('/user/{id}', function (%id) {
    return"utilisateur $id supprimer";
}); 
Route::option('/user', function () {
    return("option pour les utilisateurs");
}); 