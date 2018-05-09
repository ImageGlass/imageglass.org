<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
		return $this->hasMany(Download::class, 'release_id', 'id');
	}
}
