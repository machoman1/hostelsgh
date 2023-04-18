<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Repair;
use DB;
use Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class RepairController extends Controller
{
    //
    public function repair(){
        return view('repair.repair');
    }

    public function save_repair(Request $rqs)
    {    
        $now = Carbon::now();

        $repair = new Repair;

        $repair->name=$rqs->name;
        $repair->email=$rqs->email;
        $repair->contact=$rqs->contact;
        $repair->property_address=$rqs->property_address;
        $repair->reported_before=$rqs->reported_before;
        $repair->repair_location=$rqs->repair_location;
        $repair->details_of_repair=$rqs->details_of_repair;
        $repair->created_at = $now;

        if(Auth::user()){
            $repair->created_by=Auth::user()->email;
            $repair->save();
            Alert::toast('Submitted Successfully','success');
            return redirect('students_repair');
        }
        else{
            Alert::toast('Please login As Student To Request A Repair','info');
            return redirect('login');
        }
    }
}
