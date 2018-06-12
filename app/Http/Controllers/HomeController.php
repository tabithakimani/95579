<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showWelcome(){
    	
    return View::make('home', $data);
    }
    public function getStudent(){
    	return view('Kimani Tabitha.student');
    }
    public function getFees(){
    	return view('Kimani Tabitha.fees');
    }
}
