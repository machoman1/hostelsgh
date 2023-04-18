@extends('app_sidebar')
@section('content')
<div style="font-family: 'Open Sans', sans-serif;" class="container">
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-8 card">
                <h4 class="top">Homestay Accommodation Services for Students</h4><br>
                <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                <img src="https://www.unipol.org.uk/getattachment/Accommodation-Search/Homestay/homestay-banners.png.aspx">
                <span>If you are studying in the Language Centre then you could apply for Homestay accommodation and live with a local family in Leeds.</span><br>
                <span>Homestay is a great way to fully immerse yourself in Ghanian culture. If you are only coming to the Ghana for a short period of time, living with a local family will allow you to continue to practice your developing language skills in a safe environment. Our hosts are very experienced in opening their homes to international students and will support you and make you feel part of their family during your time in Ghana. </span><br>
                <span>Unihouse works closely with the <span><a href="www.uew.edu.gh">University of Education Winneba Language Centre</a></span> to support international students in finding accommodation. All Homestay hosts are carefully selected and subscribe to an accreditation criteria called the Homestay Code. This ensures that high standards are met and maintained within all Homestay accommodation. </span><br>
                <span style="font-weight: bold; text-decoration:underline">Information for Students:</span><br>
                <span style="font-weight: bold;">What's Included</span>
                <span>Homestay hosts offer a single bedroom, usually within 50 minutes travel of campus. Your private room will have a bed, clothes storage space and provide a place for you to study when not on campus. You will also have access to communal areas in the Homestay home, such as the living room and kitchen.</span><br>
                <span>You'll be provided breakfast and evening meals on weekdays, and breakfast, lunch and evening meals at weekends. Some hosts are flexible about meal provision, working around your university timetable as much as possible. The cost of your meals is included in your Homestay fee. Our nightly rate also includes contents insurance to cover you in the instances of any accidents or loss.</span><br>
                <span>Students are carefully matched with a host, based on the information provided on their application and the host family profile. We try to match with your interests and any special requests, such as staying and being involved in busy family life or if you would prefer a quieter place to stay but with lots of opportunity to converse with your hosts. </span><br>
                <span style="font-weight: bold;">Applay for Homestay</span>
                <span><a href="pdf/form.pdf" download="application_form.pdf">Download Application Form</a></span>

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
                            <select onchange="selectedValue()" style="height:60px;width:100%" name="house" id="house">
                                <option value="0">Select</option>
                                @foreach($data as $uni)
                                <option value="{{$uni->name}}">{{$uni->name}}</option>
                                @endforeach
                            </select><br><br>

                            <span style="font-weight:bold;font-size:20px">Phone</span><br>

                            <span style="font-weight:bold;font-size:18px;opacity:0.5">024700000125</span><br><br>

                            <span style="font-weight:bold;font-size:20px">E-mail</span><br>
                            <span id="email"style="font-weight:bold;font-size:18px;opacity:0.5">saktsolution@gmail.com</span>
                         
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
<script type="text/javascript">
    function selectedValue(){
        var x = document.getElementById("house").value;
        if(x == 'UEW'){
            <?php
                use App\Models\University;
                $data = University::select('website')->where('name','=','UEW')->get();
                foreach($data as $value);
            ?>
            document.getElementById("email").innerHTML = "www.uew.edu.gh";
        }
        if(x == 'UCC'){
            <?php
                $data = University::select('website')->where('name','=','UEW')->get();
                foreach($data as $value);
            ?>
            document.getElementById("email").innerHTML = "www.ucc.edu.gh";
        }
        if(x == 'KNUST'){
            <?php
                $data = University::select('website')->where('name','=','UEW')->get();
                foreach($data as $value);
            ?>
            document.getElementById("email").innerHTML = "www.knust.edu.gh";
        }
        if(x == 'UG'){
            <?php
                $data = University::select('website')->where('name','=','UEW')->get();
                foreach($data as $value);
            ?>
            document.getElementById("email").innerHTML = "www.ug.edu.gh";
        }
        if(x == 'TTU'){
            <?php
                $data = University::select('website')->where('name','=','UEW')->get();
                foreach($data as $value);
            ?>
            document.getElementById("email").innerHTML = "www.ttu.edu.gh";
        }
    }
</script>
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
</style>
