<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;
class MyController extends Controller
{
	private $client;

	public function __construct(){
		$this->client = new Client(['base_uri' => 'https://milktrackingserve.herokuapp.com',
							'timeout'  => 150.0]);
	}

	public function index(){
	    return redirect()->route('login');
	}

	public function sample_report($recordId){
		$response = $this->client->request('GET', '/api/v1/records/'.$recordId);

		if($response->getStatusCode() == 200){
			$r = json_decode($response->getBody());
		    if($r->success){
		    	$sample = $r->payload;
		    }
		} else {
			return back();
		}
	    return view('sample_report', ['sample'=> $sample]);
	}

	public function newRecord(){
		$id = Session::get('id');
		$input = array();
		$input['title'] = 'vinamilk';
		$input['note'] = 'vinamilk';
		$data = json_encode($input);
		$response = $this->client->request('POST', '/api/v1/records/'.$id, [
	    	'headers'=>[
	    		//'Accept' => 'application/json',
	    		'Content-Type' => 'application/json'
	   		 ],
	    	'body' => $data
	    ]);

		if($response->getStatusCode() == 200){
			$r = json_decode($response->getBody());
		    if($r->success){
					// dd($r);
		    	return redirect()->route('putRecord',['recordId'=>$r->payload->_id, 'phase'=>'1']);
		    }
		} else {
			return back();
		}
	}

	public function gRegister(Request $rq){
		// dd(Session::get('isLogin'));
		$userName = Session::get('userName');
		$isLogin = Session::get('isLogin');
		return view('auth.register', ['userName' => $userName, 'isLogin' => $isLogin]);
    // return view('auth.register',['userName'=>'', 'isLogin'=>true]);
	}
	public function register(Request $rq){
		$input = array();
		foreach($rq->all() as $key=>$val){
			if($key != '_token')
				$input[$key] = $val;
		}
		$data = json_encode($input);

	    $response = $this->client->request('POST', '/api/v1/actors/register', [
	    	'headers'=>[
	    		//'Accept' => 'application/json',
	    		'Content-Type' => 'application/json'
	   		 ],
	    	'body' => $data
	    ]);
		if($response->getStatusCode() == 200){
			$r = json_decode($response->getBody());
			if($r->success){
		    	// Session::put('isLogin', true);
		    	// Session::put('id', $r->payload->_id);
					// Session::put('userName', $r->payload->username);
		    	// Session::put('role', $r->payload->role);
		    	// return redirect()->route('home');
					echo "<script type='text/javascript'> alert('Đã thêm một tài khoản mới.');</script>";
		    } else {
					echo "<script type='text/javascript'> alert('Không thành công, vui lòng thử lại!');</script>";
		    }
		}else {
			echo "<script type='text/javascript'> alert('Rất tiếc đã xảy ra lỗi.');</script>";
		}
		return back();
	}

	public function gLogin(Request $rq){
	    return view('auth.login', ['userName'=>'', 'isLogin'=>0]);
	}

	public function login(Request $rq){
		$response = $this->client->request('GET', 'api/v1/actors/auth?username='.$rq->username.'&password='.$rq->password);
		// $response = $this->client->request('GET', 'api/v1/login');
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
		} else {
			return back();
		}
	}

	public function logout(){
		Session::flush();
		Session::regenerate();
		Session::put('isLogin', false);
		return redirect()->route('login');
	}

	public function gInput($recordId, $phase){
		$userName = Session::get('userName');
		$isLogin = Session::get('isLogin');
		$role = Session::get('role');
		$response = $this->client->request('GET', '/api/v1/records/'.$recordId);
		if($response->getStatusCode() == 200){
			$r = json_decode($response->getBody());
		    if($r->success){
		    	if($phase == '1'){
						$v = 'forms/sample_test_form';
						$data = $r->payload->ThongSoLayMau;
					}else if($phase == '2'){
						$v = 'forms/normalize_form';
						$data = $r->payload->ThongSoChuanHoa;
					}else if($phase == '3'){
						$v = 'forms/assimilation_form';
						$data = $r->payload->ThongSoDongHoa;
					}else if($phase == '4'){
						$v = 'forms/pasteurization_form';
						$data = $r->payload->ThongSoThanhTrung;
					}else if($phase == '5'){
						$v = 'forms/concentrate_form';
						$data = $r->payload->ThongSoCoDac;
					}
		    	return view($v, ['userName'=>$userName, 'isLogin'=>$isLogin, 'role' => $role,
					'sample'=>$r->payload, 'recordId'=>$recordId,'phase'=> $phase, 'data'=> $data]);
		    }
		} else {
			return back();
		}

	}

	public function input(Request $rq, $recordId, $phase){
		$id = Session::get('id');
		if($phase == 1) $p = 'laymau';
		else if($phase == 2) $p = 'chuanhoa';
		else if($phase == 3) $p = 'donghoa';
		else if($phase == 4) $p = 'thanhtrung';
		else if($phase == 5) $p = 'codac';
		$input = array();
		foreach($rq->all() as $key=>$val){
			if($key != '_token')
				$input[$key] = $val;
		}
		$data = json_encode($input);

	    $response = $this->client->request('PUT', '/api/v1/records/'.$recordId.'/'.$p.'/'.$id, [
	    	'headers'=>[
	    		//'Accept' => 'application/json',
	    		'Content-Type' => 'application/json'
	   		 ],
	    	'body' => $data
	    ]);

	    if($response->getStatusCode() == 200){
			$r = json_decode($response->getBody());
		    if($r->success){
		    	if($phase < 5){
		    		return redirect()->route('putRecord', ['recordId'=>$recordId, 'phase'=>$phase+1]);
		    	} else {
		    		return redirect()->route('home');
		    	}
		    }
		} else {
			return back();
		}
	}

	public function gSign(){
		//return view('welcome');
	}

	public function sign($recordId){
		$id = Session::get('id');

		$response = $this->client->request('PUT', '/api/v1/actors/'.$id.'/sign/'.$recordId,  [
	    	'headers'=>[
	    		//'Accept' => 'application/json',
	    		'Content-Type' => 'application/json'
	   		 ]
	    ]);

		if($response->getStatusCode() == 200){
			$r = json_decode($response->getBody());
		    if($r->success){
		    	return back();
		    } else {
		    	echo "<script type='text/javascript'> alert('Ký không thành công. Vui lòng thử lại.');</script>";
		    	return back();
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
			return back();
		}
		$userName = Session::get('userName');
		$isLogin = Session::get('isLogin');
		return view('home', ['userName'=>$userName, 'isLogin'=>$isLogin, 'samples'=>$samples]);
	}

}
