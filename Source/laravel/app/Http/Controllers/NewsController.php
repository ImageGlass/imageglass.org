<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Http\Resources\News as NewsResource;

class NewsController extends Controller
{
    /**
     * Get the news which matches provided ID
     */
    public function get_post($id) {

        $item = News::get_item($id);
        return response($item)->header('Content-Type', 'application/json');
    }


    /**
     * Get the list of news items
     */
    public function get_post_list(Request $request) {

        $id = $request->input('id', 0);
        $title = $request->input('title', '');
        $slug = $request->input('slug', '');
        $delete_filter = $request->input('delete_filter', '');
        $limit = $request->input('limit', '');
        $order_by = $request->input('order_by', '');
        $where_raw = '';
        $get_relatives = $request->input('get_relatives', 'false');

        $items = News::get_items($id, $title, $slug, $delete_filter, $limit, $where_raw, $order_by, $get_relatives);


        return response($items)->header('Content-Type', 'application/json');
    }

}
