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
        <span style="font-weight: bold;font-size:25px"><a href="/admin_students"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> Update Student</span>

             <form  method="POST" action="/edit_students" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$data['id']}}"> <br>
                @csrf 
                <div class="row">
                    <div class="col-md-5">
                    <span>Select a City:</span>
                        <select  style="width: 100%;" name="city" id="city_drop" required>
                            <option value="{{$data['city']}}">{{$data['city']}}</option>
                            @foreach ($cities as $cities)
                            <option value="{{$cities->name}}">{{$cities->name}}</option>
                            @endforeach
                        </select><br><br>

                    <div id="university" style="display:none">
                        <span>Select Universitry:</span><br>
                        <select style="width: 100%;" name="university_drop" id="university_drop"  required>
                        </select><br><br>
                    </div>
                        <span>Last Name:</span>
                        <input style="width: 100%;" name="lastname" id="lastname" value="{{$data['firstname']}}" type="text"required autocomplete="off">
                        <br><br>
                        
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1">
                    <div class="vl" style="border-left: 6px solid green;height: 500px;"></div>
                    </div>
                    <div class="col-md-5">
                    <span>First Name:</span>
                        <input style="width: 100%;" name="firstname" id="firstname" value="{{$data['firstname']}}" type="text" required autocomplete="off">
                        <br><br>
                        <span>Email:</span>
                        <input style="width: 100%;" name="email" id="email" value="{{$data['email']}}" type="email" required autocomplete="off">
                        <br><br>
                        <div style="float: right; padding-top:10px;color:white;padding-left:10px"><a href="/admin_students" class="edit btn btn-primary btn-sm"">Back</a></div>
                    <div style="float: right; padding-top:10px;"><button class="edit btn btn-primary btn-sm"">Save</button></div>
                    </div>
                </div>
             </form>
        </div>
        <div class="col-md-2"></div>
    </div>
               
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#city_drop').on('change', function () {
                var idCity = this.value;
                if(idCity != null){
                    document.getElementById("university").style.display = 'block';
                }else{
                    document.getElementById("university").style.display = 'none';
                    document.getElementById("university").value = null;
                }
                $("#university_drop").html('');
                $.ajax({
                    url: "{{url('api/fetch-uni')}}",
                    type: "POST",
                    data: {
                        name: idCity,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#university_drop').html('<option value="">-- Select University --</option>');
                        $.each(result.uni, function (key, value) {
                            $("#university_drop").append('<option value="' + value
                                .name + '">' + value.name + '</option>');
                        });
                        $('#city-dropdown').html('<option value="">-- Select City --</option>');
                    }
                });
            });
  
        });
    </script>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
