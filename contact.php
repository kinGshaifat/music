
<!DOCTYPE HTML>
<html>
<head>
<title>music world</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Music8 Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<!--webfonts-->
   <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700|Six+Caps' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
<!--banner-->
<div class="banner-1">
	<div class="header-top">
		<div class="header-bottom">
			<div class="fixed-header">
				<div class="logo">
					<h1><b>music world</b></h1>
				</div>
			<div class="hd-lt">	
			<span class="menu"> </span>
				<!-- Nav -->
				<?php include('menu.php') ?>
					
		<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".top-menu" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->
			<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-bottom").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-bottom").addClass("fixed");
				}else{
					$(".header-bottom").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<div class="header-right">
					<h6>Follow me :</h6>
					<ul>
						<li><a href="https://www.facebook.com/kingshaifat" class="facebook"> </a></li>
						<li><a href="https://plus.google.com/u/0/+SkShaifatMurshed" class="p"> </a></li>
						<li><a href="https://www.twitter.com/skshaifat" class="twitter"> </a></li>
					</ul>
							<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	 </div>
	 
	 </div>
	 </div>
</div>
<!--banner-->
<div class="contact">
		<div class="container">
			<div class="contact-top heading">
				<h3>CONTACT ME</h3>
			</div>
			<div class="contact-bottom">
				<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
				<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
				<input type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
				<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
				<div class="submit-btn">
					<form>
						<input type="submit" value="SUBMIT">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d390843.0857286627!2d88.04953608529773!3d22.675752093263746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C+West+Bengal!5e1!3m2!1sen!2sin!4v1524411215449" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h3>More Info</h3>
				<li><a href="#">How to order</a></li>
				<li><a href="#">Faq</a></li>
				<li><a href="#">Locatio</a></li>
				<li><a href="#">Shipping</a></li>
				<li><a href="#">Membership</a></li>
		</div>
		<div class="col-md-3 footer-left">
			<h3>Contact me</h3>
			<p>Under construction..!</p>
		</div>
		<div class="col-md-3 social">
			<h3>Follow me</h3>
            <ul class="f-icons">
							<li><a href="https://www.facebook.com/kingshaifat" class="facebook"> </a></li>
							<li><a href="https://plus.google.com/u/0/+SkShaifatMurshed" class="p"> </a></li>
							<li><a href="https://www.twitter.com/skshaifat" class="twitter"> </a></li>
						</ul>
		</div>
		<div class="col-md-3 footer-left">
			<h3>Newsletter</h3>
			<form>
				<input type="text" placeholder="Enter email id" required="">
			</form>
			<div class="button">
					<form>
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="clearfix"> </div>
		</div>
		<div class="clearfix"></div>
			<div class="footer-bottom">
			<p>Copyrights © 2018 Music world. All rights reserved | Design by <i>kinG shaifat</i></p>
		</div>
	</div>
</div>
<!-- footer -->
</body>
</html>