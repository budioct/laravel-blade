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
    return view('welcome');
});

Route::get("/hello", function () {
    return view("hello", [
        "name" => "Foo Bar"
    ]);
}); // view(name_file_view, array("key"=>"value"))

Route::get("/world", function () {
    return view("hello.world", [
        "name" => "Foo Bar Guys"
    ]);
}); // view(directory.name_file_view, array("key"=>"value")) // nested view

Route::get("/html-endcoding", function(\Illuminate\Http\Request $request){
   return view('html-endcoding', [
      "name" => $request->input("name"),
   ]);
}); // bahansya serangan XSS
// note jangan percaya sumber input dari user, jika dari database tidak apa apa
// http://127.0.0.1:8000/html-endcoding?name=%3Ch3%3Etest%20bro%3C/h3%3E
// http://127.0.0.1:8000/html-endcoding?name=%3Cscript%3Ealert(%22Anda%20kena%20hack!%22)%3C/script%3E

Route::get("/disabled-view", function(){
    return view('disabled', ["name" => "budhi"]);
});
