@extends('app_sidebar')
@section('content')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<div style="font-family: 'Open Sans', sans-serif;" class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h4 class="top">Advice</h4><br>
            <!-- <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br> -->
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 fixed-left-div">
        <button style="width:10%;margin:0px" href="#" class="btn_top"> Filter</button>
                    <select class="select" style="width:100px;border:none;unset:all" name="house" id="house">
                        <option value="volvo">All</option>
                        <option value="volvo">Students</option>
                        <option value="saab">Parents</option>
                        <option value="mercedes">Families</option>
                        <option value="mercedes">Landloards</option>
                        <option value="mercedes">Tenants</option>
                    </select>

                    <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg" style="float:right">Keep me informed</a>
        </div>
        </div>
        <div class="col-md-1"></div><br>
    </div>


    <div style="font-family: 'Open Sans', sans-serif;" id="all" class="row">
        <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-4 card">
                        <h1 style="font-size:24px">ABOUT YOUR TENANCY AND MOVING IN</h1>
                         <p style="padding-top:10px"><br>
                         UEW | UCC | UG  
                        Find out about the Tenancy Agreement, other useful documents relating to it and what to bring with you to University
                        </p>
                        <p style="text-align:center; padding-top:100px"><a data-toggle="modal" data-target=".bd1-example-modal-lg" href="#" class="btn_top">Read Article</a></p>
                    </div>
                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">LIVING IN THE PROPERTY</h1><br>
                        <p>
                        UEW | UCC | UG
                         you move in be clear how things work, how to report repairs, troubleshooting guides for common problems and what to do in an emergency
                        </p>
                        <p style="text-align:center;padding-top:100px"><a data-toggle="modal" data-target=".bd2-example-modal-lg" href="#" class="btn_top">Read Article</a></p>
                    </div>
                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">PROVIDING SUPPORT</h1><br>
                        <p>
                        UEW | UCC | UG
                        Find out how best to approach providing support to your increasingly independent daughter or son when they encounter specific difficulties along the way
                        </p>
                        <p style="text-align:center;padding-top:100px"><a href="#" class="btn_top">Read Article</a></p><br><br>
                    </div>

                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">TENANCY SUPPORT</h1><br>
                        <p>
                        UCC | UG
                        It’s not uncommon to experience friction or difficulties living in shared student accommodation. Hostelgh has a Tenancy Support Officer who can offer support
                        </p><br>
                        <p style="text-align:center"><a data-toggle="modal" data-target=".tenancy_support-example-modal-lg" href="#" class="btn_top">Read Article</a></p><br><br>
                    </div>

                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">MANAGING FINANCES</h1><br>
                        <p>
                        UCC | UG
                        Find useful information about the rent, deposits, energy costs and household bills. 
                        </p>
                        <p style="text-align:center;padding-top:100px"><a data-toggle="modal" data-target=".managing_finance-example-modal-lg" href="#" class="btn_top">Read Article</a></p><br><br>
                    </div>

                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">LANDLORD CLINIC</h1><br>
                        <p>
                        Hostelgh runs a Landlord Clinic for Landlords in UCC, UEW and UG. The purpose of the clinic is to support Landlords in providing a positive and professional renting experience to stude.. 
                        </p>
                        <p style="text-align:center;padding-top:60px"><a data-toggle="modal" data-target=".landloardclinic-example-modal-lg" href="#" class="btn_top">Read Article</a></p><br><br>
                    </div>
                    
                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">RATE YOUR LANDLORD</h1><br>
                        <p>
                        UCC
                        Rate Your Landlord gives students an opportunity to review their renting experience that will help future students in the house hunting process.   
                        </p><br><br><br><br><br>
                        <p style="text-align:center"><a data-toggle="modal" data-target=".rate_landloard-example-modal-lg" href="#" class="btn_top">Read Article</a></p><br><br>
                    </div>

                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">TENANTS RIGHTS OF REDRESS AGAINST AGENTS AND PROPERTY MANAGERS</h1><br>
                        <p>
                        Almost every person or organisation involved in property management work or lettings agency work MUST belong to an authorised redress scheme.   
                        </p>
                        <p style="text-align:center;padding-top:100px"><a data-toggle="modal" data-target=".tenant_right-example-modal-lg" href="#" class="btn_top">Read Article</a></p><br><br>
                    </div>

                    <div class="col-md-4 card"">
                        <h1 style="font-size:24px">THE END-OF-TENANCY PROCESS</h1><br>
                        <p>
                        The deposit scheme is to protect deposits, in order to comply with the law. The scheme also offers adjudication as means of resolving deposit disputes as an alternative to going to court. Below are...   
                        </p>
                        <p style="text-align:center;padding-top:135px"><a data-toggle="modal" data-target=".end_of_tenancy-example-modal-lg" href="#" class="btn_top">Read Article</a></p><br><br>
                    </div>

                </div>
            </div>
        <div class="col-md-1"></div>
    </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- keep me informed -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal  bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Keep me informed</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <span>
                If you wish to be added to our mailing list and be kept up to date with what Hostelgh are doing, please complete the form below.
            </span><br><br><br>

            <div class="row">
                <div class="col-md-5">
                    <span>First Name</span>
                </div>
                <div class="col-md-7">
                    <input style="width:100%" autocomplete="off" placeholder="what is your first name?" name="first_name" type="text">
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-5">
                    <span>Last Name</span>
                </div>
                <div class="col-md-7">
                    <input style="width:100%" autocomplete="off" placeholder="what is your last name?" name="last_name" type="text">
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-5">
                    <span>Email</span>
                </div>
                <div class="col-md-7">
                    <input style="width:100%" autocomplete="off" placeholder="what is your email?" name="email" type="email">
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-5">
                    <span>General</span>
                </div>
                <div class="col-md-7">
                    <input style="width:10%;height:35px" autocomplete="off"  name="general" type="checkbox">
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-5">
                    <span>Landloards</span>
                </div>
                <div class="col-md-7">
                    <input style="width:10%;height:35px" autocomplete="off"  name="landlords" type="checkbox">
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-5">
                    <span>Properties</span>
                </div>
                <div class="col-md-7">
                    <input style="width:10%;height:35px" autocomplete="off"  name="properties" type="checkbox">
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-5">
                    <span>News</span>
                </div>
                <div class="col-md-7">
                    <input style="width:10%;height:35px" autocomplete="off"  name="news" type="checkbox">
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-5">
                    <span>Events</span>
                </div>
                <div class="col-md-7">
                    <input style="width:10%;height:35px" autocomplete="off"  name="events" type="checkbox">
                </div>
            </div><br>

            <div class="row">
                <div class="col-md-5">
                    <span>Jobs</span>
                </div>
                <div class="col-md-7">
                    <input style="width:10%;height:35px" autocomplete="off"  name="jobs" type="checkbox">
                </div>
            </div>

        </div>
        <div class="modal-footer">
        <button href="#" class="btn_top"> Keep me up to date</button>
      </div>
    </div>
  </div>
</div>

