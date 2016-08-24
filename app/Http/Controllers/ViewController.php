<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ViewController extends Controller
{
    //
    public function index(){


        $data =array(
            'name'=>'动量科技',
            'address'=>'河南大学科技园'
        );

        $title ="<h1>郑州动量科技有限责任公司</h1>";
        $class =array(
            '数学','物理','化学','生物'
        );
        return view("view",compact('data','title','class'));

    }

    public function view()
    {
        return view('view.view');
    }
}
