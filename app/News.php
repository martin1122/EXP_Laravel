<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	public $table = "main_news";
    protected $fillable= ['id','title','content'];
}