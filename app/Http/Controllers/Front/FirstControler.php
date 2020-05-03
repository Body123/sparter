<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstControler extends Controller
{
    //
    public function showString(){
        return "static string ";
    }
}
