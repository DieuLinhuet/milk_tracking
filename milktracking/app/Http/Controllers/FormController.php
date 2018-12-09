<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class FormController extends Controller
{
    //
    public function putSamepleTestData(Request $request){
      dd('aa');
      $userName = Session::get('userName');
      $isLogin = Session::get('isLogin');
      return view('home', ['userName'=>$userName, 'isLogin'=>$isLogin]);
    }
}
