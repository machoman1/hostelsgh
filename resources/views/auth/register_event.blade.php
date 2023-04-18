@extends('app_sidebar')
@section('content')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<div style="font-family: 'Open Sans', sans-serif" class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <div style="padding-top: 30px;"><hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"></div>
            <div style="background-color: #ffffff;" class="row">
                <div class="col-md-1"></div>
                <div style="padding-top: 30px;" class="col-md-10">
                    <span style="font-weight: bold;font-size:25px">Register to book on Unipol events</span><br>
                    <span>Fields marked * are required</span><br><br>
                <form method="POST" action="register_event">
                    @csrf
                    <div class="row">
                    <span style="font-weight: bold;font-size:25px">Initial Details</span>
                        <div class="col-md-6">
                        <span>Email: *</span>
                        <input style="width: 100%;" name="email" id="email" type="email"required>
                        <br><br>
                        <span>Phone: *</span>
                        <input style="width: 100%;" name="phone" id="phone" type="number"required>
                        <br><br>
                        </div>
                        <div class="col-md-6">
                        <span>Password: *</span>
                        <input style="width: 100%;" name="password" id="password" type="password" required>
                        <br><br>
                        <span>Confirm Password: *</span>
                        <input style="width: 100%;" name="confirm_pass" id="confirm_pass" type="password" required>
                        <br><br>
                      
                        </div>
                    </div><br>
                    <div style="padding-top: 30px;"><hr style="height:2px;border-width:0;color:gray;background-color:blue;width:100%"></div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                        <span style="font-weight: bold;font-size:25px">Personal Details</span><br>
                        <span>Title:</span><br>
                        <input style="width: 100%;" name="title" id="title" type="text">
                        <br><br><br>
                        <span>First Name: *</span><br>
                        <input  style="width: 100%;" name="firstname" id="firstname" type="text" required>

                        <br><br><br>
                        <span>Surname: *</span><br>
                        <input style="width: 100%;" name="surename" id="surename" type="text" required>

                        <br><br><br>
                        <span>Company: </span><br>
                        <input style="width: 100%;" name="company_name" id="company_name" type="text">

                        <br><br><br>
                        <span>Contact Name:*</span><br>
                        <input style="width: 100%;" name="contact_name" id="contact_name" type="text" required>

                        <br><br><br>
                        </div>
                        <div class="col-md-6">
                        <span style="font-weight: bold;font-size:25px">Address Details</span><br>
                        <span>Organization/Company Name:</span><br>
                        <input style="width: 100%;" name="organization" id="organization" type="text">
                        <br><br><br>
                        <span>Institution Type:</span><br>
                        <input style="width: 100%;" name="institution_type" id="institution_type" type="text">
                        <br><br><br>
                        <span>Address:</span><br>
                        <input style="width: 100%;" name="address" id="address" type="text">
                        <br><br><br>
                        <span>Street:</span><br>
                        <input style="width: 100%;" name="street" id="street" type="text">
                        <br><br><br>
                        <span>District:</span><br>
                        <input style="width: 100%;" name="district" id="district" type="text">
                        <br><br><br>
                        <span>Town/City:</span><br>
                        <input style="width: 100%;" name="town_city" id="town_city" type="text">
                        <br><br>
                        </div>
                    </div>
                    <div style="text-align: center;"><button class="btn_top" value="Create My Unihouse Account">Register</button></div>

                </form>
                </div>
                <div class="col-md-1"></div>
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
