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

//Route::get('/', function () {
//    return view('welcome');
//});

//1-1
//Route::get('/',function(){
//    return'welcome';
//});

//1-2
//Route::get('/',function(){
//    return view('welcome');
//});

//1-3
Route::get('/',function(){
    return redirect('welcome');
});
Route::get('welcome',function(){
    return view('welcome');
});


//2-1
//Route::get('hello/{name}',function($name){
//    return'Hello,'.$name;
//});

//2-3
//Route::get('hello/{name?}',function($name='Everybody'){
//    return'Hello,'.$name;
//});

//4-1
Route::get('hello/{name?}',['as'=>'hello.index',function($name='Everybody'){
    return'Hello,'.$name;
}]);

