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
<form  method="POST" action="/edit_news" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{{$data['id']}}"> <br>
    <input hidden class="form-control" type="text" id="image_old" name="image_old" value="{{$data['image']}}">
            @csrf 
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-3">
                <span style="font-weight: bold;font-size:25px"><a href="/admin_landlord"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> Update News</span><br><br>
                <label>News Title</label>
                <textarea class="ckeditor" style="width: 100%;" value="{{$data['title']}}" name="title" id="title">{{$data['title']}}</textarea><br>
                <label>News Content</label>
                <textarea class="ckeditor" style="width: 100%;" value="{{$data['content']}}" name="content" id="content">{{$data['content']}}</textarea><br>

        </div>
        <div class="col-md-1"></div>
        <div class="col-md-1">
        <br><br>
        <div class="vl" style="border-left: 6px solid green;height: 700px;"></div>
        </div>
        <div style="padding-top:60px" class="col-md-3">
        <img style="border-radius:10px;width:100%" src="{{ url('public/images/'.$data->image)}}" alt="image" loading="lazy"  /><br>
        <label>Image</label><br>
        <input type="file" name="image" id="image">

                <div style="float: right; padding-top:10px;color:white;padding-left:10px"><a href="/admin_news" class="edit btn btn-primary btn-sm"">Back</a></div>
                <div style="float: right; padding-top:10px;"><button class="edit btn btn-primary btn-sm"">Save</button></div>
        </div>
        <div class="col-md-2"></div>
    </div>
</form>
</div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>

@include('sweetalert::alert')
@endsection
