@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <span style="font-weight: bold;font-size:20px;"><a style="text-decoration: none" href="/students"><i class="fa fa-chevron-left" aria-hidden="true"></i> Dashboard</span></a>
                </div>
                <div class="card-body">
                <div class="content-wrap">
        <div class="main">
            <div style="font-family: 'Open Sans', sans-serif; padding-top:30px" class="container">
    <table class="table table-bordered data-table">
    <a  href="/complain"  class="edit btn btn-primary btn-sm" style="font-weight:bold; color:white;"></i> Make Complain</a><br><br>
        <thead>
            <tr>
                <th>Complain Proof</th> 
                <th>Complaint</th>
                <th>Complain</th>
                <th>Status</th>
                <th>Date Complained</th>
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
          url: "{{ route('cust.students_complain') }}",
          data: function (d) {
                d.email = $('.searchEmail').val(),
                d.search = $('input[type="search"]').val()
            }
        },
        columns: [
            {data: 'proof', name:'proof',
                render:function(data){
                return "<img height='5' src=\"/public/images/" + data + "\" height=\"5\"/>";
              }
            },
            {data: 'landlord_name', name: 'landlord_name'},
            {data: 'complain', name: 'complain'},
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
