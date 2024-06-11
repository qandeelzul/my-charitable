<?php
session_start();
include("Connection.php");

$email = $_SESSION['email'];
	if($email == true)
	{
		
	}
	else
	{
		header('location: Index.php');
	}
	$Query = "SELECT * from ADMIN where email = '$email'";
	$data = mysqli_query($conn, $Query);
	$result = mysqli_fetch_assoc($data);
	
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Signup</title>
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
      <div class="logo"><a href="Dashboard.php"><p style="font-size: 38px; color: #ff9000;">CharitAble</p></a></div>
      <nav class="nav" id="nav">
        <ul class="">
          <li><a href="Admin.php">Admin</a></li>
          <li><a href="Approval.php">Approvals</a></li>
          <li><a href="Users.php">Users</a></li>
          <li><a href="Donations.php">Donations</a></li>
          <li><a href="Reports.php">Reports</a></li>
          <li><a href="Complain.php">Complain Box</a></li>
          <li><a href="Logout.php">Logout</a></li>
        </ul>
      </nav>
      <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
  </div>
</header>
<!--Header_section--> 

<!-- partial:index.partial.html -->
<div class="info">
  <h1>Add New Administator</h1>
  <span>
    Fill all form field to go next step
    
  </span>
</div>

<form class="steps" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="" method="post">

  <!-- USER INFORMATION FIELD SET --> 
  <fieldset>
    <h2 class="fs-title">Personal Information</h2>
    <h3 class="fs-subtitle">We just need some Personal Information</h3>
	  
	 <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Type Fixed</label>

          <input id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="type" readonly type="text" value="Administrator" placeholder="" data-rule-required="true" data-msg-required="Please include your Password" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your First Name Field -->
	  
    <!-- Begin What's Your First Name Field -->
        <div class="hs_firstname field hs-form-field">
        
          <label for="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Full Name *</label>

          <input id="firstname-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="fname" required="required" type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Please include your Full Name" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div> 
	  
    <!-- Begin What's Your Email Field -->
        <div class="hs_email field hs-form-field">
        
          <label for="email-99a6d115-5e68-4355-a7d0-529207feb0b3_2983">Email *</label>

          <input id="email-99a6d115-5e68-4355-a7d0-529207feb0b3_2983" name="email" required="required" type="email" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid Email" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>
    <!-- End What's Your Email Field -->
	 
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
	  
	   <!-- Begin Total Number of Constituents in Your Database Field -->
        <div class="hs_email field hs-form-field hs_total_number_of_constituents_in_your_database">
        
          <label for="edit-submitted-constituent-base-total-constituents total_number_of_constituents_in_your_database-99a6d115-5e68-4355-a7d0-529207feb0b3_6344">Address *</label>

          <input id="edit-submitted-constituent-base-total-constituents" class="form-text hs-input" name="address" required="required" size="60" maxlength="128" type="text" value="" placeholder="" data-rule-required="true" data-msg-required="Please enter a valid Address" >
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        </div>

    <!-- End Total Number of Constituents in Your Database Field -->
	  
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
		$type = $_POST['type'];
		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$gender = $_POST['gender'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];

		if($type!="" && $fname!="" && $email!="" && $pass!="" && $gender!="" && $contact!="" && $address!="")
		{
			$Query = "INSERT INTO ADMIN Value ('$fname', '$email', '$pass', '$type', '$gender', '$contact', '$address')";

			$Data = mysqli_query($conn, $Query);

			if($Data)
			{
				echo ("<h1>Congratulation <b>".$fname."</b>..! </h1><br>");
				echo ("<h3>Now You Are Registered Admin</h3>");
			}
			else
			{
				echo ("<h4>Your E-Mail# <b>$email</b> Already Registered.</h4>");
			}
		}
		}
?>
