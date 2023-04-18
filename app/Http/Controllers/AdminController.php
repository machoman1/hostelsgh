<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\University;
use App\Models\student_registration;
use App\Models\City;
use App\Models\Complain;
use App\Models\Noticebord;
use App\Models\News;
use App\Models\Repair;
use Carbon\Carbon;
use App\Models\Enquiry;
use App\Models\RoomBooking;
use App\Models\Booking;
use DB;
use Image;
use RealRashid\SweetAlert\Facades\Alert;
use DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function homepage(){
        return view('homepage');        
    }
    //
    public function admin_login(){
        return view('admin.admin');        
    }

//users data table
    public function admin_users(Request $request){
        if ($request->ajax()) {
              
            $data = User::all();
   
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
                                }else if (Str::contains(Str::lower($row['name']), Str::lower($request->get('search')))) {
                                    return true;
                                }
   
                                return false;
                            });
                        }
                    })
                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="javascript:void(0)'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>'
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
    
        return view('admin.admin_users');
    }
//university datat table
    public function admin_university(Request $request){
        if ($request->ajax()) {
              
            $data = University::all();
   
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('name'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                return Str::contains($row['name'], $request->get('name')) ? true : false;
                            });
                        }
   
                        if (!empty($request->get('search'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                if (Str::contains(Str::lower($row['name']), Str::lower($request->get('search')))){
                                    return true;
                                }else if (Str::contains(Str::lower($row['name']), Str::lower($request->get('search')))) {
                                    return true;
                                }
   
                                return false;
                            });
                        }
                    })
                    ->addColumn('action', function($row){
                           $btn = '<a href="admin_university/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="view_university/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="edit_university/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
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
        //$data = DB::select('select * from universities')->where('id',5);
        return view('admin.admin_university');
    }
//cities data table
    public function admin_city(Request $request){
        if ($request->ajax()) {
              
            $data = City::all();
   
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('name'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                return Str::contains($row['name'], $request->get('name')) ? true : false;
                            });
                        }
   
                        if (!empty($request->get('search'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                if (Str::contains(Str::lower($row['name']), Str::lower($request->get('search')))){
                                    return true;
                                }else if (Str::contains(Str::lower($row['name']), Str::lower($request->get('search')))) {
                                    return true;
                                }
   
                                return false;
                            });
                        }
                    })
                    ->addColumn('action', function($row){
                           $btn = '<a href="admin_city/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="#/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="edit_city/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
                                    ;
                            return $btn;
                            
                    })
                    ->addColumn('created_at', function($row){
                        $date = date("d F Y", strtotime($row->created_at));
                        return $date;
                     })
                     ->addColumn('updated_at', function($row){
                        $date = date("d F Y", strtotime($row->updated_at));
                        return $date;
                     })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.city.admin_city');
    }

    
      public function add_university(){
        return view('admin.add_university');        
    }
   public function save_university(Request $rqs){    
        $now = Carbon::now();
        $uni = new University;

        $uni->name=$rqs->name;
        $uni->city=$rqs->city;
        $uni->website=$rqs->website;
        $uni->address=$rqs->address;
      
        $uni->created_at=$now;
        $uni->updated_at=$now;

        $uni->save();
        Alert::toast(' University Added Successfully',' success');
        return redirect('admin_university');
    }
    public function delete_university($id)
    {
        $data = University::find($id);
        $data->delete();
        Alert::toast('Record Deleted Successfull','Success');
        return redirect('admin_university');
    }
    public function view_university($id)
    {
     $data = University::find($id);
     return view('/admin.view_university',compact('data'));
    }
    public function edit_university($id){
        $data = University::find($id);
        return view('admin.edit_university',compact('data'));
     }
    public function update_university(Request $rqs){
        $now = Carbon::now();
        $uni = University::find($rqs->id);
 
        $uni->name=$rqs->name;
        $uni->city=$rqs->city;
        $uni->website=$rqs->website;
        $uni->address=$rqs->address;
       
        $uni->updated_at=$now;
        $uni->save();

         Alert::toast('Record Updated Successfully','success');
         return redirect('admin_university');
          
     }




     //city
     public function save_city(Request $rqs){    
        $now = Carbon::now();
        $city = new City;

        $city->name=$rqs->name;
    
        $city->created_at=$now;
        $city->updated_at=$now;

        $city->save();
        Alert::toast('City Added Successfully',' success');
        return redirect('admin_city');
    }
    public function delete_city($id)
    {
        $data = City::find($id);
        $data->delete();
        Alert::toast('Record Deleted Successfull','Success');
        return redirect('admin_city');
    }
    public function edit_city($id){
        $data = City::find($id);
        return view('admin.city.edit_city',compact('data'));
     }
     public function update_city(Request $rqs){
        $now = Carbon::now();
        $city = City::find($rqs->id);
 
        $city->name=$rqs->name;
       
        $city->updated_at=$now;
        $city->save();

         Alert::toast('Record Updated Successfully','success');
         return redirect('admin_city');
          
     }

     public function admin_change_pass($id){
        $data = User::find(Auth::user()->id);
        return view('admin.password.admin_change_password',compact('data'));
     }

    public function update_admin_change_pass(Request $rqs){
        $now = Carbon::now();
   
        $data = User::find($rqs->id);

        $data->email=$rqs->email;
        $data->name=$rqs->name;

        if($data->password=Hash::check($rqs->current_password, $rqs->old_pass)){

            if($rqs->new_password == $rqs->confirm_password){
                $data->password=Hash::make($rqs->new_password);
                $data->updated_at=$now; 
                $data->save(); 
                if(Auth::user()->role_as == 0){
                    Alert::toast('Password Updated Successfully',' success');
                    return redirect('admin'); 
                }elseif(Auth::user()->role_as ==1){
                    Alert::toast('Password Updated Successfully',' success');
                    return redirect('students'); 
                }elseif(Auth::user()->role_as == 2){
                    Alert::toast('Password Updated Successfully',' success');
                    return redirect('land_lord'); 
                }elseif(Auth::user()->role_as == 3){
                    Alert::toast('Password Updated Successfully',' success');
                    return redirect('event_booker'); 
                }
                
            }else{
                Alert::toast('Password Does Not Match',' warning');
                return redirect()->back();  
            }
            
        }else{
            Alert::toast('Password Does Not Match The Old Password',' warning');
            return redirect()->back(); 
        }

    }





    //role/permisssopm
    public function admin_permissions(Request $request){
        if ($request->ajax()) {
              
            $data = User::all();
   
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
                                }else if (Str::contains(Str::lower($row['name']), Str::lower($request->get('search')))) {
                                    return true;
                                }
   
                                return false;
                            });
                        }
                    })
                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="edit_permissions/'.$row['id'].'" class="edit btn btn-primary btn-sm">Role</a>'
                                    ;
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
    
        return view('admin.role.admin_permissions');
    }
    public function edit_permissions($id){
        $data = User::find($id);
        return view('admin.role.edit_permissions',compact('data'));
    }
    public function update_permissions(Request $rqs){
        $now = Carbon::now();
        $user = User::find($rqs->id);

        $user->role_as=$rqs->role_as;
       
        $user->updated_at=$now;
        $user->save();

         Alert::toast('Record Updated Successfully','success');
         return redirect('admin_permissions');
          
     }





     //admin news
    public function admin_news(Request $request){
        if ($request->ajax()) {
              
            $data = News::all();
   
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('title'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                return Str::contains($row['title'], $request->get('title')) ? true : false;
                            });
                        }
   
                        if (!empty($request->get('search'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                if (Str::contains(Str::lower($row['title']), Str::lower($request->get('search')))){
                                    return true;
                                }else if (Str::contains(Str::lower($row['title']), Str::lower($request->get('search')))) {
                                    return true;
                                }
   
                                return false;
                            });
                        }
                    })
                    ->addColumn('action', function($row){

                           $btn = '<a href="/admin_news/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="/edit_news/'.$row['id'].'" class="edit btn btn-primary btn-sm">Edit</a>'
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
    
        return view('admin.news.admin_news');
    }
    public function edit_news($id){
        $data = News::find($id);
        return view('admin.news.edit_news',compact('data'));
    }
    public function update_news(Request $rqs){
        $now = Carbon::now();
        $news = News::find($rqs->id);

        $news->title=$rqs->title;
        $news->content=$rqs->content;

        if($rqs->file('image')){
            $file = $rqs->file('image');
            $filename = $file->getClientOriginalName();
            $file-> move(public_path('public/images'), $filename);
            $news->image = $filename;
        }
        else{
            $news->image=$rqs->image_old;
       }

        $news->updated_at=$now;
        $news->save();
        News::query()->where("content", "LIKE", '%<p>%')->update(["content" => DB::raw("REPLACE(REPLACE(content,  '<p>', '\n'), '</p>', '') ")]);
        News::query()->where("title", "LIKE", '%<p>%')->update(["title" => DB::raw("REPLACE(REPLACE(title,  '<p>', '\n'), '</p>', '') ")]);
         Alert::toast('Record Updated Successfully','success');
         return redirect('admin_news');
          
     }
     public function delete_news($id)
    {
        $data = News::find($id);
        $data->delete();
        Alert::toast('Record Deleted Successfull','Success');
        return redirect('admin_news');
    }
    public function add_news(){
        return view('admin.news.add_news');
    }
    public function save_news(Request $rqs)
    {    
        $now = Carbon::now();

        $news = new News;

        $news->title=$rqs->title;
        $news->content=$rqs->content;
        if($rqs->file('image')){
            $file = $rqs->file('image');
            $filename = $file->getClientOriginalName();
            $file-> move(public_path('public/images'), $filename);
        }
        $news->image = $filename;
        $news->created_at = $now;
        $news->save();
        News::query()->where("content", "LIKE", '%<p>%')->update(["content" => DB::raw("REPLACE(REPLACE(content,  '<p>', '\n'), '</p>', '') ")]);
        News::query()->where("title", "LIKE", '%<p>%')->update(["title" => DB::raw("REPLACE(REPLACE(title,  '<p>', '\n'), '</p>', '') ")]);
        Alert::toast('News Added Successfully','success');
        return redirect('admin_news');
    }




    ////complain
    public function admin_complain(Request $request){
        if ($request->ajax()) {
              
            $data = Complain::all();
   
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('name'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                return Str::contains($row['name'], $request->get('name')) ? true : false;
                            });
                        }
   
                        if (!empty($request->get('search'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                if (Str::contains(Str::lower($row['name']), Str::lower($request->get('search')))){
                                    return true;
                                }else if (Str::contains(Str::lower($row['name']), Str::lower($request->get('search')))) {
                                    return true;
                                }
   
                                return false;
                            });
                        }
                    })
                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="/view_complain/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="/edit_complain/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'

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
    
        return view('admin.complain.admin_complain');
    }
    public function view_complain($id){
        $data = Complain::find($id);
        return view('admin.complain.view_complain',compact('data'));
    }
    public function edit_complain($id){
        $data = Complain::find($id);
        return view('admin.complain.edit_complain',compact('data'));
    }
    public function update_complain(Request $rqs)
    {    
        $now = Carbon::now();

        $complain = Complain::find($rqs->id);

        $complain->status=$rqs->status;
        $complain->save();
        Alert::toast('Complain Updated Successfully','success');
        return redirect('admin_complain');

    }






    ///notice
    public function admin_notice(Request $request){
        if ($request->ajax()) {
              
            $data = Noticebord::all();
   
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->filter(function ($instance) use ($request) {
                        if (!empty($request->get('title'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                return Str::contains($row['title'], $request->get('title')) ? true : false;
                            });
                        }
   
                        if (!empty($request->get('search'))) {
                            $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                                if (Str::contains(Str::lower($row['title']), Str::lower($request->get('search')))){
                                    return true;
                                }else if (Str::contains(Str::lower($row['title']), Str::lower($request->get('search')))) {
                                    return true;
                                }
   
                                return false;
                            });
                        }
                    })
                    ->addColumn('action', function($row){
                           $btn = '<a href="admin_notice/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="#/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="admin_edit_notice/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
                                    ;
                            return $btn;
                            
                    })
                    ->addColumn('created_at', function($row){
                        $date = date("d F Y", strtotime($row->created_at));
                        return $date;
                     })
                     ->addColumn('updated_at', function($row){
                        $date = date("d F Y", strtotime($row->updated_at));
                        return $date;
                     })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.notice.admin_notice');

    }
    public function admin_add_notice(){
        return view('admin.notice.admin_add_notice');        
    }

    public function admin_save_notice(Request $rqs)
    {    
        $now = Carbon::now();

        $notice = new Noticebord;

        $notice->title=$rqs->title;
        $notice->content=$rqs->content;
        $notice->created_by= Auth::user()->email;
        $notice->city= Auth::user()->city;

        $notice->created_at = $now;
        $notice->save();
        Noticebord::query()->where("content", "LIKE", '%<p>%')->update(["content" => DB::raw("REPLACE(REPLACE(content,  '<p>', '\n'), '</p>', '') ")]);
        Noticebord::query()->where("title", "LIKE", '%<p>%')->update(["title" => DB::raw("REPLACE(REPLACE(title,  '<p>', '\n'), '</p>', '') ")]);
        Alert::toast('Notice Added Successfully','success');
        return redirect('admin_notice');
    }
    public function admin_edit_notice($id){
        $data = Noticebord::find($id);
        return view('admin.notice.admin_edit_notice',compact('data'));        
    }

     public function update_admin_notice(Request $rqs){
        $now = Carbon::now();
        $notice = Noticebord::find($rqs->id);

        $notice->title=$rqs->title;
        $notice->content=$rqs->content;
       
        $notice->updated_at=$now;
        $notice->save();

        Noticebord::query()->where("content", "LIKE", '%<p>%')->update(["content" => DB::raw("REPLACE(REPLACE(content,  '<p>', '\n'), '</p>', '') ")]);
        Noticebord::query()->where("title", "LIKE", '%<p>%')->update(["title" => DB::raw("REPLACE(REPLACE(title,  '<p>', '\n'), '</p>', '') ")]);
        Alert::toast('Record Updated Successfully','success');
        return redirect('admin_notice');
     }
     public function delete_admin_notice($id)
     {
         $data = Noticebord::find($id);
         $data->delete();
         Alert::toast('Record Deleted Successfull','Success');
         return redirect('admin_notice');
     }





     ///repair
     public function admin_repair(Request $request){
        if ($request->ajax()) {
              
            $data = Repair::all();
   
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

                           $btn = '<a   href="/admin_repair/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="/admin_view_repair/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="javascript:void(0)/ " class="edit btn btn-primary btn-sm">Update</a>'

                                    ;
                            return $btn;
                    })
                    ->addColumn('created_at', function($row){
                        $date = date("d F Y", strtotime($row->created_at));
                        return $date;
                     })
                     ->addColumn('updated_at', function($row){
                        $date = date("d F Y", strtotime($row->updated_at));
                        return $date;
                     })
                    ->rawColumns(['action'])
                    ->make(true);
        }
    
        return view('admin.repair.admin_repair');
    }
    public function admin_view_repair($id){
        $data = Repair::find($id);
        return view('admin.repair.admin_view_repair',compact('data'));        
    }
    public function delete_admin_repair($id)
    {
        $data = Repair::find($id);
        $data->delete();
        Alert::toast('Record Deleted Successfull','Success');
        return redirect('admin_repair');
    }




     ///inquiry
     public function admin_inquiry(Request $request){
        if ($request->ajax()) {

            $data = Enquiry::select("*")
            ->orderBy("created_at", "desc")
            ->get();

            //$data = Enquiry::all()->orderBy('created_at','desc')->get();
           // $data = DB::select('select * from enquiries')->orderBy('created_at')->get();
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

                           $btn = '<a   href="javascript:void(0)/ '.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="javascript:void(0)/ '.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="javascript:void(0)/ " class="edit btn btn-primary btn-sm">Update</a>'

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
    
        return view('admin.inquiry.admin_inquiry');
    }

    public function admin_view_inquiry($id){
        $data = Enquiry::find($id);
        return view('admin.inquiry.admin_view_inquiry',compact('data'));        
    }


     ///room booking
    public function admin_room_booking(Request $request){
        if ($request->ajax()) {

            $data = RoomBooking::select("*")
            ->orderBy("created_at", "desc")
            ->get();

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

                           $btn = '<a  href="javascript:void(0)/ '.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="javascript:void(0)/ '.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="javascript:void(0)/ " class="edit btn btn-primary btn-sm">Update</a>'
                                    ;
                            return $btn;

                    })->addColumn('created_at', function($row){
                       $date = date("d F Y", strtotime($row->created_at));
                       return $date;
                    })
                    
                    ->rawColumns(['action'])
                    ->make(true);
        }
    
        return view('admin.booking.admin_room_booking');
    }

    ///property booking
    public function admin_property_booking(Request $request){
        if ($request->ajax()) {

            $data = Booking::select("*")
            ->orderBy("created_at", "desc")
            ->get();

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

                           $btn = '<a  href="javascript:void(0)/ '.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="javascript:void(0)/ '.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="javascript:void(0)/ " class="edit btn btn-primary btn-sm">Update</a>'
                                    ;
                            return $btn;

                    })->addColumn('created_at', function($row){
                       $date = date("d F Y", strtotime($row->created_at));
                       return $date;
                    })
                    
                    ->rawColumns(['action'])
                    ->make(true);
        }
    
        return view('admin.booking.admin_property_booking');
    }

}


