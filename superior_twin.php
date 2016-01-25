<!DOCTYPE html>
<html>
<head>
	<title> Room, Accommodation in Yangon | Hotel Bahosi </title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Hotel Bahosi, hotel bahosi, bahosi hotel, hotel bahosi yangon, bahosihotel, yangon bahosihotel, bahosi, yangon hotels, myanmar hotels, hotels in myanmar, yangon downtown hotels, lanmadaw hotels yangon">
    <meta name="description" content="We offer two room types, Superior and Deluxe with single, double and twin bed options at best rate guarantee. Online booking is also available with seasonal promotions for even better rate.">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Pixel Directs">
    <meta name="distribution" content="global">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="http://www.hotelbahosi.com/superior">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/> 
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Room, Accommodation in Yangon | Hotel Bahosi" />
    <meta name="twitter:description" content="We offer two room types, Superior and Deluxe with single, double and twin bed options at best rate guarantee. Online booking is also available with seasonal promotions for even better rate." />
    <meta name="twitter:url" content="http://www.hotelbahosi.com/superior" />
    <meta name="twitter:creator" content="@pixel direct">
    <!-- Twitter Summary card images must be at least 120x120px -->
    <meta name="twitter:image" content="http://www.example.com/image.jpg">
    <!-- Open Graph data -->
    <meta property="og:title" content="Room, Accommodation in Yangon | Hotel Bahosi" />
    <meta property="og:url" content="http://www.hotelbahosi.com/superior" />
    <meta property="og:type" content="hotel" />
    <meta property="og:description" content="We offer two room types, Superior and Deluxe with single, double and twin bed options at best rate guarantee. Online booking is also available with seasonal promotions for even better rate." />
    <meta property="og:image" content="http://example.com/image.jpg" />
    <meta property="og:site_name" content="Hotel Bahosi" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/full-slider.css">
	<link rel="stylesheet" type="text/css" href="css/promotionslider.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script> 
	<script type="text/javascript" src="js/bootstrap-carousel.js"></script> 
	<script language="javascript" src="http://www.1hotelrez.com/hotelbookings/js/function.client.inc.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/booking.js"></script>
	<script type="text/javascript" src="js/jquery.bpopup.min.js"></script>
	<script type="text/javascript" src="js/fixed-scroll.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=796&amp;locationId=6484370&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2"></script> 
	<script type="text/javascript">
		$(document).ready(function () {
			 //  $('#myCarousel').carousel({
			 // interval: 4000
			 // });
			 // handles the carousel thumbnails
			 $('[id^=carousel-selector-]').click( function(){
			 var id_selector = $(this).attr("id");
			 var id = id_selector.substr(id_selector.length -1);
			 id = parseInt(id);
			 $('#myCarousel').carousel(id);
			 $('[id^=carousel-selector-]').removeClass('selected');
			 $(this).addClass('selected');
			 });

			// when the carousel slides, auto update
			$('#myCarousel').on('slid', function (e) {
			var id = $('.item.active').data('slide-number');
			id = parseInt(id);
			$('[id^=carousel-selector-]').removeClass('selected');
			$('[id^=carousel-selector-'+id+']').addClass('selected');
			});

			/*********** div element click and link ************/
			$(document).on('click','#room-type', function() {
				window.location = $(this).attr("url");
				return false;
			});
		});
	</script>
