<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Noticebord;
class NoticeboardController extends Controller
{
    //
    public function noticeboard(){
        $data = DB::select('select * from cities');
        $data_notice= Noticebord::orderBy('created_at','desc')->get();

        return view('/noticeBoard.noticeboard',compact('data','data_notice'));
    }

    public function noticebord_modal($id){
        $data_modal = Noticebord::find($id);
        return view('noticeboard.noticebord_modal',compact('data_modal'));
    }
}
