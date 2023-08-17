@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <span style="font-weight: bold;font-size:20px;"><a style="text-decoration: none" href="/admin"><i class="fa fa-chevron-left" aria-hidden="true"></i> Dashboard</span></a>
                </div>
                <div class="card-body">
                    <div class="content-wrap">
                        <div class="main">
                            <div style="font-family: 'Open Sans', sans-serif; padding-top:30px" class="container">
                                <div class="row">
                                        <div class="col-md-3">
                                            <a href="/home_Page_content" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                            <!-- <i class="fa fa-home fa-2x" aria-hidden="true"></i> -->
                                            <div class="card-body">
                                                <span style="font-weight: bold;font-size:25px">Home/Welcome Page</span>
                                                <p class="card-text">Add Or Edit Home Page Content</p>
                                            </div>
                                        </div></a>
                                    </div>

                                    <div class="col-md-3">
                                            <a href="/homestay_page_content" onMouseOver="this.style.backgroundColor='#006242'" onMouseOut="this.style.backgroundColor='#FFFFFF'" style="text-decoration: none; color:black"><div class="card" style="width: 18rem;">
                                            <!-- <i class="fa fa-home fa-2x" aria-hidden="true"></i> -->
                                            <div class="card-body">
                                                <span style="font-weight: bold;font-size:25px">Homestay Page</span>
                                                <p class="card-text">Add Or Edit Homestay Content</p>
                                            </div>
                                        </div></a>
                                    </div>
                                    
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
