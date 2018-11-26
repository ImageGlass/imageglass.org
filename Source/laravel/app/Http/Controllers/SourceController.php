<?php

namespace App\Http\Controllers;


class SourceController extends Controller
{
    public function index() {

        // get the latest release items
        $release_collection = $this::getRequest("/api/releases", array("limit" => "5"));

        // page data
        $this->data["_category_url"] = "release";
        $this->data["_article_list_title"] = "The latest releases";
        $this->data["_article_collection"] = $release_collection;

        // meta tags
        $this->data["_page"] = "source";
        $this->data["_title"] = "Source | " .  $this->data["_name"];
        $this->data["_description"] = "ImageGlass source code was released under the terms of the GNU General Public License. By downloading ImageGlass source code, you agree with all the terms of this license.";
        $this->data["_keywords"] .= "source code, github, codeplex project, imageglass project, open source project, foss app";
		$this->data["_thumbnail"] = getRandomImg();

        return view("pages.source.source")->with($this->data);
    }


    
}