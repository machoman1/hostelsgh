@extends('layouts.app')
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
                <div class="content-wrap">
        <div class="main">
            <div style="font-family: 'Open Sans', sans-serif; padding-top:30px" class="container">
    <table class="table table-bordered data-table">
    <a data-toggle="modal" data-target=".add_property-example-modal-lg"  href="add_property"  class="edit btn btn-primary btn-sm" style="font-weight:bold; color:white;"></i> Add A Property</a><br><br>
        <thead>
            <tr>
                 <th>Image</th>
                <th>Property Name</th>
                <th>City</th>
                <th>Location</th>
                <th>Landlord</th>
                <th>Property Status</th>
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
          url: "{{ route('cust.landlord_property') }}",
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
            {data: 'specific_location', name: 'specific_location'},
            {data: 'land_lord', name: 'land_lord'},
            {data: 'property_status', name: 'property_status'},
            //{data: 'is_sheard', name: 'is_sheard'},
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
<div style="font-family: 'Open Sans', sans-serif;" class="modal  add_property-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Add Property</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="/admin_property" enctype="multipart/form-data">
                @csrf
                <label>Property Type</label><br>
                <select style="width: 80%;" id="property_type" name="property_type">
                <option value="">Select Property</option>
                @foreach($data_property_type as $data)
                <option>{{$data->name}}</option>
                @endforeach
                </select>
                <br><br>
                <label>Property Name</label><br>
                <input style="width:80%;height:40px" type="text" name="property_name" id="property_name" required autocomplete="off">
                <br><br>
                <label>Number of Rooms</label><br>
                <input style="width:80%;height:40px" type="text" name="number_of_rooms" id="number_of_rooms" required autocomplete="off">
                <br><br>
                <label>City Name</label><br>
                <select style="width: 80%;" id="city" name="city">
                <option value="">Select City</option>
                @foreach($data_city as $data1)
                <option>{{$data1->name}}</option>
                @endforeach
                </select>
                <br><br>
                <label>Location</label><br>
                <input style="width:80%;height:40px" type="text" name="specific_location" id="specific_location" required autocomplete="off">
                <br><br>
                <label>Landlord</label><br>
                <select style="width: 80%;" id="landlord" name="landlord">
                <option value="null">Select Landlord</option>
                @foreach($data_landlord as $data)
                <option>{{$data->email}}</option>
                @endforeach
                </select>
                <br><br>
                <label>Status</label><br>
                <select style="width: 80%;" id="property_status" name="property_status">
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
                </select>
                <br><br>
                <label>Sheard</label><br>
                <select style="width: 80%;" id="is_sheard" name="is_sheard">
                <option value="Sheared Property">Sheared Property</option>
                <option value="Whole Property">Whole Property</option>
                </select>
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
@include('sweetalert::alert')
@endsection
