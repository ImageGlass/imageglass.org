<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ThemeScreenShot extends Model
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
	public function theme()
	{
		return $this->belongsTo(Theme::class, 'theme_id', 'id');
    }
}
