@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span style="font-weight: bold;font-size:20px;"><a style="text-decoration: none" href="/content"><i class="fa fa-chevron-left" aria-hidden="true"></i>Content Dashboard</span></a>
                </div>
                <div class="card-body">
                    <div style="font-family: 'Open Sans', sans-serif;" class="container">
                        <form  method="POST" action="/edit_home_page_content" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{$data['id']}}"> <br>
                                    @csrf 
                                <div class="row">
                                    <span style="font-weight: bold;font-size:25px"><a href="/home_Page_content"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> Home Page</span><br><br>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6">
                                            <label>Title</label>
                                            <input style="width:100%;height:40px" type="text" name="title" value="{{$data['title']}}"  required autocomplete="off"><br><br>

                                            <label>Body</label>
                                            <textarea style="font-size:20px" class="ckeditor" id="body" name="body">{{$data['body']}}</textarea>

                                            <div style="float: right; padding-top:10px;color:white;padding-left:10px"><a href="/home_Page_content" class="edit btn btn-primary btn-sm"">Back</a></div>
                                            <div style="float: right; padding-top:10px;"><button class="edit btn btn-primary btn-sm"">Update</button></div>

                                        </div>
                                        <div class="col-md-3"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
         </div>
    </div>
</div>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
   
</script>
    <style>
        #body {
           font-size: 50px;
        }
    </style>
@include('sweetalert::alert')
@endsection
       
              