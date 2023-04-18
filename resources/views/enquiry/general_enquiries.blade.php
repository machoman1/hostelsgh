@extends('app_sidebar')
@section('content')
<div style="font-family: 'Open Sans', sans-serif;" class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h4 class="top">Contact Unihouse</h4><br>
            <!-- <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br> -->
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-4 card">
                        <h1 style="font-size:24px">Housing Management</h1>
                         <p style="padding-top:10px">
                         What we can help with:
                        </p><br>
                        <p style="padding-top:10px">
                        Tenancy support
                        Family tenant queries
                        (if you’d like to report a repair go to repairs page)
                        </p><br>
                        <p style="text-align:center;"><a data-toggle="modal" data-target="#housing-managemnt" class="btn_top">Contact Us</a></p>
                    </div>
                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">Conferences</h1><br>
                        <p style="padding-top:10px">
                         What we can help with:
                        </p><br>
                        <p style="padding-top:10px">
                        Bookings
                        Event queries
                        </p><br>
                        <p style="text-align:center"><a data-toggle="modal" data-target="#conference"class="btn_top">Contact Us</a></p>
                    </div>
                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">IT</h1><br>
                        <p style="padding-top:10px">
                         What we can help with:
                        </p><br>
                        <p style="padding-top:10px">
                        Problems using the website or Unipol applications.
                        </p><br>
                        <p style="text-align:center"><a data-toggle="modal" data-target="#IT" class="btn_top">Contact Us</a></p>
                    </div>
                </div>
            </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-4 card">
                        <h1 style="font-size:24px">Unihouse Code</h1>
                         <p style="padding-top:10px">
                         What we can help with:
                        </p><br>
                        <p style="padding-top:10px">
                        Membership queries
                        Complaint advice (if you would like to make a formal 
                        complaint under the Code go to form page)
                        </p><br>
                        <p style="text-align:center;"><a data-toggle="modal" data-target="#unihouse-code" class="btn_top">Contact Us</a></p>
                    </div>
                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">Finance</h1><br>
                        <p style="padding-top:10px">
                         What we can help with:
                        </p><br>
                        <p style="padding-top:10px">
                        Bookings
                        Event queries
                        </p><br><br>
                        <p style="text-align:center"><a data-toggle="modal" data-target="#finance" class="btn_top">Contact Us</a></p>
                    </div>
                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">General (if you do not know who to contact)</h1><br>
                        <p style="padding-top:10px">
                         What we can help with:
                        </p><br>
                        <p style="padding-top:10px">
                        General (if you do not know who to contact)
                        </p><br>
                        <p style="text-align:center"><a data-toggle="modal" data-target="#others" class="btn_top">Contact Us</a></p>
                    </div>
                </div>
            </div>
        <div class="col-md-1"></div>
    </div>
    


    </div>
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
        padding-top:20px;
        font-size:16px;
    }
    table {
  border-collapse: collapse;
  width: 100%;
    }

    td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }



    #myImg,#myImg1,#myImg2,#myImg3 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    }

    #myImg,#myImg1,#myImg2,#myImg3:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal_img {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (Image) */
    .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    }

    /* Add Animation - Zoom in the Modal */
    .modal-content, #caption {
    animation-name: zoom;
    animation-duration: 1.5s;
    }

    @keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
    }

    /* The Close Button */
    .close,.close1,.close2,.close3 {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    }

    .close:hover,
    .close:focus,
    .close1:hover,
    .close1:focus,
    .close2:hover,
    .close2:focus,
    .close3:hover,
    .close3:focus{
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
    }
</style>
<form method="POST" action="/general_enquiries">
     @csrf
