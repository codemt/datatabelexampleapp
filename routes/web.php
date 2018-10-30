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
    return view('index.index1');
});
Route::get('/index2',function(){


    return view('index.index2');

});
Route::get('/index3','DataTableController@index')->name('admin.index3');
    
Route::get('/index4','DataTableController@index')->name('admin.index4');

Route::get('index5','DataTableController@getIndex')->name('admin.index5');
Route::get('/index5/data','DataTableController@yajratables')->name('admin.studentdata');

