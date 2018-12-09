<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    //    $this->middleware('guest')->except('logout');
    }

    public static $actorId = 0;
    public static $userName = '';
    public static $isLogin = false;

    public function getLogin(){
      self::$isLogin = false;
      return view('auth.login', ['isLogin' => self::$isLogin, 'userName' => self::$userName]);
    }

    public function checkLogin(Request $request){
      self::$userName = $request->input('username');
      $password = $request->input('password');
      $url = "localhost:12345/api/v1/actors/auth?username=" .''. self::$userName .''. "&password=" .''. $password;

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
      // This is what solved the issue (Accepting gzip encoding)
      curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");
      $response = curl_exec($ch);
      curl_close($ch);
      // dd($response);
      $actor = json_decode($response);
      self::$actorId = $actor->payload->_id;

      if ($actor->success == "true") {
        self::$isLogin = true;
        Session::put('isLogin', self::$isLogin);
        Session::put('userName', self::$userName);
        Session::put('actorId', self::$actorId);
        return redirect()->route('home', ['isLogin' => self::$isLogin, 'userName' => self::$userName]);
      }
      return redirect()->route('login', ['isLogin' => self::$isLogin, 'userName' => self::$userName]);
    }

    public function logout(){
      self::$isLogin = false;
      self::$userName = '';
      return redirect()->route('login');
    }
}
