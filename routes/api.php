<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tasks', 'TaskController@index');               // タスク一覧取得 index
Route::post('/tasks', 'TaskController@store');              // タスク新規作成 store
Route::get('/tasks/{task}', 'TaskController@show');         // タスク詳細取得 show
Route::put('/tasks/{task}', 'TaskController@update');       // タスク更新    update
Route::delete('/tasks/{task}', 'TaskController@destroy');   // タスク削除    destroy
