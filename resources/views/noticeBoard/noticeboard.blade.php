@extends('app_sidebar')
@section('content')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<div style="font-family: 'Open Sans', sans-serif;" class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3"><span style="font-size: 40px;font-weight:bold">Notice Board</span></div>
        <div class="col-md-3 card">
            <div class="row">
                <div class="col-md-6"><span>Viewing notice board</span></div>
                <div class="col-md-3">
                    <select>
                        <option value="0">Select City</option>
                        @foreach($data as $city)
                        <option value="{{$city->name}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-1"></div>
    </div>
    <div class="row">
        <!-- <div class="col-md-1"></div> -->
        @foreach($data_notice as $notice)
        <div style="text-align:center;background-color: #ffffff;" class="col-md-6">
             <div style="background-color:#242526 ;" class="row">
                <span style="color:white;font-size:25px;text-align:center">{{$notice->title}}</span>
            </div>
            <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
            <div style="text-align: center;display:block;text-overflow: ellipsis;width: 700px;overflow: hidden; white-space: nowrap;"><span>{{$notice->content}}</span></div>
            <div style="text-align: center;padding-top:40px"> <span style="font-weight: bold;">Last Post</span> <br>{{$notice->created_at}}</div>
            <div style="text-align: center;padding-top:40px;padding-bottom:30px"><a href="noticebord_modal/{{$notice->id}}" class="btn_top">View Post</a></div>
            
        </div><br>
        <!-- <div class="col-md-1"></div><br> -->
        @endforeach
    </div>



    <!-- <div class="row">
        <div class="col-md-1"></div>
        <div style="margin-right:10px;background-color: #ffffff;" class="col-md-5">
            <div style="background-color:#242526 ;" class="row">
                <span style="color:white;font-size:25px;text-align:center">Forming a group to look for housing</span>
            </div>
            <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
            <div style="text-align: center;"><span>For students wanting to meet up with other students to form a larger group to look for houses. Owners and agents may not post on this noticeboard.</span></div>
            <div style="text-align: center;padding-top:40px"> <span style="font-weight: bold;">Last Post</span> <br>21/12/2022 11:18:39</div>
            <div style="text-align: center;padding-top:40px;padding-bottom:30px"><a href="#" class="btn_top">View Post</a></div>
        </div>
        <div style="background-color: #ffffff;" class="col-md-5">
            <div style="background-color:#242526 ;" class="row">
                <span style="color:white;font-size:25px;text-align:center">Postgraduates</span>
            </div>
            <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
            <div style="text-align: center;"><span>For students looking for rooms for a short period or just over the summer. Owners and agents may post on this noticeboard.</span></div>
            <div style="text-align: center;padding-top:40px"> <span style="font-weight: bold;">Last Post</span> <br>06/11/2022 12:55:03</div>
            <div style="text-align: center;padding-top:40px;padding-bottom:30px"><a href="#" class="btn_top">View Post</a></div>
        </div>
        <div class="col-md-1"></div>
    </div> -->

    <div style="padding-top: 30px;" class="row">
        <div class="col-md-2"></div>
        <div class="col-md-9">
        <div class="col-md-3"><span style="font-size: 30px;font-weight:bold">Notice Board Rules</span></div>
        <div style="background-color: #ffffff;">
            <ul style="padding-left: 50px;list-style-type: circle;font-size:16px">
                <li>This noticeboard facility is strictly for the use of students.</li>
                <li>Owners of properties found using this facility may have their use of the site suspended</li>
                <li>Unipol operates an active policy against discrimination and takes action against anyone who attempts to discriminate against students on the basis of gender, sexuality, race, creed or colour.</li>
                <li>When posting notices or messages please respect this policy and please do not abuse other users.</li>
                <li>Please note that all messages can be traced and in the event of the facility being abused action will be taken.</li>
                <li>Messages are checked before being made live within 24 hours</li>
                <li>Users should be aware that they are using a system in the public domain and therefore leave their own name and contact details at their own risk and discretion. Users under 18 should not post phone numbers, email or postal addresses on this site. Users should not include house numbers or landlord contact details on their message or these will not be approved</li>
                <li>Any references to external web pages or images are not checked and we cannot take any responsibility for external sites. Do not put any links besides email addresses on your messages</li>
            </ul>
        </div>
        <div style="padding-top:40px;padding-bottom:30px"><a href="login" class="btn_top">Subscribe to Post</a></div>
        </div>
        <div class="col-md-1"></div>
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
