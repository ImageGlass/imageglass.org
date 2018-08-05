<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Theme;
use App\Http\Resources\Theme as ThemeResource;

class ThemeController extends Controller
{
    /**
     * Get the theme which matches provided ID
     */
    public function get_theme($id, Request $request) {
        $delete_filter = $request->input('delete_filter', 0);

        $item = Theme::get_item($id, $delete_filter);
        return response($item)->header('Content-Type', 'application/json');
    }


    /**
     * Download theme
     */
    public function download_theme($id) {

        $item = Theme::update_count($id, 1);

        if (!is_null($item)) {
			return response(new ThemeResource($item))->header('Content-Type', 'application/json');
		}

        return null;
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
