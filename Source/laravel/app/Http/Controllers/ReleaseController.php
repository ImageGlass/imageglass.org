<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Release;
use App\Http\Resources\Release as ReleaseResource;

class ReleaseController extends Controller
{
    public function show($id) {
        
        //get all download records of this release id
        return (new ReleaseResource(Release::find($id)))->downloads;
    }
}
