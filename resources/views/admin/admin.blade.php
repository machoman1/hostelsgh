@extends('layouts.app')
@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/min.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <div class="row">
                            <div class="col-md-4">
                                <a href="/admin_users" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-group fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Users</span>
                                    <p class="card-text">Manage All Your System Application Users.</p>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-md-4">
                            <a href="/admin_change_password/{{Auth::user()->id}}" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                            <i class="fa fa-user-md fa-4x" aria-hidden="true"></i>
                                    <div class="card-body">
                                        <br>
                                        <span style="font-weight: bold;font-size:25px">Profile</span>
                                        <p class="card-text">Change Your Syatem Security to Avaoid Unauthorized Access.</p>
                                    </div>
                                </div></a>
                        </div>
                        <div class="col-md-4">
                            <a href="/admin_permissions" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                            <i class="fa fa-key fa-4x" aria-hidden="true"></i>
                                    <div class="card-body">
                                        <br>
                                        <span style="font-weight: bold;font-size:25px">Permissions</span>
                                        <p class="card-text">Give Users the right Access and permissions</p>
                                    </div>
                                </div></a>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-4">
                                <a href="/admin_university" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-graduation-cap fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">University</span>
                                    <p class="card-text">Manage All City and it associated University.</p>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-md-4">
                            <a href="/admin_city" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                            <i class="fa fa-cube fa-4x" aria-hidden="true"></i>
                                    <div class="card-body">
                                        <br>
                                        <span style="font-weight: bold;font-size:25px">City</span>
                                        <p class="card-text">Manage All Rooms and it associated Cities.</p>
                                    </div>
                                </div></a>
                        </div>
                        <div class="col-md-4">
                            <a href="/admin_property" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
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
                                <a href="/admin_students" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-graduation-cap fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Students</span>
                                    <p class="card-text">Manage All Students Renting From Unihouse.</p>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-md-4">
                            <a href="/admin_landlord" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                            <i class="fa fa-user-o fa-4x" aria-hidden="true"></i>
                                    <div class="card-body">
                                        <br>
                                        <span style="font-weight: bold;font-size:25px">Landlord</span>
                                        <p class="card-text">Manage All Landlords Applying Unihouse Code.</p>
                                    </div>
                                </div></a>
                        </div>
                        <div class="col-md-4">
                            <a href="/admin_event_booker" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                            <i class="fa fa-user-circle-o fa-4x" aria-hidden="true"></i>
                                    <div class="card-body">
                                        <br>
                                        <span style="font-weight: bold;font-size:25px">Events Bookers</span>
                                        <p class="card-text">Manage All Events Bookers On Unihouse Code</p>
                                    </div>
                                </div></a>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-4">
                                <a href="/admin_room" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-home fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Room</span>
                                    <p class="card-text">Manage All Rooms Under Unihouse Code.</p>
                                </div>
                            </div></a>
                        </div>

                        <div class="col-md-4">
                                <a href="/admin_news" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-newspaper-o fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">News</span>
                                    <p class="card-text">Coomunicate with students renting from unihouse.</p>
                                </div>
                            </div></a>
                        </div>

                        <div class="col-md-4">
                                <a href="/admin_complain" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-exclamation-circle fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Complains</span>
                                    <p class="card-text">Get all Students and unihouse tenant complains.</p>
                                </div>
                            </div></a>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-4">
                                <a href="/admin_notice" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-bell fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Noticebord</span>
                                    <p class="card-text">Manage Students Activities on Noticebord.</p>
                                </div>
                            </div></a>
                        </div>

                        <div class="col-md-4">
                                <a href="/admin_repair" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-wrench fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Repairs</span>
                                    <p class="card-text">Monitor all Request of Repair by student from unihouse.</p>
                                </div>
                            </div></a>
                        </div>

                        <div class="col-md-4">
                                <a href="/admin_inquiry" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-commenting fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">General Inquiry</span>
                                    <p class="card-text">Respond to People Contacting Unihouse.</p>
                                </div>
                            </div></a>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-4">
                                <a href="/admin_room_booking" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-bookmark fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Room Bookings</span>
                                    <p class="card-text">Manage Rooms booked by student from GH Hostels.</p>
                                </div>
                            </div></a>
                        </div>

                        <div class="col-md-4">
                                <a href="/admin_property_booking" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-bookmark fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">Property Bookings</span>
                                    <p class="card-text">Manage Property booked by student/Tenants from GH Hostels.</p>
                                </div>
                            </div></a>
                        </div>

                        <div class="col-md-4">
                                <!-- <a href="/admin_inquiry" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                <i class="fa fa-commenting fa-4x" aria-hidden="true"></i>
                                <div class="card-body">
                                    <br>
                                    <span style="font-weight: bold;font-size:25px">General Inquiry</span>
                                    <p class="card-text">Respond to People Contacting Unihouse.</p>
                                </div>
                            </div></a> -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{ route('logout') }}" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    
                            <div class="card" style="width: 18rem;">
                            <i class="fa fa-sign-out fa-4x" aria-hidden="true"></i>
                                    <div class="card-body">
                                        <br>
                                        <span style="font-weight: bold;font-size:25px">Logout</span>
                                        <p class="card-text">Log Out From The Syatem Application.See you Soon</p>
                                    </div>
                                </div> </a>
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
