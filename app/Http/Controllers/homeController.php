<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index()
    {
        return view('testview');
    }
    public function testAction(int $n, int $n1)
    {
        return view("tav",[
            "n"=>$n,
            "n1"=>$n1
        ]);
    }
}