<!-- tenency support -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal  tenancy_support-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Tenancy Agreement</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                    <div class="row">
                        <div style="padding-top:50px;background-color:#242526;padding:0;height:70px" class="col-md-12">
                            <span style="color:white;font-size:40px;padding-top:10px">What is an Assured Shorthold Tenancy Agreement?</span>
                        </div>
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                        <div class="row">
                            <div class="col-md-8">
                                <span>The Assured Shorthold Tenancy Agreement commits Hostelgh to providing the accommodation for the duration of the contract at a fixed and agreed rent. It also commits a tenant to pay rent for that period.</span>
                                <br><br>
                                <span>Contract lengths vary: they are normally 43 weeks for first-year students (starting in mid-September) but most of the houses taken by returning students are let on 52 week contracts - in some instances concessionary rents over the summer are offered.</span>
                                <br><br>
                                <span>To keep rents low it is important to keep occupancy high (the fewer empty rooms, the lower the rents need to be for those remaining). So unless exceptional circumstances can be demonstrated, Hostelgh expects all tenants to discharge their contractual obligations and the tenancy cannot be 'cancelled' or a notice period provided.</span>
                            </div>
                            <div class="col-md-4">
                                <img src="https://www.unipolhousing.org.uk/media/3467/img_8883.jpg?anchor=center&mode=crop&width=800&heightratio=0.6666666666666666666666666667&format=jpg&quality=90&slimmage=true&rnd=132157348410000000" width="100%" height="100%">
                            </div>
                        </div>
                       
                    </div>
        </div>
        <div class="modal-footer">
        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
      </div>
    </div>
  </div>
</div>

<!-- living in the property -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal  bd2-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Living In The Property</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
             <div class="row">
                <div class="col-md-6 card">
                    <span style="font-weight:bold;font-size:20px;opacity:0.5">Emergencies</span>
                    <span>Emergency repairs are required to avoid a danger to health, a risk to safety or serious damage to the building and which need immediate attention</span><br>
                    <p style="text-align:center;"><a data-toggle="modal" data-target=".emergency-example-modal-lg" href="#" class="btn_top">Find out more</a></p>
                </div>
                <div class="col-md-6 card">
                    <span style="font-weight:bold;font-size:20px;opacity:0.5">Lockouts and Replacement Keys</span><br>
                    <span>Help is at hand</span>
                    <p style="text-align:center;padding-top:70px"><a data-toggle="modal" data-target=".lockout-example-modal-lg" href="#" class="btn_top">Find out more</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 card">
                    <span style="font-weight:bold;font-size:20px;opacity:0.5">Report a Repair</span>
                    <span>Day to day repairs can be reported on your student portal or fill in this online form. Actioned by the Housing Team Monday to Friday</span><br>
                    <p style="text-align:center;"><a data-toggle="modal" data-target=".repair-example-modal-lg" href="#" class="btn_top">Find out more</a></p>
                </div>
                <div class="col-md-6 card">
                    <span style="font-weight:bold;font-size:20px;opacity:0.5">Security and safety</span><br>
                    <span>Making you aware of home security and personal safety.</span>
                    <p style="text-align:center;padding-top:30px"><a data-toggle="modal" data-target=".security-example-modal-lg" href="#" class="btn_top">Find out more</a></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 card">
                    <span style="font-weight:bold;font-size:20px;opacity:0.5">Health and Safety</span>
                    <span>All the safety systems in our properties are checked and serviced regularly. Find out more about what we do to keep our properties safe</span><br><br><br>
                    <p style="text-align:center;"><a data-toggle="modal" data-target=".health-example-modal-lg" href="#" class="btn_top">Find out more</a></p>
                </div>
                <div class="col-md-6 card">
                    <span style="font-weight:bold;font-size:20px;opacity:0.5">Managing Finances</span><br>
                    <span>Find out how Unihouse collects the rent and how to manage your other costs associated with living in the property.</span><br><br>
                    <p style="text-align:center;"><a data-toggle="modal" data-target=".finance-example-modal-lg" href="#" class="btn_top">Find out more</a></p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
      </div>
    </div>
  </div>
</div>

