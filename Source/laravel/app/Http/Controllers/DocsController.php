<?php

namespace App\Http\Controllers;


class DocsController extends Controller
{
    public function documentation_listing_redirect($slug) {
        return redirect("docs");
    }

    public function documentation_listing() {

        // meta tags
        $this->data["_page"] = "docs";
        $this->data["_title"] = "Documentation | " .  $this->data["_name"];
        $this->data["_description"] = "Get started with ImageGlass, the minimal simple photo viewer for everybody.";
        $this->data["_keywords"] .= "features, supported formats, ui shortcuts, hotkeys, documentation, how to create theme, build language pack";
		$this->data["_thumbnail"] = getRandomImg();

        return view("pages.docs.docs")->with($this->data);
    }


    public function documentation_details_redirect($slug) {
        return redirect("docs/".$slug);
    }


    public function documentation_details($slug) {
        $slug = strtolower($slug);
        $title = "";
        $description = "";
        $keyword = "";

        switch ($slug) {
            case "features":
                $title = "Features";
                $description = "ImageGlass is an open source photo viewer, which benefits from the speed that comes with being so lightweight, and is a good choice for Windows users.";
                $keyword = "imageglass features, photo viewer features";
            
                break;

            case "supported-formats":
                $title = "Supported formats";
                $description = "mageGlass supports the most common image formats. User also can customize this extension list easily.";
                $keyword = "imageglass formats, image formats, supported formats";
            
                break;

            case "ui-shortcuts-reference":
                $title = "UI Shortcuts Reference";
                $description = "ImageGlass has several built-in shortcut keys that can save you time in your daily workflows.";
                $keyword = "imageglass shortcut, hotkey, ui shortcut";
            
                break;
            
            default:
                abort(404);
                break;
        }
        
        // get the latest relese info
		$release_item = $this::getRequest("/api/release/latest");

        // get the latest release items
        $release_collection = $this::getRequest("/api/releases", array("limit" => "5"));

        // page data
        $this->data["_category_url"] = "release";
        $this->data["_article_list_title"] = "The latest releases";
        $this->data["_article_collection"] = $release_collection;
        $this->data["_version"] = $release_item["version"];


        // meta tags
        $this->data["_page"] = "docs.details";
        $this->data["_title"] = $title . " | " .  $this->data["_name"];
        $this->data["_description"] = $description;
        $this->data["_keywords"] .= $keyword;
		$this->data["_thumbnail"] = getRandomImg();

        return view("pages.docs.".$slug)->with($this->data);
    }

    
}