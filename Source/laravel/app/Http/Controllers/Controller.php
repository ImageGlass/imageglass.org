<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

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

}
