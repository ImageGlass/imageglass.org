<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReleaseDownload;
use App\Http\Resources\ReleaseDownload as ReleaseDownloadResource;

class ReleaseDownloadController extends Controller
{
    public function show($id) {
        
        //get release record of this download id
        return (new DownloadResource(ReleaseDownload::find($id)))->release;
    }
}
