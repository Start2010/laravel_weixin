<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    //
	public function index(Request $request){
		$value =$request->cookie('name');
		echo $value;

		return view('inputform');


	}


	public function query(Request $request){
		$uri=$request->path();
 		
 		$response =new \Illuminate\Http\Response('Hello World');
 		$response->withCookie(cookie('name',$uri,1));

		$input = $request->all();

	}
	
	public function querydb(){
	    
	//    $data=DB::select('select * from `leoet_m_member` limit 0 ,30');
		$users =DB::table('leoet_m_member')->count();
		$data =DB::table('leoet_m_member')->first();
	    echo $data->toJson();
	    
	}
	


}