<!-- emergency -->
<div style="font-family: 'Open Sans', sans-serif;"  class="modal  emergency-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Living In The Property</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                    <div class="row">
                        <div style="padding-top:50px;background-color:#242526;padding:0;height:70px" class="col-md-12">
                            <span style="color:white;font-size:40px;padding-top:10px">Emergencies </span>
                        </div>
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>

                        <span style="padding-top:10px;font-weight:bold;font-size:20px">Emergency repairs need immediate attention and are repairs required to avoid</span> 
                        <ul style="padding-left: 40px;list-style-type: circle;font-size:16px">
                            <li>a danger to health,</li>
                            <li>a risk to safety </li>
                            <li>serious damage to buildings</li>
                        </ul>
                        <span style="padding-top:20px">Emergencies Contact Number<span style="font-weight:bold">+233 0542039395</span></span>

                        <span style="padding-top:10px;font-weight:bold;font-size:20px">Burglary</span> 
                        <span>In the case of an emergency that requires the emergency services (burglary or vandalism), this must be reported to the police and a crime reference number supplied to Hostelgh.</span>

                        <span>If forced entry was used, call Hostelgh so we can send someone to secure the property for you. This may be a temporary repair like boarding up a window or securing a door.</span>

                        <span>Our tenancy support staff will be in touch with you on the next working day to see if you need further assistance.</span>

                        <span style="padding-top:10px;font-weight:bold;font-size:20px">Fire</span> 
                        <span>In the case of serious fire, call 999 and then once you are safe, call Hostelgh to report what has happened.  </span>

                        <span style="padding-top:10px;font-weight:bold;font-size:20px">Flood</span> 
                        <span>A serious flood is where the water will not stop. If you can, find the stop tap to turn of the supply and limit the damage to the property. Quite often stop taps are located in kitchen cupboards near the sink. Call Hostelgh to report it. </span>

                        <span>A leak from a bath, shower, sink or washing machine will normally stop after a while, once the contents have dispersed. This is not an emergency and you should take steps to dry the area out. Do not use this area again until it is fixed, so remember to report it to Hostelgh using the normal channels. The electrics may not work for a while until they have dried out, but the modern RCD system is in place to keep you safe and once dry, you should be able to turn the effected area on again </span>

                        <span style="padding-top:10px;font-weight:bold;font-size:20px">Suspected gas leak or carbon monoxide</span> 

                        <span>Call Hostelgh and take the following action;</span>
                        <ul style="padding-left: 40px;list-style-type: circle;font-size:16px">
                            <li>Open doors and windows</li>
                            <li>Turn the gas off at the meter/main stop tap</li>
                            <li>Avoid using any naked flames or electrical switches</li>
                        </ul>
                        <span>The National Gas Emergency Service (National Grid) can be called to attend on 0800 111 999 and they will come and turn the gas off. They aim to attend within two hours. Their engineers will always 'make safe' when called to a suspected gas leak. It could be from the meter itself or an appliance in the property.</span>

                        <span>The emergency service provided by them doesn’t cover repairs to appliances (cooker/boiler installation or pipework, so you still need to report the incident to Hostelgh so we can deploy a Gas Safe registered engineer.</span>
                    </div>
        </div>
        <div class="modal-footer">
        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
      </div>
    </div>
  </div>
</div>


<!-- lockout and replacement -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal  lockout-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Locked out of your property</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                    <div class="row">
                        <div style="padding-top:50px;background-color:#242526;padding:0;height:70px" class="col-md-12">
                            <span style="color:white;font-size:40px;padding-top:10px">Locked out of your property </span>
                        </div>
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>

                        <span style="padding-top:10px;font-weight:bold;font-size:20px">You will need to come to the main UniHouse offices or the building reception when it is open to get a replacement key.</span> 
                        
                        <span>If you are locked out of your property when the main offices are not open, you need to call the 'out of hours' service </span>
                        
                        <span style="font-weight:bold">0113 2443799</span>

                        <span style="font-style:italic">Please note that repeat use of this service will incur a change</span>

                        <span>In our larger buildings, a Resident's Assistant will be called to let you back in or our security service will deploy an officer to meet you at the property and let you back in. </span>

                        <span>They will not be able to leave a copy of the key with you, so you are reliant upon housemates to provided access for you until Hostelgh's main offices are open and you can come and purchase a replacement.</span>


                        <span style="padding-top:10px;font-weight:bold;font-size:20px">If you lose your key or fob</span> 
                        <span>If you lose a key, Hostelgh charge £30 for a replacement and £15 for an electronic fob. This is to cover the cost of replacing suited and security keys and for ordering more stock.</span>

                        <span style="padding-top:10px;font-weight:bold;font-size:20px">If we need to replace the actual lock the cost is considerably higher.</span> 
                        
                        <span>If you temporarily misplace your key/fob, you may borrow one from Hostelgh for up to one week. If they are not returned to Hostelgh within this time, the full replacement charge will be made. No refunds can be given if the original key/fob is found after one week</span>

                        <span>If your key is stolen, you must report it to the police and provide a Crime Reference number to staff </span>

                        <span style="padding-top:10px;font-weight:bold;font-size:20px">Whatever the circumstances, you will need to come to the main Hostelgh offices or the building reception when it is open to get a replacement key.</span> 

                    </div>
        </div>
        <div class="modal-footer">
        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
      </div>
    </div>
  </div>
</div>


<!-- Repair -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal  repair-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Report a Repair</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                    <div class="row">
                        <div style="padding-top:50px;background-color:#242526;padding:0;height:70px" class="col-md-12">
                            <span style="color:white;font-size:40px;padding-top:10px">Report a Repair</span>
                        </div>
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>

                        <div class="col-md-6">
                            <span style="padding-top:10px;font-weight:bold;font-size:20px">Whilst we try to ensure that your property has nothing wrong with it, disrepair can happen at any time during your tenancy.</span>
                            <span style="padding-top:10px;font-weight:bold;font-size:20px">Tenants are responsible for;</span> 
                            <ul style="padding-left: 40px;list-style-type: circle;font-size:16px">
                                <li>Replacing light bulbs (except fluorescent tubes or sealed light fittings).</li>
                                <li>Unblocking sinks and drains (produts for unblocking sinks and drains are readily available at supermarkets)</li>
                                <li>The cost of replacing broken windows (unless caused by vandalism that has been reported to the police)</li>
                                <li>Resetting "trip" switches</li>
                                <li>Other minor items such as re-lighting pilot lights on boilers</li>
                            </ul>
                            <span>If you have outside drains with an exposed drain cover (which can get cluttered and blocked with dead leaves), it is your responsibility to make sure that the grill is cleaned regularly so that water does not overflow into the yard or garden. Hostelgh is responsible for other repairs.</span><br><br>
                            <span style="font-weight:bold">How to report a repair accurately</span><br><br>
                            <span>Whichever method you choose to contact us, always describe the damage or problem as fully as you can to help us make the repair as effectively as possible. If you report the problem in detail, the necessary repair can be done much more quickly</span><br><br>
                            <span>Please describe the location of a problem according to this scheme: Cellar/basement; ground floor; first floor; second floor; attic floor. Always describe the location as if you are standing in the street outside the front of the property. For example, first floor front left bedroom.</span><br><br>
                            <span>If you report a problem inaccurately or inadequately, or if a repair is unnecessary, then you may be charged a call-out fee.</span><br><br>
                            <span style="font-weight:bold">Access to the property for repairs</span><br><br>
                            <span>When reporting a problem that needs repair, you will be asked for your consent for a contractor to enter your property to do the necessary work. (They will collect a key from our office). Alternatively, you can ask for someone to call you to arrange a mutually convenient time.</span><br><br>
                            <span>Remember, most contractors have to undertake repairs between 8am and 5pm, Monday to Friday - they cannot turn out in the evenings for anything other than emergencies.</span><br><br>
                            <span>If the contractor calls at the agreed date and time and you are not in, then you will be billed for the call-out, which is normally a charge of £30 - £40.</span><br><br>
                            <span>At certain times of the year contractors may call to carry out servicing and safety checks on appliances. It is not always possible to let you know exactly when they will be making their visit, but you will be informed when the servicing will start.</span><br><br>

                        </div>
                        <div class="col-md-6">
                            <span style="padding-top:10px;font-size:20px">Report a <span style="font-weight:bold">Problem</span></span><br><br>
                            <span>Non-emergency repairs can be reported using the form below but emergency repairs should be reported by telephone on <span style="font-weight:bold">0113 243 0169.</span> </span>
                            <input type="text" id="name" name="name" placeholder="Your Name" class="form__input">
                            <input type="email" id="name" name="name" placeholder="Your Email Address" class="form__input">
                            <input type="number" id="name" name="name" placeholder="Your Phone Number" class="form__input">
                            <input type="text" id="name" name="name" placeholder="Property Address" class="form__input">
                            <span>Have yoyu reported this before?</span>
                            <input type="checkbox" id="name" name="name" class="form__input">
                            <textarea style="height:200px" type="text" id="name" name="name" placeholder="Where is the Repair Located" class="form__input"></textarea>
                            <textarea style="height:200px" type="text" id="name" name="name" placeholder="Detailed of your repair" class="form__input"></textarea>
                            <button href="#" class="btn_top">Report </button>

                        </div>
                    </div>
        </div>
        <div class="modal-footer">
        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
      </div>
    </div>
  </div>
</div>

<!-- security -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal  security-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Security and safety</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                    <div class="row">
                        <div style="padding-top:50px;background-color:#242526;padding:0;height:70px" class="col-md-12">
                            <span style="color:white;font-size:40px;padding-top:10px">Security and personal safety</span>
                        </div>
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>

                        <div class="col-md-6">
                            <span>It’s important that you consider home security and personal safety.</span><br><br>
                            <span>Big cities like UCC, UG and UEW give criminals greater opportunities, (especially student areas where there are multiple people living in shared houses) so everyone has to be extra vigilant and take extra care in protecting themselves and their property.</span><br><br>
                            <span style="padding-top:10px;font-weight:bold;font-size:20px">What are we doing to keep you safe</span><br>
                            <ul style="padding-left: 40px;list-style-type: circle;font-size:16px">
                                <li>External lighting has been fitted around many of our properties</li>
                                <li>Ground floor flats in houses and shared properties have burglar alarms. </li>
                                <li>Good quality internal and external doors, locks and letter box protectors have been provided.</li>
                                <li>Larger sites have door entry systems to enable you to identify callers before you let them in.</li>
                                <li>CCTV and door on larger sites</li>
                            </ul><br>
                            <span style="font-weight:bold">Personal safety </span><br>
                            <span>Street crime often gets a lot of publicity. Muggings and bag snatching are still quite rare. Your chance of being a victim of these sorts of crime is reduced dramatically when you are with other people.</span>
                            <ul style="padding-left: 40px;list-style-type: circle;font-size:16px">
                                <li>If you are on your own, stick to busy areas and avoid quiet shortcuts.</li>
                                <li>Ground floor flats in houses and shared properties have burglar alarms. </li>
                                <li>Good quality internal and external doors, locks and letter box protectors have been provided.</li>
                                <li>Larger sites have door entry systems to enable you to identify callers before you let them in.</li>
                                <li>CCTV and door on larger sites</li>
                            </ul><br>
                            <span style="font-weight:bold">Vacations </span><br>
                            <span>If all tenants are away from the property for a while;</span>
                            <ul style="padding-left: 40px;list-style-type: circle;font-size:16px">
                                <li>Make sure all door and windows are securely shut and all locks are used</li>
                                <li>Leave a light on in a room to deter burglars. Lights on timer switches give the impression that the property is occupied. </li>
                                <li>Use your burglar alarm if you have one</li>
                                <li>Take valuables home with you at least making sure they cannot easily be seen through windows</li>
                                <li>Empty the fridge and clean it out (leave the door open if turned off)</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                          <img src="https://www.unipolhousing.org.uk/media/3473/img_7545.jpg?anchor=center&mode=crop&rnd=132157348410000000">

                        </div>
                    </div>
        </div>
        <div class="modal-footer">
        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
      </div>
    </div>
  </div>
</div>


<!-- health and safety -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal  health-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Gas,Electricity;Fire Alarms and Fire Doors</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                    <div class="row">
                        <div style="padding-top:50px;background-color:#242526;padding:0;height:70px" class="col-md-12">
                            <span style="color:white;font-size:40px;padding-top:10px">Gas and Electricity</span>
                        </div>
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>

                        <div class="col-md-6">
                            <span style="padding-top:10px;font-weight:bold;font-size:20px">Unihouse take tenants health and safety seriously</span> 
                            <ul style="padding-left: 40px;list-style-type: circle;font-size:16px">
                                <li>all gas appliances are inspected and certificated annually, and tenants are given a copy of the most recent inspection record with their keys</li>
                                <li>all electrical systems are inspected every five years (the recommended time interval) and tenants can ask to see a copy of the most recent inspection record at Hostelgh's office </li>
                                <li>all of Hostelgh's properties have circuit breaker consumer units which trip out power if an unsafe appliance (normally a tenant's own) is being used.</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                          <img src="https://www.unipolhousing.org.uk/media/3488/gas-meter-3.jpg?anchor=center&mode=crop&rnd=132157348410000000">

                        </div>
                    </div>


                    <div class="row">
                        <div style="padding-top:50px;background-color:#242526;padding:0;height:70px" class="col-md-12">
                            <span style="color:white;font-size:40px;padding-top:10px">Smoke Detectors, Fire Alarms and Fire Doors</span>
                        </div>
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>

                        <div class="col-md-6">
                            <span style="padding-top:10px;font-weight:bold;font-size:20px">Fire Safety</span> 
                            <ul style="padding-left: 40px;list-style-type: circle;font-size:16px">
                                <li>all kitchens are provided with a fire blanket. All properties occupied by families are provided with a fire blanket and dry powder fire extinguisher. Both are serviced annually</li>
                                <li>all dwellings have an automatic smoke detection system which is hard-wired and interlinked. Larger properties have a full zoned heat and smoke detection system which includes manual break-glass call points. </li>
                                <li>all larger properties have half-hour fire doors throughout (all shared properties have a fire door on the kitchen) with self-closers, to ensure that fires are contained within the room in which they started. All shared properties and complexes have fire-protected exit routes.</li>
                            </ul>
                            <span style="padding-top:10px;font-weight:bold;font-size:20px">Please do not remove batteries or disable smoke detection in any way - fire systems are installed to protect you if there is a fire.</span><br><br>
                            <span>Fire doors are installed to protect your route of escape or prevent a fire from entering a room for a certain period of time. The doors have self-closers and fit the door frame flush so that the smoke seals around the door work in the event of a fire. Do not leave fire doors propped open, as this is the means of protection in the event of a fire.</span>
                        </div>
                        <div class="col-md-6">
                          <img src="https://www.unipolhousing.org.uk/media/3489/fire-hydrant.jpg?anchor=center&mode=crop&rnd=132157348410000000">

                        </div>
                    </div>
        </div>
        <div class="modal-footer">
        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
      </div>
    </div>
  </div>
