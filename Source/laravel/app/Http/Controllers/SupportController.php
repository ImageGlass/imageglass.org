<?php

namespace App\Http\Controllers;


class SupportController extends Controller
{
    public function index() {

        // meta tags
        $this->data["_page"] = "support";
        $this->data["_title"] = "Support | " .  $this->data["_name"];
        $this->data["_description"] = "Got a question? Need help with a problem? You're in the right place to find all the ImageGlass technical support you need.";
        $this->data["_keywords"] .= "support, how to create theme, build language pack, windows 10 photo, raw viewer, imageglass instaler";
		$this->data["_thumbnail"] = getRandomImg();

        return view("pages.support.support")->with($this->data);
    }


    
}