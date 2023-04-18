<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\University;
use App\Models\City;
use App\Models\student_registration;
use App\Models\event_book_registration;
use App\Models\landloard_registration;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Illuminate\Support\Facades\Auth;
use Image;
use DataTables;
use Illuminate\Support\Str;

class AllController extends Controller
{
    //
    public function upcoming_event(){
        return view('event.upcoming_event');
    }
    public function landloard(){
        return view('landloard.landloard');
    }

    public function register_landloard(){
        $data['cities'] = City::get(["name"]);
        return view('auth.register_landloard',$data);
    }
    public function register_event(){
        return view('auth.register_event');
    }
    public function register_student_page(){
        $data['cities'] = City::get(["name"]);
        return view('auth.register_student',$data);        
    }
    public function fetchuni(Request $request)
    {
        $data['uni'] = University::where("city", $request->name)->get(["name"]);
        //return view('accomodation',response()->json($data));  
       return response()->json($data);
    }

    public function register_student(Request $rqs)
    {    
        $now = Carbon::now();

        $user = new User;
        $user_student = new student_registration;

        $user->role_as='1';
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

        $user_student->firstname=$rqs->firstname;
        $user_student->lastname=$rqs->lastname;
        $user_student->email=$rqs->email;
        $user_student->city=$rqs->city;
        $user_student->university=$rqs->university_drop;

        $user_student->save();
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
        
        
    }

    public function register_landloard_account(Request $rqs)
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
                return redirect('admin_landlord');
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
    }
    public function register_event_booker(Request $rqs)
    {    
        $now = Carbon::now();

        $user = new User;
        $user_event = new event_book_registration;

        $user->role_as='3';
        $user->name=$rqs->firstname;
        $user->email=$rqs->email;
        $user->password=Hash::make($rqs->password);
        $user->city=$rqs->town_city;
        $user->created_at=$now;
        $user->updated_at=$now;

        if($rqs->confirm_pass != $rqs->password){
            Alert::toast('Password Does not Macth','info');
            return redirect()->back();
        }

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

        $user_event->save();
        $user->save();
        if(Auth::user()){
            if(Auth::user()->role_as == 0){
                Alert::toast('Registration Successfully','success');
                return redirect('admin_event_booker');
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
    }
}
