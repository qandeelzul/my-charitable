<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Signup</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="Assets/Form/CSS/Signup.css">

	<!-- <<Attched Stylesheets>> -->
    <link rel="stylesheet" href="css/theme.css" type="text/css" />
    <link rel="stylesheet" href="css/media.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
	
<link href="Assets/Main/CSS/bootstrap.css" rel="stylesheet" type="text/css">
<link href="Assets/Main/CSS/style.css" rel="stylesheet" type="text/css">
<link href="Assets/Main/CSS/animate.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="Assets/Main/JS/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="Assets/Main/JS/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="Assets/Main/JS/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="Assets/Main/JS/wow.js"></script>

<script type="text/javascript">
	
	$(document).ready(function(e) {
        $('.res-nav_click').click(function(){
		$('ul.toggle').slideToggle(600)	
			});	
			
	$(document).ready(function() {
$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 0) {
             $('#header_outer').addClass('fixed');
         }
         else {
             $('#header_outer').removeClass('fixed');
         }
    });
	
	  });
	  

		    });	
function resizeText() {
	var preferredWidth = 767;
	var displayWidth = window.innerWidth;
	var percentage = displayWidth / preferredWidth;
	var fontsizetitle = 25;
	var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
	$(".divclass").css("font-size", newFontSizeTitle)
}
</script>
	
</head>
<body>
		
<!--Header_section-->
<header id="header_outer">
  <div class="container">
    <div class="header_section">
      <div class="logo"><a href="Index.php"><p style="font-size: 38px; color: #ff9000;">CharitAble</p></a></div>
      <nav class="nav" id="nav">
        <ul class="toggle">
          <li><a href="Index.php">Home</a></li>
          <li><a href="#service">Services</a></li>
          <li><a href="#work_outer">About</a></li>
          <li><a href="#client_outer">Eligibility</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="Signup.php">Sign Up</a></li>
          <li><a href="Login.php">Login</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <ul class="">
          <li><a href="Index.php">Home</a></li>
          <li><a href="#service">Services</a></li>
          <li><a href="#work_outer">About</a></li>
          <li><a href="#client_outer">Eligibility</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="Signup.php">Sign Up</a></li>
          <li><a href="Login.php">Login</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
  </div>
</header>
<!--Header_section--> 
	
<!-- partial:index.partial.html -->
<div class="info">
  <h1>Registration Form</h1>
  <span>
    Fill all form field to go next step
    
  </span>
</div>

