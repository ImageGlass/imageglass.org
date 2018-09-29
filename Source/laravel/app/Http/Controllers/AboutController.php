<?php

namespace App\Http\Controllers;


class AboutController extends Controller
{
    public function index() {

        // get the latest news items
        $news_collection = $this::getRequest("/api/news", array("limit" => "10"));

        // page data
        $this->data["_category_url"] = "news";
        $this->data["_article_list_title"] = "The latest updates";
        $this->data["_article_collection"] = $news_collection;

        // meta tags
        $this->data["_page"] = "about";
        $this->data["_title"] = "Dương Diệu Pháp | " .  $this->data["_name"];
        $this->data["_description"] = "Hello! My full name is Dương Diệu Pháp. I am 27 years old Vietnamese developer.";
        $this->data["_keywords"] .= "duong dieu phap, Dương Diệu Pháp, d2phap, ddphap, phapsuxeko, ImageGlass team";
		$this->data["_thumbnail"] = url("/img/phapavt.png");

        return view("pages.about.about")->with($this->data);
    }


    
}