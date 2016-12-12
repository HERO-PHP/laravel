<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


//开启rewrite
Route::get("/test/{id}", function ($id) {
    return "123____{$id}";
});
Route::get('/admin/user', function () {
    return "/admin/user";
});


Route::get('/form', function () {
    return view("form/form");
});
Route::post('/post', function () {
    var_dump($_POST);
    return "/post";
});


Route::get('/putform', function () {
    return view("form/put");
});
Route::put('/put', function () {
    return "/put";
});

Route::get('/delform', function () {
    return view("form/del");
});
Route::delete('/del', function () {
    return "/delete";
});