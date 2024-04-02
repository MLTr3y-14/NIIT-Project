<!DOCTYPE html>
<html lang="en">
	
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Welfare</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
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
	   <li><i class="fa fa-map-marker"></i> Miami, FL 1XYZ6, United States </li>
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
	   <ul class="nav navbar-nav navbar-right">
			<!-- Nav Item - User Info -->
				<?php
					include("config.php");
					$sel = "SELECT * FROM members";
					$query = mysqli_query($conn,$sel);
					$res = mysqli_fetch_assoc($query);
				?>
	            <li class="dropdown"><a class="font_tag" href="#" data-toggle="dropdown">
					<span class="fa fa-user">
						<?php
							echo "Hello".$res["Username"];
						?>
					</span></a>
								<ul class="dropdown-menu drop_2" style="min-width: 100px;">
									<li>
										<div class="row_1">
											<div class="col-sm-12">
											<a href="logout.php">
												<span class="mr-2 d-none d-lg-inline text-grey-600 medium">Logout <i class="fa fa-angle-double-right" style="font-size:20px"></i></span>
											</a>
											</div>
										</div>
									</li>
								</ul>
							</li>	
				 <!-- <li><a class="button mgt" href="log.php">Login</a></li> -->

				<!-- Nav Item UserInfo -->
				<!-- <li class="nav-item dropdown no-arrow">
					<a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button" aria-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="mr-2 d-none d-lg-inline text-grey-600 small">Manuel Lomien<i class="fa fa-user"></i></span>
					</a>
					</li> -->
					<!-- Dropdown - UserInfo -->
					<!-- <li class="nav-item dropdown no-arrow">
					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
								<a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button" aria-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="mr-2 d-none d-lg-inline text-grey-600 small">Profile
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i></span>
                                    
                                </a>
				</li>			 -->
				
			</ul>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="header" class="clearfix">
	 <div class="container">
	  <div class="row">
	   <div class="header clearfix">
		<nav class="navbar">
		<div class="collapse navbar-collapse js-navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a class="m_tag active_tab" href="index.php">Home</a></li>
				<li><a class="m_tag" href="about.php
				">About Us</a></li>
				<li><a class="m_tag" href="contact.php">Contact Us</a></li>
			</ul>
			
		</div><!-- /.nav-collapse -->
	</nav>
	   </div>
	  </div>
	 </div>
    </section>
	

	
<section id="center" class="clearfix center_home">
	 <div class="center clearfix">
		   <div id="carousel" class="carousel slide carousel-fade">
				<!-- Carousel items -->
				<div class="carousel-inner">
				  <div data-slide-no="0" class="item carousel-item">
					<img src="img/1.jpg" alt="">
					<div class="carousel-caption carousel-caption_1">
					  <h1>Sweet Home</h1>
					  <h3>Is a Place Everybody Needs </h3>
					  <p>Home is more than just a place; it's the sweet sanctuary everybody needs.</p>
					  <ul>
					  </ul>
					</div>
				  </div>
				  <div data-slide-no="1" class="item carousel-item active">
					<img src="img/2.jpg" alt="">
					<div class="carousel-caption carousel-caption_1">
					  <h1>Together</h1>
					  <h3>Is a Place Everybody Needs </h3>
					  <p>Together is not just a destination; it's a sanctuary everyone deserves.</p>
					  <ul>
					  </ul>
					</div>
				  </div>
				  <div data-slide-no="2" class="item carousel-item">
					<img src="img/3.jpg" alt="">
					<div class="carousel-caption carousel-caption_1">
					  <h1>Adoption</h1>
					  <h3>Is a Place Everybody Needs </h3>
					  <p>Adoption is a place everybody needs, where love finds its forever home.</p>
					  <ul>
					  </ul>
					</div>
				  </div>
				</div>
				<!-- Carousel nav -->
				<a class="carousel-control left" href="#carousel" data-slide="prev">‹</a>
				<a class="carousel-control right" href="#carousel" data-slide="next">›</a>
			  </div>
		 </div>
   </section>
   
