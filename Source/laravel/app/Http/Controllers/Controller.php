<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $data = array();

    function __construct() {

        $this->data['_name'] = 'ImageGlass';
        $this->data['_sitename'] = 'ImageGlass - A lightweight, versatile image viewer';
        
		$this->data['_title'] = 'ImageGlass - A lightweight, versatile image viewer';
		$this->data['_description'] = 'ImageGlass is a lightweight, open source photo viewer that designed to take place Windows Photo Viewer, work with all image formats, includes GIF, SVG, HEIC.';
        $this->data['_keywords'] = 'free photo viewer, best photo viewer, simple fast image viewer, windows 10 photo viewer, lightweight image viewer, best photo viewer for windows 10, open source image viewer, fast switch between images, photo viewer, minimalist image viewer, quick photo viewer, image converter, extract gif file, alternative windows 10, Irfanview alternatives, animated GIF files, imageglass, duong dieu phap, raw photo viwer, heic viewer, svg viewer, color picker, rapid viewing of pictures';
        
        $this->data['_h1'] = 'ImageGlass is a lightweight, versatile image viewing application that is designed to take the place of Photo Viewer in Windows 10, 8, 7 and Vista, especially those installations that may have trouble displaying PNG and GIF files in Photo Viewer.';
        
		$this->data['_author'] = 'Duong Dieu Phap';
        $this->data['_header'] = '';
		$this->data['_footer'] = '';
        $this->data['_thumbnail'] = '';
        
        
        $this->data['_page'] = 'home';
    }


    protected function getRequest($url, $params = []) {

        // save original input
        $original_input = Request::input();

		$request = Request::create($url, "GET", $params);
        Request::replace($request->input());
        
        // get response data
        $response = Route::dispatch($request);
        
        // restore original inputs
        Request::replace($original_input);
        
        // convert json to array data
        $array_data = json_decode($response->getContent(), true);

        // if server responses a list of items
        if ($array_data != null && array_key_exists("data", $array_data)) {
            return $array_data["data"];
        }

        if ($array_data == null) {
            abort(404);
        }
        
        return $array_data;
    }


    protected function getJsonData($filename) {
        $file_path = storage_path() . "/json_content/" . $filename;
        $array_data = json_decode(file_get_contents($file_path), true);
        
        // if json is a list of items
        if ($array_data != null && array_key_exists("data", $array_data)) {
            return $array_data["data"];
        }

        return $array_data;
    }


    protected function getIdFromSlug($slug) {
        $params = explode("-", $slug);
        $params_count = count($params);

        if ($params_count < 2) {

            // Error
            return -1;
        }

        $id = $params[$params_count - 1];

        return $id;
    }

}
