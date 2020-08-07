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


//use App\Mail\ContactMail;
/*Route::get('/hello', function () {
    return '<h1> Hello World </h1>';
});

Route::get('/user/{id}/{name}', function($id, $name){
    return "This is user ". $name ." with the ID:". $id;
});*/


// Route::get('/emails', function () {
//     return new ContactMail();
// });
Route::get('/', 'PagesController@index');
Route::get('/contact','PagesController@contact');
Route::get('/blog','PagesController@blog');
Route::post('/contact', 'ContactController@store');
Route::post('/posts/create', 'PostsController@store');
Route::resource('posts','PostsController');