<section id="progress">
 <div class="container">
  <div class="row">
   <div class="progress_1 clearfix">
    <div class="col-sm-3">
	 <div class="progress_1i text-center clearfix">
	  <span><i class="fa fa-shield"></i></span>
	  <h3 class="bold">Mission</h3>
	  <p>To help build a Society that guarantees the equal access to social economic and wealth creation opportunities to all</p>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="progress_1i text-center clearfix">
	  <span><i class="fa fa-users"></i></span>
	  <h3 class="bold">Events</h3>
	  <p>Discover upcoming events that make a positive impact on our community and join us in spreading kindness and support</p>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="progress_1i text-center clearfix">
	  <span><i class="fa fa-headphones"></i></span>
	  <h3 class="bold">Support</h3>
	  <p>Support is the foundation of our mission, ensuring that every individual finds the help and care they need to thrive.</p>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="progress_1i text-center clearfix">
	  <span><i class="fa fa-user-plus"></i></span>
	  <h3 class="bold">Volunteer</h3>
	  <p>Volunteering is generally considered an altruistic activity and is intended to promote goodness or improve quality of life.</p>
	 </div>
	</div>
   </div>
   <div class="progress_2 clearfix">
    <div class="col-sm-4 space_left">
	 <div class="progress_2i clearfix">
	  <img src="img/4.jpg" class="iw" alt="abc">
	 </div>
	</div>
	<div class="col-sm-5">
	 <div class="progress_2i1 clearfix">
	  <h5 class="mgt">$1965 To Go</h5>
	  <h3><a href="#">Sponsor an Orphan Child‎</a></h3>
	  <p>Volunteering is generally considered an altruistic activity and is intended to promote goodness or improve human quality of life. In return, this activity can produce a feeling of self-worth and respect. There is no financial gain involved for the individual. Volunteering is also renowned for skill development, socialization, and fun.</p>
	  <h5><a class="button" href="donation.php">Donate Now</a></h5>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="progress_2i2 clearfix">
	   <div class="progress clearfix yellow">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">75%</div>
            </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="cause">
 <div class="container">
  <div class="row">
   <div class="cause_1 clearfix">
      <div class="col-sm-6">
	 <div class="cause_1_l clearfix">
	  <h2 class="mgt">Cause List</h2>
	 </div>
	</div>
	  <div class="col-sm-6">
	 <div class="cause_1_r clearfix">
	   <div class="controls clearfix pull-right">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example" data-slide="next"></a>
                </div>
	 </div>
	</div>
   </div>
   <div id="carousel-example" class="carousel slide cause_2" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-sm-3">
                      <div class="cause_2i clearfix">
					   <div  class="cause_2ii clearfix">
					    <img src="img/a.jpg" alt="abc" class="iw">
					   </div>
					   <div  class="cause_2ii1 clearfix">
					    <span><i class="fa fa-folder"></i></span>
					   </div>
					    
					   </div> 
					  <div class="cause_2i1 clearfix">
					   <h4 class="bold"><a href="#">Proper Elderly Care</a></h4>
					   <p>Volunteering is generally considered an altruistic activity and is intended to promote goodness or improve human quality of life. </p>
					  </div>
					  <div class="cause_2i2 clearfix">
	                   <h5>Donated <span class="pull-right">90%</span></h5>
						   <div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
								</div>
							</div>
	                  </div>
                    </div>
					<div class="col-sm-3">
                      <div class="cause_2i clearfix">
					   <div  class="cause_2ii clearfix">
					    <img src="img/b.jpg" alt="abc" class="iw">
					   </div>
					   <div  class="cause_2ii1 clearfix">
					    <span><i class="fa fa-folder"></i></span>
					   </div>
					    
					   </div> 
					  <div class="cause_2i1 clearfix">
					   <h4 class="bold"><a href="#"> Clean Water Initiatives</a></h4>
					   <p>Millions lack access to clean water, leading to waterborne diseases and a cycle of poverty. Support projects that provide water purification systems.</p>
					  </div>
					  <div class="cause_2i2 clearfix">
	                   <h5>Donated <span class="pull-right">80%</span></h5>
						   <div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
								</div>
							</div>
	                  </div>
                    </div>
					<div class="col-sm-3">
                      <div class="cause_2i clearfix">
					   <div  class="cause_2ii clearfix">
					    <img src="img/c.jpg" alt="abc" class="iw">
					   </div>
					   <div  class="cause_2ii1 clearfix">
					    <span><i class="fa fa-folder"></i></span>
					   </div>
					    
					   </div> 
					  <div class="cause_2i1 clearfix">
					   <h4 class="bold"><a href="#">Education for All</a></h4>
					   <p>Empower the next generation by supporting education initiatives. Fund schools, break the cycle of poverty and create opportunities for children worldwide.</p>
					  </div>
					  <div class="cause_2i2 clearfix">
	                   <h5>Donated <span class="pull-right">75%</span></h5>
						   <div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
								</div>
							</div>
	                  </div>
                    </div>
					<div class="col-sm-3">
                      <div class="cause_2i clearfix">
					   <div  class="cause_2ii clearfix">
					    <img src="img/d.jpg" alt="abc" class="iw">
					   </div>
					   <div  class="cause_2ii1 clearfix">
					    <span><i class="fa fa-folder"></i></span>
					   </div>
					    
					   </div> 
					  <div class="cause_2i1 clearfix">
					   <h4 class="bold"><a href="#"> Environmental Conservation</a></h4>
					   <p>Combat climate change and protect biodiversity by supporting environmental conservation projects.</p>
					  </div>
					  <div class="cause_2i2 clearfix">
	                   <h5>Donated <span class="pull-right">60%</span></h5>
						   <div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
								</div>
							</div>
	                  </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-sm-3">
                      <div class="cause_2i clearfix">
					   <div  class="cause_2ii clearfix">
					    <img src="img/e.jpg" alt="abc" class="iw">
					   </div>
					   <div  class="cause_2ii1 clearfix">
					    <span><i class="fa fa-folder"></i></span>
					   </div>
					    
					   </div> 
					  <div class="cause_2i1 clearfix">
					   <h4 class="bold"><a href="#">Health</a></h4>
					   <p>Provide essential healthcare services to those in need. Support clinics, vaccination programs, to improve the health of populations.</p>
					  </div>
					  <div class="cause_2i2 clearfix">
	                   <h5>Donated <span class="pull-right">50%</span></h5>
						   <div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
								</div>
							</div>
	                  </div>
                    </div>
					<div class="col-sm-3">
                      <div class="cause_2i clearfix">
					   <div  class="cause_2ii clearfix">
					    <img src="img/f.jpg" alt="abc" class="iw">
					   </div>
					   <div  class="cause_2ii1 clearfix">
					    <span><i class="fa fa-folder"></i></span>
					   </div>
					    
					   </div> 
					  <div class="cause_2i1 clearfix">
					   <h4 class="bold"><a href="#">Empowering Women</a></h4>
					   <p>Promote gender equality by supporting initiatives that empower women and girls. Fund education, to break barriers and foster solidarity.</p>
					  </div>
					  <div class="cause_2i2 clearfix">
	                   <h5>Donated <span class="pull-right">45%</span></h5>
						   <div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
								</div>
							</div>
	                  </div>
                    </div>
					<div class="col-sm-3">
                      <div class="cause_2i clearfix">
					   <div  class="cause_2ii clearfix">
					    <img src="img/g.jpg" alt="abc" class="iw">
					   </div>
					   <div  class="cause_2ii1 clearfix">
					    <span><i class="fa fa-folder"></i></span>
					   </div>
					    
					   </div> 
					  <div class="cause_2i1 clearfix">
					   <h4 class="bold"><a href="#"> Technology for Impact</a></h4>
					   <p>Harness the power of technology for positive social change. Fund projects that provide access to technology. Type shiiii if you know wah i mean.</p>
					  </div>
					  <div class="cause_2i2 clearfix">
	                   <h5>Donated <span class="pull-right">30%</span></h5>
						   <div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
								</div>
							</div>
	                  </div>
                    </div>
					<div class="col-sm-3">
                      <div class="cause_2i clearfix">
					   <div  class="cause_2ii clearfix">
					    <img src="img/h.jpg" alt="abc" class="iw">
					   </div>
					   <div  class="cause_2ii1 clearfix">
					    <span><i class="fa fa-folder"></i></span>
					   </div>
					    
					   </div> 
					  <div class="cause_2i1 clearfix">
					   <h4 class="bold"><a href="#">Mental Health Awareness</a></h4>
					   <p>Break the stigma surrounding mental health and provide support for those in need. Fund mental health awareness campaigns.</p>
					  </div>
					  <div class="cause_2i2 clearfix">
	                   <h5>Donated <span class="pull-right">95%</span></h5>
						   <div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
								</div>
							</div>
	                  </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
 </div>
