<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\City;
use App\Models\Property;
use App\Models\PropertyType;
use App\Models\landloard_registration;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Illuminate\Support\Facades\Auth;
use Image;
use DataTables;
use Illuminate\Support\Str;
use Psy\Readline\Hoa\Console;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin_property(Request $request){
     
        
        if ($request->ajax()) {
              
            $data = Property::all();
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
                           $btn = '<a href="admin_property/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a href="view_property/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="edit_property/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
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
        $data_property_type = PropertyType::all();
        $data_landlord = landloard_registration::all();
        $data_city = City::all();
        //$data_property = Property::all()->where('id',1);

        return view('admin.property.admin_property',compact('data_property_type','data_landlord','data_city'));

    }
    public function save_property(Request $rqs){
       $now = Carbon::now();
 
       $property = new Property;

         $property->property_name=$rqs->property_name;
         $property->property_type=$rqs->property_type;
         $property->city=$rqs->city;
         $property->address=$rqs->address;
         $property->number_of_rooms=$rqs->number_of_rooms;
         $property->number_of_rooms_available=$rqs->number_of_rooms_available;
         $property->land_lord=$rqs->landlord;
         $property->date_available=$rqs->date_available;
         $property->initial_deposit=$rqs->initial_deposit;
         $property->amount_per_month=$rqs->amount_per_month;
         $property->property_status=$rqs->property_status;
         $property->is_sheard=$rqs->is_sheard;
         $property->created_at=$now;
            
          if($rqs->file('image')){
            $file = $rqs->file('image');
            $filename = $file->getClientOriginalName();
            $file-> move(public_path('public/images'), $filename);
        }
        else{
            Alert::toast('Please Upload Image','info');
            return redirect()->back();
        }

        $property->image = $filename;
        $property->save();
        if(Auth::user()){
            if(Auth::user()->role_as == 0){
                Alert::toast('Record Saved Successfully','success');
                return redirect('admin_property');
            }elseif(Auth::user()->role_as == 2){
                Alert::toast('Record Saved Successfully','success');
                return redirect('landlord_property');
    
            }
        }
        return redirect()->back();
         
    }
    public function delete_property($id)
    {
        $data = Property::find($id);
        $data->delete();
        Alert::toast('Record Deleted Successfull','Success');
        return redirect('admin_property');
    }
    
  
     public function view_property($id)
     {
      $data = Property::find($id);
      return view('/admin.property.view_property',compact('data'));
     }
     public function edit_property($id){
        $data = Property::find($id);
        $data_property_type = PropertyType::all();
        $data_landlord = landloard_registration::all();
        $data_city = City::all();
        return view('admin.property.edit_property',compact('data','data_property_type','data_landlord','data_city'));
     }
    public function update_property(Request $rqs){
        $now = Carbon::now();

        $property = Property::find($rqs->id);
 
        $property->property_name=$rqs->property_name;
         $property->property_type=$rqs->property_type;
         $property->city=$rqs->city;
         $property->address=$rqs->address;
         $property->number_of_rooms=$rqs->number_of_rooms;
         $property->number_of_rooms_available=$rqs->number_of_rooms_available;
         $property->land_lord=$rqs->landlord;
         $property->date_available=$rqs->date_available;
         $property->initial_deposit=$rqs->initial_deposit;
         $property->amount_per_month=$rqs->amount_per_month;
         $property->property_status=$rqs->property_status;
         $property->is_sheard=$rqs->is_sheard;
        $property->updated_at=$now;


        if($rqs->file('image')){
            $file = $rqs->file('image');
            $filename =$file->getClientOriginalName();
            $file-> move(public_path('public/images'), $filename);
            $property->image = $filename;
        }
        else{
            $property->image=$rqs->image_old;

       }

        $property->save();
        if(Auth::user()){
            if(Auth::user()->role_as == 0){
                Alert::toast('Record Updated Successfully','success');
                return redirect('admin_property');
            }elseif(Auth::user()->role_as == 2){
                Alert::toast('Record Updated Successfully','success');
                return redirect('landlord_property');
            }
        }
        return redirect()->back();
         //Alert::toast('Record Updated Successfully','success');
         //return redirect('admin_property');  
    }



     ///type

     public function admin_property_type(Request $request){
     
        
        if ($request->ajax()) {
              
            $data = PropertyType::all();
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
                           $btn = '<a href="admin_property_type/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="edit_property_type/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
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
        return view('admin.property.admin_property_type');

    }


    public function save_property_type(Request $rqs){
        echo('hello');
       $now = Carbon::now();
 
       $type = new PropertyType;

         $type->name=$rqs->name;
         $type->created_at=$now;

         $type->save();

        Alert::toast('Record Saved Successfully','success');
        return redirect('admin_property_type');
         
    }
    public function edit_property_type($id){
        $data = PropertyType::find($id);
        return view('admin.property.edit_property_type',compact('data'));
     }

    public function update_property_type(Request $rqs){
        $now = Carbon::now();

        $type = PropertyType::find($rqs->id);
 
        $type->name=$rqs->name;
        $type->updated_at=$now;

        $type->save();

         Alert::toast('Record Updated Successfully','success');
         return redirect('admin_property_type');  
    }
    public function delete_property_type($id)
    {
        $data = PropertyType::find($id);
        $data->delete();
        Alert::toast('Record Deleted Successfull','Success');
        return redirect('admin_property_type');
    }
}

