<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeStayController extends Controller
{
    //
    public function homestay(){
        $data = DB::select('select * from universities');
        return view('homestay.homestay',compact('data'));
    }
}