</section>

<section id="event_home">
 <div class="container">
  <div class="row">
   <div class="event_h1 clearfix">
    <div class="col-sm-6">
	 <div class="event_h1l clearfix">
	  <div class="event_h1li clearfix">
	   <h3 class="mgt">Events List</h3>
	  </div>
	  <div class="event_h1li1 clearfix">
	   <div class="col-sm-3 space_left">
	    <div class="event_h1li1l clearfix">
		 <hr>
		 <h3 class="mgt">05 <span>April</span></h3>
		</div>
	   </div>
	   <div class="col-sm-9">
	    <div class="event_h1li1r clearfix">
		 <h4 class="mgt bold"><a href="#">Workshop by Bob Doe</a></h4>
		 <h6><i class="fa fa-clock-o"></i> April 3, 2020 / 8:00 am - April 6, 2021 / 5:00 pm</h6>
		 <h6><i class="fa fa-map-marker"></i> Baltimore MD United States</h6>
		</div>
	   </div>
	  </div>
	  <div class="event_h1li1 clearfix">
	   <div class="col-sm-3 space_left">
	    <div class="event_h1li1l clearfix">
		 <hr>
		 <h3 class="mgt">08 <span>April</span></h3>
		</div>
	   </div>
	   <div class="col-sm-9">
	    <div class="event_h1li1r clearfix">
		 <h4 class="mgt bold"><a href="#">Annual Charity Dinner</a></h4>
		 <h6><i class="fa fa-clock-o"></i> April 3, 2020 / 8:00 am - April 6, 2021 / 5:00 pm</h6>
		 <h6><i class="fa fa-map-marker"></i> Baltimore MD United States</h6>
		</div>
	   </div>
	  </div>
	  <div class="event_h1li1 clearfix">
	   <div class="col-sm-3 space_left">
	    <div class="event_h1li1l clearfix">
		 <hr>
		 <h3 class="mgt">09 <span>April</span></h3>
		</div>
	   </div>
	   <div class="col-sm-9">
	    <div class="event_h1li1r clearfix">
		 <h4 class="mgt bold"><a href="#">Initial Volunteer Briefing</a></h4>
		 <h6><i class="fa fa-clock-o"></i> April 3, 2020 / 8:00 am - April 6, 2021 / 5:00 pm</h6>
		 <h6><i class="fa fa-map-marker"></i> Baltimore MD United States</h6>
		</div>
	   </div>
	  </div>
	 </div>
	</div>
	<div class="col-sm-6">
	 <div class="event_h1r clearfix">
	  <div class="event_h1r1 clearfix">
	    <h3 class="mgt">Short Information</h3>
	  </div>
	  <div class="event_h1r2 clearfix">
	   <div class="col-sm-12">
		  <ul class="mgt">
		  <li class="active"><a data-toggle="tab" href="#home">Event</a></li>
		  <li><a data-toggle="tab" href="#menu1">Press</a></li>
		  <li><a data-toggle="tab" href="#menu2">Video</a></li>
		</ul>
	   </div>
      </div>
      <div class="event_h1r3 clearfix">
			<div class="tab-content clearfix">
			  <div id="home" class="tab-pane fade in active clearfix">
				 <div class="click clearfix">
		          <div class="home_i col-sm-12 clearfix">
				   <h4 class="mgt bold">🌟 Exciting Events for a Better Tomorrow! 🌟</h4>
				   <p>Dear Friends and Supporters,

					We are thrilled to share with you a series of upcoming events that are designed to make a positive impact on our community and society as a whole. At Social Welfare, we are committed to fostering positive change and improving lives, and these events are a testament to our dedication.</p>
				  </div>
				 </div>
			  </div>
			  <div id="menu1" class="tab-pane fade clearfix">
				 <div class="click clearfix">
				   <div class="home_i col-sm-12 clearfix">
				   <h4 class="mgt bold">Jobs for disabled people</h4>
				   <p>We are thrilled to announce a groundbreaking initiative dedicated to empowering disabled individuals in their pursuit of meaningful employment. We believe that everyone deserves a chance to thrive, and that includes individuals with disabilities.</p>
				   <p>Our new program, "Jobs for Disabled People," is committed to bridging the gap between disabled job seekers and inclusive employers who recognize the unique talents and perspectives that disabled individuals bring to the workplace.</p>
				  </div>
			
				 </div>
			  </div>
			  <div id="menu2" class="tab-pane fade clearfix">
				 <div class="click clearfix">
				   <div class="home_i col-sm-12 clearfix">
				    <a href="#"><img src="img/25.jpg" class="iw" alt="abc"></a>
				  </div>
				 </div>
			  </div>
            </div>
		</div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="donate_home">
 <div class="donate_hm clearfix">
  <div class="container">
   <div class="row">
    <div class="donate_h1 text-center clearfix">
	 <div class="col-sm-12">
	   <h2 class="mgt col">No one has ever become poor by giving</h2>
	   <p class="col">At our organization, we believe in the timeless wisdom that no one has ever become poor by giving, and we're dedicated to making a positive impact in our community through acts of kindness and support.</p>
	   <h5><a class="button" href="donation.php">Donate Now!</a></h5>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="news_home">
 <div class="container">
  <div class="row">
   <div class="news_home_1 text-center clearfix">
    <div class="col-sm-12">
	  <h2 class="mgt">Latest News</h2>
	</div>
   </div>
   <div class="news_home_2 clearfix">
    <div class="col-sm-3 space_all">
	 <div class="news_home_2l clearfix">
	  <div class="news_home_2li clearfix">
	   <a href="#"><img src="img/ca.jpg" alt="abc" class="iw"></a>
	  </div>
	  <a href="#"><div class="news_home_2li1 clearfix"></div></a>
	 </div>
	</div>
	<div class="col-sm-3 space_all">
	 <div class="news_home_2r clearfix">
	  <h6 class="mgt tc">On May 29, 2014</h6>
	  <h5 class="bold"><a href="#">Donate to support the cause</a></h5>
	  <p>Every donation, builds a better future for our communities.</p>
	  <h6>By <a class="col_1" href="#">Semper Porta <span class="pull-right">0 <i class="fa fa-comment-o"></i></span></a></h6>
	  <h6>In <a class="col_1" href="#">News <span class="pull-right">24 <i class="fa fa-heart-o"></i></span></a></h6>
	 </div>
	</div>
	<div class="col-sm-3 space_all">
	 <div class="news_home_2l clearfix">
	  <div class="news_home_2li clearfix">
	   <a href="#"><img src="img/ba.jpg" alt="abc" class="iw"></a>
	  </div>
	  <a href="#"><div class="news_home_2li1 clearfix"></div></a>
	 </div>
	</div>
	<div class="col-sm-3 space_all">
	 <div class="news_home_2r clearfix">
	  <h6 class="mgt tc">On May 29, 2014</h6>
	  <h5 class="bold"><a href="#">Donate to support the cause</a></h5>
	  <p>Every donation, builds a better future for our communities.</p>
	  <h6>By <a class="col_1" href="#">Semper Porta <span class="pull-right">0 <i class="fa fa-comment-o"></i></span></a></h6>
	  <h6>In <a class="col_1" href="#">News <span class="pull-right">24 <i class="fa fa-heart-o"></i></span></a></h6>
	 </div>
	</div>
   </div>
   <div class="news_home_2 clearfix">
    <div class="col-sm-3 space_all">
	 <div class="news_home_2r clearfix">
	  <h6 class="mgt tc">On May 29, 2014</h6>
	  <h5 class="bold"><a href="#">Donate to support the cause</a></h5>
	  <p>Every donation, builds a better future for our communities.</p>
	  <h6>By <a class="col_1" href="#">Semper Porta <span class="pull-right">0 <i class="fa fa-comment-o"></i></span></a></h6>
	  <h6>In <a class="col_1" href="#">News <span class="pull-right">24 <i class="fa fa-heart-o"></i></span></a></h6>
	 </div>
	</div>
    <div class="col-sm-3 space_all">
	 <div class="news_home_2l clearfix">
	  <div class="news_home_2li clearfix">
	   <a href="#"><img src="img/ng.jpg" alt="abc" class="iw"></a>
	  </div>
	  <a href="#"><div class="news_home_2li1 clearfix"></div></a>
	 </div>
	</div>
	<div class="col-sm-3 space_all">
	 <div class="news_home_2r clearfix">
	  <h6 class="mgt tc">On May 29, 2014</h6>
	  <h5 class="bold"><a href="#">Donate to support the cause</a></h5>
	  <p>Every donation, builds a better future for our communities.</p>
	  <h6>By <a class="col_1" href="#">Semper Porta <span class="pull-right">0 <i class="fa fa-comment-o"></i></span></a></h6>
	  <h6>In <a class="col_1" href="#">News <span class="pull-right">24 <i class="fa fa-heart-o"></i></span></a></h6>
	 </div>
	</div>
	<div class="col-sm-3 space_all">
	 <div class="news_home_2l clearfix">
	  <div class="news_home_2li clearfix">
	   <a href="#"><img src="img/za.jpg" alt="abc" class="iw"></a>
	  </div>
	  <a href="#"><div class="news_home_2li1 clearfix"></div></a>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>

