<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hostelgh</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/min.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">


</head>
<body onload="myFunction()">
<div id="loader"></div>
    <div style="display:none;" class="animate-bottom" id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a style="background-color: unset;" class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <!-- <img src="https://www.unipol.org.uk/css/images/logo_leeds.png"> -->
                    <img src="images/gh hostles.png" height="100" width="200">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item sb">
                                    <!-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> -->
                                    <form class="example" action="/action_page.php" style="">
                                        <input type="text" style="font-family: 'Open Sans', sans-serif" placeholder="Search..." name="search2">
                                        <button style="height:46px" type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item lb">
                                    <form action="">
                                    <a href="login" class="btn_top"><i class="fa fa-lock"></i> Hostelgh Login</a>
                                    </form>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div style="font-family: 'Open Sans', sans-serif;" class="container">
            <div class="topnav" id="myTopnav">
                 <a class="active" href="/accomodation">Search for Housing</a>
                <a class="active" href="/landloard">Landlords</a>
                <a class="active" href="/news">News</a>
                <a class="active" href="/complain">Make a Complain</a>
                <a class="active" href="/noticeboard">Notice Board</a>
                <a class="active" href="/upcoming_event">Upcoming Events</a>
                <a class="active" href="/repair">Request a Repair</a>
                <a class="active" href="/general_enquiries">General Enquries</a>
                <a class="active" href="/homestay">Homestay</a>
                <button id="dropdownDefault" data-dropdown-toggle="dropdown" style="font-size: 16px;border: none;outline: none;color: #5f9c3f;padding: 14px 16px;background-color: inherit;margin: 0;font-weight:bolder;font-family: 'Open Sans', sans-serif;" type="button">About Hostelgh <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                <div id="dropdown" class="hidden z-10 w-100 bg-white divide-y divide-gray-100 shadow dark:bg-gray-700">
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                <a href="/about" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hostelgh Values <span style="padding-left:10px;font-size:20px"><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
                                    <p style="padding-top:10px" >About Hostelgh and our core values</p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                <a href="/housing" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hostelgh Housing <span style="padding-left:10px;font-size:20px"><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
                                    <p style="padding-top:10px" >Rent directly from the charity</p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Rent online from Hostelgh <span style="padding-left:10px;font-size:20px"><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
                                    <p style="padding-top:10px" >You can rent all house from anywhere</p>
                                </li>
                            </ul>
                        </div>
                        <br><br><br>
                        <div class="col-md-4">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                <a href="/accomodation" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Search for Housing <span style="padding-left:10px;font-size:20px"><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
                                    <p style="padding-top:10px" >Search our database for what you need</p>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="col-md-4">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                <a href="/manage_property" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Let us manage your Property <span style="padding-left:10px;font-size:20px"><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
                                    <p style="padding-top:10px" >property management service</p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                <a href="/gorvenance" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hostelgh Gorvernance <span style="padding-left:10px;font-size:20px"><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
                                    <p style="padding-top:10px" >How the charity works</p>
                                </li>
                            </ul>
                        </div><br><br><br>
                    </div>
                    </div> 
                    <a class="active" href="#">Sponsors</a>
                    <a class="active" href="#">Advice</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                </div>

            </div>
        </nav>
            
            


        <main class="py-0">
        @include('sweetalert::alert')
            @yield('content')
            <div class="container" style="background-color:white;font-family: 'Open Sans', sans-serif">
    <div class="row">
        <div class="col-md-3">
        <div class="row py-1">
                <select style="background-color:rgb(22, 21, 21);color:white;height:60px" name="house" id="house" style="width:100%;">
                   <option>City</option>
                   @foreach($data as $city)
                    <option value="{{$city->name}}">{{$city->name}}</option>
                    @endforeach
                </select>
            </div><br>

            <div class="row">
                
                <span>{{$room_search_count}} Bed Room(s) Available For Your Search</span>
            </div><br>

            <div class="row">
                <!-- <div class="card"> -->
                    <select style="background-color: DodgerBlue;color:white;height:60px" name="house" id="house" style="width:100%">
                        <option value="volvo">Order By - Available Bedrooms</option>
                        <option value="volvo">Order By - Proce Per Week:High to Low</option>
                        <option value="saab">Order By - Proce Per Week:Low to High</option>
                        <option value="mercedes">Area:A - Z</option>
                        <option value="mercedes">Area:Z - A</option>
                    </select>
                <!-- </div> -->
               
            </div>

            <div class="row fixed-middle-div ">
                <div class="card">
                @if($room_search_count  > 0)
                @foreach($room_search as $room)
                <a  href='whole_room_search/{{$room->id}}'><div class="row">
                    <div  class="col-md-6">
                        <img style="height:70%" src="{{ url('public/images/'.$room->room_img_1)}}" alt="image" loading="lazy"/>
                    </div>
                    <div style="padding-left:px;font-size:12px" class="col-md-6">
                        <span>{{$room->room_name}}</span><span style="font-weight: bold;"> Address</span><br>
                        <span>1 bed room ({{$room->property_name}}) available from {{$room->date_available}}</span><br>
                        <span style="font-weight: bold;">GHC {{$room->amount_per_month}}</span> per month</span><br>
                        <span><span style="font-weight: bold;">Deposit:</span>{{$room->initial_deposit}}</span><br>
                        <span><span style="font-weight: bold;">Rent Inclusive of:</span>{{$room->room_prop_1}},{{$room->room_prop_2}},{{$room->room_prop_3}},{{$room->room_prop_4}},{{$room->room_prop_5}}</span><br><br>
                    </div>
                </div></a>  
                @endforeach
                @else
                <span style="font-size:30px;font-weight:bold;padding-top:10px">{{$data_city}} Rooms Available</span>
                <span style="font-size:18px;">To perform a search, please set the options you want in the search panel and press the <span style="font-weight:bold">Search</span> button</span><br>
                <span style="font-size:18px;">You can refine your search by using the 'Advanced Search'</span>
                @endif
                </div>
            </div>
        
        </div>
        <div class="col-md-9 fixed-left-div">
            <div class="card1 container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                    <span class="text-color">NUMBER OF ADVERT WITHING RANGE</span><br><br>
                    </div>
                    <div class="col-md-3"><i class="fa fa-question-circle" size="large" aria-hidden="true"></i>
                    <span class="text-color">Adverts with utilities included in the rent will be more expensive than those without</span>
                    </div>
                </div>
            </div>
            <div style="padding-top:20px;" class="card1">
    <form  method="get" action="{{ url( '/accomodation_search' )}}">
                <div class="row">
                    <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <span style="opacity:0.8;font-size:16px">How many bedroomes do you want?</span><br>
                            <input value="1" type="number" name="number_of_room" id="number_of_room" style="width:100%">
                            <br><br>
                        </div>
                        <div class="col-md-4">
                            <span style="opacity:0.8;font-size:16px">Select Type of Property</span><br>
                            <select name="property_type" id="property_type" style="width:100%">
                                <option value="I do not mind">I don't mind</option>
                                @foreach($data_pro_type as $type)
                                <option value="{{$type->name}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <span style="opacity:0.8;font-size:16px">Whole Property Required?</span><br>
                            <select name="require_property" id="require_property" style="width:100%">
                                <option value="Room in a shared property">Room in a shared property</option>
                                <option value="Whole Property">Whole Property</option>
                            </select><br><br>
                        </div>
                        <div class="col-md-4">
                            <span style="opacity:0.8;font-size:16px">When do you want to move in?</span><br>
                            <select onchange="selectedValue()" name="date_available" id="move_in_time" style="width:100%">
                                <option value="0">Available Now</option>
                                <option value="1">Show All</option>
                                <option value="2">Select Date</option>
                            </select>
                            <p id="demo"></p>
                            <input name="move_in_time_date" id="move_in_time_date" type="date" style="width: 100%; display:none">
                        </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <p class="" style="text-align:center;font-size:16px;opacity:0.8">How much do you want to pay per month?</p><br>
                        <div class="slidecontainer">
                            <input name="amount_wanted" type="range" min="250" max="2000" value="1200" class="slider" id="myRange">
                            <p style="font-size:20px;opacity:0.8">GHC: <span name="amount_wanted" id="amount_wanted"></span><span>.00</span></p>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div><br>
                
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                     <span style="opacity:0.8;font-size:16px">When do you want to live?</span><br>
                        <select name="where_to_live" id="where_to_live" style="width:100%">
                            <option value="All">All</option>
                            <option value="Outside Town">Outside Town</option>
                            <option value="University Area">University Area</option>
                            <option value="Inside Town">Inside Town</option>
                        </select><br><br>

                        <span style="opacity:0.8;font-size:16px">Where do you want to rent from?</span><br>
                        <select name="where_to_rent_from" id="where_to_rent_from" style="width:100%">
                            <option value="I don't mind">I don't mind</option>
                            <option value="Unihousing">Unihousing</option>
                            <option value="Code Managing Agent">Code Managing Agent</option>
                            <option value="Code Landlord">Code Landlord</option>
                        </select><br><br>
                    </div>

                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                            <span style="opacity:0.8;font-size:16px">Distance From</span><br>
                        <select name="distance_from" id="distance_from" style="width:100%">
                        <option value="I don't mind">I don't mind</option>
                         @foreach($data as $city)
                         <option value="{{$city->name}}">{{$city->name}}</option>
                        @endforeach
                        </select>
                            </div>
                            <div class="col-md-6">
                            <span style="opacity:0.8;font-size:16px">Distance From</span>
                        <select name="distance_within" id="distance_within" style="width:100%">
                        <option value="Withing 1 mile">Withing 1 mile</option>
                            <option value="Withing 3 mile">Withing 3 mile</option>
                            <option value="Withing 5 mile">Withing 5 mile</option>
                            <option value="Withing 10 mile">Withing 10 mile</option>
                            <option value="Withing 15 mile">Withing 15 mile</option>
                            <option value="Withing 20 mile">Withing 20 mile</option>
                        </select>
                            </div>
                        </div><br>

                        <span style="opacity:0.8;font-size:16px">Gurantor Required?</span>
                        <select name="gurantor_required" id="gurantor_required" style="width:100%">
                        <option value="No Reference">No Reference</option>
                            <option value="Not Required">Not Required</option>
                            <option value="Required">Required</option>
                        </select><br><br>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <input onclick="myFunction_advance_filter()" style="height:30px;width:30px" type="checkbox" name="include_amini" id="include_aminities"><span style="padding-left:20px;opacity:0.8;font-size:16px">Advance Filter</span>
                    </div><br><br>
                    <div class="col-md-2"></div>
                </div>
                <div id="all_aminities" style="display: none;">
                    <div  class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                        <input type="checkbox" id="Air Condition" name="Air Condition" value="Air Condition">
                        <label for="myCheck">Air Condition:</label> 
                        <br>
                        <input type="checkbox" id="TV" name="TV" value="TV">
                        <label for="myCheck">TV:</label> 
                        <br>
                        <input type="checkbox" id="Burgler Alarm" name="Burgler Alarm" value="Burgler Alarm">
                        <label for="myCheck">Burgler Alarm:</label> 
                        </div>
                        <div class="col-md-4">
                        <input type="checkbox" id="Wi-Fi" name="Wi-Fi" value="Wi-Fi">
                        <label for="myCheck">Wi-Fi:</label> 
                        <br>
                        <input type="checkbox" id="Garden" name="Garden" value="Garden">
                        <label for="myCheck">Garden:</label> 
                        <br>
                        <input type="checkbox" id="Wheelchair Accessible" name="Wheelchair Accessible" value="Wheelchair Accessible">
                        <label for="myCheck">Wheelchair Accessible:</label> 
                        </div><br><br><br>
                        <div class="col-md-2"></div>

                    </div>
                </div>
               

            </div>
            <!-- buttom -->
            <div class="card1">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <button  style="width:100%" class="btn_top"><i class="fa fa-search"></i> Search</button>
                    </div>
     </form>
                    <div id="clsbt" class="col-md-3">
                        <a style="width:100%;text-align:center" href="accomodation" class="btn_top"><i class="fa fa-search"></i> Clear My Search</a>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

        </main>


       
    </div>

