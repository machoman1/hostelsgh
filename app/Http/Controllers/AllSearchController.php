<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\City;
use App\Models\Property;
use App\Models\PropertyType;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Carbon\Carbon;


class AllSearchController extends Controller
{
    //
    
    public function welcome_page_search()
    {
        $data = City::all();
        $data_pro_type = PropertyType::all();
 

        $search_text= $_GET['query'];
        $data_city = Room::where('city','LIKE', '%'.$search_text.'%')->count();
        $data_city = Room::count();

        $room_search = Room::where('property_name','LIKE', '%'.$search_text.'%')->get();
        $room_search_count = Room::where('property_name','LIKE', '%'.$search_text.'%')->count();

        if($data_city && $room_search)
        {
            return view('aboutUnihouse.accomodation',compact('data_city','data','data_pro_type','room_search','room_search_count'));

        }
    }

    public function accomodation_page_search(Request $request)
    {
        $data = City::all();
        $data_pro_type = PropertyType::all();

        //room select
        $property_type = $_GET['property_type'];
        $date_available = $_GET['date_available'];
        $amount_wanted = $_GET['amount_wanted'];
        $city_wanted = $_GET['distance_from']; //city

        $date = Room::where('date_available','LIKE', '%'.$date_available.'%');
        $amount = Room::where('amount_per_month','LIKE', '%'.$amount_wanted.'%');
        $city = Room::where('city','LIKE', '%'.$city_wanted.'%');

        //room start search
        $room_search = Room::where('property_name','LIKE', '%'.$property_type.'%')->union($date)->union($amount)->union($city)->get();
        $data_city = Room::where('property_name','LIKE', '%'.$property_type.'%')->union($date)->union($amount)->union($city)->count();
        $room_search_count = Room::where('property_name','LIKE', '%'.$property_type.'%')->union($date)->union($amount)->union($city)->count();

        //room end search

        //property select   start
        $number_of_room = $_GET['number_of_room'];
        $room_number = Property::where('number_of_rooms','LIKE', '%'.$number_of_room.'%');
        $prop_search = Property::where('property_type','LIKE', '%'.$property_type.'%')->get();
        
        $prop_search_count = Property::where('property_type','LIKE', '%'.$property_type.'%')->union($room_number)->count();

        // property end
        if($request->require_property == 'Room in a shared property/large development' && $room_search){
                //Alert::toast('room',' warning');
                return view('aboutUnihouse.accomodation',compact('data','data_pro_type','date_available','amount_wanted','city','room_search','data_city','room_number','room_search_count'));
    
        }

        if($request->require_property == 'Whole Property' && $prop_search){
            //Alert::toast('prop',' warning');
            return view('aboutUnihouse.property_search',compact('data','data_pro_type','date_available','amount_wanted','city','room_search','data_city','room_number','prop_search','prop_search_count'));

        }

    }


    public function whole_property_search($id){
        $data = Property::find($id);
        return view('search.whole_property_search',compact('data'));
    }

     public function whole_room_search($id){
        $data = Room::find($id);
        return view('search.whole_room_search',compact('data'));
    }

     public function clear_search(){
        return view('aboutUnihouse.accomodation');
     }



  
}
