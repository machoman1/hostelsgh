<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\City;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\Room;
use App\Models\landloard_registration;
use App\Models\student_registration;
use App\Models\University;
use Illuminate\Support\Facades\Hash;
use App\Models\RoomBooking;
use App\Models\Booking;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Illuminate\Support\Facades\Auth;
use Image;
use DataTables;
use Illuminate\Support\Str;



class LandloardController extends Controller
{
    //

     public function __construct()
    {
        $this->middleware('auth');
    }

    /*public function register_landloard_account(Request $rqs)
    {    
        $now = Carbon::now();

        $user = new User;
        $user_landload = new landloard_registration;

        $user->role_as='2';
        $user->name=$rqs->firstname;
        $user->email=$rqs->email;
        $user->password=Hash::make($rqs->password);
        $user->city=$rqs->city;
        $user->created_at=$now;
        $user->updated_at=$now;

        if($rqs->confirm_pass != $rqs->password){
            Alert::toast('Password Does not Macth','info');
            return redirect()->back();
        }

        $user_landload->firstname=$rqs->firstname;
        $user_landload->surename=$rqs->surename;
        $user_landload->email=$rqs->email;
        $user_landload->city=$rqs->city;
        $user_landload->title=$rqs->title;
        $user_landload->house_name=$rqs->house_name;
        $user_landload->house_number=$rqs->house_number;
        $user_landload->street=$rqs->street;
        $user_landload->company=$rqs->company;
        $user_landload->district=$rqs->district;
        $user_landload->contact_name=$rqs->contact_name;
        $user_landload->town=$rqs->town_city;
        $user_landload->contact_number=$rqs->contact_number;
        $user_landload->website=$rqs->website;

        $user_landload->save();
        $user->save();
        if(Auth::user()){
            if(Auth::user()->role_as == 0){
                Alert::toast('Registration Successfully','success');
                return redirect('admin_students');
            }elseif(Auth::user()->role_as == 2){
                Alert::toast('Registration Successfully','success');
                return redirect('land_lord');
    
            }elseif(Auth::user()->role_as == 3){
                Alert::toast('Registration Successfully','success');
                return redirect('event_booker');
            }else{
                Alert::toast('Registration Successfully','success');
                return redirect('login');
            }
        }
        else{
            Alert::toast('Registration Successfully','success');
            return redirect('login');
        }
    }*/
    public function admin_landlord(Request $request){
        if ($request->ajax()) {
              
            $data = landloard_registration::all();
   
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('email'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                return Str::contains($row['email'], $request->get('email')) ? true : false;
                            });
                        }
   
