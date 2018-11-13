<?php

namespace App\Http\Controllers;

//подключаем модель
use App\MainText;

class StaticController extends Controller
{
    public function getIndex($url=index){

    	$obg = MainText::where('url', $url)->first();

		return view('static', compact('obg'));

	}
}
