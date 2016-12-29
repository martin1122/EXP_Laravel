<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Employees extends Controller
{
    $news = DB::table('main_news')->get();

    return view('news.index', ['news' => $news]);
}
