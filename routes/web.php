<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}); 


Route::get('/hello', function () {
    return('hhheeeeeeeeellllllllllllllllllllloooooooooooooooooooooooooooooooooo');
}) ;

route :: prefix('dashboard')-> group(function(){
    
       Route::get('/admin', function () {
                       return('page admin');
                 }); 
       Route::get('/user', function () {
                       return('page user');
                 }); 
});

Route::get('/user', function () {
    return response()->json([
         'name'=>"alesse",
         "email"=>"nissi@mail.com",
         "age"=>19
    ]);
}) ;
$user = [
    1 => ['name' => 'John Doe', 'email' => 'john.doe@example.com', 'age' => 30],
    2 => ['name' => 'Jane Smith', 'email' => 'jane.smith@example.com', 'age' => 25],
    3 => ['name' => 'Alice Johnson', 'email' => 'alice.johnson@example.com', 'age' => 28],
];

Route::get('/user/{id}', function($id) use($user) {
    if(array_key_exists($id, $user)){
        return response()->json($user[$id]);
    }
    else {
        return response()->json([
            "message" => "utilisateur introuvable"
        ], 404);
});