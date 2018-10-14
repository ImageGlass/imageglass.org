<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;


class DownloadController extends Controller
{
    public function index() {

        // get the latest relese info
		$release_item = $this::getRequest("/api/release/latest");

        return redirect("release/{$release_item["slug"]}-{$release_item["id"]}");
    }


    public function release_listing_redirect() {
        return redirect("releases");
    }

    public function release_listing() {
        // get the latest release items
        $release_collection = $this::getRequest("/api/releases", array("limit" => "10"));
        // dd($release_collection);

        // page data
		$this->data["release_collection"] = $release_collection;


        // meta tags
        $this->data["_page"] = "download.release";
        $this->data["_title"] = "All Releases | " .  $this->data["_name"];
        $this->data["_description"] = "Download all versions of ImageGlass";
        $this->data["_keywords"] .= ", release, lastest version, lastest update";
		$this->data["_thumbnail"] = "https://picsum.photos/1200/630/?random";

        return view("pages.download.releases")->with($this->data);
    }


    public function release_details($slug) {
        $id = $this->getIdFromSlug($slug);

        if ($id < 0) {
            // throw error
            abort(404);
        }

        // get the latest relese info
		$release_latest = $this::getRequest("/api/release/latest");

        // get the release info
        $release_item = $this::getRequest("/api/release/" . $id);

        // get the latest release items
        $release_collection = $this::getRequest("/api/releases", array("limit" => "5"));


        // page data
        $this->data["release_latest"] = $release_latest;
        $this->data["release_item"] = $release_item;
        
        $this->data["_category_url"] = "release";
        $this->data["_article_list_title"] = "The latest releases";
        $this->data["_article_collection"] = $release_collection;
        

        // meta tags        
        $this->data["_page"] = "download.release.details";
        $this->data["_title"] = $release_item["title"] . " | " .  $this->data["_name"];
        $this->data["_description"] = "Download ".$release_item["title"];
        $this->data["_keywords"] .= ", latest version, ".$release_item["title"];
		$this->data["_thumbnail"] = getFileUrl($release_item["image"], "release");
        
		return view("pages.download.release-details")->with($this->data);
    }
    

    public function release_download($slug) {
        
        $id = $this->getIdFromSlug($slug);

        if ($id < 0) {
            // throw error
            abort(404);
        }

        // get the release info
        $release_item = $this::getRequest("/api/release/download/{$id}");

        $file = getFilePath($release_item["link"], "release");
        $name = basename($file);
        // dd($file);

        // external file url
        if (substr($file, 0, 4) == "http" || 
            substr($file, 0, 5) == "https") {

            return redirect($file);
        }

        // start download release
        return response()->download($file, $name);
    }





    public function moon_listing() {
        // get the latest release items
        $moon_files = glob("upload/moon/*.zip");
		usort($moon_files, create_function('$a,$b', 'return filemtime($b) - filemtime($a);'));

        // page data
		$this->data["moon_files"] = $moon_files;


        // meta tags
        $this->data["_page"] = "download.moon";
        $this->data["_title"] = "ImageGlass Moon | " .  $this->data["_name"];
        $this->data["_description"] = "ImageGlass Moon has the latest of the new ImageGlass features. It is usually built and shipped to users with the latest state of develop branch.";
        $this->data["_keywords"] .= ", ImageGlass Moon, new features, developing, bugs";
		$this->data["_thumbnail"] = "https://picsum.photos/1200/630/?random";

        return view("pages.download.moon")->with($this->data);
    }







    public function theme_listing_redirect() {
        return redirect("themes");
    }

    public function theme_listing() {
        // get the latest theme items
        $theme_collection = $this::getRequest("/api/themes", array("limit" => "10"));
        // dd($theme_collection);

        // page data
		$this->data["theme_collection"] = $theme_collection;


        // meta tags
        $this->data["_page"] = "download.theme";
        $this->data["_title"] = "Download ImageGlass Theme Packs | " .  $this->data["_name"];
        $this->data["_description"] = "The beautiful theme packs to change the look of the interface of ImageGlass";
        $this->data["_keywords"] .= ", theme, lastest update";
		$this->data["_thumbnail"] = "https://picsum.photos/1200/630/?random";

        return view("pages.download.themes")->with($this->data);
    }


    public function theme_details($slug) {
        $id = $this->getIdFromSlug($slug);

        if ($id < 0) {
            // throw error
            abort(404);
        }

        // get the theme info
        $theme_item = $this::getRequest("/api/theme/" . $id);

        // get the latest theme items
        $theme_collection = $this::getRequest("/api/themes", array("limit" => "5"));


        // page data
        $this->data["theme_item"] = $theme_item;
        $this->data["_category_url"] = "theme";
        $this->data["_article_list_title"] = "The latest themes";
        $this->data["_article_collection"] = $theme_collection;
        

        // meta tags        
        $this->data["_page"] = "download.theme.details";
        $this->data["_title"] = $theme_item["title"] . " | " .  $this->data["_name"];
        $this->data["_description"] = "Download ".$theme_item["title"];
        $this->data["_keywords"] .= ", imageglass theme, monochrome theme, colorful theme, ".$theme_item["title"];
		$this->data["_thumbnail"] = getFileUrl($theme_item["image"], "theme");
        
		return view("pages.download.theme-details")->with($this->data);
    }


    public function theme_download($slug) {

        $id = $this->getIdFromSlug($slug);

        if ($id < 0) {
            // throw error
            abort(404);
        }

        // get the theme info
        $theme_item = $this::getRequest("/api/theme/download/{$id}");

        $file = getFilePath($theme_item["link"], "theme");
        $name = basename($file);
        // dd($file);

        // external file url
        if (substr($file, 0, 4) == "http" || 
            substr($file, 0, 5) == "https") {

            return redirect($file);
        }

        // start download theme
        return response()->download($file, $name);
    }





    public function language_listing_redirect() {
        return redirect("languages");
    }

    public function language_listing() {
        $key = "0b08634573c456476345efa8bad174f2";
        $url = "https://api.crowdin.com/api/project/imageglass/status?key=".$key."&json";

        // get language list
        $language_list = json_decode($this->getPublicRequest($url));
        // dd($language_list);
        
        // page data
		$this->data["language_list"] = $language_list;

        // meta tags
        $this->data["_page"] = "download.language";
        $this->data["_title"] = "Download ImageGlass Language Packs | " .  $this->data["_name"];
        $this->data["_description"] = "Download all language packs of ImageGlass";
        $this->data["_keywords"] .= ", language pack, localization, translation";
		$this->data["_thumbnail"] = "https://picsum.photos/1200/630/?random";

        return view("pages.download.languages")->with($this->data);
    }


    public function language_download($slug) {
        $key = "0b08634573c456476345efa8bad174f2";
        $url = "https://api.crowdin.com/api/project/imageglass/download/{$slug}.zip?key={$key}";

        return redirect($url);
    }
    

}