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
                <div class="content-wrap">
        <div class="main">
            <div style="font-family: 'Open Sans', sans-serif; padding-top:30px" class="container">
    <table class="table table-bordered data-table">
    <a data-toggle="modal" data-target="#add_property"  href="add_property"  class="edit btn btn-primary btn-sm" style="font-weight:bold; color:white;"></i> Add A Room</a><br><br>
    <!-- <span style="padding-left: 50px;"><a href="admin_property_type" class="edit btn btn-primary btn-sm" style="font-weight:bold; color:white;"></i> Add Property Type</a></span><br><br> -->

        <thead>
            <tr>
                <th height="2px" width="2px">Room Image</th>
                <th>Room Type</th>
                <th>City</th>
                <th>Room Name</th>
                <th>Amount</th>
                <th>Room Status</th>
                <th>Date Created</th>
                <th width="170px">Actions</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
  
</body>
  
<script type="text/javascript">
  $(function () {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: "{{ route('cust.admin_room') }}",
          data: function (d) {
                d.email = $('.searchEmail').val(),
                d.search = $('input[type="search"]').val()
            }
        },

        columns: [
            {data: 'room_img_1', name: 'room_img_1',
              render:function(data){
                return "<img height='5' src=\"/public/images/" + data + "\" height=\"5\"/>";
              }
            },
            {data: 'property_name', name: 'property_name'},
            {data: 'city', name: 'city'},
            {data: 'room_name', name: 'room_name'},
            {data: 'amount_per_month', name: 'amount_per_month'},
            {data: 'room_status', name: 'room_status'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
          

        ]
    });
   
    $(".searchEmail").keyup(function(){
        table.draw();
    });
  
  });
</script>
            </div>
        </div>
    </div>

