<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testPage extends Controller
{
    public function test(){
    	return view('page.test');
    }
}
