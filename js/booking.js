var HID = 'WBE-MM-2015-02-00001';
	var CID = 'WBG-MM-2015-02-00001';
	var HURL ='';	
	
	var book_url = '';
	var modify_url = '';
	var ActionTarget = '';
	function SelHotel(){
		var HD = 'WBE-MM-2015-02-00001';
		var CD = 'WBG-MM-2015-02-00001';	
		if(HD == '') HD = 'WBE-MM-2015-02-00001';
		if(HD == '') HD = 'WBG-MM-2015-02-00001';		 
	     
		  book_url = "https://www.1hotelrez.com/hotelbookings/?HotelID=" + HD + "&ChainID=" + CD + "&MPage=";
		  modify_url = "https://www.1hotelrez.com/hotelbookings/?HotelID=" + HD + "&ChainID=" + CD + "&MPage=11";  
		
		if(ChkMobile){
			book_url = "https://www.1hotelrez.com/m/booking.search.inc.php?HotelID=" + HD + "&ChainID=" + CD;
			modify_url = "https://www.1hotelrez.com/m/modify.booking.php?HotelID=" + HD + "&ChainID=" + CD;
		}
	}
		
	function OpenBook(FrmID){
		var linkBooknow = '';
		var ChkInStr = document.getElementById('ChkInStr').value; 
		var ChkOutStr = document.getElementById('ChkOutStr').value; 
		SelHotel();
		
		if(ChkInStr == "" && ChkOutStr != ""){
			alert('Please select check-in date');
			return false;
		}
		if(ChkInStr != "" && ChkOutStr == ""){
			alert('Please select check-out date');
			return false;
		}

		if(ChkInStr == "" || ChkOutStr == ""){
			document.getElementById("ChkInStr").value = "";
			document.getElementById("ChkOutStr").value = "";
			linkBooknow = '0';
		}else{
			linkBooknow = '1';
		}
		
		if(document.getElementById("ATACode").value == "Promotion code"){
			document.getElementById("ATACode").value = "";
		}
		
	
		if(ChkInStr == "Check-in date" || ChkOutStr == "Check-out date"){
			document.getElementById("ChkInStr").value = "";
			document.getElementById("ChkOutStr").value = "";
			linkBooknow = '0';
		 }else{
			linkBooknow = '1';
		}
		
		
		
		if(ChkMobile){
			if(linkBooknow == '1'){
				book_url = 'https://www.1hotelrez.com/m/room.lists.php?HotelID=' + HID + '&ChainID' + CID;
			}
			linkBooknow = '';
		}
		
		if(ChkWindowsPhone){
		   ActionTarget = '_self';
		 }
		
		if(!ChkWindowsPhone){
		   ActionTarget = '_blank';
		 }
		 
		document.forms[FrmID].method = 'post';
		document.forms[FrmID].action = book_url + linkBooknow;
		document.forms[FrmID].target = ActionTarget;
		document.forms[FrmID].submit();
		
		document.getElementById("ChkInStr").value = "Check-in date";
		document.getElementById("ChkOutStr").value = "Check-out date";
		document.getElementById("ChkInDate").value = "";
		document.getElementById("ChkOutDate").value = "";
		document.getElementById("Adults").value = "1";
		document.getElementById("Childs").value = "0";
		document.getElementById("ATACode").value = "Promotion code";

	}	
	function ModifyBook(FrmID){	
		SelHotel();
		document.forms[FrmID].method = 'post';
		document.forms[FrmID].action = modify_url;
		document.forms[FrmID].target = '_blank';
		document.forms[FrmID].submit();
	}
	
 function OpenAviCal(FrmID){
		if(document.getElementById("HotelID").value == ''){
			alert('Sorry, data processing please wait');
			return false;
		}
		document.forms[FrmID].method = 'post';
		document.forms[FrmID].action = 'http://www.1hotelrez.com/hotelbookings/lib/libhome/calendar.availability.hotel.inc.php';
		document.forms[FrmID].target = 'AviCal';
		document.forms[FrmID].submit();
		ShowProgressAvi('AviCalendar','SaveProcessBg');
	}
	
   function EmptyPromotion(){ 
	
		 if(document.getElementById("ATACode").value == "Promotion code"){
			document.getElementById("ATACode").value = "";
		 }
	   }
	
	function ShowPromotion(){ 
	
		if(document.getElementById("ATACode").value == ""){
			document.getElementById("ATACode").value = "Promotion code";
		}

	  } 	