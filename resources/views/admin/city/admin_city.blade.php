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
    <a data-toggle="modal" data-target=".add_city-example-modal-lg"  class="edit btn btn-primary btn-sm" style="font-weight:bold; color:white;"></i> Add City</a><br><br>
        <thead>
            <tr>
                <th>Name</th>
                <th>Date Created</th>
                <th>Date Updated</th>
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
          url: "{{ route('cust.city') }}",
          data: function (d) {
                d.email = $('.searchEmail').val(),
                d.search = $('input[type="search"]').val()
            }
        },
        columns: [
            {data: 'name', name: 'name'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
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
<div style="font-family: 'Open Sans', sans-serif;" class="modal  add_city-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Add City</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="/admin_city">
                @csrf
                <label>City Name</label>
                <input style="width:100%;height:40px" type="text" name="name" id="name" required autocomplete="off">
                <br><br>
                
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