<form class="steps" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="" method="post">
  <ul id="progressbar">
    <li class="active">User Information</li>
    <li>Martric Record</li>
    <li>Intermediate Record</li>
    <li>Current Degree</li>
    <li>Family Details</li>
  </ul>



  <!-- USER INFORMATION FIELD SET --> 
  <fieldset>
    <h2 class="fs-title">Personal Information</h2>
    <h3 class="fs-subtitle">We just need some Personal Information</h3>
    <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">First Name *</label>

          <input id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="fname" required="required" type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Please include your First Name" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div> 
	  
	  	<div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Last Name *</label>

          <input id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="lname" required="required" type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Please include your Last Name" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->

    <!-- Begin What's Your Email Field -->
        <div class="hs_email field hs-form-field">
        
          <label for="email-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">UOG Email *</label>

          <input id="email-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="email" required="required" type="email" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid UOG Email" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your Email Field -->
	  
    <!-- Begin Total Number of Constituents in Your Database Field -->
        <div class="hs_email field hs-form-field hs_total_number_of_constituents_in_your_database">
        
          <label for="edit-submitted-constituent-base-total-constituents total_number_of_constituents_in_your_database-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">UOG Roll No# *</label>

          <input id="edit-submitted-constituent-base-total-constituents" class="form-text hs-input" name="roll_no" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid UOG Roll No#" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
	  
	 <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Password *</label>

          <input id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="password" required="required" type="password" value="" placeholder="" data-rule-required="true" data-msg-required="Please include your Password" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->
	  
	 <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Gender *</label>

		  <select id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" data-rule-required="true" data-msg-required="Please Select Your Gender" name="gender">
			<option value="">Gender</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			<option value="Other">Other</option>
			
			</select>
			
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->
	  
	   <!-- Begin Total Number of Constituents in Your Database Field -->
        <div class="hs_email field hs-form-field hs_total_number_of_constituents_in_your_database">
        
          <label for="edit-submitted-constituent-base-total-constituents total_number_of_constituents_in_your_database-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">Contact No# *</label>

          <input id="edit-submitted-constituent-base-total-constituents" class="form-text hs-input" name="contact" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid Contact No#" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>

    <!-- End Total Number of Constituents in Your Database Field -->
	  
	   <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">UOG Campus *</label>

		  <select id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" data-rule-required="true" data-msg-required="Please Select Your Campus" name="campus">
				<option value="">UOG Campus</option>
				<option value="Hafiz Hayat Campus">Hafiz Hayat Campus</option>
				<option value="Margazar Campus">Margazar Campus</option>
				<option value="GT Road - City Campus">GT Road - City Campus</option>
			</select>
			
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->
	  
    <input type="button" data-page="1" name="next" class="next action-button" value="Next" />
  </fieldset>



  <!-- ACQUISITION FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Matric Details</h2>
    <h3 class="fs-subtitle">Include Your Matric Record in all required feild.</h3>
	  
	  <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Matric *</label>

		  <select id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" data-rule-required="true" data-msg-required="Please Select Your Matric Degree" name="matric_degree">
				<option value="">Matric</option>
				<option value="Bio Science">Bio Science</option>
				<option value="Computer Science">Computer Science</option>
				<option value="Simple Arts">Simple Arts</option>
			
			</select>
			
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->
	  
      <!-- Begin Total Number of Donors in Year 1 Field -->
        <div class="form-item webform-component webform-component-textfield hs_total_number_of_donors_in_year_1 field hs-form-field" id="webform-component-acquisition--amount-1">
        
          <label for="edit-submitted-acquisition-amount-1 total_number_of_donors_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">Total Marks *</label>

          <input id="edit-submitted-acquisition-amount-1" class="form-text hs-input" name="total_number_of_donors_in_year_1" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
      <!-- End Total Number of Donors in Year 1 Field -->

      <!-- Begin Total Number of Donors in Year 2 Field -->
        <div class="form-item webform-component webform-component-textfield hs_total_number_of_donors_in_year_2 field hs-form-field" id="webform-component-acquisition--amount-2">
        
          <label for="edit-submitted-acquisition-amount-2 total_number_of_donors_in_year_2-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">Obtained Marks *</label>

          <input id="edit-submitted-acquisition-amount-2" class="form-text hs-input" name="total_number_of_donors_in_year_2" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <!-- End Total Number of Donors in Year 2 Field -->

      <!-- Begin Calc of Total Number of Donors Fields -->
      <!-- THIS FIELD IS NOT EDITABLE | GRAYED OUT -->
        <div class="form-item webform-component webform-component-textfield webform-container-inline hs_total_donor_percent_change field hs-form-field">
        
          <label for="edit-submitted-acquisition-percent-change total_donor_percent_change-99a6d115-5e68-4355-a7d0-529207feb0b3_6344"> Average Percentage</label>

          <input id="edit-submitted-acquisition-percent-change" class="form-text hs-input" name="matric_avg" readonly="readonly" size="60" maxlength="128" type="text" value="" placeholder="0">
        </div>
        <!-- End Calc of Total Number of Donors Fields -->
    <input type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="2" name="next" class="next action-button" value="Next" />
  </fieldset>



  <!-- Cultivation FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Intermediate Record</h2>
    <h3 class="fs-subtitle">How have you been nurturing donors to get better donations?</h3>
      <!-- Begin Average Gift Size in Year 1 Field -->
	  
	   <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Intermediate *</label>

		  <select id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" data-rule-required="true" data-msg-required="Please Select Your Inter Degree" name="inter_degree">
				<option value="">Intermediate</option>
				<option value="FSc - Pre Medical">FSc - Pre Medical</option>
				<option value="FSc - Pre Engineering">FSc - Pre Engineering</option>
				<option value="ICS - Math & Stat">ICS - Math & Stat</option>
				<option value="ICS - Math & Physics">ICS - Math & Physics</option>
				<option value="I.Com">I.Com</option>
				<option value="Simple FA">Simple FA</option>
			</select>
			
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->
	  
        <div class="form-item webform-component webform-component-textfield hs_average_gift_size_in_year_1 field hs-form-field" id="edit-submitted-cultivation-amount-1 average_gift_size_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">
        
          <label for="edit-submitted-cultivation-amount-1 average_gift_size_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">Total Marks *</label>

          <input id="edit-submitted-cultivation-amount-1" class="form-text hs-input" name="average_gift_size_in_year_1" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <!-- End Average Gift Size in Year 1 Field -->

      <!-- Begin Average Gift Size in Year 2 Field -->
        <div class="form-item webform-component webform-component-textfield hs_average_gift_size_in_year_2 field hs-form-field" id="webform-component-cultivation--amount-2">
        
          <label for="edit-submitted-cultivation-amount-2 average_gift_size_in_year_2-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">Obtained Marks *</label>

          <input id="edit-submitted-cultivation-amount-2" class="form-text hs-input" name="average_gift_size_in_year_2" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <!-- End Average Gift Size in Year 2 Field -->

      <!-- Begin Average Gift Size Perchent Change Field -->
      <!-- THIS FIELD IS NOT EDITABLE | GRAYED OUT -->
        <div class="form-item webform-component webform-component-textfield webform-container-inline hs_average_gift_size_percent_change field hs-form-field" id="webform-component-cultivation--percent-change1">
        
          <label for="edit-submitted-cultivation-percent-change1 average_gift_size_percent_change-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">Average Percentage</label>

          <input id="edit-submitted-cultivation-percent-change1" class="form-text hs-input" name="inter_avg" readonly="readonly" size="60" maxlength="128" type="text" value="" placeholder="0">
        </div>
        <!-- End Average Gift Size Perchent Change Field -->
    <input type="button" data-page="3" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="3" name="next" class="next action-button" value="Next" />
  </fieldset>



  <!-- Cultivation2 FIELD SET --> 
  <fieldset>
    <h2 class="fs-title">Current Degree Details</h2>
    <h3 class="fs-subtitle">Let's talk about your donations as a whole</h3>
              <!-- Begin Total Giving In Year 1 Field -->
	  
	  <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Current Degree *</label>

		  <select id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" data-rule-required="true" data-msg-required="Please Select Your Current Degree" name="current_degree">
				<option value="">Current Degree</option>
				<option value="BS - Computer Science">BS - Computer Science</option>
				<option value="BS - Information Techonology">BS - Information Techonology</option>
				<option value="BS - Software Engineering">BS - Software Engineering</option>
				<option value="BS - Mathematics">BS - Mathematics</option>
				<option value="BS - Statistics">BS - Statistics</option>
				<option value="BS - English">BS - English</option>
				<option value="BS - Islamic Study">BS - Islamic Study</option>
				<option value="BS - Commerce">BS - Commerce</option>
				<option value="BS - Biochemistry">BS - Biochemistry</option>
				<option value="BS - Physics">BS - Physics</option>
				<option value="BS - Zoology">BS - Zoology</option>
				<option value="BS - Geography">BS - Geography</option>
				<option value="BS - History and Pak Studies">BS - History and Pak Studies</option>
				<option value="BS - Electrical">BS - Electrical</option>
				<option value="BS - Mechanical">BS - Mechanical</option>
				<option value="BS - Psychology">BS - Psychology</option>
				<option value="School of Law">School of Law</option>
				<option value="MSc - Computer Science">MSc - Computer Science</option>
				<option value="MSc - Information Techonology">MSc - Information Techonology</option>
				<option value="MS - Computer Science">MS - Computer Science</option>
				<option value="MS - Information Techonology">MS - Information Techonology</option>
				<option value="MS - Software Engineering">MS - Software Engineering</option>
				<option value="MS - Mathematics">MS - Mathematics</option>
				<option value="MS - Statistics">MS - Statistics</option>
				<option value="MS - English">MS - English</option>
				<option value="MS - Islamic Study">MS - Islamic Study</option>
				<option value="MS - Commerce">MS - Commerce</option>
				<option value="MS - Biochemistry">MS - Biochemistry</option>
				<option value="MS - Physics">MS - Physics</option>
				<option value="MS - Zoology">MS - Zoology</option>
				<option value="MS - Geography">MS - Geography</option>
				<option value="MS - History and Pak Studies">MS - History and Pak Studies</option>
				<option value="MS - Electrical">MS - Electrical</option>
				<option value="MS - Mechanical">MS - Mechanical</option>
				<option value="MS - Psychology">MS - Psychology</option>
			</select>
			
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->
	  
	  <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Department *</label>

		  <select id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" data-rule-required="true" data-msg-required="Please Select Your Department" name="dept">
				<option value="">Department</option>
				<option value="CS and IT">CS and IT</option>
				<option value="Medical">Medical</option>
				<option value="Electrical">Electrical</option>
				<option value="Mechanical">Mechanical</option>
				<option value="Commerce">Commerce</option>
				<option value="Islamis and Pak Studie">Islamis and Pak Studies</option>
				<option value="Mathematics">Mathematics</option>
				<option value="Law">Law</option>
				<option value="Chemistry">Chemistry</option>
				<option value="Physics">Physics</option>
			</select>
			
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->
	  
        <div class="form-item webform-component webform-component-textfield" id="webform-component-cultivation--amount-3 hs_total_giving_in_year_1 field hs-form-field">
        
          <label for=" edit-submitted-cultivation-amount-3 total_giving_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_4902">Total CGPA *</label>

          <input id="edit-submitted-cultivation-amount-3" class="form-text hs-input" name="total_giving_in_year_1" readonly="readonly" size="60" maxlength="128" type="number" value="4" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        <!-- End Total Giving In Year 1 Field -->

      <!-- Begin Total Giving In Year 2 Field -->
        <div class="form-item webform-component webform-component-textfield hs_total_giving_in_year_2 field hs-form-field" id="webform-component-cultivation--amount-4"> 
        
          <label for=" edit-submitted-cultivation-amount-4 total_giving_in_year_2-99a6d115-5e68-4355-a7d0-529207feb0b3_4902">Current CGPA *</label>

          <input id="edit-submitted-cultivation-amount-4" class="form-text hs-input" name="cgpa" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
        <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
        
        <!-- End Total Giving In Year 2 Field -->

      <!-- Begin Average Gift Size Percent Change Field 2 -->
      <!-- THIS FIELD IS NOT EDITABLE | GRAYED OUT -->
        <div class="form-item webform-component webform-component-textfield webform-container-inline hs_total_giving_percent_change field hs-form-field" id="webform-component-cultivation--percent-change2">

          <label for=" edit-submitted-cultivation-percent-change2 total_giving_percent_change-99a6d115-5e68-4355-a7d0-529207feb0b3_4902">Average Percentage </label>

          <input id="edit-submitted-cultivation-percent-change2" class="form-text hs-input" name="total_giving_percent_change" readonly="readonly" size="60" maxlength="128" type="text" value="" placeholder="0">
        </div>
        <!-- End Average Gift Size Percent Change Field 2 -->
    <input type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="4" name="next" class="next action-button" value="Next" />
  </fieldset>



  <!-- RETENTION FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Family Details</h2>
    <h3 class="fs-subtitle">How long can you keep your donors and their donations?</h3>
        <!-- Begin Total Number of Donors Who Gave in Year 1 Field -->
	  
	  <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Family Members *</label>

		  <select id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" data-rule-required="true" data-msg-required="Please Select No# of Memebrs" name="members">
				<option value="">Members</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
			</select>
			
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->
	  
	  <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Father Status *</label>

		  <select id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" data-rule-required="true" data-msg-required="Please Select Father Status" name="father_status">
				<option value="">Father</option>
				<option value="Alive">Alive</option>
				<option value="Late">Late</option>
				<option value="Separate">Separate</option>
			</select>
			
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->
	  
          <div class="form-item webform-component webform-component-textfield hs_number_of_donors_in_year_1 field hs-form-field" id="webform-component-retention--amount-1"> 
        
          <label for=" edit-submitted-retention-amount-1 number_of_donors_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Family Expenses *</label>

          <input id="edit-submitted-retention-amount-1" class="form-text hs-input" name="family_exp" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid Family Expenses">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          </div>
        <!-- End Total Number of Donors Who Gave in Year 1 Field-->

          <div class="form-item webform-component webform-component-textfield hs_number_of_donors_in_year_1 field hs-form-field" id="webform-component-retention--amount-1"> 
        
          <label for=" edit-submitted-retention-amount-1 number_of_donors_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Accommodation Expenses *</label>

          <input id="edit-submitted-retention-amount" class="form-text hs-input" name="acco_exp" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid Family Expenses">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          </div>
        <!-- End Total Number of Donors Who Gave in Year 1 Field-->

          <div class="form-item webform-component webform-component-textfield hs_number_of_donors_in_year_1 field hs-form-field" id="webform-component-retention--amount-1"> 
        
          <label for=" edit-submitted-retention-amount-1 number_of_donors_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Utilities Expenses *</label>

          <input id="edit-submitted-retention-amount-1" class="form-text hs-input" name="utility_exp" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid Family Expenses">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          </div>
        <!-- End Total Number of Donors Who Gave in Year 1 Field-->

          <div class="form-item webform-component webform-component-textfield hs_number_of_donors_in_year_1 field hs-form-field" id="webform-component-retention--amount-1"> 
        
          <label for=" edit-submitted-retention-amount-1 number_of_donors_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Monthly Income *</label>

          <input id="edit-submitted-retention-amount-1" class="form-text hs-input" name="income" required="required" size="60" maxlength="128" type="number" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid number">
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          </div>
        <!-- End Total Number of Donors Who Gave in Year 1 Field-->
		
	  <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Does Family own Transport? *</label>

		  <select id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" data-rule-required="true" data-msg-required="Please Select Transport" name="transport">
				<option value="">Transport</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
			
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->
	  
	  <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Does Family own Resident? *</label>

		  <select id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" data-rule-required="true" data-msg-required="Please Select Resident" name="resident">
				<option value="">Resident</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>
			
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->
	  
    <input type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />
	  <input type="submit" name="submit" value="Submit" class="next action-button" />
	  </form>