<!-- housing management -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal"  id="housing-managemnt" tabindex="-1" role="dialog" aria-labelledby="housing-managemnt" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="housing-managemnt">Housing Management</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                        <span>If you got a question you’d like to ask, or a comment to make we’d love to hear from you.</span><br>
                        <span style="font-weight:bold;font-size:20px">Contact : Housing Management</span><br><br><br>
                        <input type="hidden" id="type" name="type" value="Housing Management" class="form__input">

                        <span>What's your name?</span>
                        <input type="text" id="name" name="name" class="form__input">

                        <span>What's your e-mail address?</span>
                        <input type="text" id="email" name="email" class="form__input">

                        <span>What's your phone number?</span>
                        <input type="number" id="contact" name="contact" class="form__input">

                        <sapn>Would you like to tell us more?</sapn>
                        <textarea type="text" id="note" name="note" class="form__input"></textarea>

                        <select name="campus" id="campus" >
                            <option value="0">Select Campus</option>
                            @foreach($data as $uni)
                            <option value="{{$uni->name}}">{{$uni->name}}</option>
                            @endforeach
                        </select><br><br>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="modal-footer">
                        <span style="text-align:center"><button href="#" class="btn_top">Submit</button></span>
                        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
                    </div>
             </div>
        </div>
    </div>
  </div>
</div>
</form>

<form method="POST" action="/general_enquiries">
     @csrf
<!-- conference -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal"  id="conference" tabindex="-1" role="dialog" aria-labelledby="conference" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="conference">Conference</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                        <span>If you got a question you’d like to ask, or a comment to make we’d love to hear from you.</span><br>
                        <span style="font-weight:bold;font-size:20px">Contact : Conference</span><br><br><br>

                         <input type="hidden" id="type" name="type" value="Conference" class="form__input">

                        <span>What's your name?</span>
                        <input type="text" id="name" name="name" class="form__input">

                        <span>What's your e-mail address?</span>
                        <input type="text" id="email" name="email" class="form__input">

                        <span>What's your phone number?</span>
                        <input type="number" id="contact" name="contact" class="form__input">

                        <sapn>Would you like to tell us more?</sapn>
                        <textarea type="text" id="note" name="note" class="form__input"></textarea>

                        <select name="campus" id="campus" >
                            <option value="0">Select Campus</option>
                            @foreach($data as $uni)
                            <option value="{{$uni->name}}">{{$uni->name}}</option>
                            @endforeach
                        </select><br><br>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="modal-footer">
                        <span style="text-align:center"><button href="#" class="btn_top">Submit</button></span>
                        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
                    </div>
             </div>
        </div>
    </div>
  </div>
</div>
</form>
<form method="POST" action="/general_enquiries">
     @csrf
<!-- IT -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal"  id="IT" tabindex="-1" role="dialog" aria-labelledby="IT" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="IT">IT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                        <span>If you got a question you’d like to ask, or a comment to make we’d love to hear from you.</span><br>
                        <span style="font-weight:bold;font-size:20px">Contact : IT</span><br><br><br>

                         <input type="hidden" id="type" name="type" value="IT" class="form__input">

                        <span>What's your name?</span>
                        <input type="text" id="name" name="name" class="form__input">

                        <span>What's your e-mail address?</span>
                        <input type="text" id="email" name="email" class="form__input">

                        <span>What's your phone number?</span>
                        <input type="number" id="contact" name="contact" class="form__input">

                        <sapn>Would you like to tell us more?</sapn>
                        <textarea type="text" id="note" name="note" class="form__input"></textarea>

                        <select name="campus" id="campus" >
                            <option value="0">Select Campus</option>
                            @foreach($data as $uni)
                            <option value="{{$uni->name}}">{{$uni->name}}</option>
                            @endforeach
                        </select><br><br>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="modal-footer">
                        <span style="text-align:center"><button href="#" class="btn_top">Submit</button></span>
                        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
                    </div>
             </div>
        </div>
    </div>
  </div>
</div>
</form>
<form method="POST" action="/general_enquiries">
     @csrf
