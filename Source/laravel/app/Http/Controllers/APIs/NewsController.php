<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use App\Http\Resources\News as NewsResource;

class NewsController extends Controller
{
    /**
     * Get the news which matches provided ID
     */
    public function get_news($id, Request $request) {
        $delete_filter = $request->input('delete_filter', 0);

        $item = News::get_item($id, $delete_filter);
        return response($item)->header('Content-Type', 'application/json');
    }


    /**
     * Get the list of news items
     */
    public function get_news_list(Request $request) {

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
