<?php

namespace App\Http\Controllers;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
use App\Release;
use Request;

class HomeController extends Controller
{
    public function index() {

		

		// get the latest relese info
		$release_item = $this::getRequest("/api/release/latest");


		// get the latest news items
		$news_items = $this::getRequest("/api/posts", array("limit" => "5"));


		// page data
		$this->data["release_item"] = $release_item;
		$this->data["news_items"] = $news_items;


		// meta tags
		$this->data["_page"] = "home";
		$this->data["_thumbnail"] = url("upload/photo/release", $release_item["image"]);

        return view("pages.home.home")->with($this->data);
    }


    public function sitemap_xml()
	{
		$this->data["news_items"] = News::get_items(0, 0);
		$this->data["release_items"] = Download::get_items("release", 0, 0);
		$this->data["theme_items"] = Download::get_items("theme", 0, 0);
		$this->data["extension_items"] = Download::get_items("extension", 0, 0);

		$content = View::make("pages\sitemap-xml", $this->data);
		return Response::make($content, "200")->header("Content-Type", "text/xml");
    }
    
}