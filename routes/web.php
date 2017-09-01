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

Route::get('/home', function () {
    return view('home');
});

Route::get('/view','RecordsController@showAll');
Route::get('/new','RecordsController@showNew');
Route::get('/edit','RecordsController@showEdit');


// Route::get('/new', function () {
//     return view('new');
// });

// Route::get('/edit', function () {
//     return view('edit');
// });



//

Route::get('about', function () {
    return view('about');
});

Route::get('about/{cat}',function($cat){
return 'Hi From '.$cat.' Me';
});

Route::get('about/search/{cat}',function($cat){
return "Hi From {$cat} Me";
});