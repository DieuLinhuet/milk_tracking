<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;
class MyController extends Controller
{
	private $client;
	private $userName;
	private $isLogin;

	public function __construct(){
		$this->client = new Client(['base_uri' => 'http://localhost:8080/',
							'timeout'  => 5.0]);
		$this->userName = Session::get('userName');
      	$this->isLogin = Session::get('isLogin');
	}

	public function index(){
	    $isLogin = Session::get('isLogin');
	   	return view('welcome', ['isLogin'=>$isLogin]);
	}

	public function sample_report($recordId){
		$response = $this->client->request('GET', '/api/v1/records/'.$recordId);

		if($response->getStatusCode() == 200){
			$r = json_decode($response->getBody());
		    if($r->success){
		    	$sample = $r->payload;
		    }
		}
	    return view('sample_report', ['sample'=> $sample]);
	}

	public function gRegister(Request $rq){
	    return view('auth.register',['userName'=>'', 'isLogin'=>0]);
	}
	public function register(Request $rq){
	    $response = $this->client->request('POST', '/api/v1/actors/register', [
    		'form_params' => $rq->all()
		]);
		if($response->getStatusCode() == 200){
			$r = json_decode($response->getBody());
			if($r->success){
		    	Session::put('isLogin', true);
		    	Session::put('id', $r->payload->_id);
				Session::put('userName', $r->payload->username);
		    	Session::put('role', $r->payload->role);
		    	return redirect()->route('home');
		    } else {
		    	return back();
		    }
		}
	}

	public function gLogin(Request $rq){
	    return view('auth.login', ['userName'=>'', 'isLogin'=>0]);
	}

	public function login(Request $rq){
	    /*$response = $this->client->request('POST', '/api/v1/login', [
    		'form_params' => $rq->all()//['username' => $rq->username, 'password' => $rq->password]
		]);*/
		//$response = $this->client->request('GET', 'api/v1/actors/auth?username='.$rq->username.'&password='.$rq->password);
		$response = $this->client->request('GET', 'api/v1/login');
	    if($response->getStatusCode() == 200){
			$r = json_decode($response->getBody());

		    if($r->success){
		    	Session::put('isLogin', true);
		    	Session::put('id', $r->payload->_id);
				Session::put('userName', $r->payload->username);
		    	Session::put('role', $r->payload->role);
		    	return redirect()->route('home');
		    }else {
		    	return back();
		    }
		}
	}

	public function logout(){
		Session::flush();
		Session::regenerate();
		Session::put('isLogin', false);
		return redirect()->route('/');
	}

	public function gInput($recordId, $phase){
		$userName = Session::get('userName');
		$isLogin = Session::get('isLogin');
		$response = $this->client->request('GET', '/api/v1/records/'.$recordId);
		if($response->getStatusCode() == 200){
			$r = json_decode($response->getBody());
		    if($r->success){
		    	if($phase == 'laymau') $v = 'forms/sample_test_form';
		    	else if($phase == 'chuanhoa') $v = 'forms/normalize_form';
		    	else if($phase == 'donghoa') $v = 'forms/assimilation_form';
		    	else if($phase == 'thanhtrung') $v = 'forms/pasteurization_form';
		    	else if($phase == 'codac') $v = 'forms/concentrate_form';
		    	return view($v, ['userName'=>$userName, 'isLogin'=>$isLogin, 'sample'=>$r->payload, 'recordId'=>$recordId,'phase'=> $phase]);
		    }
		}

	}

	public function input(Request $rq, $recordId, $phase){
		$id = Session::get('id');

	    $response = $this->client->request('PUT', '/api/v1/records/'.$recordId.$phase.$id, [
    		'form_params' => $rq->all()
		]);
	    if($response->getStatusCode() == 200){
			$r = json_decode($response->getBody());
		    if($r->success){
		    	echo "<script type='text/javascript'>alert('Success');</script>";
		    }
		}
	}

	public function gSign(){
		//return view('welcome');
	}

	public function sign($recordId){
		$id = Session::get('id');
		$response = $this->client->request('PUT', '/api/v1/actors/'.$id.'/sign/'.$recordId, [
    		'form_params' => $rq->all()
		]);

		if($response->getStatusCode() == 200){
			$r = json_decode($response->getBody());
		    if($r->success){
		    	
		    }
		}
	}

	public function home(){
		$response = $this->client->request('GET', '/api/v1/records');
		if($response->getStatusCode() == 200){
			$r = json_decode($response->getBody());
		    if($r->success){
		    	$samples = $r->payload;
		    }
		} else {
			return;
		}
		$userName = Session::get('userName');
		$isLogin = Session::get('isLogin');
		return view('home', ['userName'=>$userName, 'isLogin'=>$isLogin, 'samples'=>$samples]);
	}
	
}
