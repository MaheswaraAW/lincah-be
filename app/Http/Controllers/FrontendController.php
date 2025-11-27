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
    // return view()->file(public_path('front_end/forum.html'));
    // $path = public_path('front_end/forum.html');

    // abort_unless(File::exists($path), 404, 'File forum.html tidak ditemukan di public/front_end');

    // return response()->file($path, [
    //     'Content-Type' => 'text/html; charset=UTF-8',
    // ]);
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
