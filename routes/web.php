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
   
    /* $links = config("links"); */
    return view('posts.index', [
        "links"=>config("links"),
        "comics" => config("comics"),
       
        
    ]);
})->name("index");

Route::get("COMICS", function(){
    return view("posts.comics", [
        "links"=>config("links"),
        "comics" => config("comics"),
    ]);
})->name("COMICS");

Route::get("CHARACTERS", function(){
    return view("posts.characters", [
        "links"=>config("links"),
        "comics" => config("comics"),
    ]);
})->name("CHARACTERS");

Route::get("MOVIES", function(){
    return view("posts.movies", [
        "links"=>config("links"),
        "comics" => config("comics"),
    ]);
})->name("MOVIES");

Route::get("TV", function(){
    return view("posts.tv", [
        "links"=>config("links"),
        "comics" => config("comics"),
    ]);
})->name("TV");

Route::get("GAMES", function(){
    return view("posts.games", [
        "links"=>config("links"),
        "comics" => config("comics"),
    ]);
})->name("GAMES");

Route::get("COLLECTABLES", function(){
    return view("posts.collectables", [
        "links"=>config("links"),
        "comics" => config("comics"),
    ]);
})->name("COLLECTABLES");

Route::get("VIDEOS", function(){
    return view("posts.videos", [
        "links"=>config("links"),
        "comics" => config("comics"),
    ]);
})->name("VIDEOS");

Route::get("FANS", function(){
    return view("posts.fans", [
        "links"=>config("links"),
        "comics" => config("comics"),
    ]);
})->name("FANS");

Route::get("NEWS", function(){
    return view("posts.news", [
        "links"=>config("links"),
        "comics" => config("comics"),
    ]);
})->name("NEWS");

Route::get("SHOP", function(){
    return view("posts.shop", [
        "links"=>config("links"),
        "comics" => config("comics"),
    ]);
})->name("SHOP");