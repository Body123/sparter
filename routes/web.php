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
    $data=[];
    $data['name']="abdo";
    $data['id']=10;

    return view('welcome',$data);
});

Route::get('/login', function () {
    return "llllll";
})->name("login");

Route::get('/body/{id}', function ($id) {
    return $id;
})->name("a");
Route::get('/test1', function () {
    return view("landing");
});
Route::get('/about', function () {
    return view("aboutUs");
});

Route::get('/index', "newsController@getIndex");
Route ::group(["namespace"=>"Front"],function (){
    Route::get('/admina', "FirstControler@showString")->middleware('auth');


});


Auth::routes(["verify"=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware("verified");




