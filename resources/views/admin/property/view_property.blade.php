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
    
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
        <span style="font-weight: bold;font-size:25px"><a href="/admin_property"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> View Property</span><br><br>

            <label>Property Name</label><br>
            <select style="width: 100%;" id="property_name" name="property_name">
            <option value="">{{$data['property_type']}}</option>
            </select>
            <br><br>
            <label>Property Name</label><br>
            <input style="width:80%;height:40px" value="{{$data->property_name}}" type="text" name="property_name" id="property_name" required autocomplete="off">
            <br><br>
            <label>City Name</label><br>
            <select style="width: 100%;" id="city" name="city">
            <option value="">{{$data['city']}}</option>
            </select>
            <br><br>
            <label>Property Status</label><br>
            <select style="width: 100%;" id="city" name="city">
            <option value="">{{$data['property_status']}}</option>
            </select>
            <br><br>
            <label>Initial Deposit</label><br>
            <input style="width:80%;height:40px" value="{{$data['initial_deposit']}}" type="number" name="initial_deposit" id="initial_deposit" required autocomplete="off">
            <br><br>
            <label>Amount Per Month</label><br>
            <input style="width:80%;height:40px" value="{{$data['amount_per_month']}}" type="number" name="amounth_per_month" id="amounth_per_month" required autocomplete="off">
            <br><br>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-1">
        <br><br>
        <div class="vl" style="border-left: 6px solid green;height: 500px;"></div>
        </div>
        <div style="padding-top: 60px;" class="col-md-3">
        <label>Property Location</label><br>
            <select style="width: 100%;" id="property_name" name="property_name">
            <option value="">{{$data['address']}}</option>
            </select>
            <br><br>
            <label>Landlord Name</label><br>
            <select style="width: 100%;" id="city" name="city">
            <option value="">{{$data['land_lord']}}</option>
            </select>
            <br><br>
            <label>Date Available</label><br>
            <input style="width:80%;height:40px" type="date" value="{{$data->date_available}}" name="date_available" id="date_available" required autocomplete="off">
            <br><br>
            <label>Number of Rooms</label><br>
            <input style="width:80%;height:40px" value="{{$data->number_of_rooms}}" type="text" name="number_of_rooms" id="number_of_rooms" required autocomplete="off">
            <br><br>
            <label>Property Mode</label><br>
            <select style="width: 100%;" id="city" name="city">
            <option value="">{{$data['is_sheard']}}</option>
            </select>
            <br><br>
            <div style="float: right; padding-top:10px;color:white;"><a href="/admin_property" class="edit btn btn-primary btn-sm"">Back</a></div>
        </div>
        <div style="padding-top: 60px;" class="col-md-2">
        <img style="border-radius:10px;width:100%" src="{{ url('public/images/'.$data->image)}}" alt="image" loading="lazy"  />
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
