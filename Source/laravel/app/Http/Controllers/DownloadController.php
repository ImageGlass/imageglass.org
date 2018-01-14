<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Download;
use App\Http\Resources\Download as DownloadResource;

class DownloadController extends Controller
{
    public function show($id) {
        
        return new DownloadResource(Download::find($id));
    }
}
