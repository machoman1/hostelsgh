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
<form  method="POST" action="/edit_landlord" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{{$data['id']}}"> <br>
            @csrf 
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-3">
                <span style="font-weight: bold;font-size:25px"><a href="/admin_landlord"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> View Landlord</span><br><br>
                <label>FirstName</label>
                <input style="width:100%;height:40px" type="text" name="firstname" id="firstname" value="{{$data['firstname']}}"  required autocomplete="off">
                <br><br>
                <label>Title</label>
                <input style="width:100%;height:40px" type="text" name="title" id="title" value="{{$data['title']}}"  required autocomplete="off">
                <br><br>
                <label>House Number</label>
                <input style="width:100%;height:40px" type="text" name="house_number" id="house_number" value="{{$data['house_number']}}"  required autocomplete="off">
                <br><br>
                <label>Company Name</label>
                <input style="width:100%;height:40px" type="text" name="company" id="company" value="{{$data['company']}}"  required autocomplete="off">
                <br><br>
                <label>Contact Number</label>
                <input style="width:100%;height:40px" type="text" name="contact_number" id="contact_number" value="{{$data['contact_number']}}"  required autocomplete="off">
                <br><br>
                <label>Contact Name</label>
                <input style="width:100%;height:40px" type="text" name="contact_name" id="contact_name" value="{{$data['contact_name']}}"  required autocomplete="off">
                <br><br>
                <label>City</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['city']}}"  required autocomplete="off">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-1">
        <br><br>
        <div class="vl" style="border-left: 6px solid green;height: 700px;"></div>
        </div>
        <div style="padding-top:60px" class="col-md-3">
                <label>Email</label>
                <input style="width:100%;height:40px" type="text" name="email" id="email" value="{{$data['email']}}"  required autocomplete="off">
                <br><br>
                <label>Surename</label>
                <input style="width:100%;height:40px" type="text" name="surename" id="surename" value="{{$data['surename']}}"  required autocomplete="off">
                <br><br>
                <label>House Name</label>
                <input style="width:100%;height:40px" type="text" name="house_name" id="house_name" value="{{$data['house_name']}}"  required autocomplete="off">
                <br><br>
                <label>Street</label>
                <input style="width:100%;height:40px" type="text" name="street" id="street" value="{{$data['street']}}"  required autocomplete="off">
                <br><br>
                <label>District Name</label>
                <input style="width:100%;height:40px" type="text" name="district" id="district" value="{{$data['district']}}"  required autocomplete="off">
                <br><br>
                <label>Town Name</label>
                <input style="width:100%;height:40px" type="text" name="town" id="town" value="{{$data['town']}}"  required autocomplete="off">
                <br><br>
                <label>Website</label>
                <input style="width:100%;height:40px" type="text" name="website" id="website" value="{{$data['website']}}"  required autocomplete="off">
                <br><br>
                <div style="float: right; padding-top:10px;color:white;padding-left:10px"><a href="/admin_landlord" class="edit btn btn-primary btn-sm"">Back</a></div>
                <div style="float: right; padding-top:10px;"><button class="edit btn btn-primary btn-sm"">Save</button></div>
        </div>
        <div class="col-md-2"></div>
    </div>
</form>
</div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
