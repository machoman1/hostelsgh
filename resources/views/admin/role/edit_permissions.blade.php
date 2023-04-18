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
            <form  method="POST" action="/edit_permissions" enctype="multipart/form-data">
                @csrf 
                <input type="hidden" name="id" value="{{$data['id']}}">
                    <div class="row">
                    <div class="col-md-2"></div>
                        <div class="col-md-8">
                        <span style="font-weight: bold;font-size:25px"><a href="/admin_permissions"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> Roles And Permissions</span>
                            <br>
                            <label>Role As</label><br>
                            <select name="role_as" id="role_as" style="width: 80%;">
                            @if($data['role_as'] == '0')
                            <option value="{{$data['role_as']}}">Administrator</option>
                            @endif
                            @if($data['role_as'] == '1')
                            <option value="1">Student</option>
                            @endif
                            @if($data['role_as'] == '2')
                            <option value="2">LandLord</option>
                            @endif
                            @if($data['role_as'] == '3')
                            <option value="3">Event Booker</option>
                            @endif
                            <option value="0">Administrator</option>
                            <option value="1">Student</option>
                            <option value="2">LandLord</option>
                            <option value="3">Event Booker</option>
                            </select>
                            <br><br>
                            <div style="float: right; padding-top:10px;color:white;padding-left:10px"><a href="/admin_permissions" class="edit btn btn-primary btn-sm"">Back</a></div>
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
