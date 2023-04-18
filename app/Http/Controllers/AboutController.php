<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Room;
use App\Models\City;
use App\Models\PropertyType;
use App\Models\User;






class AboutController extends Controller
{
  
    public function about(){
        return view('aboutUnihouse.about');
    }
    public function housing(){
        return view('aboutUnihouse.housing');
    }
    public function accomodation(){
       // $total_city = City::select('name')->where('name','=', 'Accra')->count();
       $data = City::all();
       $data_city = Room::count();
       $data_pro_type = PropertyType::all();

       $room_search = Room::all()->where('room_name','Awal');
       $room_search_count = Room::all()->where('room_name','Awal')->count();

        return view('aboutUnihouse.accomodation',compact('data_city','data_pro_type','data','room_search','room_search_count'));
    }
    public function manage_property(){
        return view('aboutUnihouse.manage_property');
    }
    public function get_in_touch(){
        $data = DB::select('select * from universities');
        return view('contact.get_in_touch',compact('data'));
    }
    public function gorvenance(){
        $data = DB::select('select * from universities');
        return view('aboutUnihouse.gorvenance',compact('data'));
    }
}
