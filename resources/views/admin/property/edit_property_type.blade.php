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
                    <form  method="POST" action="/edit_property_type" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="id" value="{{$data['id']}}">
                            <div class="row">
                            <div class="col-md-1"></div>
                                <div class="col-md-10">
                                <span style="font-weight: bold;font-size:25px"><a href="/admin_property_type"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> Update Property Type</span><br><br>

                                    <label>Type Name</label>
                                    <input style="width:100%;height:40px" value="{{$data['name']}}" type="text" name="name" id="name" required autocomplete="off">
                                    <br><br>
                                    <div style="float: right; padding-top:10px;color:white;padding-left:10px"><a href="/admin_property_type" class="edit btn btn-primary btn-sm"">Back</a></div>
                                    <div style="float: right; padding-top:10px;"><button class="edit btn btn-primary btn-sm"">Save</button></div>
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
