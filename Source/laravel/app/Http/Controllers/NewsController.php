<?php

namespace App\Http\Controllers;


class NewsController extends Controller
{
    public function index() {

        // get the latest news items
        $news_items = $this::getRequest("/api/posts", array("limit" => "5"));
        

        // page data
		$this->data["news_items"] = $news_items;


        // meta tags
        $this->data["_page"] = "news";
        $this->data["_title"] = "Latest news | " .  $this->data["_name"];
        $this->data["_description"] = "Get the lastest updates of ImageGlass. Read ImageGlass stories and everything in the world.";
        $this->data["_keywords"] .= "news, lastest update";
		$this->data["_thumbnail"] = url("upload/photo/release/5.0_1.png");

        return view("pages.news.news")->with($this->data);
    }


    public function news_details()
	{
        $this->data["_page"] = "news.details";
        
		return view("pages.news.news-details")->with($this->data);
    }
    
}