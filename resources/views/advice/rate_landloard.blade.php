@extends('app_sidebar')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-1"></div>
        <div class="col-md-10">
            
<div class="tab">
<button class="tablinks" onclick="openCity(event, 'User Details')" id="defaultOpen"><span class="circle">1</span><br>Your Details</button>
  <button class="tablinks" onclick="openCity(event, 'landlord Details')"><span class="circle">2</span><br>Landloard Details</button>
  <button class="tablinks" onclick="openCity(event, 'Your Rating')"><span class="circle">3</span><br>Your Rating</button>
</div>

<div id="User Details" class="tabcontent">
<span style="font-size:20px;color:#008080">Which academic year are you reviewing for?</span><br>
    <select class="select" style="width:100%;border:none;font-size:20px" name="house" id="house">
        <option value="2020-2021">2020-2021</option>
        <option value="2021-2022">2021-2022</option>
        <option value="2022-2023">2022-2023</option>
    </select><br><br>
    <div class="row">
        <div class="col-md-6">
        <span style="font-size:20px;color:#008080">Your First Name</span>
        <input name="first_name" id="first_name" class="form__input">

        <span style="font-size:20px;color:#008080">Your Email Address</span>
        <input name="email" id="email" class="form__input">
        </div>
        <div class="col-md-6">
        <span style="font-size:20px;color:#008080">Your Last Name</span>
        <input name="last_name" id="last_name" class="form__input">

        <span style="font-size:20px;color:#008080">Your University</span><br><br>
        <select class="select" style="width:100%;border:none;unset:all;font-size:20px" name="house" id="house">
            <option value="2020-2021">2020-2021</option>
            <option value="2021-2022">2021-2022</option>
            <option value="2022-2023">2022-2023</option>
        </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-5"></div>
        <div class="col-md-2"><a onclick="openCity(event, 'landlord Details')" style="float:right;width:100%;text-align:center" class="btn_top">Next Step</a></div>
    </div>
</div>


<div id="landlord Details" class="tabcontent">
  <h3>Your Landloard</h3>
  <span style="font-size:20px;color:#008080">Your Property Type</span><br><br>
        <select class="select" style="width:100%;border:none;unset:all;font-size:20px" name="house" id="house">
           <option value="0">-- Select --</option>
            <option value="OffStreet">OffStreet</option>
            <option value="On Campus">On Campus</option>
            <option value="Purpose Built">Purpose Built</option>
        </select>

        <span style="font-size:20px;color:#008080">Select Name of Landloard</span><br><br>
        <select class="select" style="width:100%;border:none;unset:all;font-size:20px" name="house" id="house">
            <option value="0">-- Select --</option>
            <option value="OffStreet">Awal</option>
            <option value="On Campus">Saeed</option>
            <option value="Purpose Built">Mohammedt</option>
        </select><br><br>
        <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-5"></div>
        <div class="col-md-2"><a onclick="openCity(event, 'Your Rating')" style="float:right;width:100%;text-align:center" class="btn_top">Next Step</a></div>
    </div>
</div>


<div id="Your Rating" class="tabcontent">
  <h3>Your Ratings</h3>
  <input style="width: 100%;" type="range" min="20" max="150" value="20" class="slider" id="myRange">
  <p style="font-size:20px;opacity:0.8;text-align:center"><span id="scale"></span><span>%</span></p>
  <span class="heading">User Rating</span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star"></span>
  
<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
  <a style="text-align:center" class="btn_top">Submit</a>

</div>
</div>

<script>
    document.getElementById("defaultOpen").click();

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
<script type="text/javascript">
var slider = document.getElementById("myRange");
var output = document.getElementById("scale");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>
  
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
.circle {
  border-radius: 10%;
  width: 20px;
  height: 20px;
  padding: 15px;
  background: dodgerblue;
  /* border: 1px solid #000; */
  color: white;
  text-align: center;
  /* font: 32px Arial, sans-serif; */
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top: 10px;
}

.middle {
  float: left;
  width: 70%;
  margin-top: 10px;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  /* Hide the right column on small screens */
  .right {
    display: none;
  }
  }
  

</style>

