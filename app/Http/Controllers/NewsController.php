<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\News;
class NewsController extends Controller
{
    //
    public function news(){
        $data = DB::select('select * from cities');
        $data_news = DB::select('select * from news');
        return view('news.news',compact('data','data_news'));
    }
    public function news_modal($id){
        $data = News::find($id);
        return view('news.news_modal',compact('data'));
    }
}
