<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ortu;

class MyController extends Controller
{
    //
    public function index(){
    	$a = "Aditya Dwi Setiawan";
    	return $a;
    }

    public function tampilmodel(){
    	$a=ortu::all();
    	return $a;
    }

    public function tampilview(){
    	return view('about');
    }

    public function percobaan(){
    	$ortu=ortu::all();
    	return view('index',compact('ortu'));
    }
}
