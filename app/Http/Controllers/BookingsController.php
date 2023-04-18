<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\RoomBooking;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\City;
use App\Models\Property;
use App\Models\PropertyType;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Mail;

class BookingsController extends Controller
{
    //
    public function add_bookings(Request $rqs){
        $now = Carbon::now();
        $book = new Booking;

        $book->name=$rqs->name;
        $book->email=$rqs->email;
        $book->contact=$rqs->contact;
        $book->initial_deposit=$rqs->initial_deposit;
        $book->property_name=$rqs->property_name;
        $book->move_in_date=$rqs->move_in_date;
        $book->move_out_date=$rqs->move_out_date;
        $book->rooms_required=$rqs->rooms_required;
        $book->landlord=$rqs->land_lord;
        $book->created_at=$now;

        $availavle_rooms = Property::where('id',$rqs->id);
        //$availavle_rooms_total = Property::where('id',$rqs->id)->count();
        $availavle_rooms_total = Property::select("number_of_rooms_available")->where("id", $rqs->id)->count();

        if($availavle_rooms_total <= 0){
            Alert::toast('Sorry Rooms Are All Occupired','info');
            return redirect()->back();
        }
        if($rqs->rooms_required > $availavle_rooms_total){
            Alert::toast('Sorry Rooms Not Enough For Your Request','info');
            return redirect()->back();
        }
        $book->save();
        $availavle_rooms->decrement('number_of_rooms_available', $rqs->rooms_required);
        Alert::toast('Booking Successfully','success');

        $details = [
            'title' => 'New Bookings From Unihouse',
            'body' => 'You have new booking from '.$rqs->name.' Kindly log into your portal and access the bookings or contact '
            .$rqs->name.' on '.$rqs->contact.'
            ',
        ];

        $details_student = [
            'title' => 'Congratulations '.$rqs->name.' on your new Bookings',
            'body' => 'Your Landlord will reach out soon to complete your Payment For the Property',
        ];

        \Mail::to($rqs->land_lord)->send(new \App\Mail\MyTestMail($details));
        \Mail::to($rqs->email)->send(new \App\Mail\studentmail($details_student));
       
        return redirect()->back();
     
    }

    public function add_bookings_room(Request $rqs){
        $now = Carbon::now();
        $book_room = new RoomBooking;

        $book_room->name=$rqs->name;
        $book_room->email=$rqs->email;
        $book_room->contact=$rqs->contact;
        $book_room->initial_deposit=$rqs->initial_deposit;
        $book_room->property_name=$rqs->room_name;
        $book_room->move_in_date=$rqs->move_in_date;
        $book_room->move_out_date=$rqs->move_out_date;
        $book_room->rooms_required=$rqs->rooms_required;
        $book_room->landlord=$rqs->landlord;
        $book_room->created_at=$now;

        $book_room->save();
        Alert::toast('Booking Successfully','success');

        $details = [
            'title' => 'New Bookings From Unihouse',
            'body' => 'You have new booking from '.$rqs->name.' Kindly log into your portal and access the bookings or contact '
            .$rqs->name.' on '.$rqs->contact.'
            ',
        ];

        $details_student = [
            'title' => 'Congratulations '.$rqs->name.' on your new Bookings',
            'body' => 'Your Landlord will reach out soon to complete your Payment For the Room',
        ];

        \Mail::to($rqs->land_lord)->send(new \App\Mail\MyTestMail($details));
        \Mail::to($rqs->email)->send(new \App\Mail\studentmail($details_student));
       
        return redirect()->back();
     
     }
}
