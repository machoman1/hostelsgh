@extends('layouts.landlord_app')
@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/min.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                <label style="float:right">Landlord</label>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="/landlord_change_password/{{Auth::user()->id}}" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                            <i class="fa fa-user-md fa-4x" aria-hidden="true"></i>
                                    <div class="card-body">
                                        <br>
                                        <span style="font-weight: bold;font-size:25px">Profile</span>
                                        <p class="card-text">Change Your Syatem Security to Avaoid Unauthorized Access.</p>
                                    </div>
                            </div></a>
                        </div>
                        <div class="col-md-4">
                            <a href="landlord_students" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-graduation-cap fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Students</span>
                                    <p class="card-text">Manage All Students Renting From Unihouse.</p>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-md-4">
                        <a href="landlord_property" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                            <i class="fa fa-home fa-4x" aria-hidden="true"></i>
                                    <div class="card-body">
                                        <br>
                                        <span style="font-weight: bold;font-size:25px">Property</span>
                                        <p class="card-text">Manage All Properties and it associated Room and Cities</p>
                                    </div>
                            </div></a>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-4">
                            <a href="landlord_room" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-home fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Room</span>
                                    <p class="card-text">Manage All Rooms Under Unihouse Code.</p>
                                </div>
                            </div></a>
                        </div>

                        <div class="col-md-4">
                            <a href="landlord_room_booking" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-bookmark fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Room Bookings</span>
                                    <p class="card-text">Manage All Rooms Bookings On Unihouse Code.</p>
                                </div>
                            </div></a>
                        </div>
                        
                        <div class="col-md-4">
                            <a href="landlord_property_booking" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-bookmark fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Property Bookings</span>
                                    <p class="card-text">Manage All Property Bookings On Unihouse Code.</p>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-4">
                            <a href="{{ route('logout') }}" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    
                            <div class="card" style="width: 18rem;">
                            <i class="fa fa-sign-language fa-4x" aria-hidden="true"></i>
                                    <div class="card-body">
                                        <br>
                                        <span style="font-weight: bold;font-size:25px">Logout</span>
                                        <p class="card-text">Log Out From The Syatem Application.See you Soon</p>
                                    </div>
                                </div> </a>
                        </div>

                        <div class="col-md-4">
                            <!-- <a href="landlord_room_booking" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-bookmark fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Room Bookings</span>
                                    <p class="card-text">Manage All Rooms Bookings On Unihouse Code.</p>
                                </div>
                            </div></a> -->
                        </div>
                        
                        <div class="col-md-4">
                        
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                    </div>


                    <div class="row">
                            <div class="col-md-4">
                                
                        </div>
                        <div class="col-md-4">
                           
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-4">
                                
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                        
                    </div>
                </div>
                   
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
