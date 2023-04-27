<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Unihostel</title>

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
<body >
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a style="background-color: unset;" class="navbar-brand" href="{{ url('/') }}">
                    <!-- <img src="https://www.unipol.org.uk/css/images/logo_leeds.png"> -->
                    <img src="images/logo1.jpg" height="100" width="200">
                </a>
                <button id="bbb" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                       
                                <li class="nav-item sb">
                                    <!-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> -->
                                    <form class="example" action="/action_page.php" style="">
                                        <input type="text" style="font-family: 'Open Sans', sans-serif;" placeholder="Search..." name="search2">
                                        <button style="height:46px" type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </li>

                                <li class="nav-item lb">
                                    <a href="login" class="btn_top"><i class="fa fa-lock"></i> UniHostel Login</a>
                                </li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div style="font-family: 'Open Sans', sans-serif;" class="container">
            <div class="topnav" id="myTopnav">

                 <a class="active" href="/accomodation">Search for UniHostel</a>
                <a class="active" href="/landloard">Landlords</a>
                <a class="active" href="/news">News</a>
                <a class="active" href="/complain">Make a Complain</a>
                <a class="active" href="/noticeboard">Notice Board</a>
                <a class="active" href="/upcoming_event">Upcoming Events</a>
                <a class="active" href="/repair">Request a Repair</a>
                <a class="active" href="/general_enquiries">General Enquries</a>
                <a class="active" href="/homestay">Homestay</a>

                <button id="dropdownDefault" data-dropdown-toggle="dropdown" style="font-size: 16px;border: none;outline: none;color: #5f9c3f;padding: 14px 16px;background-color: inherit;font-family: inherit;margin: 0;font-weight:bolder" type="button">About UniHostel <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                <div id="dropdown" class="hidden z-10 w-100 bg-white border-gray-900 rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                <a href="/about" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white active">UniHostel Values <span style="padding-left:10px;font-size:20px"><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
                                    <p style="padding-top: 10px;">About UniHostel and our core values</p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                <a href="housing" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">UniHostel Housing <span style="padding-left:10px;font-size:20px"><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
                                    <p style="padding-right:20px;padding-top:10px" >Rent directly from the charity</p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Rent online from UniHostel <span style="padding-left:10px;font-size:20px"><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
                                    <p style="padding-top: 10px;">Rent all house from anywhere</p>
                                </li>
                            </ul>
                        </div>
                        <br><br><br>
                        <div class="col-md-4">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                <a href="accomodation" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Search for Housing <span style="padding-left:10px;font-size:20px"><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
                                    <p style="padding-top: 10px;">Search our database for what you need</p>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="col-md-4">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                <a href="manage_property" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Let us manage your Property <span style="padding-left:10px;font-size:20px"><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
                                    <p style="padding-top:10px" >property management service</p>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                                <li>
                                <a href="gorvenance" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">UniHostel Gorvernance <span style="padding-left:10px;font-size:20px"><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
                                    <p style="padding-top: 10px;">How the charity works</p>
                                </li>
                            </ul>
                        </div><br><br><br>
                    </div>
                    </div> 
                    <a class="active" href="#about">Sponsors</a>
                    <a class="active" href="advice">Advice</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                </div>

            </div>
        </nav>
    
        <main class="py-0">
            @yield('content')
            @include('sweetalert::alert')

        </main>
        <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Welcome to ghhostels.com!, We are a platform dedicated to providing students with affordable and convenient hostel bookings. Our mission is to make the process of finding and booking a hostel as easy as possible for you.Our team has years of experience in the travel and hospitality industry, and we know what it takes to create an enjoyable and comfortable hostel experience. That's why we carefully curate a selection of hostels that are not only budget-friendly but also offer great amenities and services.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Categories</h6>
            <ul class="footer-links">
              <li><a href="#">Accomodation Servive</a></li>
              <li><a href="#">Housing Service</a></li>
              <li><a href="#">Lanlord Codes</a></li>
              <li><a href="#">Renting Serivice</a></li>
              <li><a href="#">Manage Your Property</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="/accomodation">Book Room</a></li>
              <li><a href="/news">News</a></li>
              <li><a href="/complain">Make Complain</a></li>
              <li><a href="/housing">Manage Your Property</a></li>
              <li><a href="/about">About Us</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by 
         <a href="#">Sak-T Solutions</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul style="padding-top: 10px;" class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

        <!-- <div style="font-family: 'Open Sans', sans-serif;" class="footer-clean">
            <footer>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-4 col-md-3 item">
                            <h3 style="font-family:'Montserrat', sans-serif;">Services</h3>
                            <ul>
                                <li><a href="#">Accomodation Servive</a></li>
                                <li><a href="#">Renting Serivice</a></li>
                                <li><a href="#">Housing Service</a></li>
                                <li><a href="#">Manage Your Property</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 item">
                            <h3 style="font-family:'Montserrat', sans-serif;">About</h3>
                            <ul>
                                <li><a href="#">UniHostel</a></li>
                                <li><a href="#">Lanlord Codes</a></li>
                                <li><a href="#">Why Choose UniHostel</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 item">
                            <h3 style="font-family:'Montserrat', sans-serif;">Contacts</h3>
                            <ul>
                                <li><a href="https://mail.google.com/">Email:ekkaidoo@uew.edu.gh</a></li>
                                <li><a href="#">Office Line: +233 206724609</a></li>
                                <li><a href="#">Phone: +233 206724609</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-youtube"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                            <p class="copyright">UniHostels © 2022</p>
                        </div>
                    </div>
                </div>
            </footer>
            
        </div>  -->
    </div>
    @include('sweetalert::alert')

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

<style>
    @media screen and (max-width: 600px) {
  .lb {
    text-align: center;

  }.footer-clean,.site-footer{
    text-align: center;
  }.sb{
    display: none;
  }img{
    /* height: 30%;
    width: 30%;
   display: none; */
  }#bbb{
    float: right;
  }
 
}
.site-footer
{
  background-color:#5f9c3f;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:white;
  /* opacity: 0.8; */
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:white;
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:25px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
</style>



<!-- <script>
  var dropdown = document.getElementsByClassName("dropbtn");
var i;
for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = document.getElementsByClassName("dropdown-content");
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script> -->

