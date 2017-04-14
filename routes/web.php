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


//prefered method for mvc

//Route::get('/data','TaskController@index');
//
//Route::get('/data/{id}', 'TaskController@show') ;

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create') ;
Route::get('/posts/{post}', 'PostsController@show') ;
Route::post('/posts', 'PostsController@store') ;
Route::post('/posts/{post}/comments', 'CommentsController@store') ;
//old method

//Route::get('/', function () {
//    $tasks=[
//      'go to room','find treasure','actions performed'
//    ];
//    return view('welcome',compact('tasks'));
//});

//Route::get('about', function () {
//    return view('about',['name'=>'subbu','second'=>'Aryan']);
//});
//
//Route::get('about2', function () {
//    $name='harshit';
//    $second='aryan';
//    return view("about",compact('name','second'));
//
//});
//


//Route::get('/data/{id}', function ($id) {
//    $tasks=DB::table('tasks')->where('user_id','=',$id) ->get();
//    return view('data',compact('tasks'));
//});


//Route::get('/elo', function () {
//    $tasks=App\Task::all();
//    return view('welcome',compact('tasks'));
//});


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index');
