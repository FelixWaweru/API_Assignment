
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$cookie_name = "access";
$cookie_value = "";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<!DOCTYPE HTML>
<html>
<head>
<title>UndaWeb</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
.alert {
/*	position: absolute;*/
    padding: 10px;
    border-radius: 5px;
    width: 800px;
    background-color: #4AFF81;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/slimmenu.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<script src="js/jquery.min.js"></script>
</head>
<body>

<div class="content" id="home">
	<div class="header">
		<div class="wrap">
		      <header id="topnav">
			        <nav>
			        		 <ul>
			        		 	<li class="active"><a href="#home" class="scroll">Home</a></li>
								<li><a href="#team" class="scroll">About</a></li>
								<li><a href="#ourstory" class="scroll">Our work</a></li>
								<li><a href="#blog" class="scroll">Pricing</a></li>
								<li><a href="#contact" class="scroll">Contact us</a></li>								
								<div class="clear"> </div>
							</ul>
		        	</nav>
			         <h1><a href="index.html">UndaWeb</a></h1>
			        	<a href="#" id="navbtn">Nav Menu</a>
			        <div class="clear"> </div>
		        </header>
		    </div>
		</div>

	<!-- Please check out this cookie. The if statement isnt working for me -->	
	
<?php 
if(!isset($_COOKIE[$cookie_name])) { ?>
 <center>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <h1 style = "color: black; font-size: 150%;"><strong><center>Welcome Back</center></strong></h1>
</div>
</center>
<?php ; } ?>
		<!-----script------------->
		<script type="text/javascript"  src="js/menu.js"></script>

	<div class="slider" id="home"> 	
		<div class="wrap">
				<!---start-da-slider----->
			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>World class web development at</br>everyday prices</h2>
					<a href="#blog" class="da-link scroll">Our packages</a>
				</div>
			</div>
		
			<script type="text/javascript" src="js/jquery.cslider.js"></script>
					 <!---strat-slider---->
				    <link rel="stylesheet" type="text/css" href="css/slider.css" />
					<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
						<script type="text/javascript">
							$(function() {
							
								$('#da-slider').cslider({
									autoplay	: true,
									bgincrement	: 450
								});
							
							});
					</script>
					<!---//End-da-slider----->
			
		</div>
	</div>
</div>
<!---start-team----->
	<div  class="team" id="team">
		<div class="wrap">
			<div class="section group">
				<div class="pen">
					<img src="images/pen.png">
				</div>
				<div class="col_1_of_1 span_1_of_1">
				   <h3>What do we do?</h3>
				  <p>We offer professional web development solutions for business, personal and commerce based web sites. Basically anyone who needs coverage from above.</p>
				  <h3>Vision</h3>
				  <p>Our aim is to seamlessly transition you and your business needs into the digital age of the internet at affordable rates using professional services.</p>
				</div>
				
		 </div>
		</div>
	</div>
<!---//end-team----->
	
	<!---start-our story----->
		<div  class="ourstory" id="ourstory">
				<div class="our-story">
					<h3>Our work </h3>
				</div>	
			<div class="group_2" id="Portfolio">
				<div class="group_2_items">
						<div class="wrap">
					<div id="owl-demo1" class="owl-carousel">
						
						<div class="item">
							<div class="carousel">
						  	   <div class="group_2_img1">
									<img src="images/slider2.jpg" alt="">
								</div>
							 </div>
						</div>	
					<div class="item">
						<div class="carousel">
					  	    <div class="group_2_img1">
								<img src="images/slider3.jpg" alt="">
							</div>
						 </div>
					</div>	
					<div class="item">
						<div class="carousel">
					  	    <div class="group_2_img1">
								<img src="images/slider1.jpg" alt="">
							</div>
						 </div>
					</div>
					<div class="item">
						<div class="carousel">
					  	    <div class="group_2_img1">
								<img src="images/slider4.jpg" alt="">
							</div>
						 </div>
					</div>
					<div class="item">
						<div class="carousel">
					  	    <div class="group_2_img1">
								<img src="images/slider5.jpg" alt="">
							</div>
						 </div>
					</div>		
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Owl Carousel Assets -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		     <!-- Owl Carousel Assets -->
		    <!-- Prettify -->
		    <script src="js/owl.carousel.js"></script>
		        <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 1,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav :true,
			    scrollPerPage :true,
			    pagination : true,
    			paginationNumbers: false,
		      });
		
		    });
		    $(document).ready(function() {
		
		      $("#owl-demo1").owlCarousel({
		        items : 1,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : true,
			    scrollPerPage :true,
			    pagination : false,
    			paginationNumbers: false,
		      });
		
		    });
		   
		    </script>
		    	<!----start-pricingplans---->
	 <div  class="blog" id="blog">	  
		<div class="wrap">
		<div class="pricing-plans">
			<h5>Check out our packages and choose one that works for you.</h5>
				<div class="pricing-grids">
						<div class="pricing-grid black">
							<h3><a href="#">Basic Site</a></h3>
							<div class="price-value">
								<a href="#">6000 Ksh/page</a>
							</div>
							<ul>
								<li><a href="#">5 Web Pages Maximum</a></li>
								<li><a href="#">Free Domain Name Redirection</a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
							</ul>
							<div class="cart">
								<a class="popup-with-zoom-anim" href="#small-dialog">Inquire</a>
							</div>
						</div>
						<div class="pricing-grid green">
							<h3><a href="#">Profesional<h4>Most Popular </h4></a></h3>
									
							<div class="price-value">
								<a href="#">8000 Ksh/page</a>
							</div>
							<ul>
								<li><a href="#">Unlimited Web Pages</a></li>
								<li><a href="#">Free Domain Name Redirection</a></li>
								<li><a href="#">Backend Development</a></li>
								<li><a href="#"></a></li>
								<li><a href="#"></a></li>
							</ul>
							<div class="cart">
								<a class="popup-with-zoom-anim" href="#small-dialog">Inquire</a>
							</div>
						</div>
						<div class="pricing-grid blue">
							<h3><a href="#">Enterprise</a></h3>
							<div class="price-value">
								<a href="#">15000 Ksh/page</a>
							</div>
							<ul>
								<li><a href="#">Unlimited Web Pages</a></li>
								<li><a href="#">Free Domain Name Redirection</a></li>
								<li><a href="#">Backend Development</a></li>
								<li><a href="#">Database Intergration</a></li>
							</ul>
							<div class="cart">
								<a class="popup-with-zoom-anim" href="#small-dialog">Inquire</a>
							</div>
						</div>

						<!--Add the php to add the data to the database here>

							<div class="clear"> </div>
							<!-----pop-up-grid---->
								 <div id="small-dialog" class="mfp-hide">
									<div class="pop_up">
									 	<div class="payment-online-form-left">
											<form>
												<h4><span class="shipping"> </span>Discuss the pricing with us.</h4>
												<ul>
													<li><input class="text-box-dark" type="text" value="First Name" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"></li>
													<li><input class="text-box-dark" type="text" value="Last Name" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Email" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
													<li><input class="text-box-dark" type="text" value="Company Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company Name';}"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Phone" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
													<div class="clear"> </div>
												</ul>
												<div class="clear"> </div>
												<ul class="payment-sendbtns">
													<!-- <li><input type="reset" value="Cancel" onclick="self.close()"></li> -->
													<li><input type="submit" class = "Submit" value="Submit" onclick = "return window.alert('Thank you for your interest in our services')"></li>
												</ul>
												<div class="clear"> </div>
											</form>
										</div>
						  			</div>
								</div>
								<!-----pop-up-grid---->
							</div>
							<div class="clear"> </div>
							<h6>If you have got any questions related to pricing please get, in touch with us using the form below.</h6>
					</div>
				</div>
			</div>
			<!-- Add fancyBox light-box -->
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>

				<script>
					$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
					});
				});
		</script>
		<!----End-pricingplans---->
		<!----start-contact---->
		 <div  class="contact" id="contact">
		 	<div class="contact">
		 		<h3>Get in touch</h3>
		 		<p>Got any questions?to feel free to get in touch with us. We would love to hear from you.</p>
		 		<div class="wrap">
		 			<div class="con">
				  			<form method="post" action="mailto:wawerufelixprojects@gmail.com" enctype="text/plain">
				  					<input type="text"  placeholder="Name" required/> 
							    	<input type="text"   placeholder="Email " required/>
										<div class="clear"> </div>
								    <div>
								    	<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' Message';}">Message</textarea>
								    </div>
									 <div class="con-button">
											<input type="submit" class = "Submit" value="Send" onclick = "return window.alert('Thank you for your feedback')">
									</div>
							</form>
						</div>
						 <div class="clear"> </div>
					 <div class="social_icon">	
					           <ul>	
								    
								    <li class="twitter"><a href="#"><span> </span></a></li>
								    <li class="facebook"><a href="#"><span> </span></a></li>	 	
									<li class="google"><a href="#"><span> </span></a></li>
							  </ul>
		 	  		</div>
				</div>
		 	</div>
		 </div>
		<!----//End-contact---->
				<div class="footer">
					<div class="wrap">
						 <div class="footer-con">

								<div class="footer-right">
									<ul>
										<li class="active"><a href="#home" class="scroll">Home</a></li>
										<li><a href="#team" class="scroll">About</a></li>
										<li><a href="#ourstory" class="scroll">Our work</a></li>
										<li><a href="#blog" class="scroll">Pricing</a></li>
										<li><a href="#contact" class="scroll">Contact us</a></li>								
										<div class="clear"> </div>
									</ul>
								</div>
									<div class="footer-left">
										<p> 2018 &#169;<a href="#">UndaWeb</a></p>

									</div>								
								<div class="clear"> </div>
						</div>
						
					</div>
				
				</div>
			  <!-- scroll_top_btn -->
					<script type="text/javascript" src="js/move-top.js"></script>
					<script type="text/javascript" src="js/easing.js"></script>
				    <script type="text/javascript">
						$(document).ready(function() {
						
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
					
					<!---smoth-scrlling---->
				<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		
					<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		  
	 </body>
</html>
