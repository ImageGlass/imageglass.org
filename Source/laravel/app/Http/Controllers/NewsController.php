<?php

namespace App\Http\Controllers;


class NewsController extends Controller
{
    public function index() {

        // get the latest news items
        $news_collection = $this::getRequest("/api/news", array("limit" => "10"));
        // dd($news_collection);

        // page data
		$this->data["news_collection"] = $news_collection;


        // meta tags
        $this->data["_page"] = "news";
        $this->data["_title"] = "Latest news | " .  $this->data["_name"];
        $this->data["_description"] = "Get the lastest updates of ImageGlass. Read ImageGlass stories and everything in the world.";
        $this->data["_keywords"] .= "news, lastest update";
		$this->data["_thumbnail"] = "https://picsum.photos/1200/630/?random";

        return view("pages.news.news")->with($this->data);
    }


    public function news_details($slug)
	{
        $id = $this->getIdFromSlug($slug);

        if ($id < 0) {
            // throw error
            abort(404);
        }

        // get the news info
        $news_item = $this::getRequest("/api/news/" . $id);
        // get the latest news items
        $news_collection = $this::getRequest("/api/news", array("limit" => "10"));


        // page data
        $this->data["_category_url"] = "news";
        $this->data["_article_list_title"] = "The latest updates";
        $this->data["_posted_date"] = $news_item["updated_at"];
        $this->data["_article_collection"] = $news_collection;
        $this->data["news_item"] = $news_item;
        


        // meta tags
        $this->data["_page"] = "news.details";
        $this->data["_title"] = $news_item["title"] . " | " .  $this->data["_name"];
        $this->data["_description"] = $news_item["description"];
        $this->data["_keywords"] .= "news, lastest update, new update";
		$this->data["_thumbnail"] = $news_item["image"];
        
		return view("pages.news.news-details")->with($this->data);
    }
    
}