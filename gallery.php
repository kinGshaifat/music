
<!DOCTYPE HTML>
<html>
<head>
<title>Music world</title>
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
					<ul class="f-icons">
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
<!--gallery-->
<div class="gallery">
	<div class="container">
		<div class="galler-top">
			<li><div class="box maxheight">
			<a class="example-image-link" href="images/g1.jpg" data-lightbox="example-1" data-title="Guidance."><img class="example-image img-responsive" src="images/g1.jpg"></a>
		</div></li>
			<li><div class="box maxheight">
			<a class="example-image-link" href="images/g2.jpg" data-lightbox="example-1" data-title="Guidance."><img class="example-image img-responsive" src="images/g2.jpg"></a>
		</div></li>
			<li><div class="box maxheight">
			<a class="example-image-link" href="images/g3.jpg" data-lightbox="example-1" data-title="Guidance."><img class="example-image img-responsive" src="images/g3.jpg"></a>
		</div></li>
			<li><div class="box maxheight">
			<a class="example-image-link" href="images/g4.jpg" data-lightbox="example-1" data-title="Guidance."><img class="example-image img-responsive" src="images/g4.jpg"></a>
		</div></li>
			<li><div class="box maxheight">
			<a class="example-image-link" href="images/g9.jpg" data-lightbox="example-1" data-title="Guidance."><img class="example-image img-responsive" src="images/g9.jpg"></a>
		</div></li>
			<li><div class="box maxheight">
			<a class="example-image-link" href="images/g7.jpg" data-lightbox="example-1" data-title="Guidance."><img class="example-image img-responsive" src="images/g7.jpg"></a>
		</div></li>
			<li><div class="box maxheight">
			<a class="example-image-link" href="images/g8.jpg" data-lightbox="example-1" data-title="Guidance."><img class="example-image img-responsive" src="images/g8.jpg"></a>
		</div></li>
			<li><div class="box maxheight">
			<a class="example-image-link" href="images/g5.jpg" data-lightbox="example-1" data-title="Guidance."><img class="example-image img-responsive" src="images/g5.jpg"></a>
		</div></li>
		<li><div class="box maxheight">
			<a class="example-image-link" href="images/g9.jpg" data-lightbox="example-1" data-title="Guidance."><img class="example-image img-responsive" src="images/g9.jpg"></a>
		</div></li>
		<div class="clearfix"></div>
		<!-- light-box -->
					<script src="js/lightbox-plus-jquery.min.js"></script>
					<link rel="stylesheet" href="css/lightbox.css">
				<!-- //light-box -->


		</div>
	</div>
</div>
<!--gallery-->
<!-- footer -->
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
			<p>Under construction</p>
		</div>
		<div class="col-md-3 social">
			<h3>Follow me</h3>
            <ul>
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
			<p><a>kinG shaifat</a></p>
		</div>
	</div>
</div>
<!-- footer -->
</body>
</html>