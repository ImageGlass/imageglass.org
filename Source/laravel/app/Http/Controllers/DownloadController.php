<?php

namespace App\Http\Controllers;


class DownloadController extends Controller
{
    public function index() {

        // get the latest relese info
		$release_item = $this::getRequest("/api/release/latest");

        return redirect("releases/" . $release_item["slug"] ."-". $release_item["id"]);
    }


    public function release_details($slug)
	{
        $id = $this->getIdFromSlug($slug);

        if ($id < 0) {
            // throw error
            abort(404);
        }


        // get the release info
        $release_item = $this::getRequest("/api/release/" . $id);


        // page data
        $this->data["release_item"] = $release_item;
        

        // meta tags
        $this->data["_page"] = "download.release.details";
        $this->data["_title"] = $release_item["title"] . " | " .  $this->data["_name"];
        
		return view("pages.download.release-details")->with($this->data);
    }
    
}