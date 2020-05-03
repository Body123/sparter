<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newsController extends Controller
{
    public function getIndex(){
        $data=[];
        $data['name']="abdo";
        $data['id']=10;

        return view('welcome',$data);
    }
}
