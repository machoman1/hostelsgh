@extends('app_sidebar')
@section('content')
<div style="font-family: 'Open Sans', sans-serif" class="container">
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-8 card">
                <h4 class="top">Property Management Service for Owners</h4><br>
                <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                <img src="https://www.unipol.org.uk/getmedia/9fdcdf98-f1ad-4837-b749-41ee0a18b965/wear-yourself-out.png.aspx">

                <span >There are many reasons why owners prefer to have their property managed.</span>
                <br>
                <span >With years of experience, our dedicated team offer a fully comprehensive service in Leeds and Nottingham 
                    that will ensure your property lets quickly and is well managed to minimise hassle and stress.</span><br>
                <span style="font-weight:bold;font-size:20px">What the Service provides</span>
                <br>
                <span>Owner's properties are managed by a dedicated member of the Unipol Housing team. Full support and assistance is provided with additional 24 hour Emergency Assistance. </span>
                <br>
                <span>Contact us today if you would like to find out more about Unipol’s extensive services for landlords and we will get back to within 48 working hours.</span>
                <br>
                <span><a href="get_in_touch" class="btn_top">Get In Touch</a></span>

              

            </div>
            <!-- <div class="col-md-1"></div> -->
            <div class="col-md-4">
                <div class="card">
                    <h1 class="top">Need any help?</h1>
                    <span style="text-align:center;font-size:20px">just get in touch,we won't bite</span>
                    <hr><br>
                    <a style="text-align:center" class="active" href="#about">Find Out More</a>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <h1 style="font-size:25px" class="top">The Student Living Experts </h1>
                        </div>
                        <div class="col-md-1"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-2"></div>
                        <div id="prev" class="col-md-2"style="padding-top:20px"><a href="#" class="previous round">&#8249;</a></div>
                        <div class="col-md-4">
                            <img id="my_image" src="https://www.unipol.org.uk/getattachment/b19e439a-5c2a-4018-9075-f011d80ee1e0/Abdulmojeed-Adams.aspx">
                        </div>
                        <div id="next" class="col-md-2"style="padding-top:20px"><a href="#" class="next_change round">&#8250;</a></div>
                        <div class="col-md-2"></div>
                    </div>

                    <div class="row">
                            <span style="font-size:15px;font-weight:bold;text-align:center">Mohammed Ali Musah</span>
                            <span style="font-size:20px;font-weight:bold;text-align:center">RESIDENCE ASSISTANCE - DOROTHY ANSAH</span>
                            <span style="font-size:15px;text-align:center;padding-top:10px">Residence Assistant - Dorothy Ansah </span>
                            <span style="font-size:15px;text-align:center;padding-top:10px">Hey there! My name is Mohammed Ali Musah and i am from Ghana studying Data 
                            Sceience and Technology at the university of Bradford.My role is to help residence settle in and listen to any
                             concerns or enqueries they may have.
                            </span>
                            <span style="font-size:15px;text-align:center;padding-top:10px">Outside work,I enjoy having lone times,watching movies and nice 
                            time out with friends.
                            </span><br><br><br><br><br><br><br>
                            <span style="text-align:center"><button href="#" class="btn_top">Meet the Team</button></span>
                    </div>
                </div>
            </div>
        </div>
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
    }
    @media screen and (max-width:629px) {
                img#my_image {
                    width: 100%;
                    display: block;
                }
                div#prev{
                    display: none;

                }
                div#next{
                    display: none;
                    
                }
    }
</style>