</div>


<!-- finance -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal  finance-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Managing Finances</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                    <div class="row">
                        <div style="padding-top:50px;background-color:#242526;padding:0;height:70px" class="col-md-12">
                            <span style="color:white;font-size:40px;padding-top:10px">Late Payment Charges</span>
                        </div>
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>

                        <div class="col-md-6">
                            <span style="padding-top:10px;font-weight:bold;font-size:20px">If you are unable to pay on your rent payment date</span><br>
                            <span>It is important that if the rent is due and you are not able to pay that you contact the finance office to either arrange a short delay in the payment due date or agree a payment plan to help you complete your payments. If you have difficulty paying because of a cash flow problem and you need extra time, or you wish to discuss any special arrangements because of financial problems, please contact the Finance staff who will do their very best to help you.</span><br>
                            <span>UniHouse try to be flexible and helpful. It is not, however, UniHouse intention to become a bank and ‘lend’ money to students so we often advise students to seek assistance from the banks if you are having problems in meeting your obligations.</span><br>
                            <span style="padding-top:10px;font-weight:bold;font-size:20px">What happens if you miss payment dates?</span><br>
                            <span>If you miss a payment and have not been in touch about it, Hostelgh will take the following steps:</span>
                            <ul style="padding-left: 40px;list-style-type: circle;font-size:16px">
                                <li>Step One - the first letter will be sent out 7 days after the due date</li>
                                <li>This will normally be accompanied by a text message and/or an e-mail. The letter will give 10 days to respond.</li>
                                <li>Step Two - after 5 days a further text message and e-mail will be send and we will try to phone you drawing your attention to the debt and the lack of payment. You will be given a further three working days to respond. (If you are a joint tenant, your co tenants will be told of your debt and the possibility of them having to cover this amount if you do not).</li>
                                <li>Step Three - after 3 days a second letter will be sent, including to your home address, together with a text message and e-mail making clear that payment needed to be immediate otherwise, after 7 days, the matter will be referred to solicitors without further notification. </li>
                                <li>Step Four - after seven days a solicitor's letter will be issued giving a further 7 days for payment. The cost of referring the matter to the solicitor will be passed onto you.</li>
                                <li>Step Five - after that seven days, unless a significant payment is made then Court Action will be initiated to collect the debt and repossession papers will be served, which would enable an eviction to take place. It is possible that a debt collection agency may be involved to recover the debt even after eviction. There are some charges that will be added to your account if Hostelgh goes through the above process.</li>
                                <li>Ultimately Hostelgh will obtain a County Court Judgement against you. This can affect your credit rating and cause you difficulties in the future when you want to obtain credit cards, bank loans and mortgages. Hostelgh will pass on any costs involved in doing this. Although the above system may appear harsh it is transparent and necessary. If you have a debt with Hostelgh you will not be able to sign a further tenancy agreement with Hostelgh.</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                          <img src="https://www.unipolhousing.org.uk/media/3472/img_7584.jpg?anchor=center&mode=crop&rnd=132157348410000000">

                        </div>
                    </div>


                    <div class="row">
                        <div style="padding-top:50px;background-color:#242526;padding:0;height:70px" class="col-md-12">
                            <span style="color:white;font-size:40px;padding-top:10px">Rent Collection</span>
                        </div>
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>

                        <div class="col-md-6">
                            <span style="padding-top:10px;font-weight:bold;font-size:20px">Unihouse's Rent Collection Procedure</span><br><br>
                            <span>Your tenancy agreement is an important document. It will tell you for how long you are renting the property and are liable for the rent. It will also set out the rent payment dates. If you do not pay your rent on time and Hostelgh staff have to chase payment you will have to pay administration charges.</span><br>
                            <span>The consequences of you not paying your rent could be that you will have a County Court judgement against you, but also it will impact on future rent levels that Hostelgh charges. Having said that Hostelgh will assist students who have genuine cash flow problems and if you contact us as soon as you know you cannot make a rent payment date we will be happy to discuss the matter with you.</span><br>
                            <span>Below is the rent collection and arrears management procedure that Unihouse operates. Many landlords follow similar procedures, some are very much tougher than Hostelgh</span><br>
                            <span style="padding-top:10px;font-weight:bold;font-size:20px">Rent Payments</span><br><br>
                            <span>Your tenancy agreement states the amount of rent and the dates that you must pay your rent. Always check your bank account to ensure a rent payment has been made correctly. Hostelgh is not able to talk to your bank about your payments and account.</span><br>
                            <span style="padding-top:10px;font-weight:bold;font-size:20px">Rent payment for the whole year</span><br><br>
                            <span>Unihouse offer a discount on the total amount of rent payable if you pay all your rent in one payment by a specific date at the beginning of your tenancy. Further details are available at the time of signing your tenancy agreement.</span><br>
                            <span style="padding-top:10px;font-weight:bold;font-size:20px">If you pay by debit card or credit card via Worldpay ( through Hostelgh’s website or email link payment plan)</span><br><br>
                            <span>Please ensure that you have set up the payment correctly and that you have sufficient funds available on the dates the payments are due. If a payment needs cancelling for any reason then you need to instruct Worldpay not to make the payment before the payment date and inform Hostelgh of how you intend to pay your rent,</span><br>
                            <span>If you are aware that your bank has not made a payment then you need to check with your bank and find out why. You then need to contact the finance team at Hostelgh to arrange payment by an alternative method. If a payment is made in error to Hostelgh, due to banking time delays, a refund will take 7 to 10 working days to process a refund.</span><br>
                            <span>Please note a Worldpay agreement is linked to your debit/credit card and not your bank account. If you need to replace your card you will have to enter your new details. Make sure you keep a record of your payment plan, username and password for future access. This will have been sent to you by Worldpay in an email.</span><br>
                            <span style="padding-top:10px;font-weight:bold;font-size:20px">If you pay by Direct Debit</span><br><br>
                            <span>Please check with your bank that they have set up your Direct Debit correctly and that you have the money in your bank account to make the payments on the due dates.</span><br>
                            <span>Unihouse have pre-printed forms that you can complete and return to us. If there is not enough money in your account on the payment day, then your bank may decide not to forward the payment to Hostelgh. If this happens you will have to ask your bank to process the payment again or pay the amount due by an alternative method to Hostelgh. If a Direct Debit needs cancelling for any reason then you need to contact Hostelgh and instruct us to cancel it before the payment date. This needs to be done 10 days before the due date because of banking procedures.</span><br>
                        </div>
                        <div class="col-md-6">
                          <img src="https://www.unipolhousing.org.uk/media/3470/img_7293.jpg?anchor=center&mode=crop&rnd=132157348410000000">

                        </div>
                    </div>
        </div>
        <div class="modal-footer">
        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
      </div>
    </div>
  </div>
