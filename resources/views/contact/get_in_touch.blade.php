@extends('app_sidebar')
@section('content')
<div style="font-family: 'Open Sans', sans-serif" class="container">
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-8 card">
                <h4 class="top">Get in touch</h4><br>
                <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                        <p>If you got a question you’d like to ask, or a comment to make we’d love to hear from you.</p><br>
                        <span style="font-weight:bold;font-size:20px">Contact:What the Service provides</span>

                        <p>What's your name?</p>
                        <input type="text" id="name" name="name" class="form__input">

                        <p>What's your e-mail address?</p>
                        <input type="text" id="email" name="email" class="form__input">

                        <p>What's your phone number?</p>
                        <input type="text" id="phone" name="phone" class="form__input">

                        <p>Would you like to tell us more?</p>
                        <textarea type="text" id="phone" name="phone" class="form__input"></textarea>

                        <span style="text-align:center"><button href="#" class="btn_top">Submit</button></span>

                        </div>
                        <div class="col-md-1"></div>
                    </div>
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
                            <h1 style="font-size:25px" class="top">Choose who you want to contact </h1>
                            <select onchange="getValue()" style="height:60px;width:100%" name="university" id="university">
                                <option value="0">Select Collage</option>
                                @foreach($data as $university)
                                <option value="{{$university->name}}">{{$university->name}}</option>
                                @endforeach
                            </select><br><br>

                            <span style="font-weight:bold;font-size:20px">Phone</span><br>

                            <span style="font-weight:bold;font-size:18px;opacity:0.5">024700000125</span><br><br>

                            <span tyle="font-weight:bold;font-size:20px">E-mail</span><br>
                            <span id="email_address" style="font-weight:bold;font-size:18px;opacity:0.5">ekkaidoo@uew.edu.gh</span>

                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
</div>
<script type="text/javascript">
    function getValue(){
        console.log('hello');
        var x = document.getElementById("university").value;
        if(x == 'UEW'){
            <?php
                use App\Models\University;
                $data = University::select('website')->where('name','=','UEW')->get();
                foreach($data as $value);
            ?>
            document.getElementById("email_address").innerHTML = "www.uew.edu.gh";
        }
        if(x == 'UCC'){
            <?php
                $data = University::select('website')->where('name','=','UEW')->get();
                foreach($data as $value);
            ?>
            document.getElementById("email_address").innerHTML = "www.ucc.edu.gh";
        }
        if(x == 'KNUST'){
            <?php
                $data = University::select('website')->where('name','=','UEW')->get();
                foreach($data as $value);
            ?>
            document.getElementById("email_address").innerHTML = "www.knust.edu.gh";
        }
        if(x == 'UG'){
            <?php
                $data = University::select('website')->where('name','=','UEW')->get();
                foreach($data as $value);
            ?>
            document.getElementById("email_address").innerHTML = "www.ug.edu.gh";
        }
        if(x == 'TTU'){
            <?php
                $data = University::select('website')->where('name','=','UEW')->get();
                foreach($data as $value);
            ?>
            document.getElementById("email_address").innerHTML = "www.ttu.edu.gh";
        }
    }
</script>
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
</style>
