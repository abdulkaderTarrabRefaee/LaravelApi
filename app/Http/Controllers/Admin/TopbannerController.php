<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topbanner;
use Illuminate\Http\Request;

class TopbannerController extends Controller
{
    public function showTopbanner()
    {
        $request=Topbanner::all();

       return $request;
    }
}
