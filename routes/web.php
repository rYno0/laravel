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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/posts',[
    'uses' => 'Postcontroller@create',
    
] );
Route::post('/posts',[
    'uses' => 'Postcontroller@store',
    'as' => 'posts.store'
] );
Route::delete('/shows',[
    'uses' => 'Postcontroller@destroy',
    'as' => 'posts.destroy'
] );
Route::get('/shows','Postcontroller@viewShow');
Route::resource('posts', 'Postcontroller');