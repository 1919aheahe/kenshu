<?php

namespace App\Http\HomeController;

use Illuminate\Routing\HomeController as Controller;

class HomeController extends Controller
{
  //
  public function index()
  {
    $message = 'Hello World';
    return view('home.index', ['message' => $message]);
  }
}
