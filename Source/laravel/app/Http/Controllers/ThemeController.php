<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;
use App\Http\Resources\Theme as ThemeResource;

class ThemeController extends Controller
{
    /**
     * Get the theme which matches provided ID
     */
    public function get_theme($id) {

        $item = Theme::get_item($id);
        return response($item)->header('Content-Type', 'application/json');
    }


    /**
     * Download theme
     */
    public function download_theme($id) {

        $item = Theme::get_item($id);

        return response(new ThemeResource($item))->header('Content-Type', 'application/json');
    }


    /**
     * Get the list of theme items
     */
    public function get_theme_list(Request $request) {

        $id = $request->input('id', 0);
        $title = $request->input('title', '');
        $slug = $request->input('slug', '');
        $delete_filter = $request->input('delete_filter', '');
        $limit = $request->input('limit', '');
        $order_by = $request->input('order_by', '');
        $where_raw = '';
        $get_relatives = $request->input('get_relatives', 'false');

        $items = Theme::get_items($id, $title, $slug, $delete_filter, $limit, $where_raw, $order_by, $get_relatives);


        return response($items)->header('Content-Type', 'application/json');
    }
}