</body>
</html>
<script type="text/javascript">
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<script type="text/javascript">
var slider = document.getElementById("myRange");
var output = document.getElementById("amount_wanted");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

<script type="text/javascript">
    function selectedValue(){
        var x = document.getElementById("move_in_time").value;
        if(x == 2){
            document.getElementById("move_in_time_date").style.display = 'block';
        }else{
            document.getElementById("move_in_time_date").style.display = 'none';
            document.getElementById("move_in_time_date").value = null;
        }

    }
</script>
<script type="text/javascript">
function myFunction_advance_filter() {
  var checkBox = document.getElementById("include_aminities");
  var all_aminities = document.getElementById("all_aminities");
  if (checkBox.checked == true){
    all_aminities.style.display = "block";
  } else {
     all_aminities.style.display = "none";
     document.getElementById('Air Condition').checked = false;
     document.getElementById('TV').checked = false;
     document.getElementById('Burgler Alarm').checked = false;
     document.getElementById('Wi-Fi').checked = false;
     document.getElementById('Garden').checked = false;
     document.getElementById('Wheelchair Accessible').checked = false;

  }
}
</script>
<script type="text/javascript">
    function function2(){
        var x = document.getElementById("require_property").value;
        if(x == 'Room in a shared property'){
            document.getElementById("move_in_time_date").style.display = 'block';
        }else{
            document.getElementById("move_in_time_date").style.display = 'none';
            document.getElementById("move_in_time_date").value = null;
        }

    }
