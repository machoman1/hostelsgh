@extends('layouts.app')
@section('content')
<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/min.css') }}" rel="stylesheet"> -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <span style="font-weight: bold;font-size:20px;"><a style="text-decoration: none" href="/admin"><i class="fa fa-chevron-left" aria-hidden="true"></i> Dashboard</span></a>
                </div>
                <div class="card-body">
                <div style="font-family: 'Open Sans', sans-serif;" class="container">
<form  method="POST" action="/edit_room" enctype="multipart/form-data">
    @csrf 
    <input type="hidden" name="id" value="{{$data['id']}}">
    <?php
    use App\Models\Room;
            $prop = Room::select('room_prop_1','room_prop_2','room_prop_3','room_prop_4','room_prop_5')->where('id','=',$data['id'])->get();

    ?>
    <input hidden class="form-control" type="text" id="image_old_1" name="image_old_1" value="{{$data['room_img_1']}}">
    <input hidden class="form-control" type="text" id="image_old_2" name="image_old_2" value="{{$data['room_img_2']}}">
    <input hidden class="form-control" type="text" id="image_old_3" name="image_old_3" value="{{$data['room_img_3']}}">
    <input hidden class="form-control" type="text" id="image_old_4" name="image_old_4" value="{{$data['room_img_4']}}">

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
        <span style="font-weight: bold;font-size:25px"><a href="/admin_room"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> View Room</span><br><br>
            <label>Property Name</label><br>
            <select style="width: 100%;" id="property_name" name="property_name" disabled>
            <option value="{{$data['property_name']}}">{{$data['property_name']}}</option>
            </select>
            <br><br>
            <label>City Name</label><br>
            <select style="width: 100%;" id="city" name="city" disabled>
            <option value="{{$data['city']}}">{{$data['city']}}</option>
         
            </select>
            <br><br>
            <label>Room Name</label>
            <input style="width:100%;height:40px" type="text" name="room_name" id="room_name" disabled value="{{$data['room_name']}}">
            <br><br>
            <label>Landlord</label><br>
            <select style="width: 100%;" id="landlord" name="landlord" disabled>
            <option value="{{$data['landlord']}}">{{$data['landlord']}}</option>
          
            </select>
            <br><br>
            <label>Status</label><br>
            <select style="width: 100%;" id="room_status" name="room_status" disabled>
            <option value="{{$data['room_status']}}">{{$data['room_status']}}</option>
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
            </select>
            <br><br>
            <label>Date Available</label><br>
            <input style="width:100%;height:40px" type="date" name="date_available" id="date_available" disabled value="{{$data['date_available']}}">
            <br><br>
            <label>Amount Per Month</label><br>
            <input style="width:100%;height:40px" type="number" name="amount_per_month" id="amount_per_month" disabled value="{{$data['amount_per_month']}}">
            <br><br>
            <label>Initial Deposit</label><br>
            <input style="width:100%;height:40px" type="number" name="initial_deposit" id="initial_deposit" disabled value="{{$data['initial_deposit']}}">
            <br><br>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-1">
        <br><br><br>
        <div class="vl" style="border-left: 6px solid green;height: 650px;"></div>
        </div>
        <div style="padding-top: 60px;" class="col-md-5"><br>
            <div class="row">
                <div class="col-md-6">
                    <img style="border-radius:10px;height:50%" src="{{ url('public/images/'.$data->room_img_1)}}" alt="image" loading="lazy"  />
                    <input type="file" name="room_img_1" id="image">
                </div>
                <div class="col-md-6">
                    <img style="border-radius:10px;height:50%" src="{{ url('public/images/'.$data->room_img_2)}}" alt="image" loading="lazy"  />
                    <input type="file" name="room_img_2" id="image">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img style="border-radius:10px;height:50%" src="{{ url('public/images/'.$data->room_img_3)}}" alt="image" loading="lazy"  />
                    <input type="file" name="room_img_3" id="image">
                </div>
                <div class="col-md-6">
                    <img style="border-radius:10px;height:50%" src="{{ url('public/images/'.$data->room_img_4)}}" alt="image" loading="lazy"  />
                    <input type="file" name="room_img_4" id="image">
                </div>
            </div>
            <div style="display: none;" class="row">
                <label>Room Properties</label><br>
                <div id="all_aminities" style="display:block">
                    <input type="checkbox" id="Air Condition" name="room_prop_1" value="Air Condition">
                    <label for="myCheck">Air Condition</label>

                    <input type="checkbox" id="TV" name="room_prop_2" value="TV">
                    <label for="myCheck">TV</label> 

                    <input type="checkbox" id="Burgler Alarm" name="room_prop_3" value="Burgler Alarm">
                    <label for="myCheck">Burgler Alarm</label>

                    <input type="checkbox" id="Wi-Fi" name="room_prop_4" value="Wi-Fi">
                    <label for="myCheck">Wi-Fi</label>

                    <input type="checkbox" id="Wheelchair Accessible" name="room_prop_5" value="Wheelchair Accessible">
                    <label for="myCheck">Wheelchair Accessible</label>
                </div>
            </div>
            <div style="float: right; padding-top:10px;color:white;padding-left:10px"><a href="/admin_room" class="edit btn btn-primary btn-sm"">Back</a></div>
            <!-- <div style="float: right; padding-top:10px;"><button class="edit btn btn-primary btn-sm"">Save</button></div> -->
        </div>
        <div class="col-md-1"></div>
    </div>
</form>
</div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
