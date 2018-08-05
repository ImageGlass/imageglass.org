<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index() {
        return view("pages.home.home");
    }


    public function sitemap_xml()
	{

		// $this->data['news_items'] = News::get_items(0, 0);
		// $this->data['release_items'] = Download::get_items("release", 0, 0);
		// $this->data['theme_items'] = Download::get_items("theme", 0, 0);
		// $this->data['extension_items'] = Download::get_items("extension", 0, 0);

		// $content = View::make('pages\sitemap-xml', $this->data);
		// return Response::make($content, '200')->header('Content-Type', 'text/xml');
    }
    
}