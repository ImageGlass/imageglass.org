<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class News extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    
    /**
	 * Get item that matches provided ID,
	 * Set ID = 0 to get the latest news
	 */
	public static function get_item($id = 0, $delete_filter = 0) {
		$db = News::where('title', 'LIKE', '%%');

		if ($delete_filter == -1) {
			$db = $db->withTrashed();
		}
		elseif ($delete_filter == 1) {
			$db = $db->onlyTrashed();
		}

		if ($id != 0) {
			$db = $db->where("id", "=", $id);
		}
		else {
			$db = $db->orderBy("created_at", 'desc');
		}

		return $db->first();
    }


    /**
	 * Get list of items with search criterias: 
	 * number: $id
	 * string: $title
	 * string: $slug
	 * number: $delete_filter = [
	 * 		-1: include trashed items
	 * 	 	 0: exclude trashed items
	 * 	 	 1: only trashed items
	 * ]
	 * 
	 * number: $limit
	 * string: $where_raw
	 * string: $order_by - orderByRaw()
	 * string: $get_relatives = [
	 * 		'true': include the relatives tables
	 * 		'false': exclude the relatives tables
	 * ]
	 */
	public static function get_items($id = 0, $title = '', $slug = '', $delete_filter = 0, $limit = 0, $where_raw = '', $order_by = '', $get_relatives = 'false')
	{
		$db = News::where('title', 'LIKE', '%'.$title.'%');

		if ($id != 0) {
			$db = $db->where('id', $id);
		}

		if ($slug != '') {
			$db = $db->where('slug', 'LIKE', $slug);
		}

		if ($delete_filter == -1) {
			$db = $db->withTrashed();
		}
		elseif ($delete_filter == 1) {
			$db = $db->onlyTrashed();
		}

		if ($where_raw != '') {
			$db = $db->whereRaw($where_raw);
		}

		if ($order_by == '') {
			$db = $db->orderBy('created_at', 'desc');
		}
		else {
			$db = $db->orderByRaw($order_by);
		}

		$db = $db->select(DB::raw('*, TIMESTAMPDIFF(HOUR, `created_at`, NOW()) as `hour_count`'));
		
		//Eager Loading
		if ($get_relatives == 'true') {
			$db = $db->with('downloads');
		}
		

		if ($limit != 0) {
			return $db->paginate($limit);
		}

		return $db->paginate(1000);
	}
    

}
