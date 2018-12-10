<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $userName = Session::get('userName');
      $isLogin = Session::get('isLogin');
      if ($isLogin) {
        return view('home', ['userName'=>$userName, 'isLogin'=>$isLogin]);
      }
      return redirect()->route('login', ['userName'=>$userName, 'isLogin'=>$isLogin]);
    }

    public function updateSampleData(){
      $userName = Session::get('userName');
      $isLogin = Session::get('isLogin');
      if ($isLogin) {
        return view('sample_form', ['userName'=>$userName, 'isLogin'=>$isLogin]);
      }
      return redirect()->route('login', ['userName'=>$userName, 'isLogin'=>$isLogin]);
    }

    public function samepleReport(){
      $userName = Session::get('userName');
      $isLogin = Session::get('isLogin');
      // if ($isLogin) {
        return view('sample_report', ['userName'=>$userName, 'isLogin'=>$isLogin]);
      // }
      // return redirect()->route('login', ['userName'=>$userName, 'isLogin'=>$isLogin]);
    }

}
