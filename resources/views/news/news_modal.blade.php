@extends('app_sidebar')
@section('content')
<div style="font-family: 'Open Sans', sans-serif;" class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <script>
                document.write('<a style="font-size:25px" href="' + document.referrer + '"><i class="fa fa-chevron-left" aria-hidden="true"></i>Go Back</a>');
            </script>            
        </div>
        <div class="col-md-1"></div>
    </div>

    <div style="font-family: 'Open Sans', sans-serif;" class="row">
        <div class="col-md-2"></div>
            <div style="background-color: #ffffff;" class="col-md-8">
            <input type="hidden" name="id" value="{{$data['id']}}"> <br>
            <img style="border-radius:10px;width:100%" src="{{ url('public/images/'.$data->image)}}" alt="image" loading="lazy"/><br>
            <span style="font-weight:bold;font-size:20px;text-align:center">{{$data->title}}</span><br>
            <span style="text-align: center;">{{$data->content}}</span><br>

            </div>

            <div class="col-md-2"></div>
        </div>
       
    </div>

@endsection

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
}
</style>

