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

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Welcome <?php echo $result['type']." ".$result['name']; ?></title>
	
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

<!--Top_content-->
<section id="top_content" class="top_cont_outer">
  <div class="top_cont_inner">
    <div class="container">
      <div class="top_content">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont flipInY wow animated">
              <h3>Admin</h3>
			  <h2>Dashboard</h2><hr>
				
			  <h3><?php echo $result['type']; ?></h3>
              <h2><?php echo $result['name']; ?></h2>
              <p>
				  <?php echo $result['type']; ?><br>
				  <?php echo $result['email']; ?><br>
			  </p>
              <a href="Admin Profile.php" class="learn_more2">Profile</a> </div>
          </div>
          <div class="col-lg-7 col-sm-5"> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Top_content--> 
	
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