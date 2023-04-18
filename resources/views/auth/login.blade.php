@extends('app_sidebar')
@section('content')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div style="font-family: 'Open Sans', sans-serif" class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3"><span style="font-size: 40px;font-weight:bold">My Unihouse</span></div>
        <div class="col-md-5"><span>We have created a secure login area full of extra features and additional information for you to take 
                    advantage of. So, if you’re a student, an approved landlord, event booker or board member, just sign in below 
                    and let’s get started.</span>
                </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div style="padding-top: 30px;"><hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"></div>
            <div class="row">
                <div style="background-color: #ffffff;" class="col-md-6 card">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div style="padding-top: 40px;" class="col-md-8">
                            <span style="font-weight: bold;font-size:25px">Sign In To Your Account</span>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <input class="form__input" style="width:100%;" type="email" placeholder="Email" name="email" id="email" required autocomplete="off">
                                <div style="padding-top:px"></div>
                                <input class="form__input" style="width:100%;"  type="password" placeholder="Password" name="password" id="password" required>
                                <div style="float: right; padding-top:px"><button class="btn_top">Log on</button></div>
                                <div style="padding-top: 50px;"><a href="#">Forgotten Password</a></div>
                            </form>

                            <div style="padding-top: 30px;"><hr style="height:2px;border-width:0;color:gray;background-color:blue;width:100%"></div>
                            <div style="padding-top: 30px;"></div>
                            <span style="opacity: 0.5;font-size:40px">Need Any Help?</span><br>
                            <span style="font-size:40px;font-weight:bold;line-height:1">Just get in touch,we won't bite</span>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <div style="padding-top: 40px;background-color:#ffffff" class="col-md-6 card">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                        <span style="font-weight: bold;font-size:25px">Not got an Account?</span><br><br>
                        <span style="font-weight: bold;font-size:20px">Student</span><br>
                        <span>Create an account to save your property searches, use the noticeboard to get in touch with other house hunters and contact landlords to arrange viewings.</span>
                        <div style="text-align:center; padding-top:10px"><a href="register_student" class="btn_top">Sign up as Student</a></div>

                        <span style="font-weight: bold;font-size:20px">Landlords</span><br>
                        <span>Creating an account means you can advertise your properties directly to students who are advised to use the Unipol website by their universities and colleges. You can also get access to resources like the Unihouse/TDS deposit scheme and the Unipol Agreement Generator.</span>
                        <div style="text-align:center; padding-top:10px"><a href="register_landloard" class="btn_top">Sign up as Landloard</a></div>

                        <span style="font-weight: bold;font-size:20px">Event Bookers</span><br>
                        <span>Creating an account means you can book on our events and training courses.</span>
                        <div style="text-align:center; padding-top:10px"><a href="register_event" class="btn_top">Sign up as an Event Booker</a></div>


                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-1"></div>
    </div>
</div>

    
@include('sweetalert::alert')

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
