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
//Route::get('hello/{name?}',['as'=>'hello.index',function($name='Everybody'){
//    return'Hello,'.$name;
//}]);

//4-3
Route::get('say/{name?}',['as'=>'hello.index',function($name= 'Everybody'){
    return view('welcome');
}]);

//5-1
//Route::get('dashboard',function(){
//    return'dashboard';
//});

//5-2
Route::group(['prefix' => 'admin'], function() {
    Route::get('dashboard', function() {
        return 'admin dashboard';
    });
});

//7-1
Route::get('/',['as'=>'home.index','uses'=> 'HomeController@index']);
