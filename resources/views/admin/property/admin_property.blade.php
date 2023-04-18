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
    <a data-toggle="modal" data-target="#add_property"  href="add_property"  class="edit btn btn-primary btn-sm" style="font-weight:bold; color:white;"></i> Add A Property</a>
    <span style="padding-left: 50px;"><a href="admin_property_type" class="edit btn btn-primary btn-sm" style="font-weight:bold; color:white;"></i> Property Type</a></span><br><br>

        <thead>
            <tr>
                 <th>Image</th>
                <th>Property Name</th>
                <th>City</th>
                <th>Location</th>
                <th>Landlord</th>
                <th>Property Status</th>
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
          url: "{{ route('cust.admin_property') }}",
          data: function (d) {
                d.email = $('.searchEmail').val(),
                d.search = $('input[type="search"]').val()
            }
        },
        columns: [
            {data: 'image', name:'image',
                render:function(data){
                return "<img height='5' src=\"/public/images/" + data + "\" height=\"5\"/>";
              }
            },
            {data: 'property_name', name: 'property_name'},
            {data: 'city', name: 'city'},
            {data: 'address', name: 'address'},
            {data: 'land_lord', name: 'land_lord'},
            {data: 'property_status', name: 'property_status'},
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
<div style="font-family: 'Open Sans', sans-serif;" class="modal"  id="add_property" tabindex="-1" role="dialog" aria-labelledby="add_property" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="add_property">Add Property</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="/admin_property" enctype="multipart/form-data">
                @csrf
                <label>Property Type</label><br>
                <select style="width: 100%;" id="property_type" name="property_type">
                <option value="">Select Property</option>
                @foreach($data_property_type as $data)
                <option>{{$data->name}}</option>
                @endforeach
                </select>
                <br><br>
                <label>Property Name</label><br>
                <input style="width:100%;height:40px" type="text" name="property_name" id="property_name" required autocomplete="off">
                <br><br>
                <label>Number of Rooms</label><br>
                <input style="width:100%;height:40px" type="number" name="number_of_rooms" id="number_of_rooms" required autocomplete="off">
                <br><br>
                <label>City Name</label><br>
                <select style="width: 100%;" id="city" name="city">
                <option value="">Select City</option>
                @foreach($data_city as $data1)
                <option>{{$data1->name}}</option>
                @endforeach
                </select>
                <br><br>
                <label>Location</label><br>
                <input style="width:100%;height:40px" type="text" name="address" id="address" required autocomplete="off">
                <br><br>
                <label>Landlord</label><br>
                <select style="width: 100%;" id="landlord" name="landlord">
                <option value="null">Select Landlord</option>
                @foreach($data_landlord as $data)
                <option>{{$data->email}}</option>
                @endforeach
                </select>
                <br><br>
                <label>Date Available</label><br>
                <input style="width:100%;height:40px" type="date" name="date_available" id="date_available" required autocomplete="off">
                <br><br>
                <label>Status</label><br>
                <select style="width: 100%;" id="property_status" name="property_status">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
                </select>
                <br><br>
                <label>Initial Deposit</label><br>
                <input style="width:100%;height:40px" type="number" name="initial_deposit" id="initial_deposit" required autocomplete="off">
                <br><br>
                <label>Sheard</label><br>
                <select  style="width: 100%;" id="is_sheard" name="is_sheard">
                <option value="Whole Property">Whole Property</option>
                <option value="Sheared Property">Sheared Property</option>
                </select>
                <br><br>
                <div style="display:none" id="available_rooms"><label>Number of Rooms Available</label><br>
                <input style="width:100%;height:40px" type="number" name="number_of_rooms_available" id="number_of_rooms_available" autocomplete="off">
                <br><br></div>
                <label>Amount Per Month</label><br>
                <input style="width:100%;height:40px" type="number" name="amount_per_month" id="amount_per_month" required autocomplete="off">
                <br><br>
                <label>Select Property Image</label><br>
                <input type="file" name="image" id="image">
            </div>
            <div class="modal-footer">
            <div style="float: right; padding-top:10px"><button class="edit btn btn-primary btn-sm"">Save</button></div>
     </form>  
      </div>
    </div>
  </div>
</div>
            </div>
        </div>
    </div>
</div>
<script>
        $(document).ready(function () {
  
            $('#is_sheard').on('change', function () {
                var sheard = this.value;

                if(sheard == 'Sheared Property'){
                    document.getElementById("available_rooms").style.display = 'block';
                }else{
                    document.getElementById("available_rooms").style.display = 'none';
                }
            });
  
        });
    </script>
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
