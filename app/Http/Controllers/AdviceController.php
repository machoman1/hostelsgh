<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdviceController extends Controller
{
    //
    public function advice(){
        return view('advice.advice');
    }
    public function rate_landloard(){
        return view('advice.rate_landloard');
    }
}
