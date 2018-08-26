<?php

namespace App\Http\Controllers;


class NewsController extends Controller
{
    public function index() {

        $this->data["_page"] = "news";

        return view("pages.news.news")->with($this->data);
    }


    public function news_details()
	{
        $this->data["_page"] = "news.details";
        
		return view("pages.news.news-details")->with($this->data);
    }
    
}