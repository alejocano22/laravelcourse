<?php
namespace App\Http\Controllers;
class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function info(){
      return view('home.info');
    }
}
