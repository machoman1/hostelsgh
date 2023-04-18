<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\City;
use App\Models\Complain;
use App\Models\Noticebord;
use App\Models\Repair;
use App\Models\RoomBooking;
use App\Models\University;
use App\Models\student_registration;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Illuminate\Support\Facades\Auth;
use Image;
use DataTables;
use Illuminate\Support\Str;
use PHPUnit\Framework\Error\Notice;

class StudentController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

   

    public function admin_students(Request $request){
        if ($request->ajax()) {
              
            $data = student_registration::all();
   
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
                           $btn = '<a href="admin_students/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="#/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="edit_students/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
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
        return view('admin.student.admin_students');

    }
    public function delete_students($id)
    {
        $data = student_registration::find($id);
        $data->delete();
        Alert::toast('Record Deleted Successfull','Success');
        return redirect('admin_students');
    }
    public function edit_students($id){
        $data = student_registration::find($id);
        $data_city['cities'] = City::get(["name"]);
        return view('admin.student.edit_students',$data_city,compact('data'));
     }
     public function update_students(Request $rqs){
        $now = Carbon::now();
        $user_student = student_registration::find($rqs->id);
 
        $user_student->firstname=$rqs->firstname;
        $user_student->lastname=$rqs->lastname;
        $user_student->email=$rqs->email;
        $user_student->city=$rqs->city;
        $user_student->university=$rqs->university_drop;
       
        $user_student->updated_at=$now;
        $user_student->save();

         Alert::toast('Record Updated Successfully','success');
         return redirect('admin_students');
          
     }



     public function students(){
        return view('students.students');        
    }
    public function students_change_pass($id){
        $data = User::find(Auth::user()->id);
        return view('students.pass.students_change_password',compact('data'));
     }

     public function students_notice(Request $request){
        if ($request->ajax()) {
              
            $data = Noticebord::all()->where('created_by',Auth::user()->email);
   
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
                           $btn = '<a href="students_notice/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="#/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="edit_notice/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
                                    ;
                            return $btn;
                            
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('students.students_notice');

    }

    public function add_notice(){
        return view('students.add_notice');        
    }

    public function save_notice(Request $rqs)
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
        return redirect('students_notice');
    }
    public function edit_notice($id){
        $data = Noticebord::find($id);
        return view('students.edit_notice',compact('data'));
    }

     public function update_students_notice(Request $rqs){
        $now = Carbon::now();
        $notice = Noticebord::find($rqs->id);

        $notice->title=$rqs->title;
        $notice->content=$rqs->content;
       
        $notice->updated_at=$now;
        $notice->save();

        Noticebord::query()->where("content", "LIKE", '%<p>%')->update(["content" => DB::raw("REPLACE(REPLACE(content,  '<p>', '\n'), '</p>', '') ")]);
        Noticebord::query()->where("title", "LIKE", '%<p>%')->update(["title" => DB::raw("REPLACE(REPLACE(title,  '<p>', '\n'), '</p>', '') ")]);
        Alert::toast('Record Updated Successfully','success');
        return redirect('students_notice');
     }

     public function delete_students_notice($id)
     {
         $data = Noticebord::find($id);
         $data->delete();
         Alert::toast('Record Deleted Successfull','Success');
         return redirect('students_notice');
     }

     public function students_complain(Request $request){
        if ($request->ajax()) {
              
            $data = Complain::all()->where('created_by',Auth::user()->email);
   
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
                           $btn = '<a href="#/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="#/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="#/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
                                    ;
                            return $btn;
                            
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('students.students_complain');
    }

    public function students_repair(Request $request){
        if ($request->ajax()) {
              
            $data = Repair::all()->where('created_by',Auth::user()->email);
   
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
                           $btn = '<a href="#/'.$row['id'].'" class="edit btn btn-primary btn-sm">Delete</a>
                                    <a  href="#/'.$row['id'].'" class="edit btn btn-primary btn-sm">View</a>
                                    <a  href="#/'.$row['id'].'" class="edit btn btn-primary btn-sm">Update</a>'
                                    ;
                            return $btn;
                            
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('students.students_repair');
    }

    public function student_room_booking(Request $request){
        if ($request->ajax()) {
              
            $data = Booking::all()->where('email',Auth::user()->email);
   
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
        return view('students.booking.student_room_booking');

    }
    public function student_property_booking(Request $request){
        if ($request->ajax()) {
              
            $data = RoomBooking::all()->where('email',Auth::user()->email);
   
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
        return view('students.booking.student_property_booking');

    }


}
