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

  public function data()
  {
    // dd("tes");
    // return view('front_end.index.html');
    return view()->file(resource_path('views/front_end/data.html'));
  }

  public function forum()
  {
    // dd("tes");
    // return view('front_end.index.html');
    return view()->file(resource_path('views/front_end/forum.html'));
  }

  public function publikasi()
  {
    // dd("tes");
    // return view('front_end.index.html');
    return view()->file(resource_path('views/front_end/publikasi.html'));
  }

  public function blog()
  {
    // dd("tes");
    // return view('front_end.index.html');
    return view()->file(resource_path('views/front_end/blog.html'));
  }

  public function tentang()
  {
    // dd("tes");
    // return view('front_end.index.html');
    return view()->file(resource_path('views/front_end/tentang.html'));
  }
}
