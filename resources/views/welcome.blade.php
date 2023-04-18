
@extends('app_sidebar')
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<div class="master">
<video loop muted id = "autoplay">
  <source src="images/vid2.mp4" type="video/mp4">
</video>   
<div class="centered">
<div class="card1">
            <div class="row">
                <div class="col-md-2"></div>
                <div style="font-family: 'Open Sans', sans-serif" class="col-md-8">
                    <p style="font-size:28px;text-align:center;color:white">Looking For Student Housing?</p>
                    <p style="font-size:40px;text-align:center;color:white">{{$data_room}} +</p>
                    <p style="font-size:20px;text-align:center;color:white">UniHostel Code Properties To Let</p>
                    <form  method="get" action="{{ url( '/welcome_search' )}}">
                        @csrf 
                        <select name="query" id="city_drop" style="width:100%;background-color:transparent;outline:none;border:none;color:white" required>
                            <option value="0">Select City</option>
                            @foreach($data as $cities)
                            <option style="border:none;color:#000" value="{{$cities->name}}">{{$cities->name}}</option>
                            @endforeach
                        </select><br><br>

                    <div id="university">
                        <select style="width: 100%;background-color:transparent;outline:none;border:none;" name="university" id="university_drop" disabled >
                        </select>
                    </div>

                        <div style="padding-top: 30px;"><button  style="width:100%;border:none;background-color:green;border-radius:20px;" class="btn_top"><i class="fa fa-search"></i> Start My Search</button></div><br>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>

<div style="background-color:white;font-family: 'Open Sans', sans-serif;" class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <label style="font-size:70px;line-height:1;text-align:center;padding-top:30px;font-weight:bold">Student Housing Made Easy....</label><br><br>
        <p style="font-size:18px">From contract signing, to helping students search for accommodation, our not-for-profit housing charity provides students with housing support every step of the way</p><br><br>
        <div class="ml"><a href="about"><p style="text-align:center;font-weight:bold;color:#008080;font-size:20px">Why Choose UniHostel <i class="fa fa-caret-right"></i></p></a><br><br><br><br></div>
    </div>
    <div class="col-md-3"></div>
    <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%">
   </div>
   <!-- two div with buttom -->
   <div style="font-family: 'Open Sans', sans-serif;" class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11">
            <div class="row">
                <div class="col-md-6">
                    <div style="padding-top:40px" class="col-md-4"><span style="font-size:25px;color:black;font-weight:bold">Student to Student Noticebaord</span></div>
                    <div style="padding-top:20px" class="col-md-5"><span style="font-size:15px;">Need another student to take over your tenancy or looking to form a group for a house share?</span></div><br><br>
                    <div class="ml"><a style="width:80%;height:80px" href="noticeboard" class="btn_top"><span style="float:left;padding-top:15px">Start Posting Now</span><span style="float:right;padding-top:15px"><i class="fa fa-caret-right"></i></span></a></div>
                </div>
                <div class="col-md-6">
                    <div style="padding-top:60px" class="col-md-4"><span style="font-size:25px;color:black;font-weight:bold">Rent Directory From UniHostel</span></div>
                    <div style="padding-top:20px" class="col-md-5"><span style="font-size:15px;">We offer the best deal we can to our tenants with no fees, hidden charges or guarantors.</span></div><br>
                    <div class="ml"><a style="width:80%;height:80px" href="accomodation" class="btn_top"><span style="float:left;padding-top:15px">Find Your Home Today</span><span style="float:right;padding-top:15px"><i class="fa fa-caret-right"></i></span></a></div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
   </div>

   </div>

</div>

<script>
    window.onload = function(){
      document.getElementById("autoplay").play()
    }
</script> 
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
                    document.getElementById("university_drop").disabled = false;

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
<!-- <div class="video-container">
  <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Yj2iELI6OeI?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div> -->

<style>
    #autoplay {
  position: relative;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}

.centered {
  position: absolute;
  top: 80%;
  left: 50%;
  transform: translate(-50%, -50%);
  /* color: white; */
}
.card1{
  background: rgba(0,0,0,0.5);
}
@media screen and (max-width: 600px) {
  .centered {
    display: none;
  }.ml{
    text-align: center;
  }
 
}

</style>
   
@include('sweetalert::alert')
@endsection