<section id="custom">
 <div class="container">
  <div class="row">
   <div class="news_home_1 text-center clearfix">
    <div class="col-sm-12">
	  <h2 class="mgt">Our Donators</h2>
	</div>
   </div>
   <div class="custom_1 clearfix">
    <div class="col-sm-3">
	 <div class="custom_1i clearfix">
	  <a href="#"><img src="img/19.jpg" alt="abc" class="iw"></a>
	 </div>
	 <div class="custom_1i1 clearfix">
	  <h4 class="bold"><a href="#">Semper Porta</a></h4>
	  <h5>Support Military Families</h5>
	 </div>
	 <div class="custom_1i2 clearfix">
	  <h6>Donated<span class="pull-right col_1 bold">$12300</span></h6>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="custom_1i clearfix">
	  <a href="#"><img src="img/20.jpg" alt="abc" class="iw"></a>
	 </div>
	 <div class="custom_1i1 clearfix">
	  <h4 class="bold"><a href="#">Mauris Massa</a></h4>
	  <h5>Support Military Families</h5>
	 </div>
	 <div class="custom_1i2 clearfix">
	  <h6>Donated<span class="pull-right col_1 bold">$12300</span></h6>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="custom_1i clearfix">
	  <a href="#"><img src="img/21.jpg" alt="abc" class="iw"></a>
	 </div>
	 <div class="custom_1i1 clearfix">
	  <h4 class="bold"><a href="#">Lacinia Arcu</a></h4>
	  <h5>Support Military Families</h5>
	 </div>
	 <div class="custom_1i2 clearfix">
	  <h6>Donated<span class="pull-right col_1 bold">$12300</span></h6>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="custom_1i clearfix">
	  <a href="#"><img src="img/22.jpg" alt="abc" class="iw"></a>
	 </div>
	 <div class="custom_1i1 clearfix">
	  <h4 class="bold"><a href="#">Eget Nulla</a></h4>
	  <h5>Support Military Families</h5>
	 </div>
	 <div class="custom_1i2 clearfix">
	  <h6>Donated<span class="pull-right col_1 bold">$12300</span></h6>
	 </div>
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
       <p>© 2023 All Rights Reserved | Design by <a class="col" href="index.html">MANUTECH</a></p>
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
</body>
 
</html>
?>
