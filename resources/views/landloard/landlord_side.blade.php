<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" type="image/png" href="{{ asset('https://www.uew.edu.gh/sites/default/files/uew_logo_web.png') }}">
  	<title>Unihouse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
	<link rel="stylesheet" href="/assets/css/style.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    
      <!-- Fonts -->
    
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

  </head>
<style>
    <?php
      if(isset($_GET['logout'])){
        unset($user_id);
        session_destroy();
        header('location:login');
      }
      ?>
/* The sidebar menu */
    .sidebar {
      height: 100%; /* 100% Full-height */
      width: 0; /* 0 width - change this with JavaScript */
      position: fixed; /* Stay in place */
      z-index: 1; /* Stay on top */
      top: 0;
      left: 0;
      background-color: white; /* Black*/
      overflow-x: hidden; /* Disable horizontal scroll */
      padding-top: 60px; /* Place content 60px from the top */
      transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
    }

    /* The sidebar links */
    .sidebar a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 15px;
      color:black;
      /* color: #818181; */
      display: block;
      transition: 0.3s;
    }

    /* When you mouse over the navigation links, change their color */
    .sidebar a:hover {
      /* color: #f1f1f1; */
      color:#4682B4;
    }

    /* Position and style the close button (top right corner) */
    .sidebar .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    /* The button used to open the sidebar */
    .openbtn {
      font-size: 20px;
      cursor: pointer;
      background-color: DodgerBlue;
      color: white;
      padding: 10px 15px;
      border: none;
    }

    .openbtn:hover {
      background-color: RoyalBlue;
    }

    /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
    #main {
      transition: margin-left .5s; /* If you want a transition effect */
      padding: 20px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
      .sidebar {padding-top: 15px;}
      .sidebar a {font-size: 18px;}
    }
</style>
  <body style="font-family: 'Open Sans', sans-serif">
  <div id="mySidebar" class="sidebar">
  <img src="https://www.unipol.org.uk/css/images/logo_leeds.png" style="width: 80%;padding-left:30px">

  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="javascript:void(0)" style="font-weight:bold;font-size:25px;" >{{strtoupper(Auth::user()->name)}}</a>
  <a href='/dash/'><i class="fa fa-th-large" aria-hidden="true"></i> Dashboard</a>
  <!-- <a href='/admin_users'><i class="fa fa-group" aria-hidden="true"></i> Users</a>
  <a href='/admin_university'><i class="fa fa-graduation-cap" aria-hidden="true"></i> University</a>
  <a href='/admin_city'><i class="fa fa-cube" aria-hidden="true"></i> City</a>
  <a href='/admin_students'><i class="fa fa-user" aria-hidden="true"></i> Students</a>
  <a href='/admin_landlord'><i class="fa fa-user" aria-hidden="true"></i> LandLoard</a>
  <a href='/admin_event_booker'><i class="fa fa-user" aria-hidden="true"></i> Event Booker</a>
  <a href='/admin_property'><i class="fa fa-cube" aria-hidden="true"></i> Property</a> -->
  <a href='/landlord_room'><i class="fa fa-cube" aria-hidden="true"></i> Rooms</a>
  <a href='/landlord_change_password/{{Auth::user()->id}}'><i class="fa fa-user-md" aria-hidden="true"></i> Profile</a>
  <!-- <a href='/admin_permissions'><i class="fa fa-key" aria-hidden="true"></i> Permissions</a>  -->
  <a href="{{ route('logout') }}"
                                    
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-language" aria-hidden="true"></i>
                                        {{ __('Logout') }}
                                        
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
</div>

<div id="main">
  <button class="openbtn " onclick="openNav()">&#9776;MENU</button>
  <div class="content">
@yield('content')
</div>
</div>
@include('sweetalert::alert')

  </body>
</html>


<script type="text/javascript">
/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
  </script>