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
        <div class="col-md-8">
        <span style="font-weight: bold;font-size:25px"><a href="/admin_university"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> View University</span>

            <div class="row">
                <div class="col-md-5">
                <label>University Name</label>
                <input style="width:100%;height:40px" type="text" name="name" id="name" value="{{$data['name']}}" disabled required autocomplete="off">
                <br><br>
                <label>City Name</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['city']}}" disabled required autocomplete="off">
                <br><br>
                <label>Website</label>
                <input style="width:100%;height:40px" type="text" name="website" id="website" value="{{$data['website']}}" disabled required autocomplete="off">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1">
                <div class="vl" style="border-left: 6px solid green;height: 500px;"></div>
                </div>
                <div class="col-md-5">
                <label>Address</label>
                <input style="width:100%;height:40px" type="text" name="address" id="address" value="{{$data['address']}}" disabled required autocomplete="off">
                <br><br>
                <label>Date Created</label>
                <input style="width:100%;height:40px" type="text" name="website" id="website" value="{{$data['created_at']}}" disabled required autocomplete="off">
                <br><br>
                <label>Date Updated</label>
                <input style="width:100%;height:40px" type="text" name="website" id="website" value="{{$data['updated_at']}}" disabled required autocomplete="off">
                <br><br>
                <div style="float: right; padding-top:10px;color:white"><a href="/admin_university" class="edit btn btn-primary btn-sm"">Back</a></div>

                </div>
            </div>
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