</div>



<!-- about your tenency -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal  bd1-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">About Your Tenancy And Moving In</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                    <div class="row">
                        <div style="padding-top:50px;background-color:#242526;padding:0;height:70px" class="col-md-12">
                            <span style="color:white;font-size:40px;padding-top:10px">About Your Tenancy </span>
                        </div>
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>

                        <span style="padding-top:10px">The Assured Shorthold Tenancy Agreement commits Hostelgh to providing the accommodation for the duration of the contract at a fixed and agreed rent. It also commits a tenant to pay rent for that period.</span><br><br>  

                        <span style="padding-top:20px">Contract lengths vary: they are normally 43 weeks for first-year students (starting in mid-September) but most of the houses taken by returning students are let on 52 week contracts - in some instances concessionary rents over the summer are offered.</span><br><br>

                        <span style="padding-top:20px">To keep rents low it is important to keep occupancy high (the fewer empty rooms, the lower the rents need to be for those remaining). So unless exceptional circumstances can be demonstrated, Hostelgh expects all tenants to discharge their contractual obligations and the tenancy cannot be 'cancelled' or a notice period provided.</span><br><br>
                    </div>
        </div>
        <div class="modal-footer">
        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
      </div>
    </div>
  </div>
</div>

<!-- Managing Finance -->
<div class="modal  managing_finance-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Managing Finances</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <div class="row">
                <div class="col-md-6 card">
                    <span style="font-weight:bold;font-size:20px;opacity:0.5">Late Payment Charges</span>
                    <span>If you cant make the rent payments, what happens?</span><br><br><br>
                    <p style="text-align:center;"><a data-toggle="modal" data-target=".latepayment-example-modal-lg" href="#" class="btn_top">Find out more</a></p>
                </div>
                <div class="col-md-6 card">
                    <span style="font-weight:bold;font-size:20px;opacity:0.5">Rent Collection</span><br>
                    <span>Find out about how Hostelgh sets its rent levels.</span><br><br>
                    <p style="text-align:center;"><a data-toggle="modal" data-target=".rentcollection-example-modal-lg" href="#" class="btn_top">Find out more</a></p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
      </div>
    </div>
  </div>
</div>


