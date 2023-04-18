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
    <!-- <a  href="register_landloard"  class="edit btn btn-primary btn-sm" style="font-weight:bold; color:white;"></i> Add Landlord</a><br><br> -->
        <thead>
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Renancy Status</th>
                <th>Campus</th>
                <th>Status</th>
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
          url: "{{ route('cust.admin_complain') }}",
          data: function (d) {
                d.email = $('.searchEmail').val(),
                d.search = $('input[type="search"]').val()
            }
        },
        columns: [
            {data: 'name', name: 'name'},
            {data: 'contact', name: 'contact'},
            {data: 'email', name: 'email'},
            {data: 'tenancy_status', name: 'tenancy_status'},
            {data: 'university', name: 'university'},
            {data: 'status', name: 'status'},
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
