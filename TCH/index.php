<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>TCH Tower</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<!-- header -->
	<div class="banner-top">
		<!-- <div class="social-bnr-agileits">
				<ul class="social-icons3">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li> 
							</ul>
			</div>
			<div class="contact-bnr-w3-agile">
				<ul>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@swayambhuhotel.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+94 (65)222-44-55</li>	
					<li class="s-bar">
						<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post">
									<input type="search" name="Search" placeholder=" " required=" " />
									<input type="submit" value="Search">
								</form>
							</div>
						</div>
					</li>
				</ul>
			</div> -->
		<div class="clearfix"></div>
	</div>
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1 style="padding-top:10px;"><a class="navbar-brand" href="index.php">TCH <span>Tower</span>
							<p class="logo_w3l_agile_caption">Your Dreamy Apartment</p>
						</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Gallery</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Rooms</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
	<!-- //header -->
	<!-- banner -->
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
									<h4>TCH Tower</h4>
									<h3>We know what you love</h3>
									<p>Welcome to our apartment</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>TCH Tower</h4>
									<h3>Stay with friends & families</h3>
									<p>Come & enjoy precious moment with us</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>TCH Tower</h4>
									<h3>want luxurious vacation?</h3>
									<p>Get accommodation today</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
		<div class="thim-click-to-bottom">
			<a href="#about" class="scroll">
				<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
			</a>
		</div>
	</div>
	<!-- //banner -->
	<!--//Header-->
	<!-- //Modal1 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>TCH <span>Tower</span></h4>
					<img src="images/1.jpg" alt=" " class="img-responsive">
					<h5>We know what you love</h5>
					<p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes TCH Tower one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<div id="availability-agileits">
		<div class="col-md-12 book-form-left-w3layouts">
			<a href="admin/reservation.php">
				<h2>ROOM RESERVATION</h2>
			</a>
		</div>

		<div class="clearfix"> </div>
	</div>
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="agileits_banner_bottom">
				<h3><span>Experience a good stay, enjoy fantastic offers</span> Find our friendly welcoming reception</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_road"></span>
							<h4 class="cbp-ig-title">MASTER BEDROOMS</h4>
							<span class="cbp-ig-category">TCH Tower</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">VIEW BALCONY</h4>
							<span class="cbp-ig-category">TCH Tower</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_users"></span>
							<h4 class="cbp-ig-title">DINE AND LOUNGE</h4>
							<span class="cbp-ig-category">TCH Tower</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">WIFI COVERAGE</h4>
							<span class="cbp-ig-category">TCH Tower</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner-bottom -->
	<!-- /about -->
	<div class="about-wthree" id="about">
		<div class="container">
			<div class="ab-w3l-spa">
				<h3 class="title-w3-agileits title-black-wthree">About TCH Tower</h3>
				<p class="about-para-w3ls">This is one of the few remarkable landmark of Kathmandu valley located at the suburb, right outside of the famous Ring road, just 200 m west of Sitapaila Chowk. We have 2 and 3 bedroom apartments in this community living building, offering great value for money with superb rooms and wonderful dining experience. Come and stay with us and allow us to make you feel at home with true Nepalese hospitability!</p>
				<img src="images/about.jpg" class="img-responsive" alt="Hair Salon">
				<div class="w3l-slider-img">
					<img src="images/a1.jpg" class="img-responsive" alt="Hair Salon">
				</div>
				<div class="w3ls-info-about">
					<h4>You'll love all the amenities we offer!</h4>

				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //about -->
	<!--sevices-->
	<div class="advantages">
		<div class="container">
			<div class="advantages-main">
				<h3 class="title-w3-agileits">Our Services</h3>
				<div class="advantage-bottom">
					<div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
						<div class="advantage-block ">
							<i class="fa fa-credit-card" aria-hidden="true"></i>
							<h4>Stay First, Pay After! </h4>

							<p><i class="fa fa-check" aria-hidden="true"></i>Decorated room, proper air conditioned</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>Private balcony</p>

						</div>
					</div>
					<div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
						<div class="advantage-block">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<h4>Fitness</h4>

							<p><i class="fa fa-check" aria-hidden="true"></i>Swimming pool</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>Gym</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--//sevices-->

	<br> <br> <br> <br>

	<!-- Gallery -->
	<section class="portfolio-w3ls" id="gallery">
		<h3 class="title-w3-agileits title-black-wthree">Our Gallery</h3> <br>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>TCH Tower</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>TCH Tower</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>TCH Tower</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>TCH Tower</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>TCH Tower</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>TCH Tower</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g6.jpg" class="swipebox"><img src="images/g7.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>TCH Tower</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g6.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>TCH Tower</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>TCH Tower</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>TCH Tower</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>TCH Tower</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>TCH Tower</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="clearfix"> </div>
	</section>
	<!-- //gallery -->
	<!-- rooms & rates -->

	<?php

							$somequery = "select room_no,place from room";
							$someresult = mysqli_query($con, $somequery);
							$availabality=[];
							while($row = mysqli_fetch_assoc($someresult))
							{
								// print_r($row['place']);
								if($row['place'] == "NotFree"){
									$availabality += array($row['room_no'] => "Not Available");
									
								}else{
									$availabality += array($row['room_no'] => "Available");
									// $rom = $row['room_no'];
								}

							}

	?>

	<div class="plans-section" id="rooms">
		<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Rooms And Rates</h3>
			<div class="priceing-table-main">
				<div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/r1.jpg" alt=" " class="img-responsive" />
							<h4>Deluxe Bedroom</h4>
						</div>
						<div class="price-gd-bottom">

							<div class="price-selet">
								<button type="button" class="viewmore" data-toggle="modal" data-target="#exampleModalLong1">
									View More
								</button>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 align="center" class="modal-title" id="exampleModalLabel">View Flat</h5>
						</div>
						<div class="modal-body">
							<div class="btn-group" style="margin-left: 210px;" role="group" aria-label="Basic example">
								<button type="button" class="btn btn-warning btn-lg" id="D1" data-toggle="modal" onclick="setValue('<?php echo $availabality['D1'];?>')" data-target="#exampleModalLong1a">D1</button>
								<button type="button" class="btn btn-warning btn-lg" id="D2" data-toggle="modal" onclick="setValue('<?php echo $availabality['D2'];?>')" data-target="#exampleModalLong1a">D2</button>
								<button type="button" class="btn btn-warning btn-lg" id="D3" data-toggle="modal" onclick="setValue('<?php echo $availabality['D3'];?>')" data-target="#exampleModalLong1a">D3</button>
							</div>
						</div>
					</div>
				</div>
			</div>







			<div class="col-md-3 price-grid ">
				<div class="price-block agile">
					<div class="price-gd-top">
						<img src="images/r2.jpg" alt=" " class="img-responsive" />
						<h4>Luxury Bedroom</h4>
					</div>
					<div class="price-gd-bottom">

						<div class="price-selet">
							<!-- <button type="button" class="viewmore" onclick="openPopup()"> View More </button> -->
							<!-- Button trigger modal -->
							<button type="button" class="viewmore" data-toggle="modal" data-target="#exampleModalLong2">
								View More
							</button>
						</div>
					</div>
				</div>
			</div>


			<!-- Modal -->
			<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 align="center" class="modal-title" id="exampleModalLabel">View Flat</h5>
						</div>
						<div class="modal-body">
							<div class="btn-group" style="margin-left: 210px;" role="group" aria-label="Basic example">
								<button type="button" class="btn btn-warning btn-lg" id="L1" data-toggle="modal" onclick="setValue('<?php echo $availabality['L1'];?>')" data-target="#exampleModalLong1a"> L1</button>
								<button type="button" class="btn btn-warning btn-lg" id="L2" data-toggle="modal" onclick="setValue('<?php echo $availabality['L2'];?>')" data-target="#exampleModalLong1a">L2</button>
								<button type="button" class="btn btn-warning btn-lg" id="L3" data-toggle="modal" onclick="setValue('<?php echo $availabality['L3'];?>')" data-target="#exampleModalLong1a">L3</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3 price-grid lost">
				<div class="price-block agile">
					<div class="price-gd-top">
						<img src="images/r3.jpg" alt=" " class="img-responsive" />
						<h4>Room with view</h4>
					</div>
					<div class="price-gd-bottom">

						<div class="price-selet">
							<button type="button" class="viewmore" data-toggle="modal" data-target="#exampleModalLong3">
								View More
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 align="center" class="modal-title" id="exampleModalLabel">View Flat</h5>
						</div>
						<div class="modal-body">
							<div class="btn-group" style="margin-left: 210px;" role="group" aria-label="Basic example">
								<button type="button" class="btn btn-warning btn-lg" id="R1" data-toggle="modal" onclick="setValue('<?php echo $availabality['R1'];?>')" data-target="#exampleModalLong1a">R1</button>
								<button type="button" class="btn btn-warning btn-lg" id="R2" data-toggle="modal" onclick="setValue('<?php echo $availabality['R2'];?>')" data-target="#exampleModalLong1a">R2</button>
								<button type="button" class="btn btn-warning btn-lg" id="R3" data-toggle="modal" onclick="setValue('<?php echo $availabality['R3'];?>')" data-target="#exampleModalLong1a">R3</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3 price-grid wthree lost">
				<div class="price-block agile">
					<div class="price-gd-top ">
						<img src="images/r4.jpg" alt=" " class="img-responsive" />
						<h4>Penthouse</h4>
					</div>
					<div class="price-gd-bottom">

						<div class="price-selet">
							<button type="button" class="viewmore" data-toggle="modal" data-target="#exampleModalLong4">
								View More
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="exampleModalLong4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 align="center" class="modal-title" id="exampleModalLabel">View Flat</h5>
						</div>
						<div class="modal-body">
							<div class="btn-group" style="margin-left: 210px;" role="group" aria-label="Basic example">
								<button type="button" class="btn btn-warning btn-lg" id="P1" data-toggle="modal" onclick="setValue('<?php echo $availabality['P1'];?>')" data-target="#exampleModalLong1a">P1</button>
								<button type="button" class="btn btn-warning btn-lg" id="P2" data-toggle="modal" onclick="setValue('<?php echo $availabality['P2'];?>')" data-target="#exampleModalLong1a">P2</button>
								<button type="button" class="btn btn-warning btn-lg" id="P3" data-toggle="modal" onclick="setValue('<?php echo $availabality['P3'];?>')" data-target="#exampleModalLong1a">P3</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal -->
			<div class="modal fade" id="exampleModalLong1a" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle" align="center">Bedroom Apartment</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body" id="body_modal">

						</div>
						<div class="modal-footer">

							<?php
							$check ="";
							$rom="";
							$rsql = "select * from room";
							$rre = mysqli_query($con, $rsql);
							while($row = mysqli_fetch_assoc($rre))
							{
								// print_r($row['place']);
								if($row['place'] == "NotFree"){
									$check ="Not Available";
									
								}else{
									$check = "Available";
									// $rom = $row['room_no'];
								}

							}
							// $r = 0;
							// $sc = 0;
							// $gh = 0;
							// $sr = 0;
							// $dr = 0;
							// while ($rrow = mysqli_fetch_array($rre)) {
							// 	$r = $r + 1;
							// 	$s = $rrow['type'];
							// 	$p = $rrow['place'];
							// 	if ($s == "Deluxe Room") {
							// 		$sc = $sc + 1;
							// 	}
							// 	if ($s == "Luxury Room") {
							// 		$gh = $gh + 1;
							// 	}
							// 	if ($s == "Room with view") {
							// 		$sr = $sr + 1;
							// 	}
							// 	if ($s == "Penthouse") {
							// 		$dr = $dr + 1;
							// 	}
							// }
							?>

							<?php
							$csql = "select * from payment";
							$cre = mysqli_query($con, $csql);
							$cr = 0;
							$csc = 0;
							$cgh = 0;
							$csr = 0;
							$cdr = 0;
							while ($crow = mysqli_fetch_array($cre)) {
								$cr = $cr + 1;
								$cs = $crow['troom'];

								if ($cs == "Deluxe Room") {
									$csc = $csc + 1;
								}

								if ($cs == "Luxury Room") {
									$cgh = $cgh + 1;
								}
								if ($cs == "Room with view") {
									$csr = $csr + 1;
								}
								if ($cs == "Penthouse") {
									$cdr = $cdr + 1;
								}
							}

							?>

							<td><b>  Room:<span id='uniqueShit'></span></b></td>
							<td>
								<!-- <button type="button" class="btn btn-primary btn-circle"><?php
																							$f1 = $sc - $csc;
																							if ($f1 <= 0) {
																								$f1 = "N/A";
																								echo $f1;
																							} else {
																								echo $f1;
																							}


																							?> </button></td> -->
							<!-- <a href="admin/reservation.php?id=<?php echo $s; ?>"><button class="viewmore">Book Now</button></a> -->
							<button id="viewmore" class="viewmore">Book Now</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<br> <br> <br> <br><br> <br> <br> <br><br> <br>

		<!--// rooms & rates -->

		<!-- contact -->
		<section class="contact-w3ls" id="contact">
			<div class="container">
				<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
					<div class="contact-agileits">
						<h4>Contact Us</h4>
						<p class="contact-agile2">Sign Up For Our News Letters</p>
						<form method="post" name="sentMessage" id="contactForm">
							<div class="control-group form-group">

								<label class="contact-p1">Full Name:</label>
								<input type="text" class="form-control" name="name" id="name" required>
								<p class="help-block"></p>

							</div>
							<div class="control-group form-group">

								<label class="contact-p1">Phone Number:</label>
								<input type="tel" class="form-control" name="phone" id="phone" required>
								<p class="help-block"></p>

							</div>
							<div class="control-group form-group">

								<label class="contact-p1">Email Address:</label>
								<input type="email" class="form-control" name="email" id="email" required>
								<p class="help-block"></p>

							</div>


							<input type="submit" name="sub" value="Send Now" class="btn btn-primary">
						</form>
						<?php
						if (isset($_POST['sub'])) {
							$name = $_POST['name'];
							$phone = $_POST['phone'];
							$email = $_POST['email'];
							$approval = "Not Allowed";
							$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')";


							if (mysqli_query($con, $sql))
								echo "<script type='text/javascript'> alert('Thank you contacting us. We will keep in touch.')</script>";
						}
						?>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
					<h4>Connect With Us</h4>
					<p class="contact-agile1"><strong>Phone :</strong> 9802020063, +977-1-4033303, 4033304</p>
					<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">info@swayambhuhotel.com</a></p>
					<p class="contact-agile1"><strong>Address :</strong> TCH Tower – IV, Ground Floor, Block – A Sitapaila, Kathmandu, Nepal</p>

					<div class="social-bnr-agileits footer-icons-agileinfo">
						<ul class="social-icons3">
							<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
							<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
							<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>

						</ul>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3334.0149927449193!2d85.28154348139968!3d27.709083184911464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb196f8dfb08b5%3A0x3d0aed06a042a610!2sHome%20(TCH%20Tower%20IV)!5e0!3m2!1sen!2snp!4v1658643879336!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

				</div>
				<div class="clearfix"></div>
			</div>
		</section>
		<!-- /contact -->
		<div class="copy">
			<p>© 2017 TCH Tower . All Rights Reserved | Design by <a href="index.php">Kahtras</a> </p>
		</div>
		<!--/footer -->
		<!-- js -->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- contact form -->
		<script src="js/jqBootstrapValidation.js"></script>

		<!-- /contact form -->
		<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
			$(function() {
				$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
			});
		</script>
		<!-- //Calendar -->
		<!-- gallery popup -->
		<link rel="stylesheet" href="css/swipebox.css">
		<script src="js/jquery.swipebox.min.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>
		<!-- //gallery popup -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop: $(this.hash).offset().top
					}, 1000);
				});
			});
		</script>
		<!-- start-smoth-scrolling -->
		<!-- flexSlider -->
		<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider) {
						$('body').removeClass('loading');
					}
				});
			});
		</script>
		<!-- //flexSlider -->
		<script src="js/responsiveslides.min.js"></script>
		<script>
			// You can also use "$(window).load(function() {"
			$(function() {
				// Slideshow 4
				$("#slider4").responsiveSlides({
					auto: true,
					pager: true,
					nav: false,
					speed: 500,
					namespace: "callbacks",
					before: function() {
						$('.events').append("<li>before event fired.</li>");
					},
					after: function() {
						$('.events').append("<li>after event fired.</li>");
					}
				});

			});
		</script>
		<!--search-bar-->
		<script src="js/main.js"></script>
		<!--//search-bar-->
		<!--tabs-->
		<script src="js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function() {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function(event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!--//tabs-->
		<!-- smooth scrolling -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/
				$().UItoTop({
					easingType: 'easeOutQuart'
				});
			});
		</script>

		<div class="arr-w3ls">
			<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
		<!-- //smooth scrolling -->
		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>