<!-- unihouse code -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal"  id="unihouse-code" tabindex="-1" role="dialog" aria-labelledby="unihouse-code" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="unihouse-code">Unihouse Code</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                        <span>If you got a question you’d like to ask, or a comment to make we’d love to hear from you.</span><br>
                        <span style="font-weight:bold;font-size:20px">Contact : Unihouse Code</span><br><br><br>

                        <input type="hidden" id="type" name="type" value="Unihouse Code" class="form__input">

                        <span>What's your name?</span>
                        <input type="text" id="name" name="name" class="form__input">

                        <span>What's your e-mail address?</span>
                        <input type="text" id="email" name="email" class="form__input">

                        <span>What's your phone number?</span>
                        <input type="number" id="contact" name="contact" class="form__input">

                        <sapn>Would you like to tell us more?</sapn>
                        <textarea type="text" id="note" name="note" class="form__input"></textarea>

                        <select name="campus" id="campus" >
                            <option value="0">Select Campus</option>
                            @foreach($data as $uni)
                            <option value="{{$uni->name}}">{{$uni->name}}</option>
                            @endforeach
                        </select><br><br>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="modal-footer">
                        <span style="text-align:center"><button href="#" class="btn_top">Submit</button></span>
                        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
                    </div>
             </div>
        </div>
    </div>
  </div>
</div>
</form>

<form method="POST" action="/general_enquiries">
     @csrf
<!-- finance -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal"  id="finance" tabindex="-1" role="dialog" aria-labelledby="finance" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="finance">Finance</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                        <span>If you got a question you’d like to ask, or a comment to make we’d love to hear from you.</span><br>
                        <span style="font-weight:bold;font-size:20px">Contact : Finance</span><br><br><br>

                         <input type="hidden" id="type" name="type" value="Finance" class="form__input">

                        <span>What's your name?</span>
                        <input type="text" id="name" name="name" class="form__input">

                        <span>What's your e-mail address?</span>
                        <input type="text" id="email" name="email" class="form__input">

                        <span>What's your phone number?</span>
                        <input type="number" id="contact" name="contact" class="form__input">

                        <sapn>Would you like to tell us more?</sapn>
                        <textarea type="text" id="note" name="note" class="form__input"></textarea>

                        <select name="campus" id="campus" >
                            <option value="0">Select Campus</option>
                            @foreach($data as $uni)
                            <option value="{{$uni->name}}">{{$uni->name}}</option>
                            @endforeach
                        </select><br><br>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="modal-footer">
                        <span style="text-align:center"><button href="#" class="btn_top">Submit</button></span>
                        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
                    </div>
             </div>
        </div>
    </div>
  </div>
</div>
</form>

<form method="POST" action="/general_enquiries">
     @csrf
<!-- others-->
<div style="font-family: 'Open Sans', sans-serif;" class="modal"  id="others" tabindex="-1" role="dialog" aria-labelledby="others" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="others">General (if you do not know who to contact)</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                        <span>If you got a question you’d like to ask, or a comment to make we’d love to hear from you.</span><br>
                        <span style="font-weight:bold;font-size:20px">Contact : General (if you do not know who to contact)</span><br><br><br>

                         <input type="hidden" id="type" name="type" value="General" class="form__input">

                        <span>What's your name?</span>
                        <input type="text" id="name" name="name" class="form__input">

                        <span>What's your e-mail address?</span>
                        <input type="text" id="email" name="email" class="form__input">

                        <span>What's your phone number?</span>
                        <input type="number" id="contact" name="contact" class="form__input">

                        <sapn>Would you like to tell us more?</sapn>
                        <textarea type="text" id="note" name="note" class="form__input"></textarea>

                        <select name="campus" id="campus" >
                            <option value="0">Select Campus</option>
                            @foreach($data as $uni)
                            <option value="{{$uni->name}}">{{$uni->name}}</option>
                            @endforeach
                        </select><br><br>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="modal-footer">
                        <span style="text-align:center"><button href="#" class="btn_top">Submit</button></span>
                        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
                    </div>
             </div>
        </div>
    </div>
  </div>
</div>
</form>