<!-- late payment support -->
<div style="font-family: 'Open Sans', sans-serif;"  class="modal  latepayment-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Late Payment Charges</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                    <div class="row">
                        <div style="padding-top:50px;background-color:#242526;padding:0;height:70px" class="col-md-12">
                            <span style="color:white;font-size:40px;padding-top:10px">If you are unable to pay on your rent payment date</span>
                        </div>
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                        <div class="row">
                            <div class="col-md-8">
                                <span>It is important that if the rent is due and you are not able to pay that you contact the 
                                    finance office to either arrange a short delay in the payment due date or agree a payment plan 
                                    to help you complete your payments. If you have difficulty paying because of a cash flow problem 
                                    and you need extra time, or you wish to discuss any special arrangements because of financial 
                                    problems, please contact the Finance staff who will do their very best to help you.</span>
                                <br><br>
                                <span>Hostelgh try to be flexible and helpful. It is not, however, Hostelgh's intention to become a bank 
                                    and ‘lend’ money to students so we often advise students to seek assistance from the banks if you 
                                    are having problems in meeting your obligations.</span>
                                <br><br>
                                <span style="font-weight:bold">What happens if you miss payment dates?</span>
                                <br><br>
                                <span>If you miss a payment and have not been in touch about it, Hostelgh will take the following steps</span>
                                <br>
                                <span style="padding-left:50px"><ul style="list-style-type:disc;">
                                    <li >Step One - the first letter will be sent out 7 days after the due date</li>
                                    <li>This will normally be accompanied by a text message and/or an e-mail. The letter will give 10 days to respond.</li>
                                    <li>Step Two - after 5 days a further text message and e-mail will be send and we will try to 
                                        phone you drawing your attention to the debt and the lack of payment. You will be given a 
                                        further three working days to respond. (If you are a joint tenant, your co tenants will be 
                                        told of your debt and the possibility of them having to cover this amount if you do not).</li>
                                    <li>Step Three - after 3 days a second letter will be sent, including to your home address, 
                                        together with a text message and e-mail making clear that payment needed to be immediate 
                                        otherwise, after 7 days, the matter will be referred to solicitors without further 
                                        notification.</li>
                                    <li>Step Four - after seven days a solicitor's letter will be issued giving a further 7 days for 
                                        payment. The cost of referring the matter to the solicitor will be passed onto you.</li>
                                    <li>Step Five - after that seven days, unless a significant payment is made then Court Action will 
                                        be initiated to collect the debt and repossession papers will be served, which would enable an 
                                        eviction to take place. It is possible that a debt collection agency may be involved to recover 
                                        the debt even after eviction. There are some charges that will be added to your account if 
                                        Hostelgh goes through the above process.</li>
                                    <li>Ultimately Hostelgh will obtain a County Court Judgement against you. This can affect your 
                                        credit rating and cause you difficulties in the future when you want to obtain credit cards, 
                                        bank loans and mortgages. Hostelgh will pass on any costs involved in doing this. Although the 
                                        above system may appear harsh it is transparent and necessary. If you have a debt with Hostelgh 
                                        you will not be able to sign a further tenancy agreement with Hostelgh.</li>
                                </ul></span>
                            </div>
                            <div class="col-md-4">
                                <img src="https://www.unipolhousing.org.uk/media/3472/img_7584.jpg?anchor=center&mode=crop&rnd=132157348410000000" width="100%" height="100%">
                            </div>
                        </div>
                       
                    </div>
        </div>
        <div class="modal-footer">
        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
      </div>
    </div>
  </div>
</div>

<!-- late rent Collection -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal  rentcollection-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Rent Collection</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                    <div class="row">
                        <div style="padding-top:50px;background-color:#242526;padding:0;height:70px" class="col-md-12">
                            <span style="color:white;font-size:40px;padding-top:10px">Rents vary, reflecting the age of the property, its location and its amenity level</span>
                        </div>
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                        <div class="row">
                            <div class="col-md-8">
                                <span style="font-weight:bold">Hostelgh's Rent Collection Procedure</span>
                                <span>Your tenancy agreement is an important document. It will tell you for how long you are renting 
                                    the property and are liable for the rent. It will also set out the rent payment dates. If you do 
                                    not pay your rent on time and Hostelgh staff have to chase payment you will have to pay 
                                    administration charges.</span>
                                <br><br>
                                <span>The consequences of you not paying your rent could be that you will have a County Court 
                                    judgement against you, but also it will impact on future rent levels that Hostelgh charges. 
                                    Having said that Hostelgh will assist students who have genuine cash flow problems and if you 
                                    contact us as soon as you know you cannot make a rent payment date we will be happy to discuss 
                                    the matter with you.</span>
                                <br><br>
                                <span>Below is the rent collection and arrears management procedure that Hostelgh operates. Many 
                                    landlords follow similar procedures, some are very much tougher than Hostelgh</span>
                                <br><br>
                                <span style="font-weight:bold">Rent Payments</span>
                                <br><br>
                                <span>Your tenancy agreement states the amount of rent and the dates that you must pay your rent. 
                                    Always check your bank account to ensure a rent payment has been made correctly. Hostelgh is not 
                                    able to talk to your bank about your payments and account.</span>
                                <br><br>
                                <span style="font-weight:bold">Rent payment for the whole year</span>
                                <br><br>
                                <span>Hostelgh offer a discount on the total amount of rent payable if you pay all your rent in one 
                                    payment by a specific date at the beginning of your tenancy. Further details are available at 
                                    the time of signing your tenancy agreement.</span>
                                <br><br>
                                <span style="font-weight:bold">If you pay by debit card or credit card via Worldpay ( through Hostelgh’s website or email link payment plan)</span>
                                <br><br>
                                <span>Please ensure that you have set up the payment correctly and that you have sufficient funds 
                                        available on the dates the payments are due. If a payment needs cancelling for any reason then 
                                        you need to instruct Worldpay not to make the payment before the payment date and inform Hostelgh 
                                        of how you intend to pay your rent,</span>
                                <br><br>
                                <span>If you are aware that your bank has not made a payment then you need to check with your bank 
                                    and find out why. You then need to contact the finance team at Hostelgh to arrange payment by an 
                                    alternative method. If a payment is made in error to Hostelgh, due to banking time delays, a refund 
                                    will take 7 to 10 working days to process a refund.</span>
                                <br><br>
                                <span>Please note a Worldpay agreement is linked to your debit/credit card and not your bank account. 
                                    If you need to replace your card you will have to enter your new details. Make sure you keep a 
                                    record of your payment plan, username and password for future access. This will have been sent 
                                    to you by Worldpay in an email.</span>
                                <br><br>
                                <span style="font-weight:bold">If you pay by Direct Debit</span>
                                <br><br>
                                <span>Please check with your bank that they have set up your Direct Debit correctly and that you 
                                    have the money in your bank account to make the payments on the due dates.</span>
                                <br><br>
                                <span>Hostelgh have pre-printed forms that you can complete and return to us. If there is not enough 
                                    money in your account on the payment day, then your bank may decide not to forward the payment 
                                    to Hostelgh. If this happens you will have to ask your bank to process the payment again or pay the 
                                    amount due by an alternative method to Hostelgh. If a Direct Debit needs cancelling for any reason 
                                    then you need to contact Hostelgh and instruct us to cancel it before the payment date. This needs 
                                    to be done 10 days before the due date because of banking procedures.</span>
                            </div>
                            <div class="col-md-4">
                                <img src="https://www.unipolhousing.org.uk/media/3470/img_7293.jpg?anchor=center&mode=crop&rnd=132157348410000000" width="100%" height="100%">
                            </div>
                        </div>
                       
                    </div>
        </div>
        <div class="modal-footer">
        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
      </div>
    </div>
  </div>
</div>



