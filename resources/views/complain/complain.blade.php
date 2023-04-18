@extends('app_sidebar')
@section('content')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<div style="font-family: 'Open Sans', sans-serif;" class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div style="background-color: #ffffff;" class="col-md-6">
            <h4 class="top">How to Complain</h4><br>
            <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
            <span>If you live in a Unihouse Code accredited property, and you are having problems with your property and or 
                landlord we can help. Before reading the information below please check the status of your landlord at the link below.</span><br><br>
            <a href="" style="text-align: center;" class="btn_top">Check if your landloard is a Unihouse code accredited</a><br><br>
            <span>If your landlord is <span style="font-weight: bold;">NOT</span> a member of the Unipol Code we may still be able to give you advice on what to do next. 
                You can use the link below for useful support contacts or email us for advice (if we can't help directly we can often 
                put you in touch with someone who can.</span><br><br>
            <span>If you are a Member of the Community and would like to find out more about how to make a complaint please use the link below.</span><br><br>
            <a href="" style="text-align: center;" class="btn_top">Complain as a Member of the Community</a><br><br>
            <span style="font-weight: bold;font-size:20px">Code Complaint Process for Students Explained</span><br><br>
            <span>If you haven’t contacted your landlord about the issue, then do that straight away. Follow the steps below.</span><br><br>
            <span><span style="font-weight:bold;">1. Write to your landlord explaining the issue and mentioning the Unipol Code</span>.When writing the email:</span><br><br>
            <img src="https://www.unipol.org.uk/getmedia/8630cbf1-418d-4740-b92b-2c6acf507d99/ComplaintAdvice.png.aspx"><br>
            <span style="font-weight: bold;">The Code has priority timescales for different types of repair:</span><br><br>
            <ul style="padding-left: 40px;list-style-type: circle;font-size:16px">
                    <li><span style="font-weight: bold;">Priority One</span> – Emergency Repairs: Any repairs required in order to avoid a danger to health, risk to the 
                        safety and security of residents or serious damage to buildings or residents’ belongings. Within 24 hours of 
                        report of the defect/s.</li>
                    <li><span style="font-weight: bold;">Priority Two</span> – Urgent Repairs: Repairs to defects which materially affect the comfort or convenience 
                        of the residents. Within five working days of report of the defect/s.</li>
                    <li><span style="font-weight: bold;">Priority Three</span> – Non Urgent day-to-day repairs: Reactive repairs not falling within the above categories. 
                        Within 28 days of report of the defect/s or by arrangements with the occupiers after that time. Decorative 
                        finishes to be made good within reasonable timescales if damaged or disturbed during repairs</li>
                </ul><br><br>
            <span><span style="font-weight:bold;">2. Not fixed within the above timeframe?</span>Write to your landlord reminding them about the issue and state that you will make a Code complaint if it is not resolved.</span><br><br>
            <span><span style="font-weight:bold;">3. If you’re not happy with the response, or you don’t receive one</span>let Unipol know. Don’t forget to provide supporting evidence (emails / photographs).</span><br><br>
            <a data-toggle="modal" data-target=".complain-example-modal-lg" href="" style="text-align: center;" class="btn_top">Online Complaint Form</a><br><br>

               


        </div>
        <div style="background-color: #ffffff; padding:0" class="col-md-4">
            <iframe width="100%" height="315"
                src="https://www.youtube.com/embed/WMm7ib7OEc8?autoplay=1&mute=1">
            </iframe>
        </div>
        <div class="col-md-1"></div>
    </div>

    
<!-- make complain -->
<div class="modal  complain-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Complaints</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form  method="POST" action="/complain" enctype="multipart/form-data">
         @csrf
                    <div class="row">
                    <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                    <span>Please complete the form below with details of how you believe your landlord/managing agent has not complied with the Unihouse Code, completing <span style="font-weight:bold">all</span> sections as fully as you can.</span><br>
                    <span>When your complaint is received Unipol will check if it fulfils the above criteria and may request more information from you if it does not. This may delay the process, so please try to provide all above information upfront.</span><br>
                    <span>Once a complaint has been received the landlord will be written to, informing them of the complaint and giving them <span style="font-weight:bold">7 working</span> days in which to respond. If the complaint raises concerns about property standards, Unipol may ask to inspect the property and this will take place within 10 working days of receiving your complaint.</span><br>

                    <span style="opacity: 0.5;">What us your name?</span>
                    <input name="name" id="name" type="text" required>

                    <span style="opacity: 0.5;">What us your email address?</span>
                    <input name="email" id="email" type="email"  required>
                    
                    <span style="opacity: 0.5;">What is the best number to contact you on?</span>
                    <input name="contact" id="contact" type="number"  required>

                    <span style="opacity: 0.5;">Brief Description of the Problem</span>
                    <textarea name="complain" id="complain"   required></textarea>

                    <span style="opacity: 0.5;">What is your current status?</span>
                    <select  name="tenancy_status" id="tenancy_status" required>
                        <option value="Current Tenant">Current Tenant</option>
                        <option value="Former Tenant">Former Tenant</option>
                        <option value="Tenant Living in Unihouse Managed Property">Tenant Living in Unihouse Managed Property</option>
                        <option value="Member of The Community">Member of The Community</option>
                        <option value="Tenant or Community Representative">Tenant or Community Representative</option>
                    </select>
                    <span style="opacity: 0.5;">University</span>
                    <select name="university" id="university" type="text" required>
                        <option value="0">Select University</option>
                        @foreach($data as $data)
                        <option value="{{$data->name}}">{{$data->name}}</option>
                        @endforeach
                    </select>

                    <span style="opacity: 0.5;">What is the address of the property concerned</span>
                    <textarea name="property_address" id="property_address" required></textarea>

                    <span style="opacity: 0.5;">The name of the landlord / agency concerned</span>
                    <select name="landlord_name" id="landlord_name" type="text" required>
                        <option value="0">Select landlord</option>
                        @foreach($data_landlord as $lord)
                        <option value="{{$lord->contact_name}}">{{$lord->contact_name}}</option>
                        @endforeach
                    </select>

                    <span style="opacity: 0.5;">Type of tenancy</span>
                    <select  name="tenancy_type" id="tenancy_type" required>
                        <option value="Single">Single</option>
                        <option value="Joint">Joint</option>
                    </select>

                    <span style="opacity: 0.5;">Do you have any supporting evidence for your complaint? (You must provide evidence that this matter has been reported in writing to the landlord)</span>
                    <input name="proof" id="proof" type="file">

                    </div>
        </div>
        <div class="modal-footer">
        <button class="btn_top"> Submit </button>
        </form>
      </div>
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
}
</style>
