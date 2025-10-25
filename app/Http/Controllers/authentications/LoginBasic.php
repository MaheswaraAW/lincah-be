<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginBasic extends Controller
{
  // public function index()
  // {
  //   $pageConfigs = ['myLayout' => 'blank'];
  //   return view('content.authentications.auth-login-basic', ['pageConfigs' => $pageConfigs]);
  // }

  public function index()
  {
    // dd("tes");
    // return view('front_end.index.html');
    return view()->file(resource_path('views/front_end/index.html'));
  }
}
