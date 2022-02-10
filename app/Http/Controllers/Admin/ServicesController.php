<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
  public function ServicesView()
  {
      $_result=Services::all();
     return $_result;
  }
}
