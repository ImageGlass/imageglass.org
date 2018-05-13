<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ReleaseDownload extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    /**
	* Relationship n - 1
	*/
	public function release()
	{
		return $this->belongsTo(Release::class, 'release_id', 'id');
    }
    


    /**
     * Get item that matches provided ID
     */
    public static function get_item($id) {
        
        return ReleaseDownload::where("id", "=", $id)
            ->with("release")
            ->first();
    }


    /**
     * Update the count attr
     */
    public static function update_count($id, $count_increasement) {
        
        $db = ReleaseDownload::where("id", "=", $id)
            ->first();

        if (!is_null($db)) {
            $db->count = $db->count + $count_increasement;
            $db->save();
        }

        return $db;
    }


}
