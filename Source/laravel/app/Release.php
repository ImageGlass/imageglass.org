<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;

class Release extends Model
{
	use SoftDeletes;

	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at'];


	/**
	* Relationship 1 - n
	*/
	public function downloads()
	{
		return $this->hasMany(ReleaseDownload::class, 'release_id', 'id');
	}

	/**
	* Relationship 1 - n
	*/
	public function screen_shots()
	{
		return $this->hasMany(ReleaseScreenShot::class, 'release_id', 'id');
	}


	/**
	 * Get item that matches provided ID,
	 * Set ID = 0 to get the latest stable release
	 */
	public static function get_item($id = 0, $release_type = '', $delete_filter = 0) {
		$db = Release::where('title', 'LIKE', '%%');

		if ($release_type != '') {
			$db = $db->where('release_type', 'LIKE', $release_type);
		}

		if ($delete_filter == -1) {
			$db = $db->withTrashed();
		}
		elseif ($delete_filter == 1) {
			$db = $db->onlyTrashed();
		}

		if ($id != 0) {
			$db = $db->where('id', '=', $id);
		}
		else {
			$db = $db->orderBy('created_at', 'desc');
		}

		return $db->with('downloads', 'screen_shots')->first();
    }


	/**
	 * Get list of items with search criteria: 
	 * number: $id
	 * string: $title
	 * string: $slug
	 * string: $release_type
	 * string: $version
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
	public static function get_items($id = 0, $title = '', $slug = '', $release_type = '', $version = '', $delete_filter = 0, $limit = 0, $where_raw = '', $order_by = '', $get_relatives = 'false')
	{
		$db = Release::where('title', 'LIKE', '%'.$title.'%')
		->where('version', 'LIKE', '%'.$version.'%');

		if ($id != 0) {
			$db = $db->where('id', $id);
		}

		if ($slug != '') {
			$db = $db->where('slug', 'LIKE', $slug);
		}

		if ($release_type != '') {
			$db = $db->where('release_type', 'LIKE', $release_type);
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
			$db = $db->with('downloads', 'screen_shots');
		}
		

		if ($limit != 0) {
			return $db->paginate($limit);
		}

		return $db->paginate(1000);
	}





}
