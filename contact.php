<?php
  ini_set("SMTP", "hotelbahosi.com");
  ini_set("smtp", "25");
  //print($_SERVER['REQUEST_METHOD']);
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        
                        $email_to = "inquiry@hotelbahosi.com";
                        //$email_subject = "Your email subject line";

                        $name = $_POST['name'];
            //$email_from = "phocho.meme@gmail.com";
                        $email_from = $_POST['email'];
            //$email_subject =$_POST['subject'];
                        $message = $_POST['message'];

                        $email_message = "Form details below.\n\n";

                        function clean_string($string) {
                        $bad = array("content-type","bcc:","to:","cc:","href");
                        return str_replace($bad,"",$string);
                        }

                        $email_message .= "Name: ".clean_string($name)."\n";
                        $email_message .= "Email: ".clean_string($email_from)."\n";
            //$email_message .= "Email: ".clean_string($email_subject)."\n";
                        $email_message .= "Message: ".clean_string($message)."\n";

            //print($email_message);
                        // create email headers
                        $headers = 'From: '.$email_from."\r\n".
                        'Reply-To: '.$email_from."\r\n" .
                        'X-Mailer: PHP/' . phpversion();
            //print($headers);
                        if(@mail($email_to, $email_subject, $email_message, $headers))
                                $successful = 'Thank you for your enquiry. We will contact you shortly.';
            //print($successful);

        }
?>
<!DOCTYPE html>
<html>
<head>
	<title> Contact Us | Hotel Bahosi Your Downtown Comfort</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Hotel Bahosi, hotel bahosi, bahosi hotel, hotel bahosi yangon, bahosihotel, yangon bahosihotel, bahosi, yangon hotels, myanmar hotels, hotels in myanmar, yangon downtown hotels, lanmadaw hotels yangon">
    <meta name="description" content="View our contact information including address, phone and email. Let our staffs assist you with any queries.">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Pixel Directs">
    <meta name="distribution" content="global">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="http://www.hotelbahosi.com/contact">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/> 
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Contact Us | Hotel Bahosi Your Downtown Comfort">
    <meta name="twitter:description" content="View our contact information including address, phone and email. Let our staffs assist you with any queries.">
    <meta name="twitter:url" content="http://www.hotelbahosi.com/contact" />
    <meta name="twitter:creator" content="@pixel direct">
    <!-- Twitter Summary card images must be at least 120x120px -->
    <meta name="twitter:image" content="http://www.example.com/image.jpg">
    <!-- Open Graph data -->
    <meta property="og:title" content="Contact Us | Hotel Bahosi Your Downtown Comfort" />
    <meta property="og:url" content="http://www.hotelbahosi.com/contact" />
    <meta property="og:type" content="hotel" />
    <meta property="og:description" content="View our contact information including address, phone and email. Let our staffs assist you with any queries." />
    <meta property="og:image" content="http://example.com/image.jpg" />
    <meta property="og:site_name" content="Hotel Bahosi" />
    <!-- ////////////// meta end ///////// -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/full-slider.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script language="javascript" src="http://www.1hotelrez.com/hotelbookings/js/function.client.inc.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/booking.js"></script>
	<script type="text/javascript" src="js/jquery.bpopup.min.js"></script>
	<script type="text/javascript" src="js/fixed-scroll.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=796&amp;locationId=6484370&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2"></script> 
	<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
	<script>
	function sharePopup(url) {
	    popupWindow = window.open(
	    url,'popUpWindow','height=500,width=600,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes, left=150')
	    popupWindow.focus();
	}
var myCenter=new google.maps.LatLng(16.779212,96.140365);
function initialize()
{
    if($(window).width() > 480 )
    {
    var mapProp = {
    center:myCenter,
    zoom:17,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
     }
    else 
    {
    var mapProp = {
    center:myCenter,
    zoom:17,
    scrollwheel: false,
    draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
}
// var mapProp = {
//   center:myCenter,
//   zoom:17,
//   mapTypeId:google.maps.MapTypeId.ROADMAP
//   };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
	  position:myCenter,
	  icon: 'images/mapicon.png'
  });

marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>
<body>
	<div class="container-fulid">
		<div class="container">
			<?php include_once('mobile_menu.php') ?>
			<div class="row">
				<div class="col-lg-3 col-sm-3 nopadding side-content">
					<?php include_once('sidebar.php') ?>
					<input type='hidden' name='hid' value='6' id='hidd'>
				</div>
				<div class="col-lg-9 col-sm-9 col-xs-12 main-content" id="page_animation">
					<div class="row page-category-absolute">
						<div class="col-lg-8 col-xs-6">
							<p class="page-title"><a style="color:#333333;">MAP & DIRECTION<br><span>TO HOTEL BAHOSI</span></a></p>
						</div>
						<div class="col-lg-4 col-xs-6">
							<ul class="list-inline pull-right">
								<li><a href="JavaScript:sharePopup('https://www.facebook.com/sharer/sharer.php?u=hotelbahosi.com/contact');">Share</a></li>
							</ul>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 padding0">
							<div id="googleMap"  width="100%"></div>
							<div class="contact-form">
								<h3 class='contact'> Contact Us</h3>
								<form class="form-horizontal" role="form" method="post" name="myemailform" action="" >
									<div class="form-group mb">
										<label for="inputName3" class="col-sm-3 control-label">Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" placeholder="Your Name" name="name" required>
										</div>
									</div>
									<div class="form-group mb">
										<label for="inputEmail3" class="col-sm-3 control-label">Email</label>
										<div class="col-sm-9">
											<input type="email" class="form-control" placeholder="Your Email" name="email" required>
										</div>
									</div>
									<div class="form-group mb">
										<label for="inputPassword3" class="col-sm-3 control-label">Message</label>
										<div class="col-sm-9">
											<textarea class="form-control" rows="4" placeholder="Your Message is here..." name="message"></textarea>
										</div>
									</div>

									<div class="form-group mb">
										<div class="col-sm-offset-3 col-sm-9" style="text-align:left;">
											<button type="submit" class="btn btn-default send-mail" >Send Mail</button>
										</div> 
									</div>
								</form>
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
		if(ans==6)
		{
			document.getElementById('menu_title').innerHTML='CONTACT US';	
			document.getElementById('tablet_menu').innerHTML='CONTACT US';
			document.getElementById('contact').className='menu-current';
			document.getElementById('mb_contact').className='menu-current';
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
    <script type="application/ld+json">
	{ "@context" : "http://schema.org",
	  "@type" : "Hotel",
	  "name" : "Hotel Bahosi",
	  "url" : "http://www.hotelbahosi.com/contact",
	  "contactPoint" : [
	    { "@type" : "ContactPoint",
	      "telephone" : "+95 (1) 223589",
	      "contactType" : "reservations"
	    } ],
	  "sameAs" : [ "https://www.facebook.com/hotelbahosi"]
	}
	</script>
</body>
</html>