</fieldset>
	
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js'></script>
<script  src="Assets/Form/JS/Signup.js"></script>

	<!-- <<Attched Javascripts>> -->
<script type="text/javascript" src="JS/jquery.sudoSlider.min.js"></script>
<script type="text/javascript" src="JS/global.js"></script>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#header_outer').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script> 
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    document.getElementById('').onclick = function() {
      var section = document.createElement('section');
      section.className = 'wow fadeInDown';
	  section.className = 'wow shake';
	  section.className = 'wow zoomIn';
	  section.className = 'wow lightSpeedIn';
      this.parentNode.insertBefore(section, this);
    };
  </script> 
<script type="text/javascript">
	$(window).load(function(){
		
		$('a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 91
			}, 1500,'easeInOutExpo');
			
			event.preventDefault();
		});
	})
</script> 


<script type="text/javascript">

   
  jQuery(document).ready(function($){     
// Portfolio Isotope
	var container = $('#portfolio-wrap');	
	

	container.isotope({
		animationEngine : 'best-available',
	  	animationOptions: {
	     	duration: 200,
	     	queue: false
	   	},
		layoutMode: 'fitRows'
	});	

	$('#filters a').click(function(){
		$('#filters a').removeClass('active');
		$(this).addClass('active');
		var selector = $(this).attr('data-filter');
	  	container.isotope({ filter: selector });
        setProjects();		
	  	return false;
	});
		
		
		function splitColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = 1;
			
			
			if (winWidth > 1024) {
				columnNumb = 4;
			} else if (winWidth > 900) {
				columnNumb = 2;
			} else if (winWidth > 479) {
				columnNumb = 2;
			} else if (winWidth < 479) {
				columnNumb = 1;
			}
			
			return columnNumb;
		}		
		
		function setColumns() { 
			var winWidth = $(window).width(), 
				columnNumb = splitColumns(), 
				postWidth = Math.floor(winWidth / columnNumb);
			
			container.find('.portfolio-item').each(function () { 
				$(this).css( { 
					width : postWidth + 'px' 
				});
			});
		}		
		
		function setProjects() { 
			setColumns();
			container.isotope('reLayout');
		}		
		
		container.imagesLoaded(function () { 
			setColumns();
		});
		
	
		$(window).bind('resize', function () { 
			setProjects();			
		});

});
$( window ).load(function() {
	jQuery('#all').click();
	return false;
});
</script>
</body>
</html>

