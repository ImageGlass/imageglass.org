<?php

namespace App\Http\Controllers;


class NewsController extends Controller
{
    public function index() {
        return view("pages.news.news")->with($this->data);
    }


    public function news_details()
	{
		return view("pages.news.news-details")->with($this->data);
    }
    
}