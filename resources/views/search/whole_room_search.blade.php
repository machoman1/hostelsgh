@extends('app_sidebar')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<div style="font-family: 'Open Sans', sans-serif;"  class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div style="background-color: white;" class="card-header">
                <span style="font-weight: bold;font-size:20px;">
                <script>
                    document.write('<a href="' + document.referrer + '"><i class="fa fa-chevron-left" aria-hidden="true"></i>Go Back</a>');
                </script></span>
                   
                <span>Room Details</span><div style="float: right; padding-top:px"><a class="btn_top book_btn" data-toggle="modal" data-target="#book_room" 
                 data-id="<?php echo $data['id']; ?>"  data-room_name="<?php echo $data['room_name']; ?>"  data-landlord="<?php echo $data['landlord']; ?>">Book Now</a></div><br><br>
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                            <img id="myImg" style="border-radius:10px;height:100%" src="{{ url('public/images/'.$data->room_img_1)}}" alt="image" loading="lazy"/>
                            </div>
                            <div class="col-md-6">
                            <img id="myImg1" style="border-radius:10px;height:100%" src="{{ url('public/images/'.$data->room_img_2)}}" alt="image" loading="lazy"/>
                            </div>
                        </div><br><br><br>
                        <div class="row">
                            <div class="col-md-6">
                            <img id="myImg2" style="border-radius:10px;height:100%" src="{{ url('public/images/'.$data->room_img_3)}}" alt="image" loading="lazy"/>
                            </div>
                            <div class="col-md-6">
                            <img id="myImg3" style="border-radius:10px;height:100%" src="{{ url('public/images/'.$data->room_img_4)}}" alt="image" loading="lazy"/>
                            </div>
                        </div>
                    </div>
                    <div style="font-size: 20px;" class="col-md-4">
                        <span style="font-weight: bold;">Room Name:</span><br>
                        <span></span>{{$data->room_name}}</span><span style="padding-left: 10px;">({{$data->property_name}})</span><br><br>
                        <?php
                            $uni = DB::table('universities')->where('city',"=",$data->city)->get();
                            foreach($uni as $uni);
                            
                        ?>
                        <span style="font-weight: bold;">City Located:</span><br>
                        <span></span>{{$data->city}}</span><span style="padding-left: 10px;">({{$uni->name}})</span><br><br>

                        <span style="font-weight: bold;">Room Status:</span><br>
                        <span></span>{{$data->room_status}}</span><span style="padding-left: 10px;">Available ({{$data->date_available}})</span><br><br>

                        <span style="font-weight: bold;">Payment Arrangement:</span><br>
                        <span></span>Initial Payment (GHC:{{$data->initial_deposit}})</span><br>
                        <span>Amount Per Month({{$data->amount_per_month}})</span><br><br>


                        <span style="font-weight: bold;">Rent Inclusive of:</span><br>
                        <span>{{$data->room_prop_1}},{{$data->room_prop_2}},{{$data->room_prop_3}},{{$data->room_prop_4}},{{$data->room_prop_5}}</span><br>


                        <span style="font-weight: bold;">Contact Information:</span><br>
                        <span></span>Email:{{$data->landlord}}</span><br>
                        <?php
                            $contact = DB::table('landloard_registrations')->where('email',"=",$data->landlord)->get();
                        ?>
                        @foreach($contact as $data)
                        <span></span>Name:{{$data->firstname}} {{$data->surename}}</span><br>
                        <span></span>Contact:{{$data->contact_number}}</span><br>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal_img">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01aaa">
</div>


<!-- The Modal -->
<div id="myModal1" class="modal_img">
  <span class="close1">&times;</span>
  <img class="modal-content" id="img01">
</div>

<!-- The Modal -->
<div id="myModal2" class="modal_img">
  <span class="close2">&times;</span>
  <img class="modal-content" id="img02">
</div>

<!-- The Modal -->
<div id="myModal3" class="modal_img">
  <span class="close3">&times;</span>
  <img class="modal-content" id="img03">
</div>

