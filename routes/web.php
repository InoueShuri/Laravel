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


/*========================================================================
課題３はこちらにコメントの形で提出します。OKであれば次回提出の時には消します。

http://XXXXXX.jp/XXX というアクセスが来たときに
AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。

Route::get('XXX', 'YYY(Controllerディレクトリ名)\AAAController@bbb');
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/


Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create','Admin\NewsController@add');
    Route::get('profile/create','Admin\ProfileController@add');
    Route::get('profile/edit','Admin\ProfileController@edit');
});