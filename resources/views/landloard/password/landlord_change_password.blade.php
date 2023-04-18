@extends('layouts.landlord_app')
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
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <form  method="POST" action="/admin_change_password" enctype="multipart/form-data">
                                @csrf 
                                <input type="hidden" name="id" value="{{$data['id']}}">
                                <input type="hidden" name="old_pass" value="{{$data['password']}}">

                                <div class="row">
                                    <div class="col-md-5">
                                        <span style="font-weight: bold;font-size:25px">Your Account Details</span>
                                        <input style="width:100%;" type="email" value="{{$data['email']}}" name="email" id="email" required autocomplete="off">
                                        <br><br>
                                        <input style="width:100%;" type="text" value="{{$data['name']}}" name="name" id="name" required autocomplete="off">
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">
                                        <div class="vl" style="border-left: 6px solid green;height: 500px;"></div>
                                    </div>
                                    <div class="col-md-5">
                                        <span style="font-weight: bold;font-size:25px">Change Password</span><br>
                                        <label>Current Password</label><br>
                                        <input style="width:100%;" type="password" name="current_password" id="current_password" autocomplete="off">

                                        <label>New Password</label><br>
                                        <input style="width:100%;" type="password" name="new_password" id="new_password" autocomplete="off">

                                        <label>Confirm Password</label><br>
                                        <input style="width:100%;" type="password" name="confirm_password" id="confirm_password" autocomplete="off">
                                        <div style="float: right; padding-top:10px;color:white;padding-left:10px"><a href="/land_lord" class="edit btn btn-primary btn-sm"">Back</a></div>
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
</div>
@include('sweetalert::alert')
@endsection
