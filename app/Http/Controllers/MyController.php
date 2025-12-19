<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public $myval ="";

    function __construct(){

    }

    function info(){
        return view('myview.info'); 
    }                 
        

    function index(){
        return view('myview.index');
    }

    function calculate(Request $req){
        echo $req ->input('mynumber');
        $data['num'] = $req -> input('mynumber');
        return view('myview.calculate',$data);
    }
}
