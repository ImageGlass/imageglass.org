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

//http://ig.local/public/api/downloads/1

// Route::get("/downloads/{id}", "DownloadController@show");
// Route::get("/releases/{id}", "ReleaseController@show");




Route::get('/release/latest', 'ReleaseController@get_latest_release');
Route::get('/release/{id}', 'ReleaseController@get_release')->where(array('id' => NUMBER_ONLY));
Route::get('/release/download/{id}', 'ReleaseController@download_release')->where(array('id' => NUMBER_ONLY));
Route::get('/releases', 'ReleaseController@get_release_list');


// Route::get('/theme/{id}', 'ThemeController@get_theme')->where(array('id' => NUMBER_ONLY));
// Route::get('/theme/{id}/download/{download_id}', 'ThemeController@download_theme')->where(array('id' => NUMBER_ONLY, 'download_id' => NUMBER_ONLY));
// Route::get('/themes}', 'ThemeController@get_theme_list');


// Route::get('/post/{id}', 'PostController@get_post')->where(array('id' => NUMBER_ONLY));
// Route::get('/posts}', 'PostController@get_post_list');


