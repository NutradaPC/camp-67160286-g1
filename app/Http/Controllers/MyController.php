<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    // Function Index: เรียกหน้าฟอร์ม
    function index(){
        return view('html'); 
    }

    // Function Store: รับค่าและส่งไปแสดงผลหน้าใหม่
    function store(Request $req){
        $data = $req->all();
        return view('result', compact('data'));
    }
}