</script>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("app").style.display = "block";
}
</script>
<style>
    .top{
        font-size:30px;
        font-weight:bold;
    }
    .span-bold{
        font-weight:bold;
    }
    .p{
        padding-top:20px;
    }
    .fixed-middle-div{
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        background: #ffffff;
        height: 345px;
        overflow: auto;
        position: relative;
    }
    .fixed-left-div{
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        background: #ffffff;
        overflow: auto;
        position: relative;
    }
    .card1{
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        background: #ffffff;
        max-height:410px;
        overflow-x:hidden;
        max-width:inherit;
    }
    .text-color{
      opacity: 0.5;
    }
    .slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 20px;
  background: linear-gradient(to right, green , blue);
  outline: none;
  opacity: 0.7;
  -webkit-transition: .8s;
  transition: opacity .8s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}

#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-right: 16px solid green;
  border-bottom: 16px solid red;
  border-left: 16px solid pink;
  -webkit-animation: spin 1s linear infinite;
  animation: spin 1s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s;
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#app {
  display: none;
}

@media screen and (max-width: 600px) {
  .sb {
        display: none;
    }
   .lb{
        text-align: center;
   }
   #require_property{
        width: 50%;
        text-decoration: center;
   }
   #number_of_room{
    width: 100%;
   }
   #clsbt{
        padding-top:10px;
   }
}

  
</style>


