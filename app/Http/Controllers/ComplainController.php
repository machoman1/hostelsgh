<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complain;
use App\Models\landloard_registration;
use App\Models\University;
use Carbon\Carbon;
use DB;
use Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class ComplainController extends Controller
{
    //
    public function complain(){
        $data = University::all();
        $data_landlord= landloard_registration::all();
        return view('complain.complain',compact('data','data_landlord'));
    }

    public function save_complain(Request $rqs)
    {    
        $now = Carbon::now();

        $complain = new Complain;

        $complain->name=$rqs->name;
        $complain->email=$rqs->email;
        $complain->contact=$rqs->contact;
        $complain->complain=$rqs->complain;
        $complain->tenancy_status=$rqs->tenancy_status;
        $complain->university=$rqs->university;
        $complain->property_address=$rqs->property_address;
        $complain->landlord_name=$rqs->landlord_name;
        $complain->tenency_type=$rqs->tenancy_type;
        $complain->status= 'Pending';


        if($rqs->file('proof')){
            $file = $rqs->file('proof');
            $filename = $file->getClientOriginalName();
            $file-> move(public_path('public/images'), $filename);
            $complain->proof = $filename;
        }
        $complain->created_at = $now;
        if(Auth::user()){
            $complain->created_by=Auth::user()->email;
            $complain->save();
            Alert::toast('Complain Submitted Successfully','success');
            return redirect('students_complain');
        }
        else{
            Alert::toast('Please login As Student To Make A Complain','info');
            return redirect('login');
        }
    }
}
