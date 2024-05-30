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
