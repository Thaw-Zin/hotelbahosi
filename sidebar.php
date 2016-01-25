<div class="sidebar">
	<div class="col-lg-12 reservation padding0">
		<div class="logo"><a href="/"><img src="images/logo.png" class="img-responsive"></a></div>
		<div class="menu">
			<ul>
				<li><a href="index" id="home"> HOME</a></li>
				<li><a href="aboutus" id="about"> ABOUT US</a></li>
				<li><a href="room" id="room"> ROOMS</a></li>
				<li><a href="promotion" id="promotion"> PROMOTIONS</a></li>
				<li><a href="attraction" id="attraction"> NEARBY ATTRACTIONS</a></li>
				<li><a href="contact" id="contact"> CONTACT US</a></li>
			</ul>
		</div>
		<p class="reservation-title">ONLINE RESERVATION</p>

		<!-- calendar -->
		<div style="padding-left:1em; padding-right:1em;">
			<iframe width="5" height="5" id="DCal" name="DCal" src="libcal/tpcalendar/tpdcal.php" scrolling="no" frameborder="0" style="visibility:visible; z-index:11997; position:absolute; top:-5000px; left:-5000px;" ></iframe>
			<div id="SaveProcessBg" style="position: absolute; visibility: show; left:-500px; top:-500px; z-index:11998;  filter:Alpha(opacity:60);-moz-opacity:.6;opacity:.6;"></div>
			<div id="AviCalendar" style=" width:560px; height:400px; visibility:visible; z-index:90000; position:absolute; top:-5000px; left:-5000px;">
				<table width="560" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="right" height="40" style="background-image:url(booking-images/head_bar_calendar1.png); background-repeat:no-repeat; background-position:center; padding-right:10px;"><span style="float:left; color:#FFF; margin-left:10px; font-size:17px;">Availability Calendar</span> <img src="images_book/close.btn.png" width="16" height="24" alt="" style="cursor:pointer; float:right;" onclick="HideProgress('AviCalendar','SaveProcessBg');" /></td>
					</tr>
					<tr>
						<td align="center" bgcolor="#FFFFFF" valign="top"><iframe width="560" height="400" id="AviCal" name="AviCal" src="http://www.1hotelrez.com/hotelbookings/lib/libhome/please.wait.data.php" allowtransparency="true" scrolling="no" frameborder="0" ></iframe></td>
					</tr>
				</table>
			</div>
			
			<form class="form-horizontal" role="form" id="FrmBook" name="FrmBook" action="" enctype="application/x-www-form-urlencoded">
				<div class="form-group">
					<div class="col-sm-6 right4">
						<a href="javascript:void(0)" onClick="window.frames['DCal'].LoadTPDCal(2,document.getElementById('ChkInStr'),document.getElementById('ChkInDate'),document.getElementById('Start'),'');return false;" >
							<input type="text" class="form-control" value="Check-in date" id="ChkInStr" name="ChkInStr">
						</a>
					</div>
					<div class="col-sm-6 left4">
						<a href="javascript:void(0)" onClick="window.frames['DCal'].LoadTPDCal(5,document.getElementById('ChkOutStr'),document.getElementById('ChkOutDate'),document.getElementById('ChkInDate'),document.getElementById('Stop'));return false;" >
							<input type="text" class="form-control" value="Check-out date" id="ChkOutStr" name="ChkOutStr">
						</a>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-6 right4">
						<select class="form-control" name="Adults" id="Adults" >
							<option value="1">Adults</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>
					<div class="col-sm-6 left4">
						<select class="form-control" name="Childs" id="Childs">
							<option value="0">Children</option>
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<input type="text" class="form-control"  id="ATACode" name="ATACode" onclick="EmptyPromotion();" onblur="ShowPromotion();" value="Promotion code">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-6 right4">
						<a onClick="OpenBook('FrmBook');" class="btn btn-action btn-block">BOOK NOW</a>
					</div>
					<div class="col-sm-6 left4">
						<a onClick="ModifyBook('FrmBook');" class="btn btn-action btn-block">CANCEL</a>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<a onClick="OpenAviCal('FrmBook');" class="btn btn-action btn-block">CHECK AVAILABILITY</a>
					</div>		
				</div>
				<div class="form-group" style="border-bottom:1px solid #9d2321;">
					<div class="col-sm-12">
						<ul class="check-booking">
							<li>Secured online payment</li>
							<li>Instant confirmation </li>
							<li>Best rates guaranteed</li>
						</ul>
					</div>	
				</div>
				
				<div class="form-group">
					<div class="col-sm-8 pull-left">
						<span class="poweredby">Powered by&nbsp; <a href="http://www.1hotelrez.com/" target="_blank" >1HotelRez</a></span>
					</div>	
					<div class="col-sm-4 left5 text-right">
						<span class="sitemap"> <a href="sitemap"> Sitemap</a></span>
					</div>
				</div>
				<input type="hidden" id="ChkInDate" name="ChkInDate" value="" />
				<input type="hidden" id="Start" name="Start" value="" />
				<input type="hidden" id="ChkOutDate" name="ChkOutDate" value="" />
				<input type="hidden" id="Stop" name="Stop" value="" />
				
				<input type="hidden" id="StayNights" name="StayNights" value="" />
				<input type="hidden" id="HomeUrl" name="HomeUrl" value="" />
				<input type="hidden" id="SiteUrl" name="SiteUrl" value="" />
				<input type="hidden" id="HotelCode" name="HotelCode" value="WBE-MM-2015-02-00001" />
				<input type="hidden" id="HotelID" name="HotelID" value="WBE-MM-2015-02-00001" />
				<input type="hidden" id="ChainID" name="ChainID" value="WBG-MM-2015-02-00001" />
				<input type="hidden" id="RowNoOf" name="RowNoOf" value="9" />
				<input name="ModeType" type="hidden" id="ModeType" value="1" /> 
				<input name="PluginWeb" type="hidden" id="PluginWeb" value="" />
			</form> 
			<div class="footer-logo"><img src="images/logo-tr.png" class="img-responsive"></div>
			<p class="copyright text-center"> &copy 2015 Hotel Bahosi. All rights reserved</p>
		</div>
	</div>
</div> 