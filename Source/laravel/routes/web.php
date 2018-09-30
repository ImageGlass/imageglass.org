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
Route::get('/checkforupdate', 'HomeController@checkforupdate'); //redirect to [/check-for-update]
Route::get('/check-for-update/{slug}', 'HomeController@check_for_update')->where(array('slug' => NUMBER_TEXT));



/*
|--------------------------------------------------------------------------
| News Routes
|--------------------------------------------------------------------------
*/
Route::get('/news', 'NewsController@index');
Route::get('/news/{slug}', 'NewsController@news_details')->where(array('slug' => NUMBER_TEXT));



/*
|--------------------------------------------------------------------------
| Download Routes
|--------------------------------------------------------------------------
*/
Route::get('/download', 'DownloadController@index'); //redirect to [/release/{slug}]
Route::get('/releases', 'DownloadController@release_listing');
Route::get('/release/{slug}', 'DownloadController@release_details')->where(array('slug' => NUMBER_TEXT));
Route::get('/release/{slug}/download', 'DownloadController@release_download')->where(array('slug' => NUMBER_TEXT));

Route::get('/moon', 'DownloadController@moon_listing');
Route::get('/languages', 'DownloadController@language_listing');

Route::get('/themes', 'DownloadController@theme_listing');
Route::get('/theme/{slug}', 'DownloadController@theme_details')->where(array('slug' => NUMBER_TEXT));
Route::get('/theme/{slug}/download', 'DownloadController@theme_download')->where(array('slug' => NUMBER_TEXT));




/*
|--------------------------------------------------------------------------
| Documentation Routes
|--------------------------------------------------------------------------
*/
Route::get('/docs', 'DocsController@index');
Route::get('/docs/{slug}', 'DocsController@documentation_details')->where(array('slug' => NUMBER_TEXT));
Route::get('/documentation/{slug}', 'DocsController@documentation_redirect')->where(array('slug' => NUMBER_TEXT)); // for backward compatibility


/*
|--------------------------------------------------------------------------
| Support Routes
|--------------------------------------------------------------------------
*/
Route::get('/support', 'SupportController@index');



/*
|--------------------------------------------------------------------------
| Source Routes
|--------------------------------------------------------------------------
*/
Route::get('/source', 'SourceController@index');



/*
|--------------------------------------------------------------------------
| About Routes
|--------------------------------------------------------------------------
*/
Route::get('/about', 'AboutController@index');



/*
|--------------------------------------------------------------------------
| Redirect Routes
|--------------------------------------------------------------------------
*/
Route::get('redirect', 'RedirectController@index');
