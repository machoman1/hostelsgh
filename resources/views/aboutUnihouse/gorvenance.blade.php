@extends('app_sidebar')
@section('content')
<div style="font-family: 'Open Sans', sans-serif;"  class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h4 class="top">Governance</h4><br>
            <!-- <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br> -->
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 fixed-left-div">
        <button href="#" class="btn_top"> Filter</button>
                    <select style="width:20px" name="house" id="house">
                        <option value="volvo">Search For House In</option>
                        @foreach($data as $city)
                        <option value="{{$city->name}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                    <input style="float:right" type="text" placeholder="Search..." name="search2">

        </div>
        </div>
        <div class="col-md-1"></div><br>

    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-4 card">
                        <h1 style="font-size:24px">OBJECTS AND ARTICLES OF UNIPOL</h1>
                         <p style="padding-top:10px">
                            The Company’s objects are the advancement of education by providing and managing accommodation and related services for educational institutions, their students and other persons associated w...
                        </p><br>
                        <p style="text-align:center;"><a href="#" class="btn_top">Read Article</a></p>
                    </div>
                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">THE BOARD</h1><br>
                        <p>
                            The Board is responsible for the strategic and policy direction of the organisation. You can view all the individual responsibilities of the officers here or by using a link from the titles of the ...
                        </p>
                        <p style="text-align:center;padding-top:65px"><a href="#" class="btn_top">Read Article</a></p>
                    </div>
                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">COMMITTEES</h1><br>
                        <p>
                            There are five committees that meet regularly and oversee different aspects of Unipol’s operations, these all report to the Board. Committee minutes are available on request from the Company ...
                        </p>
                        <p style="text-align:center;padding-top:70px"><a href="#" class="btn_top">Read Article</a></p><br><br>
                    </div>
                </div>
            </div>
        <div class="col-md-1"></div>
    </div>


    <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">GROUPS, FORUMS AND AUDIT PANELS</h1>
                         <p style="padding-top:10px">
                            Unihouse has a number of Groups, Forums and Audit Panels so that we are in touch with the needs of our clients groups and can reflect current concerns and trends in an appropriate and relevant way in...
                        </p>
                        <p style="text-align:center;"><a href="#" class="btn_top">Read Article</a></p>
                    </div>
                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">CORPORATE DOCUMENTS POLICIES</h1><br>
                        <p>
                            This section contains policies and procedures that apply to the Unihouse Board as well as recent Trustee Reports.  
                        </p>
                        <p style="text-align:center;padding-top:40px"><a href="#" class="btn_top">Read Article</a></p>
                    </div>
                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">TRUSTEE RECRUITMENT</h1><br>
                        <p>
                            Unihouse currently has a vacancy for a Trustee. This section of the web is intended to provide information on the application process and information about Unipol.
                        </p>
                        <p style="text-align:center;padding-top:50px"><a href="#" class="btn_top">Read Article</a></p><br><br>
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
                        <h1 style="font-size:24px">UEW STUDENT HOMES</h1>
                         <p style="padding-top:10px">
                            Univeristy of Education Winneba Student Homes
                        </p><br><br><br><br><br><br>
                        <p style="text-align:center;"><a href="#" class="btn_top">Read Article</a></p>
                    </div>
                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">PUBLICATIONS AND RESEARCH</h1><br>
                        <p>
                        Bradford | Leeds | Nottingham
                        As part of its mission to improve standards and management in student accommodation, Unipol undertakes, commissions and partners in research and publications with the aim of advancing best practice...
                        </p>
                        <p style="text-align:center"><a href="#" class="btn_top">Read Article</a></p>
                    </div>
                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">ORGANISATIONAL CHART</h1><br>
                        <p>
                            View Unipol's Organisational Chart
                        </p>
                        <p style="text-align:center;padding-top:120px"><a href="#" class="btn_top">Read Article</a></p><br><br>
                    </div>
                </div>
            </div>
        <div class="col-md-1"></div>
    </div>


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
        text-align:center;
    }
    .fixed-left-div{
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        background: #ffffff;
        overflow: none;
        position: relative;
        padding: 10px;
        border-radius:5px;
    }
</style>
