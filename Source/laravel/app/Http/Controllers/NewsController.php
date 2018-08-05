<?php

namespace App\Http\Controllers;


class NewsController extends Controller
{
    public function index() {
        return view("pages.news.news");
    }


    public function news_details()
	{
		return view("pages.news.news-details");
    }
    
}