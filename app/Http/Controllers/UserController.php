<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    //
	public function index(){

		return view('inputform');

	}


	public function query(){

		$input = $request->all();
		print_r($input);


	}


}