<!-- add uni -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal" id="add_property" tabindex="-1" role="dialog" aria-labelledby="add_property"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="add_property">Add Room</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="/admin_room" enctype="multipart/form-data">
                @csrf
                <label>Room Type</label><br>
                <select style="width: 100%;" id="property_name" name="property_name">
                <option value="">Select Room Type</option>
                @foreach($data_property_name as $data)
                <option>{{$data->name}}</option>
                @endforeach
                </select>
                <br><br>
                <label>City Name</label><br>
                <select style="width: 100%;" id="city" name="city">
                <option value="">Select City</option>
                @foreach($data_city as $data1)
                <option>{{$data1->name}}</option>
                @endforeach
                </select>
                <br><br>
                <label>Room Name</label><br>
                <input style="width:100%;height:40px" type="text" name="room_name" id="room_name" required autocomplete="off">
                <br><br>
                <label>Landlord</label><br>
                <select style="width: 100%;" id="landlord" name="landlord">
                <option value="null">Select Landlord</option>
                @foreach($data_landlord as $data)
                <option>{{$data->email}}</option>
                @endforeach
                </select>
                <br><br>
                <label>Status</label><br>
                <select style="width: 100%;" id="room_status" name="room_status">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
                </select>
                <br><br>
                <label>Date Available</label><br>
                <input style="width:100%;height:40px" type="date" name="date_available" id="date_available" required autocomplete="off">
                <br><br>
                <label>Amount Per Month</label><br>
                <input style="width:100%;height:40px" type="number" name="amount_per_month" id="amount_per_month" required autocomplete="off">
                <br><br>
                <label>Initial Payment</label><br>
                <input style="width:100%;height:40px" type="number" name="initial_deposit" id="initial_deposit" required autocomplete="off">
                <br><br>
                <div class="row">
                    <div class="col-md-6">
                        <div id="image_1">
                            <label>Room Image</label><br>
                            <input type="file" name="room_img_1" id="image">
                            <input  onclick="myFunction()" type="checkbox"  name="add_image_2" id="add_image_2"><span> <i class="fa fa-plus" aria-hidden="true"></i></span>
                            <br><br>
                        </div>

                        <div id="image_2" style="display: none;">
                            <input type="file" name="room_img_2" id="image">
                            <input onclick="myFunction1()" type="checkbox" name="add_image_3" id="add_image_3"><span> <i class="fa fa-plus" aria-hidden="true"></i></span>
                            <br><br>
                        </div>

                        <div id="image_3" style="display: none;">
                            <input type="file" name="room_img_3" id="image">
                            <input onclick="myFunction2()" type="checkbox" name="add_image_4" id="add_image_4"><span> <i class="fa fa-plus" aria-hidden="true"></i></span>
                            <br><br>
                        </div>

                        <div id="image_4" style="display: none;">
                            <input type="file" name="room_img_4" id="image">
                            <input onclick="myFunction3()"  type="checkbox" name="add_image_5" id="add_image_5"><span> <i class="fa fa-plus" aria-hidden="true"></i></span>
                            <br><br>
                        </div>

                        <div id="image_5" style="display: none;">
                            <input type="file" name="room_img_5" id="image">
                            <!-- <input  type="checkbox" name="add_image_6" id="add_image_6"><span> Add More</span> -->
                        </div>

                    </div>
                    <div class="col-md-6">
                    <label>Room Propertoies</label><br>
                    <input onclick="myFunction_properties()" style="height:20px;width:20px" type="checkbox" name="include_aminities" id="include_aminities"><span style="padding-left:15px;opacity:0.8;font-size:16px">Include Properties</span>
                      <br><br>
                    <div id="all_aminities" style="display: none;">
                    <div  class="row">
                        <!-- <div class="col-md-2"></div> -->
                        <div class="col-md-6">
                        <input type="checkbox" id="Air Condition" name="room_prop_1" value="Air Condition">
                        <label for="myCheck">Air Condition:</label> 
                        <br>
                        <input type="checkbox" id="TV" name="room_prop_1" value="TV">
                        <label for="myCheck">TV:</label> 
                        <br>
                        <input type="checkbox" id="Burgler Alarm" name="room_prop_2 value="Burgler Alarm">
                        <label for="myCheck">Burgler Alarm:</label> 
                        </div>
                        <div class="col-md-6">
                        <input type="checkbox" id="Wi-Fi" name="room_prop_3" value="Wi-Fi">
                        <label for="myCheck">Wi-Fi:</label> 
                        <br>
                        <input type="checkbox" id="Garden" name="room_prop_4" value="Garden">
                        <label for="myCheck">Garden:</label> 
                        <br>
                        <input type="checkbox" id="Wheelchair Accessible" name="room_prop_5" value="Wheelchair Accessible">
                        <label for="myCheck">Wheelchair Accessible:</label> 
                        </div><br><br><br>
                        <!-- <div class="col-md-2"></div> -->

                    </div>
                </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <div style="float: right; padding-top:10px"><button class="edit btn btn-primary btn-sm"">Save</button></div>
     </form>  
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
function myFunction() {
  var checkBox = document.getElementById("add_image_2");

  var image_2 = document.getElementById("image_2");
  if (checkBox.checked == true){
    image_2.style.display = "block";
  } else {
     image_2.style.display = "none";

  }
}
</script>
<script type="text/javascript">
function myFunction1() {
  var checkBox = document.getElementById("add_image_3");

  var image_3 = document.getElementById("image_3");
  if (checkBox.checked == true){
    image_3.style.display = "block";
  } else {
     image_3.style.display = "none";

  }
}
</script>
<script type="text/javascript">
function myFunction2() {
  var checkBox = document.getElementById("add_image_4");

  var image_3 = document.getElementById("image_4");
  if (checkBox.checked == true){
    image_4.style.display = "block";
  } else {
     image_4.style.display = "none";

  }
}
</script>
<script type="text/javascript">
function myFunction3() {
  var checkBox = document.getElementById("add_image_5");

  var image_4 = document.getElementById("image_5");
  if (checkBox.checked == true){
    image_5.style.display = "block";
  } else {
     image_5.style.display = "none";

  }
}
</script>
<script type="text/javascript">
function myFunction_properties() {
  var checkBox = document.getElementById("include_aminities");
  var all_aminities = document.getElementById("all_aminities");
  if (checkBox.checked == true){
    all_aminities.style.display = "block";
  } else {
     all_aminities.style.display = "none";
     document.getElementById('Air Condition').checked = false;
     document.getElementById('TV').checked = false;
     document.getElementById('Burgler Alarm').checked = false;
     document.getElementById('Wi-Fi').checked = false;
     document.getElementById('Garden').checked = false;
     document.getElementById('Wheelchair Accessible').checked = false;

  }
}
</script>
            </div>
        </div>
    </div>
</div>
<style>
    .top{
        font-size:30px;
        font-weight:bold;
    }
    .span-bold{
        font-weight:bold;
    }
    p{
        padding-top:20px;
        font-size:16px;
    }
    table {
  border-collapse: collapse;
  width: 100%;
    }

    td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }



    #myImg,#myImg1,#myImg2,#myImg3 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    }

    #myImg,#myImg1,#myImg2,#myImg3:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal_img {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (Image) */
    .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    }

    /* Add Animation - Zoom in the Modal */
    .modal-content, #caption {
    animation-name: zoom;
    animation-duration: 1.5s;
    }

    @keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
    }

    /* The Close Button */
    .close,.close1,.close2,.close3 {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    }

    .close:hover,
    .close:focus,
    .close1:hover,
    .close1:focus,
    .close2:hover,
    .close2:focus,
    .close3:hover,
    .close3:focus{
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
    }
</style>
@include('sweetalert::alert')
@endsection