<!-- landlord clinic -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal  landloardclinic-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Landlords</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                    <div class="row">
                        <div style="padding-top:50px;background-color:#242526;padding:0;height:70px" class="col-md-12">
                            <span style="color:white;font-size:40px;padding-top:10px">Landlord Clinic</span>
                        </div>
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                        <div class="row">
                            <span>New for 2020, Hostelgh has launched a Landlord Clinic for Landlords in UCC, UEW and UG. 
                                The purpose of the clinic is to support Landlords in providing a positive and professional renting 
                                experience to students.  Telephone and web chat appointments are currently being offered.  </span>
                            <br><br>
                            <span>The Clinic can cover issues such as the following:</span>
                            <span style="padding-left:50px"><ul style="list-style-type:disc;">
                                <li>Difficult tenancy issues</li>
                                <li>Queries arising at the start, during and at the end of a tenancy</li>
                                <li>Legal and Regulatory requirements</li>
                                <li>Having the opportunity to speak with an impartial person</li>
                                <li>Advertising</li>
                                <li>The Hostelgh Code</li>
                                <li>Rate Your Landlord</li>
                            </ul></span>
                            <span style="font-weight:bold">When:</span><span>Wednesdays</span>
                            <span style="font-weight:bold">Time:</span><span>9:30am-11:30am, 20 minute appointment slots can be booked</span>
                            <span style="font-weight:bold">Where:</span><span> Hostelgh Housing Hub UCC, 155-157 Woodhouse Lane UCC, LS2 3ED</span>
                            <span style="font-weight:bold">Contact:</span><span>To book your appointment email info@hostelgh.com or call (0113) 243 0169</span>

                        </div>
                       
                    </div>
        </div>
        <div class="modal-footer">
        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
      </div>
    </div>
  </div>
</div>

