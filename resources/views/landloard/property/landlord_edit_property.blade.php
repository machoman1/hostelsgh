@extends('layouts.app')
@section('content')
<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/min.css') }}" rel="stylesheet"> -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <span style="font-weight: bold;font-size:20px;"><a style="text-decoration: none" href="/land_lord"><i class="fa fa-chevron-left" aria-hidden="true"></i> Dashboard</span></a>
                </div>
                <div class="card-body">
                <div style="font-family: 'Open Sans', sans-serif;" class="container">
<form  method="POST" action="/edit_property" enctype="multipart/form-data">
    @csrf 
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input hidden class="form-control" type="text" id="image_old" name="image_old" value="{{$data['image']}}">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
        <span style="font-weight: bold;font-size:25px"><a href="/landlord_property"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> Update Property</span><br><br>

            <label>Property Name</label><br>
            <select style="width: 100%;" id="property_type" name="property_type">
            <option value="{{$data['property_type']}}">{{$data['property_type']}}</option>
            @foreach($data_property_type as $property)
            <option>{{$property->name}}</option>
            @endforeach
            </select>
            <br><br>
            <label>Property Name</label><br>
            <input style="width:80%;height:40px" value="{{$data->property_name}}" type="text" name="property_name" id="property_name" required autocomplete="off">
            <br><br>
            <label>City Name</label><br>
            <select style="width: 100%;" id="city" name="city">
            <option value="{{$data['city']}}">{{$data['city']}}</option>
            @foreach($data_city as $data1)
            <option>{{$data1->name}}</option>
            @endforeach
            </select>
            <br><br>
            <label>Status</label><br>
            <select style="width: 100%;" id="property_status" name="property_status">
            <option value="{{$data['property_status']}}">{{$data['property_status']}}</option>
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
            </select>
            
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-1">
        <br><br>
        <div class="vl" style="border-left: 6px solid green;height: 500px;"></div>
        </div>
        <div style="padding-top: 60px;" class="col-md-3">
        <label>Property Location</label><br>
        <input style="width:100%;height:40px" value="{{$data['specific_location']}}" type="text" name="specific_location" id="specific_location" required autocomplete="off">
            <br><br>
            <label>Landlord Name</label><br>
            <select style="width: 80%;" id="landlord" name="landlord">
            <option value="{{$data['land_lord']}}">{{$data['land_lord']}}</option>
            @foreach($data_landlord as $landlord)
            <option>{{$landlord->email}}</option>
            @endforeach
            </select>
            <br><br>
            <label>Number of Rooms</label><br>
            <input style="width:80%;height:40px" value="{{$data->number_of_rooms}}" type="text" name="number_of_rooms" id="number_of_rooms" required autocomplete="off">
            <br><br>
            <label>Property Mode</label><br>
            <select style="width: 80%;" id="is_sheard" name="is_sheard">
            <option value="{{$data['is_sheard']}}">{{$data['is_sheard']}}</option>
            <option value="Sheared Property">Sheared Property</option>
            <option value="Whole Property">Whole Property</option>
            </select>
            <br><br>
            <div style="float: right; padding-top:10px;color:white;padding-left:10px"><a href="/landlord_property" class="edit btn btn-primary btn-sm"">Back</a></div>
            <div style="float: right; padding-top:10px;"><button class="edit btn btn-primary btn-sm"">Save</button></div>
        </div>
        <div style="padding-top: 60px;" class="col-md-2">
        <img style="border-radius:10px;width:100%" src="{{ url('public/images/'.$data->image)}}" alt="image" loading="lazy"  />
        <br>
        <label>Image</label><br>
        <input type="file" name="image" id="image">
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
