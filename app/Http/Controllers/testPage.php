<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testPage extends Controller
{
    public function test(){

		$first= 'Martin';
		return view('page.test', compact('first'));

    }
    public function contract(){

		return view('page.contact'); 

    }
}
