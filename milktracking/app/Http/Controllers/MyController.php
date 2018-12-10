<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;
class MyController extends Controller
{
	private $client;

	public function __construct(){
		$this->client = new Client(['base_uri' => 'http://localhost:8080/',
							'timeout'  => 5.0]);
		$userName = Session::get('userName');
      	$isLogin = Session::get('isLogin');
	}

	public function index(){
	    $isLogin = Session::get('isLogin');
	    echo $isLogin;
	   	return view('welcome', ['isLogin'=>$isLogin]);
	}

	public function test(Request $rq){
	    $response = $this->client->request('GET', '/test');
	    $u = json_decode($response->getBody());
	    echo $u->success;
	}

	public function gRegister(Request $rq){
	    return view('auth.register');
	}
	public function register(Request $rq){
	    $response = $this->client->request('POST', '/api/v1/actors/register', [
    		'form_params' => $rq->all()
		]);
		if($response->getStatusCode() == 200){
			$r = json_decode($response->getBody());
		}
	}

	public function gLogin(Request $rq){
	    return view('auth.login', ['userName'=>'', 'isLogin'=>0]);
	}

	public function login(Request $rq){
	    /*$response = $this->client->request('POST', '/api/v1/login', [
    		'form_params' => $rq->all()//['username' => $rq->username, 'password' => $rq->password]
		]);*/
		$response = $this->client->request('GET', '/api/v1/login');
	    if($response->getStatusCode() == 200){
			$r = json_decode($response->getBody());

		    if($r->success){
		    	Session::put('isLogin', true);
		    	Session::put('id', $r->payload->_id);
				Session::put('username', $r->payload->username);
		    	Session::put('role', $r->payload->role);
		    }

		}
	}

	public function gInput(){
		//return view('welcome');
	}

	public function input(Request $rq, $recordId, $phase){
		$id = Session::get('id');

	    $response = $this->client->request('PUT', '/api/v1/records/'.$recordId.$phase.$id, [
    		'form_params' => $rq->all()
		]);
	    if($response->getStatusCode() == 200){
			$r = json_decode($response->getBody());
		    if($r->success){

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
	
}
