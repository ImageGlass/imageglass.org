<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Release;
use App\ReleaseDownload;
use App\Http\Resources\Release as ReleaseResource;
use App\Http\Resources\ReleaseDownload as ReleaseDownloadResource;


class ReleaseController extends Controller
{

    /**
     * Get the latest release of ImageGlass
     */
    public function get_latest_release(Request $request) {
        $release_type = $request->input('release_type', 'stable');
        $delete_filter = $request->input('delete_filter', 0);

        $item = Release::get_item(0, $release_type, $delete_filter);

        if (!is_null($item)) {
			return response(new ReleaseResource($item))->header('Content-Type', 'application/json');
		}

        return null;
    }


    /**
     * Get the release which matches provided ID
     */
    public function get_release($id, Request $request) {
        $release_type = $request->input('release_type', 'stable');
        $delete_filter = $request->input('delete_filter', 0);

        $item = Release::get_item($id, $release_type, $delete_filter);
        return response($item)->header('Content-Type', 'application/json');
    }


    /**
     * Get the download of release
     */
    public function download_release($download_id) {

        //get and increase download count
        $item = ReleaseDownload::update_count($download_id, 1);

        if (!is_null($item)) {
			return response(new ReleaseDownloadResource($item))->header('Content-Type', 'application/json');
		}

        return null;
    }


    /**
     * Get the list of release items
     */
    public function get_release_list(Request $request) {

        $id = $request->input('id', 0);
        $title = $request->input('title', '');
        $slug = $request->input('slug', '');
        $release_type = $request->input('release_type', '');
        $version = $request->input('version', '');
        $delete_filter = $request->input('delete_filter', '');
        $limit = $request->input('limit', '');
        $order_by = $request->input('order_by', '');
        $where_raw = '';
        $get_relatives = $request->input('get_relatives', 'false');

        $items = Release::get_items($id, $title, $slug, $release_type, $version, $delete_filter, $limit, $where_raw, $order_by, $get_relatives);


        return response($items)->header('Content-Type', 'application/json');
    }

}