<div style="font-family: 'Open Sans', sans-serif;" class="modal" id="book_room" tabindex="-1" role="dialog" aria-labelledby="book_room" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="book_room">Book Room</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="/whole_room_search" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="room_name" id="room_name" value="">
                <input type="hidden" name="landlord" id="landlord" value="">
                <input type="hidden" name="initial_deposit" id="initial_deposit" value="">

                <input type="hidden" name="id" id="id" value="">

                <h3 style="font-weight: bold;">Personal Details</h3>
                <label>Name : </label><br>
                    <input  style="width:100%;height:40px" type="text" name="name" id="name" required autocomplete="off"><br><br>
            
                <label>Email : </label><br>
                    <input style="width:100%;height:40px" type="email" name="email" id="email" required autocomplete="off"><br><br>
            
                <label>Contact Number : </label><br>
                    <input style="width:100%;height:40px" type="number" name="contact" id="contact" required autocomplete="off"><br><br>
                    
                <h3 style="font-weight: bold;">Booking Details</h3>
                <label>Initial Payment : </label><br>
                <input style="width:100%;height:40px" type="text" name="initial_deposit"  id="initial_deposit_data" disabled><br><br>

                <label>Check In Date : </label><br>
                <input style="width:100%;height:40px" type="date" name="move_in_date" id="move_in_date" required><br><br>

                <label>Check Out Date : </label><br>
                <input style="width:100%;height:40px" type="date" name="move_out_date" id="move_out_date" required><br><br>

                <label>Room Require : </label><br>
                <input style="width:100%;height:40px" type="number" name="rooms_required" id="rooms_required" required><br><br>

                <!-- <a id="book_payment_btn" class="btn_top">Make Payment To Complete Booking</a><br> -->
            </div>
            <div class="modal-footer">
            <div style="float: right; padding-top:10px;"><button id="book" class="edit btn btn-primary btn-sm"">Book</button></div>
     </form>  
      </div>
    </div>
  </div>
</div>
 <script defer>
    window.onload = function() {
        $(".book_btn").click(function() {
            var id = $(this).data('id');
            var initial_deposit = $(this).data('initial_deposit');
            var room_name = $(this).data('room_name');
            var landlord = $(this).data('landlord');


            $('#id').val(id);
            $('#initial_deposit').val(initial_deposit);
            $('#initial_deposit_data').val(initial_deposit);
            $('#room_name').val(room_name);
            $('#landlord').val(landlord);

        });
        // hide alert
        setTimeout(function() {
            $('#alert').hide();
        }, 3000);
    };
</script> 


 <script>
        $(document).ready(function () {
                //var nam = document.getElementById("name").value;
              
            $('#book_payment_btn').on('click', function () {
                var nam = document.getElementById("name").value;
                var mail = document.getElementById("email").value;
                var cont = document.getElementById("contact").value;
                var mvi_date = document.getElementById("move_in_date").value;
                var mvo_date = document.getElementById("move_out_date").value;
                var rm = document.getElementById("rooms_required").value;
                var deposit = document.getElementById("initial_deposit").value;

                if(nam == "" || mail == "" || cont == "" || mvi_date == "" || mvo_date == "" || rm == ""){
                    alert("All Field is Required");
                }
                else{
                    //document.getElementById("book").disabled = false;
                    //alert(deposit);
                }

            });
        });
    </script> 



<script>
    var modal = document.getElementById("myModal");
    var modal1 = document.getElementById("myModal1");
    var modal2 = document.getElementById("myModal2");
    var modal3 = document.getElementById("myModal3");

    var img = document.getElementById("myImg");
    var img1 = document.getElementById("myImg1");
    var img2 = document.getElementById("myImg2");
    var img3 = document.getElementById("myImg3");

    var modalImg = document.getElementById("img01aaa");
    var modalImg1 = document.getElementById("img01");
    var modalImg2 = document.getElementById("img02");
    var modalImg3 = document.getElementById("img03");

    img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    }
    img1.onclick = function(){
    modal1.style.display = "block";
    modalImg1.src = this.src;
    }
    img2.onclick = function(){
    modal2.style.display = "block";
    modalImg2.src = this.src;
    }
    img3.onclick = function(){
    modal3.style.display = "block";
    modalImg3.src = this.src;
    }

    var span = document.getElementsByClassName("close")[0];
    var span1 = document.getElementsByClassName("close1")[0];
    var span2 = document.getElementsByClassName("close2")[0];
    var span3 = document.getElementsByClassName("close3")[0];

    span.onclick = function() {
    modal.style.display = "none";
    }

    span1.onclick = function() {
    modal1.style.display = "none";
    }

    span2.onclick = function() {
    modal2.style.display = "none";
    }

    span3.onclick = function() {
    modal3.style.display = "none";
    }
</script>

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
