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
        <span style="font-weight: bold;font-size:25px"><a href="/admin_university"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> Update University</span>
        <form  method="POST" action="/edit_university" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{$data['id']}}"> <br>
            @csrf 
            <div class="row">
                <div class="col-md-5">
                <label>University Name</label>
                <input style="width:100%;height:40px" type="text" name="name" id="name" value="{{$data['name']}}" required autocomplete="off">
                <br><br>
                <label>City Name</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['city']}}" required autocomplete="off">
                <br><br>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1">
                <div class="vl" style="border-left: 6px solid green;height: 500px;"></div>
                </div>
                <div class="col-md-5">
                <label>Website</label>
                <input style="width:100%;height:40px" type="text" name="website" id="website" value="{{$data['website']}}" required autocomplete="off">
                <br><br>
                <label>Address</label>
                <input style="width:100%;height:40px" type="text" name="address" id="address" value="{{$data['address']}}" required autocomplete="off">
                <div style="float: right; padding-top:10px;color:white;padding-left:10px"><a href="/admin_university" class="edit btn btn-primary btn-sm"">Back</a></div>
                <div style="float: right; padding-top:10px;"><button class="edit btn btn-primary btn-sm"">Save</button></div>
                </div>
            </div>
        </form>
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
