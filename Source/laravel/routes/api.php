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


const NUMBER_ONLY = "[0-9\.]+";
const TEXT_ONLY = "[A-Za-z\.-]+";
const NUMBER_TEXT = "[0-9A-Za-z\.-]+";
const EMAIL = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$";


Route::middleware("auth:api")->get("/user", function (Request $request) {
    return $request->user();
});

//http://ig.local/public/api/...

Route::get('/release/latest', 'APIs\ReleaseController@get_latest_release');
Route::get('/release/{id}', 'APIs\ReleaseController@get_release')->where(array('id' => NUMBER_ONLY));
Route::get('/release/download/{id}', 'APIs\ReleaseController@download_release')->where(array('id' => NUMBER_ONLY));
Route::get('/releases', 'APIs\ReleaseController@get_release_list');


Route::get('/theme/{id}', 'APIs\ThemeController@get_theme')->where(array('id' => NUMBER_ONLY));
Route::get('/theme/download/{id}', 'APIs\ThemeController@download_theme')->where(array('id' => NUMBER_ONLY));
Route::get('/themes', 'APIs\ThemeController@get_theme_list');


Route::get('/news/{id}', 'APIs\NewsController@get_news')->where(array('id' => NUMBER_ONLY));
Route::get('/news', 'APIs\NewsController@get_news_list');