<?php

	include("Connection.php");
	if($_POST['submit'])
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$roll = $_POST['roll_no'];
		$pass = $_POST['password'];
		$gender = $_POST['gender'];
		$contact = $_POST['contact'];
		$campus = $_POST['campus'];
		$m_degree = $_POST['matric_degree'];
		$m_avg = $_POST['matric_avg'];
		$i_degree = $_POST['inter_degree'];
		$i_avg = $_POST['inter_avg'];
		$degree = $_POST['current_degree'];
		$dept = $_POST['dept'];
		$cgpa = $_POST['cgpa'];
		$members = $_POST['members'];
		$fstatus = $_POST['father_status'];
		$family_exp = $_POST['family_exp'];
		$acco_exp = $_POST['acco_exp'];
		$util_exp = $_POST['utility_exp'];
		$income = $_POST['income'];
		$trancport = $_POST['transport'];
		$resident = $_POST['resident'];
		$status = "Un-Registered";
		
		$income_avg = $family_exp + $acco_exp + $util_exp;

		if($m_avg >= 50 && $i_avg >= 50 && $cgpa >= 3.0 && $income < $income_avg)
		{
			if($fname!="" && $lname!="" && $email!="" && $roll!="" && $pass!="" && $gender!="" && $contact!="" && $campus!="" && $m_degree!="" && $m_avg!="" && $i_degree!="" && $i_avg!="" && $degree!="" && $dept!="" && $cgpa!="" && $members!="" && $fstatus!="" && $family_exp!="" && $acco_exp!="" && $util_exp!="" && $income!="" && $trancport!="" && $resident!="" && $status!="")
			{
				$Query = "INSERT into volunteer Value ('$fname', '$lname', '$email', '$roll', '$pass', '$gender', '$contact', '$campus', '$m_degree', '$m_avg', '$i_degree', '$i_avg', '$degree', '$dept', '$cgpa', '$members', '$fstatus', '$family_exp', '$acco_exp', '$util_exp', '$income', '$trancport', '$resident', '$status')";

				$Data = mysqli_query($conn, $Query);

				if($Data)
				{
					echo ("<h1>Congratulation <b>".$fname." ".$lname."</b>..! </h1><br>");
					echo ("<h3>Now You Are Registered Donor</h3>");
				}
				else
				{
					echo ("<h4>Your Roll No# <b>$roll</b> Already Registered.</h4>");
				}
		}
		}
		else
		{
			echo("Not Eligible");
		}
	}
	
?>