</html>
<script>
function setValue(avail) {
  document.getElementById("uniqueShit").innerHTML = avail;
}
</script>
<script>
	$('.btn-lg').click(function() {
		let room = $(this).attr('id');
		// <button class="viewmore">Book Now</button>
		// $('#body_modal').html(room);
		if (room == 'D1' || room == 'D2' || room == 'D3') {
			$('#exampleModalLongTitle').html('Deluxe Bedroom Apartment')
		}
		if (room == 'R1' || room == 'R2' || room == 'R3') {
			$('#exampleModalLongTitle').html('Room With View Bedroom Apartment')
		}
		if (room == 'L1' || room == 'L2' || room == 'L3') {
			$('#exampleModalLongTitle').html('Luxury Bedroom Apartment')
		}
		if (room == 'P1' || room == 'P2' || room == 'P3') {
			$('#exampleModalLongTitle').html('Penthouse Apartment')
		}
		if (room == 'D1') {

			$('#body_modal').html(`<table class='table table-bordered table-dark'>
								<thead>
									<tr>
										<th scope='col'>Monthly Rent</th>
										<th scope='col'>Bedrooms</th>
										<th scope='col'>Bathroom</th>
										<th scope='col'>Living/Dining</th>
										<th scope='col'>Kitchen</th>
										<th scope='col'>Balcony</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope='row'>Rs. 1,10,000 </th>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
									</tr>

								</tbody>
							</table>

							<h2 align='center'>Apartment Features </h2> <br>
							<ul class='list-group'>
								<table align='center'>
									<tr>
									<td>
											<li class='list-group-item'>
												<span>
													<img src='images/kitchen.png' alt='kitchen' height='48px'>
												</span>
												Fully Equipped Kitchen
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/balcony.png' alt='balcony' height='48px'>
												</span>
												Balcony
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/fridge.png' alt='fridge' height='48px'>
												</span>
												Refrigerator
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/tv.png' alt='tv' height='48px'>
												</span>
												LED TV
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/wifi.png' alt='wifi' height='48px'>
												</span>
												Free wifi
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/housekeeping.png' alt='house' height='48px'>
												</span>
												Daily Housekeeping Service
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/iron.png' alt='iron' height='48px'>
												</span>
												Iron
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/washingmachine.png' alt='wash' height='48px'>
												</span>
												Washing Machine
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/hotandcold.png' alt='hot' height='48px'>
												</span>
												Hot and Cold Running water
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/microwave.png' alt='wave' height='48px'>
												</span>
												Microwave
											</li>
										</td>
									</tr>
									

								</table>
							</ul>`);
		} else if (room == 'D2') {
			$('#body_modal').html(`<table class='table table-bordered table-dark'>
								<thead>
									<tr>
										<th scope='col'>Monthly Rent</th>
										<th scope='col'>Bedrooms</th>
										<th scope='col'>Bathroom</th>
										<th scope='col'>Living/Dining</th>
										<th scope='col'>Kitchen</th>
										<th scope='col'>Balcony</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope='row'>Rs. 1,20,000</th>
										<td>2</td>
										<td>2</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
									</tr>

								</tbody>
							</table>

							<h2 align='center'> Apartment Features </h2> <br>
							<ul class='list-group'>
								<table align='center'>
									<tr>
									<td>
											<li class='list-group-item'>
												<span>
													<img src='images/kitchen.png' alt='kitchen' height='48px'>
												</span>
												Fully Equipped Kitchen
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/balcony.png' alt='balcony' height='48px'>
												</span>
												Balcony
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/fridge.png' alt='fridge' height='48px'>
												</span>
												Refrigerator
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/tv.png' alt='tv' height='48px'>
												</span>
												LED TV
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/wifi.png' alt='wifi' height='48px'>
												</span>
												Free wifi
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/housekeeping.png' alt='house' height='48px'>
												</span>
												Daily Housekeeping Service
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/iron.png' alt='iron' height='48px'>
												</span>
												Iron
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/washingmachine.png' alt='wash' height='48px'>
												</span>
												Washing Machine
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/hotandcold.png' alt='hot' height='48px'>
												</span>
												Hot and Cold Running water
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/microwave.png' alt='wave' height='48px'>
												</span>
												Microwave
											</li>
										</td>
									</tr>
									

								</table>
							</ul>`);
		} else if (room == 'D3') {
			$('#body_modal').html(`<table class='table table-bordered table-dark'>
								<thead>
									<tr>
										<th scope='col'>Monthly Rent</th>
										<th scope='col'>Bedrooms</th>
										<th scope='col'>Bathroom</th>
										<th scope='col'>Living/Dining</th>
										<th scope='col'>Kitchen</th>
										<th scope='col'>Balcony</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope='row'>Rs. 1,30,000</th>
										<td>3</td>
										<td>2</td>
										<td>1</td>
										<td>1</td>
										<td>2</td>
									</tr>

								</tbody>
							</table>

							<h2 align='center'> Apartment Features </h2> <br>
							<ul class='list-group'>
								<table align='center'>
									<tr>
									<td>
											<li class='list-group-item'>
												<span>
													<img src='images/kitchen.png' alt='kitchen' height='48px'>
												</span>
												Fully Equipped Kitchen
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/balcony.png' alt='balcony' height='48px'>
												</span>
												Balcony
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/fridge.png' alt='fridge' height='48px'>
												</span>
												Refrigerator
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/tv.png' alt='tv' height='48px'>
												</span>
												LED TV
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/wifi.png' alt='wifi' height='48px'>
												</span>
												Free wifi
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/housekeeping.png' alt='house' height='48px'>
												</span>
												Daily Housekeeping Service
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/iron.png' alt='iron' height='48px'>
												</span>
												Iron
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/washingmachine.png' alt='wash' height='48px'>
												</span>
												Washing Machine
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/hotandcold.png' alt='hot' height='48px'>
												</span>
												Hot and Cold Running water
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/microwave.png' alt='wave' height='48px'>
												</span>
												Microwave
											</li>
										</td>
									</tr>
									

								</table>
							</ul>`);
		} else if (room == 'L1') {
			$('#body_modal').html(`<table class='table table-bordered table-dark'>
								<thead>
									<tr>
										<th scope='col'>Monthly Rent</th>
										<th scope='col'>Bedrooms</th>
										<th scope='col'>Bathroom</th>
										<th scope='col'>Living/Dining</th>
										<th scope='col'>Kitchen</th>
										<th scope='col'>Balcony</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope='row'>Rs. 1,65,000</th>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td>2</td>
									</tr>

								</tbody>
							</table>

							<h2 align='center'> Apartment Features </h2> <br>
							<ul class='list-group'>
								<table align='center'>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/parquet.png' alt='parquet' height='48px'>
												</span>
												Parquet

											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/balcony.png' alt='balcony' height='48px'>
												</span>
												Balcony
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/fridge.png' alt='fridge' height='48px'>
												</span>
												Refrigerator
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/tv.png' alt='tv' height='48px'>
												</span>
												LED TV
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/wifi.png' alt='wifi' height='48px'>
												</span>
												Free wifi
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/housekeeping.png' alt='house' height='48px'>
												</span>
												Daily Housekeeping Service
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/iron.png' alt='iron' height='48px'>
												</span>
												Iron
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/washingmachine.png' alt='wash' height='48px'>
												</span>
												Washing Machine
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/hotandcold.png' alt='hot' height='48px'>
												</span>
												Hot and Cold Running water
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/microwave.png' alt='wave' height='48px'>
												</span>
												Microwave
											</li>
										</td>
									</tr>
									<tr>
										<td colspan='2'>
											<li class='list-group-item'>
												<span>
													<img src='images/kitchen.png' alt='kitchen' height='48px'>
												</span>
												Fully Equipped Kitchen
											</li>
										</td>
										<td></td>
									</tr>

								</table>
							</ul>`);
		} else if (room == 'L2') {
			$('#body_modal').html(`<table class='table table-bordered table-dark'>
								<thead>
									<tr>
										<th scope='col'>Monthly Rent</th>
										<th scope='col'>Bedrooms</th>
										<th scope='col'>Bathroom</th>
										<th scope='col'>Living/Dining</th>
										<th scope='col'>Kitchen</th>
										<th scope='col'>Balcony</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope='row'>Rs. 1,80,000</th>
										<td>2</td>
										<td>2</td>
										<td>1</td>
										<td>1</td>
										<td>2</td>
									</tr>

								</tbody>
							</table>

							<h2 align='center'> Apartment Features </h2> <br>
							<ul class='list-group'>
								<table align='center'>
									<tr>
										<td>
											
										<li class='list-group-item'>
												<span>
													<img src='images/parquet.png' alt='parquet' height='48px'>
												</span>
												Parquet

											</li>
								
										</td>
										<td>
											
											<li class='list-group-item'>
												<span>
													<img src='images/balcony.png' alt='balcony' height='48px'>
												</span>
												Balcony
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/fridge.png' alt='fridge' height='48px'>
												</span>
												Refrigerator
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/tv.png' alt='tv' height='48px'>
												</span>
												LED TV
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/wifi.png' alt='wifi' height='48px'>
												</span>
												Free wifi
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/housekeeping.png' alt='house' height='48px'>
												</span>
												Daily Housekeeping Service
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/iron.png' alt='iron' height='48px'>
												</span>
												Iron
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/washingmachine.png' alt='wash' height='48px'>
												</span>
												Washing Machine
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/hotandcold.png' alt='hot' height='48px'>
												</span>
												Hot and Cold Running water
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/microwave.png' alt='wave' height='48px'>
												</span>
												Microwave
											</li>
										</td>
									</tr>
									<tr>
										<td colspan='2'>
											<li class='list-group-item'>
												<span>
													<img src='images/kitchen.png' alt='kitchen' height='48px'>
												</span>
												Fully Equipped Kitchen
											</li>
										</td>
										<td></td>
									</tr>

								</table>
							</ul>`);
		} else if (room == 'L3') {
			$('#body_modal').html(`<table class='table table-bordered table-dark'>
								<thead>
									<tr>
										<th scope='col'>Monthly Rent</th>
										<th scope='col'>Bedrooms</th>
										<th scope='col'>Bathroom</th>
										<th scope='col'>Living/Dining</th>
										<th scope='col'>Kitchen</th>
										<th scope='col'>Balcony</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope='row'> Rs. 1,95,000</th>
										<td>3</td>
										<td>3</td>
										<td>1</td>
										<td>1</td>
										<td>2</td>
									</tr>

								</tbody>
							</table>

							<h2 align='center'> Apartment Features </h2> <br>
							<ul class='list-group'>
								<table align='center'>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/parquet.png' alt='parquet' height='48px'>
												</span>
												Parquet

											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/balcony.png' alt='balcony' height='48px'>
												</span>
												Balcony
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/fridge.png' alt='fridge' height='48px'>
												</span>
												Refrigerator
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/tv.png' alt='tv' height='48px'>
												</span>
												LED TV
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/wifi.png' alt='wifi' height='48px'>
												</span>
												Free wifi
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/housekeeping.png' alt='house' height='48px'>
												</span>
												Daily Housekeeping Service
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/iron.png' alt='iron' height='48px'>
												</span>
												Iron
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/washingmachine.png' alt='wash' height='48px'>
												</span>
												Washing Machine
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/hotandcold.png' alt='hot' height='48px'>
												</span>
												Hot and Cold Running water
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/microwave.png' alt='wave' height='48px'>
												</span>
												Microwave
											</li>
										</td>
									</tr>
									<tr>
										<td colspan='2'>
											<li class='list-group-item'>
												<span>
													<img src='images/kitchen.png' alt='kitchen' height='48px'>
												</span>
												Fully Equipped Kitchen
											</li>
										</td>
										<td></td>
									</tr>

								</table>
							</ul>`);
		} else if (room == 'R1') {
			$('#body_modal').html(`<table class='table table-bordered table-dark'>
								<thead>
									<tr>
										<th scope='col'>Monthly Rent</th>
										<th scope='col'>Bedrooms</th>
										<th scope='col'>Bathroom</th>
										<th scope='col'>Living/Dining</th>
										<th scope='col'>Kitchen</th>
										<th scope='col'>Balcony</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope='row'>Rs. 1,92,500</th>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td>1</td>
										<td>2</td>
									</tr>

								</tbody>
							</table>

							<h2 align='center'> Apartment Features </h2> <br>
							<ul class='list-group'>
								<table align='center'>
									<tr>
										<td>
										<li class='list-group-item'>
												<span>
													<img src='images/parquet.png' alt='parquet' height='48px'>
												</span>
												Parquet

											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/balcony.png' alt='balcony' height='48px'>
												</span>
												Balcony
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/fridge.png' alt='fridge' height='48px'>
												</span>
												Refrigerator
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/tv.png' alt='tv' height='48px'>
												</span>
												LED TV
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/wifi.png' alt='wifi' height='48px'>
												</span>
												Free wifi
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/housekeeping.png' alt='house' height='48px'>
												</span>
												Daily Housekeeping Service
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/iron.png' alt='iron' height='48px'>
												</span>
												Iron
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/washingmachine.png' alt='wash' height='48px'>
												</span>
												Washing Machine
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/hotandcold.png' alt='hot' height='48px'>
												</span>
												Hot and Cold Running water
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/microwave.png' alt='wave' height='48px'>
												</span>
												Microwave
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/kitchen.png' alt='kitchen' height='48px'>
												</span>
												Fully Equipped Kitchen
											</li>
										</td>
										<td>
										<li class='list-group-item'>
												<span>
													<img src='images/coffee.png' alt='coffee' height='48px'>
												</span>
												Coffee Pot
											</li>										
										</td>
									</tr>

								</table>
							</ul>`);
		} else if (room == 'R2') {
			$('#body_modal').html(`<table class='table table-bordered table-dark'>
								<thead>
									<tr>
										<th scope='col'>Monthly Rent</th>
										<th scope='col'>Bedrooms</th>
										<th scope='col'>Bathroom</th>
										<th scope='col'>Living/Dining</th>
										<th scope='col'>Kitchen</th>
										<th scope='col'>Balcony</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope='row'>Rs. 2,10,000</th>
										<td>2</td>
										<td>2</td>
										<td>1</td>
										<td>1</td>
										<td>3</td>
									</tr>

								</tbody>
							</table>

							<h2 align='center'> Apartment Features </h2> <br>
							<ul class='list-group'>
								<table align='center'>
									<tr>
										<td>
										<li class='list-group-item'>
												<span>
													<img src='images/parquet.png' alt='parquet' height='48px'>
												</span>
												Parquet

											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/balcony.png' alt='balcony' height='48px'>
												</span>
												Balcony
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/fridge.png' alt='fridge' height='48px'>
												</span>
												Refrigerator
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/tv.png' alt='tv' height='48px'>
												</span>
												LED TV
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/wifi.png' alt='wifi' height='48px'>
												</span>
												Free wifi
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/housekeeping.png' alt='house' height='48px'>
												</span>
												Daily Housekeeping Service
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/iron.png' alt='iron' height='48px'>
												</span>
												Iron
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/washingmachine.png' alt='wash' height='48px'>
												</span>
												Washing Machine
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/hotandcold.png' alt='hot' height='48px'>
												</span>
												Hot and Cold Running water
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/microwave.png' alt='wave' height='48px'>
												</span>
												Microwave
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/kitchen.png' alt='kitchen' height='48px'>
												</span>
												Fully Equipped Kitchen
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/coffee.png' alt='coffee' height='48px'>
												</span>
												Coffee Pot
											</li>
										</td>
									</tr>

								</table>
							</ul>`);
		} else if (room == 'R3') {
			$('#body_modal').html(`<table class='table table-bordered table-dark'>
								<thead>
									<tr>
										<th scope='col'>Monthly Rent</th>
										<th scope='col'>Bedrooms</th>
										<th scope='col'>Bathroom</th>
										<th scope='col'>Living/Dining</th>
										<th scope='col'>Kitchen</th>
										<th scope='col'>Balcony</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope='row'> Rs. 2,27,500 </th>
										<td>3</td>
										<td>3</td>
										<td>1</td>
										<td>1</td>
										<td>4</td>
									</tr>

								</tbody>
							</table>

							<h2 align='center'> Apartment Features </h2> <br>
							<ul class='list-group'>
								<table align='center'>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/parquet.png' alt='parquet' height='48px'>
												</span>
												Parquet

											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/balcony.png' alt='balcony' height='48px'>
												</span>
												Balcony
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/fridge.png' alt='fridge' height='48px'>
												</span>
												Refrigerator
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/tv.png' alt='tv' height='48px'>
												</span>
												LED TV
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/wifi.png' alt='wifi' height='48px'>
												</span>
												Free wifi
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/housekeeping.png' alt='house' height='48px'>
												</span>
												Daily Housekeeping Service
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/iron.png' alt='iron' height='48px'>
												</span>
												Iron
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/washingmachine.png' alt='wash' height='48px'>
												</span>
												Washing Machine
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/hotandcold.png' alt='hot' height='48px'>
												</span>
												Hot and Cold Running water
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/microwave.png' alt='wave' height='48px'>
												</span>
												Microwave
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/kitchen.png' alt='kitchen' height='48px'>
												</span>
												Fully Equipped Kitchen
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/coffee.png' alt='coffee' height='48px'>
												</span>
												Coffee Pot
											</li>
										</td>
									</tr>

								</table>
							</ul>`);
		} else if (room == 'P1') {
			$('#body_modal').html(`<table class='table table-bordered table-dark'>
								<thead>
									<tr>
										<th scope='col'>Monthly Rent</th>
										<th scope='col'>Bedrooms</th>
										<th scope='col'>Bathroom</th>
										<th scope='col'>Living/Dining</th>
										<th scope='col'>Kitchen</th>
										<th scope='col'>Balcony</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope='row'> Rs. 2,75,000</th>
										<td>1</td>
										<td>2</td>
										<td>1</td>
										<td>1</td>
										<td>2</td>
									</tr>

								</tbody>
							</table>

							<h2 align='center'> Apartment Features </h2> <br>
							<ul class='list-group'>
								<table align='center'>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/aircondition.png' alt='Air Conditioning' height='48px'>
												</span>
												Air Condition

											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/balcony.png' alt='balcony' height='48px'>
												</span>
												Balcony
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/fridge.png' alt='fridge' height='48px'>
												</span>
												Refrigerator
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/tv.png' alt='tv' height='48px'>
												</span>
												LED TV
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/wifi.png' alt='wifi' height='48px'>
												</span>
												Free wifi
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/housekeeping.png' alt='house' height='48px'>
												</span>
												Daily Housekeeping Service
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/iron.png' alt='iron' height='48px'>
												</span>
												Iron
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/washingmachine.png' alt='wash' height='48px'>
												</span>
												Washing Machine
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/hotandcold.png' alt='hot' height='48px'>
												</span>
												Hot and Cold Running water
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/microwave.png' alt='wave' height='48px'>
												</span>
												Microwave
											</li>
										</td>
									</tr>
									
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/parquet.png' alt='parquet' height='48px'>
												</span>
												Parquet

											</li>
										</td>

										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/coffee.png' alt='coffee' height='48px'>
												</span>
												Coffee Pot
											</li>
										</td>
									</tr>

									<tr>
										<td colspan='2'>
											<li class='list-group-item'>
												<span>
													<img src='images/kitchen.png' alt='kitchen' height='48px'>
												</span>
												Fully Equipped Kitchen
											</li>
										</td>
										<td></td>
									</tr>

								</table>
							</ul>`);
		} else if (room == 'P2') {
			$('#body_modal').html(`<table class='table table-bordered table-dark'>
								<thead>
									<tr>
										<th scope='col'>Monthly Rent</th>
										<th scope='col'>Bedrooms</th>
										<th scope='col'>Bathroom</th>
										<th scope='col'>Living/Dining</th>
										<th scope='col'>Kitchen</th>
										<th scope='col'>Balcony</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope='row'>Rs. 3,00,000</th>
										<td>2</td>
										<td>3</td>
										<td>2</td>
										<td>1</td>
										<td>3</td>
									</tr>

								</tbody>
							</table>

							<h2 align='center'> Apartment Features </h2> <br>
							<ul class='list-group'>
								<table align='center'>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/aircondition.png' alt='Air Conditioning' height='48px'>
												</span>
												Air Condition

											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/balcony.png' alt='balcony' height='48px'>
												</span>
												Balcony
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/fridge.png' alt='fridge' height='48px'>
												</span>
												Refrigerator
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/tv.png' alt='tv' height='48px'>
												</span>
												LED TV
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/wifi.png' alt='wifi' height='48px'>
												</span>
												Free wifi
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/housekeeping.png' alt='house' height='48px'>
												</span>
												Daily Housekeeping Service
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/iron.png' alt='iron' height='48px'>
												</span>
												Iron
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/washingmachine.png' alt='wash' height='48px'>
												</span>
												Washing Machine
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/hotandcold.png' alt='hot' height='48px'>
												</span>
												Hot and Cold Running water
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/microwave.png' alt='wave' height='48px'>
												</span>
												Microwave
											</li>
										</td>
									</tr>

									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/parquet.png' alt='parquet' height='48px'>
												</span>
												Parquet

											</li>
										</td>

										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/coffee.png' alt='coffee' height='48px'>
												</span>
												Coffee Pot
											</li>
										</td>
									</tr>

									<tr>
										<td colspan='2'>
											<li class='list-group-item'>
												<span>
													<img src='images/kitchen.png' alt='kitchen' height='48px'>
												</span>
												Fully Equipped Kitchen
											</li>
										</td>
										<td></td>
									</tr>

								</table>
							</ul>`);
		} else if (room == 'P3') {
			$('#body_modal').html(`<table class='table table-bordered table-dark'>
								<thead>
									<tr>
										<th scope='col'>Monthly Rent</th>
										<th scope='col'>Bedrooms</th>
										<th scope='col'>Bathroom</th>
										<th scope='col'>Living/Dining</th>
										<th scope='col'>Kitchen</th>
										<th scope='col'>Balcony</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope='row'>Rs. 3,25,000</th>
										<td>3</td>
										<td>4</td>
										<td>2</td>
										<td>2</td>
										<td>4</td>
									</tr>

								</tbody>
							</table>

							<h2 align='center'> Apartment Features </h2> <br>
							<ul class='list-group'>
								<table align='center'>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/aircondition.png' alt='Air Conditioning' height='48px'>
												</span>
												Air Condition

											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/balcony.png' alt='balcony' height='48px'>
												</span>
												Balcony
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/fridge.png' alt='fridge' height='48px'>
												</span>
												Refrigerator
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/tv.png' alt='tv' height='48px'>
												</span>
												LED TV
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/wifi.png' alt='wifi' height='48px'>
												</span>
												Free wifi
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/housekeeping.png' alt='house' height='48px'>
												</span>
												Daily Housekeeping Service
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/iron.png' alt='iron' height='48px'>
												</span>
												Iron
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/washingmachine.png' alt='wash' height='48px'>
												</span>
												Washing Machine
											</li>
										</td>
									</tr>
									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/hotandcold.png' alt='hot' height='48px'>
												</span>
												Hot and Cold Running water
											</li>
										</td>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/microwave.png' alt='wave' height='48px'>
												</span>
												Microwave
											</li>
										</td>
									</tr>

									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/parquet.png' alt='parquet' height='48px'>
												</span>
												Parquet

											</li>
										</td>

										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/coffee.png' alt='coffee' height='48px'>
												</span>
												Coffee Pot
											</li>
										</td>
									</tr>

									<tr>
										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/towel.png' alt='towel' height='48px'>
												</span>
												Towels

											</li>
										</td>

										<td>
											<li class='list-group-item'>
												<span>
													<img src='images/mirror.png' alt='mirror' height='48px'>
												</span>
												Mirror
											</li>
										</td>
									</tr>

									<tr>
										<td colspan='2'>
											<li class='list-group-item'>
												<span>
													<img src='images/kitchen.png' alt='kitchen' height='48px'>
												</span>
												Fully Equipped Kitchen
											</li>
										</td>
										<td></td>
									</tr>

								</table>
							</ul>`);
		}
		$('#viewmore').click(() => {
			location.replace('admin/reservation.php?room_no=' + room);
		})
	})
</script>