@extends('layouts.app')
@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/min.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                <label style="float:right">Student</label>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="/students_change_password/{{Auth::user()->id}}" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                            <i class="fa fa-user-md fa-4x" aria-hidden="true"></i>
                                    <div class="card-body">
                                        <br>
                                        <span style="font-weight: bold;font-size:25px">Profile</span>
                                        <p class="card-text">Change Your Syatem Security to Avaoid Unauthorized Access.</p>
                                    </div>
                            </div></a>
                        </div>
                        <div class="col-md-4">
                            <a href="/students_notice" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-bell fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Noticebord</span>
                                    <p class="card-text">Post all you news and thoughts on unihouse notice.</p>
                                </div>
                            </div></a>
                        </div>
                        
                        <div class="col-md-4">
                        <a href="/students_complain" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                            <i class="fa fa-exclamation-circle fa-4x" aria-hidden="true"></i>
                                    <div class="card-body">
                                        <br>
                                        <span style="font-weight: bold;font-size:25px">Complain</span>
                                        <p class="card-text">Report all  Problems to unihouse for better attendance</p>
                                    </div>
                            </div></a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <a href="/students_repair" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-bug fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Repair</span>
                                    <p class="card-text">Report and Request all repairs from unihouse.</p>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-md-4">
                            <a href="/student_room_booking" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-bookmark fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Room Bookings</span>
                                    <p class="card-text">View all Room Bookings made on Unihostels.</p>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-md-4">
                            <a href="/student_property_booking" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-bookmark fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Property Bookings</span>
                                    <p class="card-text">View all Room Bookings made on Unihostels.</p>
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
                            <!-- <a href="/student_room_booking" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-bookmark fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Room Bookings</span>
                                    <p class="card-text">View all Room Bookings made on Unihostels.</p>
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