<!-- rate your landlord -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal  rate_landloard-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Landlords</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                    <div class="row">
                        <div style="padding-top:50px;background-color:#242526;padding:0;height:70px" class="col-md-12">
                            <span style="color:white;font-size:40px;padding-top:10px">Rate Your Landlord - advice for landlords and review analysis</span>
                        </div>
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                        <img src="https://www.unipol.org.uk/getmedia/d3759e2c-c77e-4ad0-8814-6c0f714ac50f/RateYourLandlord.png.aspx">
                        <div class="row">
                         <span style="font-weight:bold">Overview</span>
                         <br><br>
                         <span>Rate Your Landlord is an opinion and ratings website that allows student tenants to leave feedback 
                            about their renting experiences. The site is a joint venture between Hostelgh Student Homes and UCC 
                            University Union (LUU), and is supported by all institutions and colleges in UCC. The site is available 
                            to be used by all students.</span>
                        <br><br>
                        <span style="font-weight:bold">Analysis</span>
                        <br><br>
                        <span>We have written a summary and analysis of the live reviews on the Rate Your Landlord website</span>
                        <br><br>
                        <span>The scores paint a positive picture for tenants and for landlords, with the majority of respondents 
                            reporting above average levels of satisfaction with key aspects of their accommodation.  It also gives 
                            clear indications of <span style="font-weight:bold">areas for improvement</span>, particularly around the areas of <span style="font-weight:bold">repairs and customer service</span>. 
                            Both are rooted in the management of expectations and improving communication.  Where we can all get things 
                            wrong from time to time or misjudge how long it will take to get a particularly difficult repair resolved, 
                            how we communicate with our tenants is of the utmost importance.</span>
                        <br><br>
                        <span>Rate Your Landlord can be used to your advantage and getting good reviews should lead to getting more 
                            tenants when they house hunt. See below for how to make Rate Your Landlord work for you.</span>
                        <br><br>
                        <span style="font-weight:bold">Capitalise on your good relationships</span>
                        <br><br>
                        <span>If you have good relationships with your tenants, ask them to review you. If you think they’ll 
                            score you highly then capitalise on this. Many landlords who have high ratings do so because they 
                            encourage their tenants to review them, and we advise all landlords to do this. This is the surest 
                            way of improving your own scores.</span>
                        <br><br>
                        <span style="font-weight:bold">Your right of reply - how to look good</span>
                        <br><br>
                        <span>When a tenant reviews you and decides to leave a comment (which is only about half of reviewers, 
                            they are not seeking to have a conversation or discussion with you. In fact, they are unlikely to even 
                            see your reply. It is now over to you to thank them for their feedback, provide some context for an 
                            issue or shed light on a disagreement.</span>
                        <br><br>
                        <span style="font-weight:bold">The most important thing to bear in mind is that future tenants will read your reply, and may consider 
                            their house hunting decision on how you come across.</span><span> The best landlord replies are not only short and 
                            sweet, but positive and thankful, presenting the landlord as someone with a fair temperament from whom a 
                            student would wish to rent a property.</span>
                        <br><br>
                        <span>As a landlord you have a right of reply to any review that is written about you. Once a review is 
                            moderated, Rate Your Landlord will give you five working days to respond. You will be notified via 
                            email with a unique URL link which can be used only once. Your reply is limited to 140 characters, 
                            in line with reviews. Like reviews, all replies will be moderated.</span>
                        <br><br>
                        <span>Using your right of reply is important. If you have received a good review then post an acknowledgement 
                            to thank the reviewer. If you have received a bad review, try to state clearly a considered and calm 
                            response. This will often indicate to someone looking later that you respond to criticism well and may 
                            have a very good reason for the situation. Remember, sometimes it isn't always possible to keep everyone 
                            happy but managing expectations, and urging your tenants to review you where you are confident of a good 
                            and accurate review, is likely to balance out any negative ones.</span>
                            <br><br>
                        </div>
                        <a style="text-align: center;" class="btn_top" href="rate_landloard">Rate Now</a>

                    </div>
        </div>
        <div class="modal-footer">
        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
      </div>
    </div>
  </div>
</div>



<!-- Tenant Right -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal  tenant_right-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Tenant Right</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                    <div class="row">
                        <div style="padding-top:50px;background-color:#242526;padding:0;height:70px" class="col-md-12">
                            <span style="color:white;font-size:40px;padding-top:10px">Tenants Rights of Redress against Agents and Property Managers</span>
                        </div>
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                        <div class="row">
                         <span style="font-weight:bold">Briefing for Landlords, Agents and Managers on Tenants Rights of Redress against Agents and Property Managers</span>
                         <br><br>
                         <span>Almost every person or organisation involved in ‘property management work’ or lettings agency work must belong to an authorised redress scheme. </span>
                        <br><br>
                        <span>Complaints against scheme members can be investigated, and decided on, by someone independent, without having to go to court. This came into effect on 1 October 2014.</span>
                        <br><br>
                        <span style="font-weight:bold;color:dodgerblue">Information for tenants on their rights can be found here.</span>
                        <br><br>
                        <span style="opacity:0.7">Q: Who has to join a scheme?</span>
                        <br><br>
                        <span>A:You should join if your business involves acting on instructions:</span>
                        <ul style="padding-left: 50px;list-style-type: circle;font-size:16px">
                            <li>from landlords or tenants wishing to rent residential properties in the private rented sector; or</li>
                            <li>regarding repairs, maintenance, improvements, insurance or other services to residential properties in the private rented sector.</li>
                        </ul><br><br>
                        <span style="font-style:italic">Even if landlords do not have a formal agency business, but you are paid for helping out a member of the family, or a friend, with their properties then they should join a scheme.  If a landlord has an arrangement with another landlord to cover for each other whilst on holiday they should also join a scheme.</span>
                        <br><br>
                        <span style="opacity:0.7">Q: Are there any landlords who do not have to join?</span>
                        <br><br>
                        <span>A: Landlords do not have to join if:</span>
                        <ul style="padding-left: 50px;list-style-type: circle;font-size:16px">
                            <li>they do not work on anyone else’s properties</li>
                            <li>if they are a local authority, a University, a charity housing students or a social landlord.</li>
                            <li>if all they do is publish adverts or provide information about properties to rent or if you just provide a means for landlords and tenants to communicate direct with each other.</li>

                        </ul><br><br>
                        <span style="opacity:0.7">Q: So what happens if we don't join?</span>
                        <br><br>
                        <span>A: If landlords should have joined a scheme, but have not, the Local Authority can take action and can 
                            impose a penalty of up to £5,000. The Local Authority impose and collect these penalties, and in UCC 183 
                            investigations have taken place and £47,500 of invoices have been issued, as of January 2016. A 
                            dissatisfied tenant can also still sue for compensation if they cannot claim through a redress scheme.</span>
                        <br><br>
                        <span style="opacity:0.7">Q: What Schemes are there?</span>
                        <br><br>
                        <span>A: There are three schemes that are recognised and landlords must use one of these authorised schemes. These are:</span>
                        <ul style="padding-left: 50px;list-style-type: circle;font-size:16px">
                            <li><a href="#">The Property Ombudsman</a></li>
                            <li><a href="#">Ombudsman Services Property</a></li>
                            <li><a href="#">Property Redress Scheme</a></li>
                        </ul><br><br>
                        <span style="opacity:0.7">Q: Which Scheme Should a Landlord Join – and What is Necessary?</span>
                        <br><br>
                        <span>A: Look at the individual schemes to see whether you are eligible and how much it costs to join. 
                            When landlords join a scheme they will need to comply with the scheme’s rules. These are based on 
                            existing law, accepted good practice, and principles of fair dealing.  Some landlords may need to 
                            change the way you do some things to make sure they are compliant.  A tenant could complain to the 
                            scheme if landlords do not comply with the rules.</span>
                        <br><br>
                        <span style="opacity:0.7">Q: What if a Tenant Complains?</span>
                        <br><br>
                        <span>A: The scheme will carry out an independent investigation.  The exact procedure will depend on the scheme rules.</span>
                        <br><br>
                        <span>If a complaint is upheld, the scheme can impose sanctions according to the seriousness of the complaint.
                            The scheme might just ask for an apology for something minor – but for something serious landlords can be 
                            fined and/or ordered to pay compensation of up to a maximum of £25,000. Landlords can also be expelled you 
                            from the scheme.  If no other scheme accepts you, you cannot carry on in business that involves lettings 
                            agency work or property management work.</span>
                            <br><br>
                        <span style="text-decoration:underline">Note</span>
                        <br><br>
                        <span style="font-style:italic">In this note the term landlord has been used to cover all categories of activity which includes letting agents and managing agents. </span>
                        </div>
                           
                    </div>
        </div>
        <div class="modal-footer">
        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
      </div>
    </div>
  </div>
</div>


<!-- end of tenancy process -->
<div style="font-family: 'Open Sans', sans-serif;" class="modal  end_of_tenancy-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 style="font-weight:bold" class="modal-title" id="exampleModalLabel">Tenant Right</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                    <div class="row">
                        <div style="padding-top:50px;background-color:#242526;padding:0;height:70px" class="col-md-12">
                            <span style="color:white;font-size:40px;padding-top:10px">The End-of-Tenancy Process</span>
                        </div>
                        <hr style="height:5px;border-width:0;color:gray;background-color:blue;width:100%"><br>
                        <div class="row">
                            <span>The deposit scheme is to protect deposits, in order to comply with the law. The scheme also offers
                                 adjudication as means of resolving deposit disputes as an alternative to going to court. Below are 
                                 valid points for Landlords to consider at the beginning and end of a tenancy.</span>
                        <br><br>
                         <span style="font-weight:bold;text-decoration:underline">Landlord Obligations</span>
                         <br><br>
                         <span>At the start you must protect the deposit within 30 days of receipt. At the end of the tenancy Landlords must return the deposit/ give a proposal of deductions within ten days of the end of the tenancy.</span>
                        <br><br>
                        <span style="font-weight:bold;text-decoration:underline">Holding Deposits</span>
                         <br><br>
                        <span>Some owners take a holding deposit (money to ‘hold’ a property before an agreement is signed).</span>
                        <br><br>
                        <span>Holding deposit can either be returned or converted into deposit once tenancy starts.</span>
                        <br><br>
                        <span>The deposit needs to be protected once the contract is signed</span>
                        <br><br>
                        <span style="font-weight:bold;text-decoration:underline">Checking out</span>

                        <span>It is important to try and have your tenants present at check out. The tenant may volunteer maintenance 
                            issues such as items put in the right place or curtains rehung. If the tenant is not present, ensure the 
                            report is sent as soon as possible. Once you have itemised what you intend to claim, you should return the 
                            balance within ten days.</span>
                        <br><br>
                        <span>Ideal point to: Obtain a forwarding address, check whether the heating is on or off, confirm who the utility suppliers are and get a signature on the check out report. </span>
                        <br><br>
                        <span>What goes in to a check out?</span>
                        <ul style="padding-left: 50px;list-style-type: circle;font-size:16px">
                            <li>The address, date and parties presesnt</li>
                            <li>Overview statement of how the property appears</li>
                            <li>Record changes since the check in inventory</li>
                            <li>Identify changes are 'wear and tear' or damage</li>
                            <li>Missing items or items left behind</li>
                            <li>Deal with the level of cleanliness (or dirtiness)</li>
                            <li>Maintenance issues before new tenant moves in?</li>
                            <li>Meter readings and forwarding address</li>
                            <li>Key location</li>
                        </ul><br><br>
                        <span style="font-weight:bold;text-decoration:underline">Managing Expectations (Landlords)</span>
                        <br><br>
                        <span style="opacity:0.7">As a principle, landlords cannot expect to claim more than the cost of putting right an item. If a tenancy is longer or there are more tenants in the property, it will be expected that the proportion of 'wear and tear' is higher. </span>
                        <br><br>
                        <span style="font-weight:bold;text-decoration:underline">Disputes:</span>
                        <ul style="padding-left: 50px;list-style-type: circle;font-size:16px">
                            <li>For any disputes you will need to ensure you have the following:</li>
                            <li>Copy of tenants inventory (signed)</li>
                            <li>Copy of tenancy inspections that have takesn place</li>
                            <li>Evidence of damage (pictures)</li>
                            <li>An itemised list of charges you want to claim and why</li>
                            <li>Supported correspondance between yourself and the tenants</li>
                            <li>The cost to replace or repair the item</li>
                            <li>Itemised invoice of work that has been carried out</li>
                        </ul><br><br>
                        </div>
                    </div>
        </div>
        <div class="modal-footer">
        <button href="#"  data-dismiss="modal" class="btn_top"> Close </button>
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



    #myImg,#myImg1,#myImg2,#myImg3 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    }

    #myImg,#myImg1,#myImg2,#myImg3:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal_img {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (Image) */
    .modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    }

    /* Add Animation - Zoom in the Modal */
    .modal-content, #caption {
    animation-name: zoom;
    animation-duration: 1.5s;
    }

    @keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
    }

    /* The Close Button */
    .close,.close1,.close2,.close3 {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    }

    .close:hover,
    .close:focus,
    .close1:hover,
    .close1:focus,
    .close2:hover,
    .close2:focus,
    .close3:hover,
    .close3:focus{
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
    }
</style>
