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

// NOTE: ***
// The below constants have already declared in api.php file

// const NUMBER_ONLY = "[0-9\.]+";
// const TEXT_ONLY = "[A-Za-z\.-]+";
// const NUMBER_TEXT = "[0-9A-Za-z\.-]+";
// const EMAIL = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$";



Route::get('/welcome', function () {
    return view('welcome');
});





/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'HomeController@index');
Route::get('/sitemap.xml', 'HomeController@sitemap_xml');


/*
|--------------------------------------------------------------------------
| News Routes
|--------------------------------------------------------------------------
*/

Route::get('/news', 'NewsController@index');
Route::get('/news/{slug}', 'NewsController@news_details')
    ->where(array('slug' => NUMBER_TEXT));


/*
|--------------------------------------------------------------------------
| Download Routes
|--------------------------------------------------------------------------
*/

Route::get('/download', 'DownloadController@index');
Route::get('/release/{slug}', 'DownloadController@download_release_details')
    ->where(array('slug' => NUMBER_TEXT));



