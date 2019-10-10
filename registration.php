<?php
?>




<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Registration Form  | Nigerian Legion</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>

        <!-- Bootsrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">


        <!-- Font awesome -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- PrettyPhoto -->
        <link rel="stylesheet" href="assets/css/prettyPhoto.css">

        <!-- Template main Css -->
        <link rel="stylesheet" href="assets/css/style.css">
        
        <script src="validate.js"></script>
        <!-- Modernizr -->
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
      

<style>
.well {
	height: 910px;
	margin-bottom: 10px;
}
</style>
    </head>
    <body>
    <!-- NAVBAR
    ================================================== -->

    <?php include "header.php";?>
	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h4 class="page-title">Membership Registration Page<span class="title-under"></span></h4>
			<p class="page-description">
			Apply for membership of the Corps of Commissionaire
			</p>
			
		</div>

	</div>
	
	<div class="container">
		<div class="row">
		<div class="col col-sm-6">
		<div id="condition">
		
		<h6 style="text-align:justify; padding:0px 0px 10px 50px"> Kindly read the above conditions for membership <br />before proceeding to fill the form.</h6>
		<ol style="list-style-type:1; text-align:justify">
		<li> I agree to engage myself as a Commissionaire in the Corps of Nigerian Legion, on condition that the principles 
		     and rules of the Corps are strictly maintained and to conform strictly to all the Rules and Regulations 
		     made by the Commandant-General from time to time for the maintenance of discipline and order in the Corps.</li>
		<li> I fully understand that I have no claim on any Officer, or member of the Corps for payment of any kind, and that 
			 I am dependent solely on my own exertions for remuneration.</li>
		<li> I agree to pay, or be responsible for the payment of such sums as may be chargeable to me under the Corps
			 rules for clothing, equipment, general funds, and any claims connected with the Corps which the Corps
			 may be called upon to pay on my account or account of my default or neglect.</li>
		<li>  I also agree, in case of my resignation, discharge, or dismissal from the Corps, to forfeit all sums I have paid
			  on these accounts and to return at once all the clothing, and equipments which belongs to the Corps.</li>
		<li>  I further understand and agree that if at anytime during my service i the Corps, I become incapacitated from doing
			 my duty as a Commissionaire in consequence of any disqualification arising from my health, which the Medical 
			 Officer may certify to be of a chronic nature, I shall be liable to be struck off the strength of the Corps.</li>
		<li> I have carefully read all the rules of the Corps, which  I perfectly understand and by which I agree to abide
			by, as well as abide with all other rules which may be made from time to time by the Command of the Corp for the time
			being, or the Division to which I am attached.</li>
      <li> I hereby hereby confirm that I am applying for membership of Nigerian Legion Corps of Commissionaires and solemly
       affirm that all the information provided by me in this aplication form are true to the best of my knowledge.  I also 
       pledge that, should I be admitted, I shall be of good behaviour and shall comply with the rules and regulations of 
       the Nigerian Legion Corps of Commissionaires and that I shall not in anyway bring the name of the association into 
       disrepute through my acts and actions. I equally accept that should I be found wanting in character, the Nigerian 
       Legion Corps of Commissionaires reserves the right to take appropriate disciplinary measures against me including
       summary dismissal.
		
		</div>
		</div>
		<div class="col col-sm-6 well well-lg">
			<div class="registration" id="regForm">
			
			<h5 style="text-align:center">Membership Application Form</h5>
			<p><strong>INSTRUCTION: FILL THE FIELDS WITH CORRECT INFORMATION
      <br />Use CAPITAL LETTERS all through. </strong> </p>
      <!--onsubmit="return validateForm()" -->
				 <form name="myForm" class="contact-form row" method="post" action="insert.php"  enctype="mutipart/form-data"> 
                    <div class="col col-sm-6">
                      <input type="text" class="form-control" name="sName" placeholder="SurName"><div id="sNameErr"> </div>
                    </div>
					<div class="col col-sm-6">
                      <input type="text" class="form-control" name="fName" placeholder="First Name"><div id="fNameErr"> </div>
                    </div>
					<div class="col col-sm-6">
                      <input type="text" class="form-control" name="mName" placeholder="Middle Name"><div id="mNameErr"> </div>
                    </div>
                    <div class="col col-sm-6">
                      <input type="date" class="form-control" name="dOb" placeholder=" Date of Birth" >
                    </div>
					<div class="col col-sm-6">
                      <select class="form-control" name="gender" >
					  <option value="">gender</option>
						<option value="male">Male </option>
						<option value="female">Female </option><div id="genderErr"> </div>
                    </div>
                    <div class="col col-sm-6">
                      <input type="text" class="form-control" name="blood" placeholder="Blood Group"><div id="bloodErr"> </div>
                    </div>
					<div class="col col-sm-6">
          <select class="form-control" name="religion" >
          <option value="">Religion</option>
					  <option value="christian">christian</option>
						<option value="Islam">Islam</option></select>
                      <!--<input type="text" class="form-control" name="religion" placeholder="Religion*">--><div id="religionErr"> </div>
                    </div>
					
					<div class="col col-sm-6">
                      <select class="form-control" name="mStatus" >
					  <option value="">Marital Status</option>
						<option value="married">Married</option>
						<option value="single">Single</option>
						<option value="divorced">Divorced</option>
						<option value="widow">Widow</option>
						<option value="widower">Widower</option>
						</select><div id="mStatusErr"> </div>
                    </div>
                    <div class="col col-sm-6">
                      <input type="text" class="form-control" name="lga" placeholder="Local Government of Origin*"><div id="lgaErr"> </div>
                    </div>
                    <div class="col col-sm-6">
                      <input type="text" class="form-control" name="origin" placeholder="State of Origin*"><div id="originErr"> </div>
                    </div>
					<div class="col col-sm-6">
                      <input type="text" class="form-control" name="nation" placeholder="Nationality"><div id="nationErr"> </div>
                    </div>
                    <div class="col col-sm-6">
                      <input type="text" class="form-control" name="phone"  placeholder="Telephone" maxlength="11"><div id="phoneErr"> </div>
                    </div>
					<!--<div class="col col-sm-6">
                      <input type="file" class="form-control" name="ufile" id="passport">Upload your passport photograh.
					  Picture format should be .jpg or .png. Maximum size allowed is 3MB.
                    </div>-->
					
                   
					
					
                  
            <div class="col col-sm-6">
                      <input type="email" class="form-control" name="email"  placeholder="E-mail Address"><div id="emailErr"> </div>
                    </div>
					<div class="col col-sm-6">
                      <input type="text" class="form-control" name="qualif" placeholder="Academic Qualification with dates" >
                      <div id="qualifErr"> </div>
                    </div>
					<div class="col col-sm-6">
                      <input type="text" class="form-control" name="occupation" placeholder="Occupation" ><div id="occupationErr"> </div>
                    </div>
                    <div class="col col-sm-6">
                      <input type="text" class="form-control" name="occuDesig" placeholder="Designation"><div id="occuDesigErr"> </div>
                    </div>
                    <div class="col col-sm-12">
                      <input type="text" class="form-control" name="Raddress"placeholder="Residential Address*"><div id="addressErr"> </div>
                    </div>
					<div class="col col-sm-12">
                      <input type="text" class="form-control" name="workAddress" placeholder="Adrress of Place of work(if any)"><div id="workAddressErr"> </div>
                    </div>
 <div>-----------------------------------------------------------------------------------------------------------------------------</div>
                     <!-- <div class="col col-sm-12">
                         <textarea class="form-control" name="note"placeholder="Write briefly about yourself"></textarea>
                     </div>-->
					<div class="col col-sm-6">
                      <input type="text" class="form-control" name="nOk" placeholder="Next of Kin">
                    </div>
					<div class="col col-sm-6">
                      <input type="text" class="form-control" name="nokRelate" placeholder="Relationship to Next of Kin">
                    </div>
					<div class="col col-sm-6">
                      <input type="text" class="form-control" name="nOkAge" placeholder="Next of Kin Age">
                    </div>
					<div class="col col-sm-6">
                      <input type="text" class="form-control" name="nokPhone" placeholder="Next of Kin Phone Number">
                    </div>
                    <div class="col col-sm-6">
                      <input type="text" class="form-control" name="nokmail" placeholder="Next of Kin Email">
                    </div>
					<div class="col col-sm-6">
                      <input type="text" class="form-control" name="nokOccup" placeholder="Next of Kin Occupation">
                    </div>
					 <div class="col col-sm-12">
                      <input type="text" class="form-control" name="nOkaddress"placeholder="Next of Kin Address">
                    </div>
                    <div>-----------------------------------------------------------------------------------------------------------------------------</div>
					<div class="col col-sm-6">
                      <input type="text" class="form-control" name="guarantor" placeholder="Guarantor's Name">
                    </div>
					<div class="col col-sm-6">
                      <input type="text" class="form-control" name="guaRelate" placeholder="Relationship to Guarantor">
                    </div>
					<div class="col col-sm-6">
                      <input type="text" class="form-control" name="guaAge" placeholder="Guarantor's Age">
                    </div>
					<div class="col col-sm-6">
                      <input type="text" class="form-control" name="guaPhone" placeholder="Guarantor's  Phone Number">
                    </div>
                    <div class="col col-sm-6">
                      <input type="text" class="form-control" name="guamail" placeholder="Guarantor's Email">
                    </div>
					<div class="col col-sm-6">
                      <input type="text" class="form-control" name="guaOccup" placeholder="Guarantor's  Occupation">
                    </div>
				<!--<div class="col col-sm-6">
                      <input type="file" class="form-control" name="passport" id="passport">Upload your Guarantor's passport photograh.
					  Picture format should be .jpg or .png. Maximun size allowed is 2MB.
                    </div>-->
					 <div class="col col-sm-12">
                      <input type="text" class="form-control" name="guaddress"placeholder="Guarantor's  Address*">
                    </div>
                     <div class="col col-sm-12 text-center">
                        <button type="submit" class="btn btn-default btn-style hvr-shutter-out-vertical">Submit</button>
                     </div><span ><?php echo $result; ?></span> 
					 
					
                 </form>

			</div>
		</div>
		
	</div>
	</div>
	<p> </p>
    <?php include "footer.php";?>

       



       
        
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>

        <!-- Bootsrap javascript file -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- PrettyPhoto javascript file -->
        <script src="assets/js/jquery.prettyPhoto.js"></script>



        <!-- Google map  -->
        <script src="http://maps.google.com/maps/api/js?sensor=false&amp;libraries=places" type="text/javascript"></script>


        <!-- Template main javascript -->
        <script src="assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
		<script>
		function myFunction(){
			var x= getElementById("myframe");
			x.style.backgroundColor = "white";
		}
		</script>
    </body>
</html>
