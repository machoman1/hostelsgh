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
        <span style="font-weight: bold;font-size:25px"><a href="/admin_complain"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> View Complains</span><br>

                <label>Complaint Name</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['name']}}" disabled required autocomplete="off">
                <br><br>
                <label>Complaint Email</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['email']}}" disabled required autocomplete="off">
                <br><br>
                <label>Complaint Contact</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['contact']}}" disabled required autocomplete="off">
                <br><br>
                <label>Complaint Description</label>
                <textarea style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['complain']}}" disabled required autocomplete="off">{{$data['complain']}}</textarea>
                <br><br>
                <label>Complaint Status</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['tenancy_status']}}" disabled required autocomplete="off">
                <br><br>
                <label>Date Submitted</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['updated_at']}}" disabled required autocomplete="off">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-1">
            <br><br><br>
        <div class="vl" style="border-left: 6px solid green;height: 500px;"></div>

        </div>
        <div class="col-md-3"><br><br>
                <label>Complaint Campus</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['university']}}" disabled required autocomplete="off">
                <br><br>
                <label>Property Address</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['property_address']}}" disabled required autocomplete="off">
                <br><br>
                <label>Landlord Name</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['landlord_name']}}" disabled required autocomplete="off">
                <br><br>
                <label>Tenancy Type</label>
                <input style="width:100%;height:40px" type="text" name="city" id="city" value="{{$data['tenency_type']}}" disabled required autocomplete="off">
                <br><br>
                <label>Evidence</label>
                <img style="border-radius:10px;width:100%" src="{{ url('public/images/'.$data->proof)}}" alt="image" loading="lazy"/>

                <div style="float: right; padding-top:10px;color:white"><a href="/admin_complain" class="edit btn btn-primary btn-sm"">Back</a></div>

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
