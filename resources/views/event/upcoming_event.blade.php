@extends('app_sidebar')
@section('content')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<div style="font-family: 'Open Sans', sans-serif;" class="container">
    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
                <span style="font-weight: bold;font-size:30px">Upcoming Training and Events</span><br>
            <div style="padding-top: 30px;"><span>UniHouse Training offers specialist courses and conferences for staff working in the student accommodation<br> sector.</span> <span style="font-weight:bold">New events are being added to the website on a regular basis.</span></div>
            <div style="padding-top: 30px;"><span>In operation since 1992, we cover a range of topics and disciplines including:</span></div>
            <div style="padding-top: 30px;"><ul style="padding-left: 50px;list-style-type: circle;font-size:16px">
                <li>Accommodation management</li>
                <li>Student care and pastoral support</li>
                <li>Legislation and legal updates</li>
                <li>Strategy and insight</li>
            </ul></div><br><br>
            <div id="ft" class="fixed-left-div">
            <button style="width:10%;margin:0px" href="#" class="btn_top"> Filter</button>
                <select class="select" style="width:140px;border:none;unset:all" name="house" id="house">
                    <option value="all">Location:All</option>
                </select>
                <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg" style="float:right">Keep me informed</a>
            </div>
            <div style="padding-top: 30px;">
                <div style="text-align: center;"><span style="font-size: 25px;">There are no events for the selected filters</span></div>
            </div>
            </div>
        <div class="col-md-1"></div>
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
   
   
    .column1 {
  float: left;
  width: 50%;
}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}
}
</style>
