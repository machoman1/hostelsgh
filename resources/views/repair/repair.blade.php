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
                <span style="font-weight: bold;font-size:30px">Report a Repair</span>
                <div class="row">
                    <div style="padding-top: 30px;" class="col-md-6">
                        <span style="font-size: 20px;font-weight:bold">Whilst we try to ensure that your property has nothing wrong with it, disrepair can happen at any time during your tenancy.</span><br><br>
                        <span >Log into the tenant portal to log repairs and to check for updates on existing repairs - <a class="btn_top" href="login">login here.</a></span><br><br>
                        <span >You should always report repairs to Unipol using the tenant portal, the form on this page or by emailing <a >repairs@hostelgh.com</a></span><br><br>
                        <span style="font-size: 20px;">Tenants are responsible for;</span>
                        <div style="padding-top: 10px;"><ul style="padding-left: 50px;list-style-type: circle;font-size:20px"></ul>
                            <li style="font-size: 16px;">Replacing light bulbs (except fluorescent tubes or sealed light fittings).</li>
                            <li style="font-size: 16px;">Unblocking sinks and drains (produts for unblocking sinks and drains are readily available at supermarkets)</li>
                            <li style="font-size: 16px;">The cost of replacing broken windows (unless caused by vandalism that has been reported to the police)</li>
                            <li style="font-size: 16px;">Resetting "trip" switches</li>
                            <li style="font-size: 16px;">Other minor items such as re-lighting pilot lights on boilers</li>
                        </div>

                    </div>
                    <div style="padding-top: 30px;" class="col-md-6">
                    <form method="POST" action="/repair" enctype="multipart/form-data">
                    @csrf 
                        <span style="font-size: 40px;">Report a <span style="font-weight: bold;font-size:40px">problem</span></span><br>
                        <span>Non-emergency repairs can be reported using the form below but emergency repairs should be reported by telephone on <span style="font-weight: bold;">+233 206724609.</span></span><br><br>
                        <input type="text" name="name" id="name" placeholder="Your Name" style="width: 100%;"><br><br>
                        <input type="email" name="email" id="email" placeholder="Your Email" style="width: 100%;"><br><br>
                        <input type="number" name="contact" id="contact" placeholder="Your mobile phone number(SMS)" style="width: 100%;"><br><br>
                        <input type="text" name="property_address" id="property_address" placeholder="Your Property Address" style="width: 100%;"><br><br>
                        <input type="checkbox" name="reported_before" id="reported_before"> Have your previously reported this matter to Unihouse<br><br>
                        <textarea type="text" name="repair_location" id="repair_location" placeholder="Where is the repair located?" style="width: 100%" ></textarea><br><br>
                        <textarea type="text" name="details_of_repair" id="details_of_repair" placeholder="Details of the repair" style="width: 100%" ></textarea><br><br>
                        <br><br>
                        <div style="text-align: center;"><button class="btn_top">Report</button></div>
                    </form>

                    </div>
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
