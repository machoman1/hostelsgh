<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\City;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\landloard_registration;
use App\Models\Room;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Illuminate\Support\Facades\Auth;
use Image;
use DataTables;
use Illuminate\Support\Str;

class RoomController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin_room(Request $request){
     
        if ($request->ajax()) {
              
            $data = Room::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('room_name'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                return Str::contains($row['room_name'], $request->get('room_name')) ? true : false;
                            });
                        }
   
                        if (!empty($request->get('search'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                if (Str::contains(Str::lower($row['room_name']), Str::lower($request->get('search')))){
                                    return true;
                                }else if (Str::contains(Str::lower($row['room_name']), Str::lower($request->get('search')))) {
                                    return true;
                                }
   
                                return false;
                            });
                        }
                    })
                    ->addColumn('action', function($row){
                           $btn = '<a href="admin_room/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a href="view_room/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="edit_room/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
                                    ;
                            return $btn;
                        })
                        ->addColumn('created_at', function($row){
                            $date = date("d F Y", strtotime($row->created_at));
                            return $date;
                         })
                    ->rawColumns(['action'])
                    ->make(true);
                    
        }
        $data_property_name = PropertyType::all();
        $data_landlord = landloard_registration::all();
        $data_city = City::all();
        //$data_property = Property::all()->where('id',1);

        return view('admin.room.admin_room',compact('data_property_name','data_landlord','data_city'));

    }

    public function save_room(Request $rqs)
    {
       $now = Carbon::now();
 
       $room = new Room;

         $room->property_name=$rqs->property_name;
         $room->city=$rqs->city;
         $room->room_name=$rqs->room_name;
         $room->landlord=$rqs->landlord;
         $room->date_available=$rqs->date_available;
         $room->amount_per_month=$rqs->amount_per_month;
         $room->initial_deposit=$rqs->initial_deposit;
         $room->room_status=$rqs->room_status;

         $room->room_prop_1=$rqs->room_prop_1;
         $room->room_prop_2=$rqs->room_prop_2;
         $room->room_prop_3=$rqs->room_prop_3;
         $room->room_prop_4=$rqs->room_prop_4;
         $room->room_prop_5=$rqs->room_prop_5;

         $room->created_at=$now;
            
          if($rqs->file('room_img_1')){
            $file = $rqs->file('room_img_1');
            $filename = $file->getClientOriginalName();
            $file-> move(public_path('public/images'), $filename);
            $room->room_img_1 = $filename;
        }

        if($rqs->file('room_img_2')){
            $file = $rqs->file('room_img_2');
            $filename = $file->getClientOriginalName();
            $file-> move(public_path('public/images'), $filename);
            $room->room_img_2 = $filename;

        }

        if($rqs->file('room_img_3')){
            $file = $rqs->file('room_img_3');
            $filename = $file->getClientOriginalName();
            $file-> move(public_path('public/images'), $filename);
            $room->room_img_3 = $filename;

        }

        if($rqs->file('room_img_4')){
            $file = $rqs->file('room_img_4');
            $filename = $file->getClientOriginalName();
            $file-> move(public_path('public/images'), $filename);
            $room->room_img_4 = $filename;

        }

        if($rqs->file('room_img_5')){
            $file = $rqs->file('room_img_5');
            $filename = $file->getClientOriginalName();
            $file-> move(public_path('public/images'), $filename);
            $room->room_img_5 = $filename;

        }

        $room->save();
        if(Auth::user()){
            if(Auth::user()->role_as == 0){
                Alert::toast('Record Save Successfully','success');
                return redirect('admin_room');
            }elseif(Auth::user()->role_as == 2){
                Alert::toast('Record Save Successfully','success');
                return redirect('landlord_room');
            }
        }
        return redirect()->back();

        //Alert::toast('Record Saved Successfully','success');
        ///return redirect('admin_room');
         
    }
    
    public function edit_room($id){
        $data = Room::find($id);
        $data_property_name = PropertyType::all();
        $data_landlord = landloard_registration::all();
        $data_city = City::all();
        return view('admin.room.edit_room',compact('data','data_property_name','data_landlord','data_city'));
    }
    public function view_room($id){
      $data = Room::find($id);
      return view('/admin.room.view_room',compact('data'));
    }
    public function update_room(Request $rqs){
        $now = Carbon::now();

        $room = Room::find($rqs->id);
 
        $room->property_name=$rqs->property_name;
        $room->city=$rqs->city;
        $room->room_name=$rqs->room_name;
        $room->landlord=$rqs->landlord;
        $room->date_available=$rqs->date_available;
        $room->amount_per_month=$rqs->amount_per_month;
        $room->initial_deposit=$rqs->initial_deposit;
        $room->room_status=$rqs->room_status;


        $room->updated_at=$now;


        if($rqs->file('room_img_1')){
            $file = $rqs->file('room_img_1');
            $filename = $file->getClientOriginalName();
            $file-> move(public_path('public/images'), $filename);
            $room->room_img_1 = $filename;
        }
        else{
            $room->room_img_1=$rqs->image_old_1;
       }
       
       if($rqs->file('room_img_2')){
        $file = $rqs->file('room_img_2');
        $filename = $file->getClientOriginalName();
        $file-> move(public_path('public/images'), $filename);
        $room->room_img_2 = $filename;
        }
        else{
            $room->room_img_2=$rqs->image_old_2;
        }

        if($rqs->file('room_img_3')){
            $file = $rqs->file('room_img_3');
            $filename = $file->getClientOriginalName();
            $file-> move(public_path('public/images'), $filename);
            $room->room_img_3 = $filename;
        }
        else{
            $room->room_img_3=$rqs->image_old_3;
       }
       if($rqs->file('room_img_4')){
        $file = $rqs->file('room_img_1');
        $filename = $file->getClientOriginalName();
        $file-> move(public_path('public/images'), $filename);
        $room->room_img_4 = $filename;
        }
        else{
            $room->room_img_4=$rqs->image_old_4;
        }

        $room->room_prop_1=$rqs->room_prop_1;
        $room->room_prop_2=$rqs->room_prop_2;
        $room->room_prop_3=$rqs->room_prop_3;
        $room->room_prop_4=$rqs->room_prop_4;
        $room->room_prop_5=$rqs->room_prop_5;

        $room->save();
        if(Auth::user()){
            if(Auth::user()->role_as == 0){
                Alert::toast('Record Save Successfully','success');
                return redirect('admin_room');
            }elseif(Auth::user()->role_as == 2){
                Alert::toast('Record Save Successfully','success');
                return redirect('landlord_room');
            }
        }
        return redirect()->back();
         //Alert::toast('Record Updated Successfully','success');
         //return redirect('admin_room');  
    }
    public function delete_room($id){
        $data = Room::find($id);
        $data->delete();
        Alert::toast('Record Deleted Successfull','Success');
        return redirect('admin_room');
    }





    //landlord
    /*public function landlord_room(Request $request){
     
        if ($request->ajax()) {
              
            $data = Room::all()->where('landlord',Auth::user()->email);
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('landlord'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                return Str::contains($row['landlord'], $request->get('landlord')) ? true : false;
                            });
                        }
   
                        if (!empty($request->get('search'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                if (Str::contains(Str::lower($row['landlord']), Str::lower($request->get('search')))){
                                    return true;
                                }else if (Str::contains(Str::lower($row['landlord']), Str::lower($request->get('search')))) {
                                    return true;
                                }
   
                                return false;
                            });
                        }
                    })
                    ->addColumn('action', function($row){
                           $btn = '<a href="admin_room/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a href="view_room/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="edit_room/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
                                    ;
                            return $btn;
                        })
                    ->rawColumns(['action'])
                    ->make(true);
                    
        }
        $data_property_type = PropertyType::all();
        $data_landlord = landloard_registration::all();
        $data_city = City::all();
        //$data_property = Property::all()->where('id',1);

        return view('admin.room.admin_room',compact('data_property_type','data_landlord','data_city'));

    }*/
}
