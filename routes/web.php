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

Route::get('/display','MemorialController@all')->middleware('auth');

    //一覧表示
Route::get('/show','MemorialController@select')->middleware('auth');

    //データ作成
Route::post('/show','MemorialController@make')->middleware('auth');

    //データ編集
Route::get('/edit/{id?}','MemorialController@rewrite')->middleware('auth');
Route::post('/editfinish','MemorialController@edit')->middleware('auth');

    //データ削除
Route::post('/delete/{id?}','MemorialController@delete')->middleware('auth');

    //テストページ
Route::get('/exam/{category?}','MemorialController@exam')->middleware('auth');

Route::get('/logout','MemorialController@logout');

Auth::routes();

?>