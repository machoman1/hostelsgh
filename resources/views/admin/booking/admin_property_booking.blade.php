@extends('layouts.app')
@section('content')

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
    <!-- <a data-toggle="modal" data-target="#add_property"  href="add_property"  class="edit btn btn-primary btn-sm" style="font-weight:bold; color:white;"></i> Add A Property</a> -->
    <!-- <span style="padding-left: 50px;"><a href="admin_property_type" class="edit btn btn-primary btn-sm" style="font-weight:bold; color:white;"></i> Property Type</a></span><br><br> -->

        <thead>
            <tr>
                 <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Property Name</th>
                <th>Landlord</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>Initial Payment</th>
                <th>Date</th>
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
          url: "{{ route('cust.admin_property_booking') }}",
          data: function (d) {
                d.email = $('.searchEmail').val(),
                d.search = $('input[type="search"]').val()
            }
        },
        columns: [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'contact', name: 'contact'},
            {data: 'property_name', name: 'property_name'},
            {data: 'landlord', name: 'landlord'},
            {data: 'move_in_date', name: 'move_in_date'},
            {data: 'move_out_date', name: 'move_out_date'},
            {data: 'initial_deposit', name: 'initial_deposit'},
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

            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
