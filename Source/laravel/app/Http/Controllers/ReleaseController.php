<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Release;
use App\Download;
use App\Http\Resources\Release as ReleaseResource;
use App\Http\Resources\Download as DownloadResource;


class ReleaseController extends Controller
{
    public function show($id) {
        
        //get all download records of this release id
        return (new ReleaseResource(Release::find($id)))->downloads;
    }


    /**
     * Get the latest stable release of ImageGlass
     */
    public function get_latest_release() {

        $item = Release::get_item(0);
        return $item;
    }


    /**
     * Get the release which matches provided ID
     */
    public function get_release($id) {

        $item = Release::get_item($id);
        return $item;
    }


    /**
     * Get the download of release
     */
    public function download_release($download_id) {

        $item = Download::get_item($download_id);
        return new DownloadResource($item);
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
        return $items;
    }

}
