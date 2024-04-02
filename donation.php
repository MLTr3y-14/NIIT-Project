<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Welfare</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/contact.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css2?family=Hind:wght@500&display=swap" rel="stylesheet">
	<script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	
  </head>
  
<body>
<section id="top">
 <div class="container">
  <div class="row">
   <div class="top_1 clearfix">
    <div class="col-sm-7">
	 <div class="top_1l clearfix">
	  <ul class="mgt">
	   <li><i class="fa fa-map-marker"></i> Brooklyn, NY 1XYZ6, United States </li>
	   <li><i class="fa fa-mobile-phone"></i> 1-200-123-4321  </li>
	   <li><i class="fa fa-envelope"></i> <a href="#">info@gmail.com</a> </li>
	  </ul>
	 </div>
	</div>
	<div class="col-sm-5">
	 <div class="top_1r text-right clearfix">
	   <ul class="social-network social-circle mgt">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="header_top">
 <div class="container">
  <div class="row">
   <div class="header_top_1 clearfix">
    <div class="col-sm-4">
	 <div class="header_top_1l clearfix">
	  <h3 class="bold mgt"><a href="index.php"><i class="fa fa-heart"></i> Social Welfare</a></h3>
	 </div>
	</div>
	<div class="col-sm-8">
	 <div class="header_top_1r clearfix">
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
	
<section id="header_mini" class="clearfix">
	 <div class="container">
	  <div class="row">
	   <div class="header clearfix">
		<nav class="navbar">
		 <div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand bold" href="index.php"><i class="fa fa-heart"></i> Social Welfare</a>
		</div>
		<div class="collapse navbar-collapse js-navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown">
						  <a class="m_tag" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown 1 <span class="caret"></span></a>
						  <ul class="dropdown-menu drop_1" role="menu">
							<li><a href="#">Home</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Detail</a></li>
							<li><a href="#">Team</a></li>
							<li><a href="#">Contact Us</a></li>
						  </ul>
						</li>
				
			</ul>
			
		</div><!-- /.nav-collapse -->
	</nav>
	   </div>
	  </div>
	 </div>
    </section>
	
<section id="center" class="clearfix center_about">
 <div class="container">
  <div class="row">
   <div class="center_about_1 clearfix">
    <div class="col-sm-6">
	 <div class="center_about_1l clearfix">
	  <h3 class="mgt">Make A Donation</h3>
	 </div>
	</div>
	<div class="col-sm-6">
	 <div class="center_about_1r text-center clearfix">
	  <ul class="mgt">
	   <li><a href="index.php">Go Home</a></li>
	  </ul>
	 </div>
	</div>
   </div>
  </div>
 </div> 
</section>

<section id="contact" class="clearfix">
	  <div class="blog_d_page_li3  clearfix">
	     <div class="about_h text-center clearfix">
			 <h3 class="bold mgt">Fill in the details</h3>
       </div>
	   <form id="paymentForm">
		<div class="blog_d_page_li3i clearfix">
			<div class="col-sm-6 space_left">	
			 <input class="form-control" type="text" name="name" placeholder="Name" required>
			</div>
			<div class="col-sm-6 space_right">
			 <input class="form-control" type="email" id="email" placeholder="Email" required>
			</div>
		   </div>
		   <div class="blog_d_page_li3i clearfix">
			<div class="col-sm-6 space_left">
			 <input class="form-control" type="text" name="number" placeholder="Phone Number" required>
			</div>
            <br><br>
			<div class="col-sm-6 space_right">

			</div>
		   </div>
		   <div class="blog_d_page_li3i cleafix">
			<div class="col-sm-6 space_left">
             <input class="form-control" type="tel" id="amount" placeholder="Donation Amount (Naira)" required>
             <br>
			 <button type="submit" onclick="payWithPaystack()">Pay Now</button>
			</div>
	   </form> 
		 </div>
	   </div>
  </div>
 </div>
</section>

<section id="footer">
  <div class="container">
   <div class="row">
    <div class="footer_1 clearfix">
	 <div class="col-sm-3">
	  <div class="footer_1i clearfix">
	   <h3 class="col">About Us</h3>
	   <hr>
	   <ul>
	    <li><a href="#">About Us</a></li>
		<li><a href="#">Our Team</a></li>
		<li><a href="#">Volunteer Engagement</a></li>
		<li><a href="#">Communications</a></li>
		<li class="border_none"><a href="#">Services</a></li>
	   </ul>
	  </div>
	 </div>
	 <div class="col-sm-3">
	  <div class="footer_1i clearfix">
	   <h3 class="col">Discover</h3>
	   <hr>
	   <ul>
	    <li><a href="#">Mission</a></li>
		<li><a href="#">Where We are Headed</a></li>
		<li><a href="#">History</a></li>
		<li><a href="#">Board and Staff</a></li>
		<li class="border_none"><a href="#">Join Our Team</a></li>
	   </ul>
	  </div>
	 </div>
	 <div class="col-sm-3">
	  <div class="footer_1i clearfix">
	   <h3 class="col">Support</h3>
	   <hr>
	   <ul>
	    <li><a href="#">Terms of Use</a></li>
		<li><a href="#">Privacy Policy</a></li>
		<li><a href="#">Donor Privacy Policy</a></li>
		<li><a href="#">Internship</a></li>
		<li class="border_none"><a href="#">Copyright Notice</a></li>
	   </ul>
	  </div>
	 </div>
	 <div class="col-sm-3">
	  <div class="footer_1i clearfix">
	   <h3 class="col">News</h3>
	   <hr>
	   <ul>
	    <li><a href="#">Press Room</a></li>
		<li><a href="#">Effectiveness & Results</a></li>
		<li><a href="#">Advisory Panel</a></li>
		<li><a href="#">Endorsements</a></li>
		<li class="border_none"><a href="#">Annual Report</a></li>
	   </ul>
	  </div>
	 </div>
	</div>
	<div class="footer_2 clearfix">
	 <div class="col-sm-6">
	  <div class="footer_2l clearfix">
       <p>© 2023 All Rights Reserved | Design by <a class="col" href="index.php">MANUTECH</a></p>
	  </div>
	 </div>
	 <div class="col-sm-6">
	  <div class="footer_2r clearfix">
       <ul>
	    <li><a href="#">Home</a></li>
		<li><a href="#">What we do</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">FAQ</a></li>
		<li><a href="#">Get involved</a></li>
		<li><a href="#">Team</a></li>
		<li><a href="#">News</a></li>
		<li><a href="#">Contacts</a></li>
	   </ul>
	  </div>
	 </div>
	</div>
   </div>
  </div>
</section>

<div id="toTop" class="btn btn-info" style="display: block; background:#d43c18; color:#fff; border-color:#d43c18;"><span class="fa fa-chevron-up"></span></div>

<script>
$(document).ready(function(){
  $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span> Back to Top</div>');
	$(window).scroll(function () {
		if ($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();
		} else {
			$('#toTop').fadeOut();
		}
	}); 
$('#toTop').click(function(){
	$("html, body").animate({ scrollTop: 0 }, 600);
	return false;
});
});

</script>
<script src="https://js.paystack.co/v1/inline.js"></script> 
<script src="payment.js"></script>
</body>
 
</html>