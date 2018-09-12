<?php

namespace App\Http\Controllers;


class DocsController extends Controller
{
    public function index() {

        // meta tags
        $this->data["_page"] = "docs";
        $this->data["_title"] = "Documentation | " .  $this->data["_name"];
        $this->data["_description"] = "Get started with ImageGlass, the minimal simple photo viewer for everybody.";
        $this->data["_keywords"] .= "features, supported formats, ui shortcuts, hotkeys, documentation, how to create theme, build language pack";
		$this->data["_thumbnail"] = "https://picsum.photos/1200/630/?random";

        return view("pages.docs.docs")->with($this->data);
    }


    
}