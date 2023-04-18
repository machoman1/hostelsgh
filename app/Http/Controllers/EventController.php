<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\event_book_registration;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Illuminate\Support\Facades\Auth;
use Image;
use DataTables;
use Illuminate\Support\Str;
class EventController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function admin_event_booker(Request $request){
        if ($request->ajax()) {
              
            $data = event_book_registration::all();
   
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
                           $btn = '<a href="admin_event_booker/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="view_event_booker/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="edit_event_booker/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
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
        return view('admin.event_booker.admin_event_booker');

    }
    public function view_event_booker($id){
        $data = event_book_registration::find($id);
        return view('admin.event_booker.view_event_booker',compact('data'));
    }
    public function edit_event_booker($id){
        $data = event_book_registration::find($id);
        return view('admin.event_booker.edit_event_booker',compact('data'));
    }
    public function update_event_booker(Request $rqs){
        $now = Carbon::now();
        $user_event = event_book_registration::find($rqs->id);
 
        $user_event->firstname=$rqs->firstname;
        $user_event->surename=$rqs->surename;
        $user_event->email=$rqs->email;
        $user_event->institution_type=$rqs->institution_type;
        $user_event->title=$rqs->title;
        $user_event->address=$rqs->address;
        $user_event->organization=$rqs->organization;
        $user_event->street=$rqs->street;
        $user_event->company_name=$rqs->company_name;
        $user_event->district=$rqs->district;
        $user_event->contact_name=$rqs->contact_name;
        $user_event->town=$rqs->town_city;
        $user_event->phone=$rqs->phone;
       
        $user_event->updated_at=$now;
        $user_event->save();

         Alert::toast('Record Updated Successfully','success');
         return redirect('admin_event_booker');
          
     }
}
