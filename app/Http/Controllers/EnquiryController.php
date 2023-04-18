<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Enquiry;
use Carbon\Carbon;

class EnquiryController extends Controller
{
    //
    public function general_enquiries(){
        $data = DB::select('select * from universities');
        return view('enquiry.general_enquiries',compact('data'));
    }

    public function save_enquiries(Request $rqs){    
        $now = Carbon::now();
        $enquary = new Enquiry();

        $enquary->name=$rqs->name;
        $enquary->email=$rqs->email;
        $enquary->contact=$rqs->contact;
        $enquary->note=$rqs->note;
        $enquary->campus=$rqs->campus;
        $enquary->type=$rqs->type;

        $enquary->created_at=$now;
        $enquary->updated_at=$now;

        $enquary->save();
        Alert::toast(' Enquiry Submitted Successfully',' success');
        return redirect()->back();
    }
}