                        if (!empty($request->get('search'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                if (Str::contains(Str::lower($row['email']), Str::lower($request->get('search')))){
                                    return true;
                                }else if (Str::contains(Str::lower($row['email']), Str::lower($request->get('search')))) {
                                    return true;
                                }
   
                                return false;
                            });
                        }
                    })
                    ->addColumn('action', function($row){
                           $btn = '<a href="admin_landlord/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="view_landlord/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="edit_landlord/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
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
        return view('admin.landlord.admin_landlord');

    }
    public function delete_landlord($id)
    {
        $data = landloard_registration::find($id);
        $data->delete();
        Alert::toast('Record Deleted Successfull','Success');
        return redirect('admin_landlord');
    }
    public function view_landlord($id){
        $data = landloard_registration::find($id);
        return view('admin.landlord.view_landlord',compact('data'));
    }
    public function edit_landlord($id){
        $data = landloard_registration::find($id);
        $data_city['cities'] = City::get(["name"]);
        return view('admin.landlord.edit_landlord',$data_city,compact('data'));
    }
     public function update_landlord(Request $rqs){
        $now = Carbon::now();
        $user_landload = landloard_registration::find($rqs->id);
 
        $user_landload->firstname=$rqs->firstname;
        $user_landload->surename=$rqs->surename;
        $user_landload->email=$rqs->email;
        $user_landload->city=$rqs->city;
        $user_landload->title=$rqs->title;
        $user_landload->house_name=$rqs->house_name;
        $user_landload->house_number=$rqs->house_number;
        $user_landload->street=$rqs->street;
        $user_landload->company=$rqs->company;
        $user_landload->district=$rqs->district;
        $user_landload->contact_name=$rqs->contact_name;
        $user_landload->town=$rqs->town_city;
        $user_landload->contact_number=$rqs->contact_number;
        $user_landload->website=$rqs->website;

       
        $user_landload->updated_at=$now;
        $user_landload->save();

         Alert::toast('Record Updated Successfully','success');
         return redirect('admin_landlord');
          
     }



    ///
     public function land_lord(){
        return view('landloard.land_lord');        
    }
    public function landlord_change_pass($id){
        $data = User::find(Auth::user()->id);
        return view('landloard.password.landlord_change_password',compact('data'));
     }

     public function landlord_students(Request $request){
        if ($request->ajax()) {
              
            $data = student_registration::all()->where('city',Auth::user()->city);
   
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('email'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                return Str::contains($row['email'], $request->get('email')) ? true : false;
                            });
                        }
   
                        if (!empty($request->get('search'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                if (Str::contains(Str::lower($row['email']), Str::lower($request->get('search')))){
                                    return true;
                                }else if (Str::contains(Str::lower($row['email']), Str::lower($request->get('search')))) {
                                    return true;
                                }
   
                                return false;
                            });
                        }
                    })
                    ->addColumn('action', function($row){
                           $btn = '<a href="landlord_students/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="landlord_students/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="landlord_students/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
                                    ;
                            return $btn;
                            
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('landloard.students.landlord_students');

    }
    public function no_access($id)
    {
        $data = landloard_registration::find($id);
        alert()->info('Sorry','You dont have the right to carry out the operation.');
        return redirect()->back();
    }

     public function landlord_property(Request $request){
        if ($request->ajax()) {
              
            $data = Property::all()->where('land_lord',Auth::user()->email);
   
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('property_name'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                return Str::contains($row['property_name'], $request->get('property_name')) ? true : false;
                            });
                        }
   
                        if (!empty($request->get('search'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                if (Str::contains(Str::lower($row['property_name']), Str::lower($request->get('search')))){
                                    return true;
                                }else if (Str::contains(Str::lower($row['property_name']), Str::lower($request->get('search')))) {
                                    return true;
                                }
   
                                return false;
                            });
                        }
                    })
                    ->addColumn('action', function($row){
                           $btn = '<a href="landlord_property/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="landlord_view_property/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="landlord_edit_property/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
                                    ;
                            return $btn;
                            
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        $data_property_type = PropertyType::all();
        $data_landlord = landloard_registration::all();
        $data_city = City::all();
        return view('landloard.property.landlord_property',compact('data_city','data_landlord','data_property_type'));

    }
    public function landlord_view_property($id)
    {
     $data = Property::find($id);
     return view('/landloard.property.landlord_view_property',compact('data'));
    }
    public function landlord_edit_property($id){
        $data = Property::find($id);
        $data_property_type = PropertyType::all();
        $data_landlord = landloard_registration::all();
        $data_city = City::all();
        return view('landloard.property.landlord_edit_property',compact('data','data_property_type','data_landlord','data_city'));
     }
     public function no_access_property_delete($id)
     {
         $data = Property::find($id);
         alert()->info('Sorry','You dont have the right to Perform this operation.');
         return redirect()->back();
     }



     public function landlord_room(Request $request){
     
        if ($request->ajax()) {
              
            $data = Room::all()->where('landlord',Auth::user()->email);
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
                           $btn = '<a href="landlord_room/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a href="landlord_view_room/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="landlord_edit_room/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
                                    ;
                            return $btn;
                        })
                    ->rawColumns(['action'])
                    ->make(true);
                    
        }
        $data_property_name = Property::all();
        $data_landlord = landloard_registration::all();
        $data_city = City::all();
        //$data_property = Property::all()->where('id',1);

        return view('landloard.room.landlord_room',compact('data_property_name','data_landlord','data_city'));

    }
    public function landlord_view_room($id){
        $data = Room::find($id);
        return view('/landloard.room.landlord_view_room',compact('data'));
    }
    public function landlord_edit_room($id){
        $data = Room::find($id);
        $data_property_name = Property::all();
        $data_landlord = landloard_registration::all();
        $data_city = City::all();
        return view('landloard.room.landlord_edit_room',compact('data','data_property_name','data_landlord','data_city'));
    }
    public function no_access_room_delete($id)
    {
        $data = Room::find($id);
        alert()->info('Sorry','You dont have the right to Perform this operation.');
        return redirect()->back();
    }
    
        //land lord booking
    public function landlord_room_booking(Request $request){
        if ($request->ajax()) {
              
            $data = RoomBooking::all()->where('landlord',Auth::user()->email);
   
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('email'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                return Str::contains($row['email'], $request->get('email')) ? true : false;
                            });
                        }
   
                        if (!empty($request->get('search'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                if (Str::contains(Str::lower($row['email']), Str::lower($request->get('search')))){
                                    return true;
                                }else if (Str::contains(Str::lower($row['email']), Str::lower($request->get('search')))) {
                                    return true;
                                }
   
                                return false;
                            });
                        }
                    })
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="javascript:void(0)/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="javascript:void(0)/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
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
        return view('landloard.booking.landlord_room_booking');

    }

    public function landlord_property_booking(Request $request){
        if ($request->ajax()) {
              
            $data = Booking::all()->where('landlord',Auth::user()->email);
   
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('email'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                return Str::contains($row['email'], $request->get('email')) ? true : false;
                            });
                        }
   
                        if (!empty($request->get('search'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                if (Str::contains(Str::lower($row['email']), Str::lower($request->get('search')))){
                                    return true;
                                }else if (Str::contains(Str::lower($row['email']), Str::lower($request->get('search')))) {
                                    return true;
                                }
   
                                return false;
                            });
                        }
                    })
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="javascript:void(0)/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="javascript:void(0)/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
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
        return view('landloard.booking.landlord_property_booking');

    }
}
