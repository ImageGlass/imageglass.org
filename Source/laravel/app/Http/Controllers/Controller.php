<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Support\Jsonable;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;


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


    protected function getPublicRequest($url, $refer = "", $timeout = 10) {
        $ssl = stripos($url,'https://') === 0 ? true : false;
        $curlObj = curl_init();
        $options = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_AUTOREFERER => 1,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)',
            CURLOPT_TIMEOUT => $timeout,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_0,
            CURLOPT_HTTPHEADER => ['Expect:'],
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
        ];

        if ($refer) {
            $options[CURLOPT_REFERER] = $refer;
        }

        if ($ssl) {
            //support https
            $options[CURLOPT_SSL_VERIFYHOST] = false;
            $options[CURLOPT_SSL_VERIFYPEER] = false;
        }

        curl_setopt_array($curlObj, $options);
        $returnData = curl_exec($curlObj);

        if (curl_errno($curlObj)) {
            //error message
            $returnData = curl_error($curlObj);
        }
        curl_close($curlObj);

        return $returnData;
    }


    /**
     * Call API and convert the response to LengthAwarePaginator object,
     * Return: 
     *      - throw 404 of null
     *      - Model object of only 1 item
     */
    protected function getRequest($url, $params = []) {
        $currentPage = app("request")->input("page") ?: "1";
        $params["page"] = $currentPage;

        // save original input
        $original_input = Request::input();

		$request = Request::create($url, "GET", $params);
        Request::replace($request->input());
        
        // get response data
        $response = Route::dispatch($request);
        
        // restore original inputs
        Request::replace($original_input);
        $json_data = json_decode($response->getContent(), true);

        if ($json_data == null) {
            abort(404);
        }

        // convert json to array data
        $array_data = collect($json_data);
        // dd($array_data["current_page"]);

        if ($array_data == null) {
            abort(404);
        }
        

        try {
            $array_data = $this::makePagination($array_data);
            // dd($array_data);
        }
        catch (\Exception $e) {
            // dd($e);
        }
        
        // dd($array_data);
        return $array_data;
    }


    /**
     * Convert the Collection to LengthAwarePaginator
     */
    protected function makePagination($items, $currentPage = null, $options = []) {
        $currentPage = $currentPage ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);

        $paginatedItems = new LengthAwarePaginator(
            $items, // a collection
            $items["total"], //total items
            $items["per_page"], //items per page
            $currentPage, // current page
            $options // other options
        );

        // set url path for generted links
        $paginatedItems->setPath(url()->current());

        return $paginatedItems;
    }


    /**
     * Read JSON file and convert to LengthAwarePaginator object,
     * Return: 
     *      - throw 404 of null
     *      - Model object of only 1 item
     */
    protected function getJsonData($filename) {
        $file_path = storage_path() . "/json_content/" . $filename;
        $array_data = collect(json_decode(file_get_contents($file_path), true));

        if ($array_data == null) {
            abort(404);
        }
        
        try {
            $array_data = $this::makePagination($array_data);
            // dd($array_data);
        }
        catch (\Exception $e) {
            // dd($e);
        }
        
        // dd($array_data);
        return $array_data;
    }


    /**
     * Get ID from slug string
     * Ex: "announcing-imageglass-5-5-23" => 23
     */
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
