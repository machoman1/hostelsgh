@extends('app_sidebar')
@section('content')
<div style="font-family: 'Open Sans', sans-serif;" class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h4 class="top">Latest News</h4><br>
            <span>Find out what's going on in student housing locally and nationally.</span><br><br>
            <!-- <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br> -->
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div class="col-md-1"></div>
        <div id="ft" class="col-md-10 fixed-left-div">
        <button style="width:10%;margin:0px" href="#" class="btn_top"> Filter</button>
                    <select class="select" style="width:110px;border:none;unset:all" name="house" id="house">
                        <option value="all">City:All</option>
                        @foreach($data as $city)
                        <option value="{{$city->name}}">{{$city->name}}</option>
                        @endforeach
                    </select>

                    <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg" style="float:right">Keep me informed</a>
        </div>
        </div>
        <div class="col-md-1"></div><br>
    </div>

    <div style="font-family: 'Open Sans', sans-serif;" class="row">
        <div class="col-md-1"></div>
        <div style="background-color: #ffffff;" class="col-md-6">
            <br><br>
            <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
            <div style="padding: 20;">
            <span style="opacity: 0.5;font-weight:bold">Featured Article</span>
            <br><br>
            <span style="font-weight: bold;font-size:30px">Why I’ve chosen to live at Beach Road Street <br>Apartments for another year</span>
            <br><br>
            <span>Hannah, second year Vocalist at Leeds College of Music has written this week&rsquo;s blog post about why she has chosen to stay at Beaxh Road Street...</span>
            <br><br>
            <div id="rat"><a href="" class="btn_top">Read Article</a></div>
            </div>
        </div>
        <div style="background-color: #ffffff; padding:0" class="col-md-4">
            <img src="https://hostelgeeks.com/wp-content/uploads/2021/12/best-beach-hostels-in-the-world.jpg">
        </div>
        <div class="col-md-1"></div>
    </div>

    <div style="font-family: 'Open Sans', sans-serif;" class="row">
        <div class="col-md-0"></div>
        @foreach($data_news as $news)
        <div class="col-md-4 card">
            <img style="border-radius:10px;width:100%" src="{{ url('public/images/'.$news->image)}}" alt="image" loading="lazy"  />
            <span style="font-weight:bold;font-size:20px;text-align:center;display:block;text-overflow: ellipsis;width: 400px;overflow: hidden; white-space: nowrap">{{$news->title}}</span>
            <span style="display:block;text-overflow: ellipsis;width: 400px;overflow: hidden; white-space: nowrap;text-align:center">{{$news->content}}</span><br>
            <div class="row">
            <div class="col-md-4"></div>
            <div id="ra" class="col-md-4"><a href="news_modal/{{$news->id}}" class="btn_top">Read Article</a></div>
            <div class="col-md-4"></div>
           </div>
        </div>
        @endforeach
       
    </div>

@endsection
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .top{
        font-size:30px;
        font-weight:bold;
    }
    .span-bold{
        font-weight:bold;
    }
    p{
        /* padding-top:20px; */
        font-size:16px;
        text-align:center;
    }
    span{
        font-size:16px;
        padding-top:10px;
    }

    .fixed-left-div{
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        background: #ffffff;
        overflow: none;
        position: relative;
        padding: 10px;
        border-radius:5px;
    }
    .select{
        border:none;
        outline:none;
    }
    @media only screen and (max-width: 600px) {
    div#ra {
        text-align: center;
    }
    div#rat{
        text-align: center;
    }
    .fixed-left-div button{
        width: 20%;
    }
    .text {
  display: block;
  width: 100px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
}
</style>
<?php $content = DB::table('news')->where('id',"=",$news->id)->get();?>

@foreach($content as $data)
<div style="font-family: 'Open Sans', sans-serif;" class="modal  add_news-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">{{$data->content}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="/admin_property_type" enctype="multipart/form-data">
                @csrf
                
            </div>
            <div class="modal-footer">
            <div style="float: right; padding-top:10px"><button class="edit btn btn-primary btn-sm"">Save</button></div>
     </form>  
      </div>
    </div>
  </div>
</div>
@endforeach