</head>
<body>
	<div class="container-fulid">
		<div class="container">
		<?php include_once('mobile_menu.php') ?>
			<div class="row">
				<div class="col-lg-3 col-sm-3 nopadding side-content">
					<?php include_once('sidebar.php') ?>
					<input type='hidden' name='hid' value='3' id='hidd'>
				</div>
				<div class="col-lg-9 col-sm-9 col-xs-12 main-content" id="page_animation">
					<div class="row page-category" style="background-color:#f0f0f0 !important;">
						<div class="col-lg-4 col-xs-4">
							<p class="page-title"><a href="room">DELUXE<br> <span> <span id="room-type" url="deluxe_double"> DOUBLE</span>/ <span id="room-type" url="deluxe_twin">TWIN</span></span> </a></p>
							<img src="images/room-arrow.png" class="pull-right parent-arrow">
						</div>
						<div class="col-lg-4 col-xs-4">
							<p class="page-title"><a href="superior" class="room-active">SUPERIOR<br><span> <span id="room-type" url="superior_single">SINGLE</span>/ <span id="room-type" url="superior_double">DOUBLE</span>/ <span id="room-type"  url="superior_twin">TWIN</span></span></a></p>
							<img src="images/room-arrow.png" class="pull-right parent-arrow">
						</div>
						<div class="col-lg-4 col-xs-4">
							<p class="page-title"><a onClick="OpenBook('FrmBook');" style="cursor:pointer;" target="_blank">RESERVATIONS<br><span> AVAILABLE NOW</span></a></p>
						</div>
					</div>

					<div class="row room-information">
						<div class="col-lg-7 col-sm-7 padding0">
							<div id="slider">
								<div id="carousel-bounding-box">
									<div id="myCarousel" class="carousel slide information-slider">
						                <div class="carousel-inner">
						                    <div class="active item" data-slide-number="0">
						                        <!-- <img src="images/rooms/deluxe-d1.jpg" class="img-responsive"/> -->
						                        <div class="fill" style="background-image:url('images/rooms/superior-twin/superior-t1.jpg');"></div>
						                    </div>
						                    <div class="item" data-slide-number="1">
						                        <div class="fill" style="background-image:url('images/rooms/superior-twin/superior-t2.jpg');"></div>
						                    </div>
						                    <div class="item" data-slide-number="2">
						                        <div class="fill" style="background-image:url('images/rooms/superior-twin/superior-t3.jpg');"></div>
						                    </div>
						                    <div class="item" data-slide-number="3">
						                        <div class="fill" style="background-image:url('images/rooms/superior-twin/superior-t4.jpg');"></div>
						                    </div>
						                </div>
						                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
						                	<span class="icon-prev"> <img src="images/left.png" onMouseOver="this.src='images/left-hover.png'" onMouseOut="this.src='images/left.png'"></span>
						                </a>
						                <a class="carousel-control right" href="#myCarousel" data-slide="next">
						                	<span class="icon-next"><img src="images/right.png" onMouseOver="this.src='images/right-hover.png'" onMouseOut="this.src='images/right.png'"></span>
						                </a>
						            </div>
								</div>
							</div>

							<div id="slider-thumbs">
								<ul class="list-inline row">
							        <li class="col-lg-3 col-xs-3 padding0"> 
							        	<a id="carousel-selector-0" class="selected">
							        		<img src="images/rooms/superior-twin/superior-tthumb1.jpg" class="img-responsive"/>
							        	</a>
							        </li>
							        <li class="col-lg-3 col-xs-3 padding0"> 
							        	<a id="carousel-selector-1"><img src="images/rooms/superior-twin/superior-tthumb2.jpg" class="img-responsive"/></a>
							        </li>
							        <li class="col-lg-3 col-xs-3 padding0"> 
							        	<a id="carousel-selector-2"><img src="images/rooms/superior-twin/superior-tthumb3.jpg" class="img-responsive"/></a>
							        </li>
							        <li class="col-lg-3 col-xs-3 padding0"> 
							        	<a id="carousel-selector-3"><img src="images/rooms/superior-twin/superior-tthumb4.jpg" class="img-responsive"/></a>
							        </li>
							    </ul>
							</div>

						</div>
						<div class="col-lg-5 col-sm-5 superior-bg">
							<div class="roomtype-title">
								<h3 class="pull-left">SUPERIOR TWIN</h3>
								<p class="pull-right"><a onClick="OpenBook('FrmBook');" class=" btn btn-book" target="_blank">BOOK NOW</a></p>
							</div>
							<div class="roomtype-information scrollbar"  id="style-1">
								<p>
									Our most preferred economic room among travelers, measuring 19sqm. It comes with comfortable and full size twin beds, fully equipped room amenities, bathroom finished with top quality ceramic tiles and teakwood wardrobe and desk.  
								</p>
								<hr class="line-divider">
								<table width="100%">
									<tr>
										<td><span class="avb-title">Bed Type:</span><br><span class="avb-small-text">Single, Double, Twin</span></td>
										<td><span class="avb-title">Max Occupancy:</span><br><span class="avb-small-text"> 2 Adults, 1 Child</span></td>
									</tr>
									<tr>
										<td><span class="avb-title">Extra Bed:</span><br><span class="avb-small-text">Available with additional cost</span></td>
										<td><span class="avb-title">Child Policy:</span><br><span class="avb-small-text"> Free for age 11 & under</span></td>
									</tr>
								</table>
								<hr class="line-divider">
								<div class="row">
									<div class="col-lg-6 col-xs-6"><h4>Room Features:</h4></div>
									<div class="col-lg-6 col-xs-6 padding0"><h4>Hotel Facilities:</h4></div>
								</div>
								<ul id="double"> 
									<li>203sqft room</li>
									<li>Non-Smoking rooms</li>
									<li>Mini Bar</li>
									<li>Satellite/Cable TV</li>
									<li>HAIER Television LCD/ plasma screen</li>
									<li>Hot/Cold Shower</li>
									<li>Philips kettle for Coffee/tea</li>
									<li>Philips Hair Dryer</li>
									<li>Complimentary Bottled water</li>
									<li>Free Wifi Access</li>
									<li>Business Center</li>
									<li>Meetings Facilities</li>
									<li>Tour Service</li>
									<li>24 hour Convenience Store</li>
									<li>24 hour Reception</li>
									<li>Car Parking</li>
									<li>Smoking Area</li>
								</ul>
							</div>
						</div>
					</div>
					<?php include("popup.php"); ?>
					<!-- * footer * -->
					<div class="row footer-relative">
						<?php include_once('footer.php') ?>
					</div>    
					<!-- * -->
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	function menu()
	{
		var ans = document.getElementById('hidd').value;
		if(ans==3)
		{
			document.getElementById('menu_title').innerHTML='ROOMS';	
			document.getElementById('tablet_menu').innerHTML='ROOMS';
			document.getElementById('room').className='menu-current';
			document.getElementById('mb_room').className='menu-current';
		}
	}
	menu();
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-72062969-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>