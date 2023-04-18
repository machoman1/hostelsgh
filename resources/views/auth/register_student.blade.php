@extends('app_sidebar')
@section('content')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<div style="font-family: 'Open Sans', sans-serif" class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <div style="padding-top: 30px;"><hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"></div>
            <div style="background-color: #ffffff;" class="row">
                <div class="col-md-1"></div>
                <div style="padding-top: 30px;" class="col-md-10">
                    <span style="font-weight: bold;font-size:25px">Register for a Student Account</span><br>
                    <span>All fields are required.</span><br><br>
                <form method="POST" action="register">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                        <span>Select a City:</span>
                        <select  style="width: 100%;" name="city" id="city_drop" required>
                            <option value="0">Select</option>
                            @foreach ($cities as $data)
                            <option value="{{$data->name}}">{{$data->name}}</option>
                            @endforeach
                        </select><br><br>

                    <div id="university" style="display:none">
                        <span>Select Universitry:</span><br>
                        <select style="width: 100%;" name="university_drop" id="university_drop"  required>
                        </select><br><br>
                        
                    </div>
                        <span>Last Name:</span>
                        <input style="width: 100%;" name="lastname" id="lastname" type="text"required>
                        <br><br>
                        <span>Password:</span>
                        <input style="width: 100%;" name="password" id="password" type="password" required>
                        <br><br>
                        </div>
                        <div class="col-md-6">
                        <span>First Name:</span>
                        <input style="width: 100%;" name="firstname" id="firstname" type="text" required>
                        <br><br>
                        <span>Email:</span>
                        <input style="width: 100%;" name="email" id="email" type="email" required>
                        <br><br>
                        <span>Confirm Password:</span>
                        <input style="width: 100%;" name="confirm_pass" id="confirm_pass" type="password" required>
                        <br><br>
                        </div>
                    </div><br>
                    <span>(We won't share your information with any third parties, or contact you about any subject not mentioned above. You can read our privacy policy to find out how we will look after your data)</span><br>
                    <div style="text-align: center;"><button class="btn_top" value="Register">Register</button></div>

                </form>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <div class="col-md-1"></div>
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
<!-- <script type="text/javascript">
    function selectedValue(){
        var x = document.getElementById("city").value;

        if(x != null){
            document.getElementById("university").style.display = 'block';
        }else{
            document.getElementById("university").style.display = 'none';
            document.getElementById("university").value = null;
        }

    }
</script> -->

@endsection

<style>
    .top{
        font-size:30px;
        font-weight:bold;
    }
    .span-bold{
        font-weight:bold;
    }
    p{
        /* padding-top:20px; */
        font-size:16px;
        text-align:center;
    }
    span{
        font-size:16px;
        padding-top:10px;
    }

    .fixed-left-div{
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        background: #ffffff;
        overflow: none;
        position: relative;
        padding: 10px;
        border-radius:5px;
    }
    .select{
        border:none;
        outline:none;
    }
    @media only screen and (max-width: 600px) {
    div#ra {
        text-align: center;
    }
    div#rat{
        text-align: center;
    }
    .fixed-left-div button{
        width: 20%;
    }
    .column1 {
  float: left;
  width: 50%;
}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}
}
</style>
