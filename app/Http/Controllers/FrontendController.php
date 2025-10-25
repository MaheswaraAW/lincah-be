<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

  public function index()
  {
    // dd("tes");
    // return view('front_end.index.html');
    return view()->file(resource_path('views/front_end/index.html'));
  }
}
