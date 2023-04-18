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
        <div class="col-md-2"></div>
        <div class="col-md-3">
        <span style="font-weight: bold;font-size:25px"><a href="/admin_landlord"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> View Landlord</span><br>

                <label>Title</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['title']}}" disabled required autocomplete="off">
                <br><br>
                <label>House Number</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['house_number']}}" disabled required autocomplete="off">
                <br><br>
                <label>Company Name</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['company']}}" disabled required autocomplete="off">
                <br><br>
                <label>Contact Name</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['contact_name']}}" disabled required autocomplete="off">
                <br><br>
                <label>Date Created</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['created_at']}}" disabled required autocomplete="off">
                <br><br>
                <label>Date Updated</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['updated_at']}}" disabled required autocomplete="off">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-1">
            <br><br><br>
        <div class="vl" style="border-left: 6px solid green;height: 500px;"></div>

        </div>
        <div class="col-md-3"><br><br>
                <label>House Name</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['house_name']}}" disabled required autocomplete="off">
                <br><br>
                <label>Street</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['street']}}" disabled required autocomplete="off">
                <br><br>
                <label>District Name</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['district']}}" disabled required autocomplete="off">
                <br><br>
                <label>Town Name</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['town']}}" disabled required autocomplete="off">
                <br><br>
                <label>Website</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['website']}}" disabled required autocomplete="off">
                <div style="float: right; padding-top:10px;color:white"><a href="/admin_landlord" class="edit btn btn-primary btn-sm"">Back</a></div>

        </div>
        <div class="col-md-2"></div>
    </div>

</div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
