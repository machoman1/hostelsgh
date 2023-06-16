@extends('app_sidebar')
@section('content')
<div style="font-family: 'Open Sans', sans-serif;" class="container">
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-8 card">
                <h4 class="top">Hostelgh's Values</h4><br>
                <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                <span style="font-size:20px;font-weight:bold">Hostelgh is a unique student housing charity, established in 1975.</span>
                <span style="font-size:20px;font-weight:bold">We are passionate about helping students find the best housing.</span><br>
                <span>
                    We provide help and assistance to students renting in the private sector, provide direct housing to students in Winneba, Accra and Cape Coast, run a number of accreditation schemes and train and promote best practice in student housing.
                </span><br>
                <span>
                    Hostelgh is not only at the centre of student housing but is involved at every level: information, advice, policy development and setting, measuring and checking standards.
                </span><br>

                <iframe width="" height="500px"
                    src="https://www.youtube.com/embed/JdHeTdoM6c8?autoplay=1&mute=1">
                </iframe><br>

                <span style="font-weight:bold;font-size:18px">Our values are:</span>
                <p>
                   <span class="span-bold"> To be trusted</span> - as a source of help and advice to both students and landlords who want to rent and provide good quality student accommodation that contributes to a great student experience.
                </p>
                <p>
                   <span class="span-bold"> To be impartial experts</span> - giving  student consumers information and advice, based on 40 years' experience in the sector, which empowers them to make good housing choices and get the best deal available.  We establish, promote, publicise best practice in student accommodation.
                </p>
                <p>
                   <span class="span-bold"> To provide value for money</span> - providing a first class service to our users which uses the latest technology to allow on-line global accessibility; we recognise the importance of meeting differing students needs and providing value for money and choice throughout the housing process.
                </p>
                <p>
                   <span class="span-bold"> To promote safety and wellbeing</span> - setting and checking standards to make student accommodation as safe and secure as possible to give peace of mind to all concerned and providing a good quality living environment that is so important in the learning process.
                </p>
                <p>
                   <span class="span-bold"> To promote community</span> - whilst we promote individuality we encourage positive attitudes to equality, cultural diversity and the internationalism inherent in undertaking study in higher education.
                </p>
                <p>
                   <span class="span-bold"> To be ethical</span> - valuing our human resources, investing in training and sector expertise and ensuring we pay our employees the living wage.  We provide information for our tenants on how to use less energy in a comfortable living environment and use local suppliers and trades wherever possible.
                </p>
                <p>
                   <span class="span-bold"> To be transparent and accountable </span> - being answerable, as a charity to our Board of trustees and to our users we make our agenda and operations as clear and open as we can.
                </p>

                <img src="images/about.jpg">

                <span style="font-weight:bold;font-size:18px">Putting our values into practice</span>

                <p>All of our advice services to students are free</p>
                <p>Our website gives quick tips and in-depth information for those who want it</p>
                <p>
                    We recognise high quality buildings and management through robust Unipol accreditation schemes (the Codes) and promote those landlords who commit themselves to delivering this
                </p><br>

                <span style="font-weight:bold;font-size:18px">In Hostelgh own housing</span>
                <p>We house just over 3,000 students on a not for profit basis and our housing stock caters to the diversity of the student population.</p>

                <p>We offer the best deal we can to our tenants, there are no fees or hidden charges, nor do we ask adult students to be backed by a guarantees.  Our housing revenue goes to subsidise housing for students with dependents (normally families), maintain a range of low-cost accommodation, support investment in higher quality properties and helps subsidise our advice and accreditation mission.</p>

                <p>We continue to invest in sustainability with better infrastructure and more information for our tenants on energy and carbon footprint reduction.  We use local traders where possible to provide our service and improve our buildings.</p>

                <p>We aim to give our tenants a great housing experience, providing good value, promoting social academic interaction and high quality housing - we want a Unipol property to be a home from home.</p>


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