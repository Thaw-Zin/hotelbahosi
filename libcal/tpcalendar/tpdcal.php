<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Day Calendar</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="http://www.onehotelsolutions.com/hotelbooking/libcal/tpcalendar/tpcal.css" rel="stylesheet" type="text/css" />
</head>
<body leftmargin=0 topmargin=0 marginwidth=0 marginheight=0 hspace=0 vspace=0 onselectstart="return false" ondraggesture="return false" ondragstart="return false" oncontextmenu="return false" onmouseup="top.defaultStatus=''; return true;">
<script type="text/javascript" src="http://www.onehotelsolutions.com/hotelbooking/libcal/tpcalendar/month.js"></script>
<table id="TPDCal" width="244" cellpadding="0" cellspacing="0" border="0" bgcolor="#D6D6D6" align="center">
  <tr>
    <td>
    	<table width="243" cellpadding="0" cellspacing="0" border="0" align="center" bgcolor="#D6D6D6">
      	<tr align="center">
       	 	<td width="25" align="right"><input id="BtDn" name="BtDn" type="button" onClick="DnMonth();" value=" &lt; " style="cursor:pointer; visibility:visible; background-color:#FFF; color:#000;"></td>
          <td width="182" height="30" align="center"><span id="MoSel">
            <select id="MSel" name="MSel" onChange="SetMontOpt();">
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
          </span>&nbsp;
            <span id="YeSel">
            <select id="YSel" name="YSel" onChange="SetMOptCng();">
      				<option value="2007">2007</option>
          	</select>
            </span>          </td>
          <td width="24" align="left"><input id="BtUp" name="BtUp" type="button" onClick="UpMonth();" value=" &gt; " style="cursor:pointer; visibility:visible; background-color:#FFF; color:#000;"></td>
      	</tr>
      </table>
    </td>
	</tr>
  
	<tr>
    <td>
    	<table width="240" cellpadding="1px" cellspacing="5px" border="1" align="center" style="border-style:none" bgcolor="#FFFFFF" bordercolor="#D6D6D6">
      	<tr><td>
        	<table width="205" cellpadding="2" cellspacing="2" border="1" align="center" style="border-style:none" bgcolor="#FFFFFF">
            <tr align="center">
    					<td width="23" style="color:#994444; border-style:none;">Sun</td>
    					<td width="23" style="color:#336666; border-style:none;">Mon</td>
    					<td width="23" style="color:#336666; border-style:none;">Tue</td>
              <td width="23" style="color:#336666; border-style:none;">Wed</td>
              <td width="23" style="color:#336666; border-style:none;">Thu</td>
              <td width="23" style="color:#336666; border-style:none;"> Fri </td>
              <td width="23" style="color:#994444; border-style:none;">Sat</td>
  					</tr>
  					<tr align="center">
    					<td id="D01" onClick="ToRet(0)"  onMouseOver="CngTDCl(this,1, 0);" onMouseOut="CngTDCl(this,0, 0);" style="cursor:pointer; border:none;">29</td>
    					<td id="D02" onClick="ToRet(1)"  onMouseOver="CngTDCl(this,1, 1);" onMouseOut="CngTDCl(this,0, 1);" style="cursor:pointer; border:none;">30</td>
    					<td id="D03" onClick="ToRet(2)"  onMouseOver="CngTDCl(this,1, 2);" onMouseOut="CngTDCl(this,0, 2);" style="cursor:pointer; border:none;">31</td>
              			<td id="D04" onClick="ToRet(3)"  onMouseOver="CngTDCl(this,1, 3);" onMouseOut="CngTDCl(this,0, 3);" style="cursor:pointer; border:none;">1</td>
              			<td id="D05" onClick="ToRet(4)"  onMouseOver="CngTDCl(this,1, 4);" onMouseOut="CngTDCl(this,0, 4);" style="cursor:pointer; border:none;">2</td>
              			<td id="D06" onClick="ToRet(5)"  onMouseOver="CngTDCl(this,1, 5);" onMouseOut="CngTDCl(this,0, 5);" style="cursor:pointer; border:none;">3</td>
              			<td id="D07" onClick="ToRet(6)"  onMouseOver="CngTDCl(this,1, 6);" onMouseOut="CngTDCl(this,0, 6);" style="cursor:pointer; border:none;">4</td>
  					</tr>
            		<tr align="center">
    					<td id="D08" onClick="ToRet(7)"  onMouseOver="CngTDCl(this,1, 7);" onMouseOut="CngTDCl(this,0, 7);" style="cursor:pointer; border:none;">5</td>
    					<td id="D09" onClick="ToRet(8)"  onMouseOver="CngTDCl(this,1, 8);" onMouseOut="CngTDCl(this,0, 8);" style="cursor:pointer; border:none;">6</td>
    					<td id="D10" onClick="ToRet(9)"  onMouseOver="CngTDCl(this,1, 9);" onMouseOut="CngTDCl(this,0, 9);" style="cursor:pointer; border:none;">7</td>
              			<td id="D11" onClick="ToRet(10)" onMouseOver="CngTDCl(this,1,10);" onMouseOut="CngTDCl(this,0,10);" style="cursor:pointer; border:none;">8</td>
              			<td id="D12" onClick="ToRet(11)" onMouseOver="CngTDCl(this,1,11);" onMouseOut="CngTDCl(this,0,11);" style="cursor:pointer; border:none;">9</td>
              			<td id="D13" onClick="ToRet(12)" onMouseOver="CngTDCl(this,1,12);" onMouseOut="CngTDCl(this,0,12);" style="cursor:pointer; border:none;">10</td>
              			<td id="D14" onClick="ToRet(13)" onMouseOver="CngTDCl(this,1,13);" onMouseOut="CngTDCl(this,0,13);" style="cursor:pointer; border:none;">11</td>
  					</tr>
  					<tr align="center">
    					<td id="D15" onClick="ToRet(14)" onMouseOver="CngTDCl(this,1,14);" onMouseOut="CngTDCl(this,0,14);" style="cursor:pointer; border:none;">12</td>
    					<td id="D16" onClick="ToRet(15)" onMouseOver="CngTDCl(this,1,15);" onMouseOut="CngTDCl(this,0,15);" style="cursor:pointer; border:none;">13</td>
    					<td id="D17" onClick="ToRet(16)" onMouseOver="CngTDCl(this,1,16);" onMouseOut="CngTDCl(this,0,16);" style="cursor:pointer; border:none;">14</td>
              			<td id="D18" onClick="ToRet(17)" onMouseOver="CngTDCl(this,1,17);" onMouseOut="CngTDCl(this,0,17);" style="cursor:pointer; border:none;">15</td>
              			<td id="D19" onClick="ToRet(18)" onMouseOver="CngTDCl(this,1,18);" onMouseOut="CngTDCl(this,0,18);" style="cursor:pointer; border:none;">16</td>
              			<td id="D20" onClick="ToRet(19)" onMouseOver="CngTDCl(this,1,19);" onMouseOut="CngTDCl(this,0,19);" style="cursor:pointer; border:none;">17</td>
              			<td id="D21" onClick="ToRet(20)" onMouseOver="CngTDCl(this,1,20);" onMouseOut="CngTDCl(this,0,20);" style="cursor:pointer; border:none;">18</td>
  					</tr>
  					<tr align="center">
    					<td id="D22" onClick="ToRet(21)" onMouseOver="CngTDCl(this,1,21);" onMouseOut="CngTDCl(this,0,21);" style="cursor:pointer; border:none;">19</td>
    					<td id="D23" onClick="ToRet(22)" onMouseOver="CngTDCl(this,1,22);" onMouseOut="CngTDCl(this,0,22);" style="cursor:pointer; border:none;">20</td>
    					<td id="D24" onClick="ToRet(23)" onMouseOver="CngTDCl(this,1,23);" onMouseOut="CngTDCl(this,0,23);" style="cursor:pointer; border:none;">21</td>
              			<td id="D25" onClick="ToRet(24)" onMouseOver="CngTDCl(this,1,24);" onMouseOut="CngTDCl(this,0,24);" style="cursor:pointer; border:none;">22</td>
              			<td id="D26" onClick="ToRet(25)" onMouseOver="CngTDCl(this,1,25);" onMouseOut="CngTDCl(this,0,25);" style="cursor:pointer; border:none;">23</td>
              			<td id="D27" onClick="ToRet(26)" onMouseOver="CngTDCl(this,1,26);" onMouseOut="CngTDCl(this,0,26);" style="cursor:pointer; border:none;">24</td>
              			<td id="D28" onClick="ToRet(27)" onMouseOver="CngTDCl(this,1,27);" onMouseOut="CngTDCl(this,0,27);" style="cursor:pointer; border:none;">25</td>
  					</tr>
      				<tr align="center">
    					<td id="D29" onClick="ToRet(28)" onMouseOver="CngTDCl(this,1,28);" onMouseOut="CngTDCl(this,0,28);" style="cursor:pointer; border:none;">26</td>
    					<td id="D30" onClick="ToRet(29)" onMouseOver="CngTDCl(this,1,29);" onMouseOut="CngTDCl(this,0,29);" style="cursor:pointer; border:none;">27</td>
    					<td id="D31" onClick="ToRet(30)" onMouseOver="CngTDCl(this,1,30);" onMouseOut="CngTDCl(this,0,30);" style="cursor:pointer; border:none;">28</td>
              			<td id="D32" onClick="ToRet(31)" onMouseOver="CngTDCl(this,1,31);" onMouseOut="CngTDCl(this,0,31);" style="cursor:pointer; border:none;">29</td>
              			<td id="D33" onClick="ToRet(32)" onMouseOver="CngTDCl(this,1,32);" onMouseOut="CngTDCl(this,0,32);" style="cursor:pointer; border:none;">30</td>
              			<td id="D34" onClick="ToRet(33)" onMouseOver="CngTDCl(this,1,33);" onMouseOut="CngTDCl(this,0,33);" style="cursor:pointer; border:none;">31</td>
              			<td id="D35" onClick="ToRet(34)" onMouseOver="CngTDCl(this,1,34);" onMouseOut="CngTDCl(this,0,34);" style="cursor:pointer; border:none;">1</td>
  					</tr>
            		<tr align="center">
    					<td id="D36" onClick="ToRet(35)" onMouseOver="CngTDCl(this,1,35);" onMouseOut="CngTDCl(this,0,35);" style="cursor:pointer; border:none;">2</td>
    					<td id="D37" onClick="ToRet(36)" onMouseOver="CngTDCl(this,1,36);" onMouseOut="CngTDCl(this,0,36);" style="cursor:pointer; border:none;">3</td>
    					<td id="D38" onClick="ToRet(37)" onMouseOver="CngTDCl(this,1,37);" onMouseOut="CngTDCl(this,0,37);" style="cursor:pointer; border:none;">4</td>
              			<td id="D39" onClick="ToRet(38)" onMouseOver="CngTDCl(this,1,38);" onMouseOut="CngTDCl(this,0,38);" style="cursor:pointer; border:none;">4</td>
              			<td id="D40" onClick="ToRet(39)" onMouseOver="CngTDCl(this,1,39);" onMouseOut="CngTDCl(this,0,39);" style="cursor:pointer; border:none;">4</td>
              			<td id="D41" onClick="ToRet(40)" onMouseOver="CngTDCl(this,1,40);" onMouseOut="CngTDCl(this,0,40);" style="cursor:pointer; border:none;">4</td>
              			<td id="D42" onClick="ToRet(41)" onMouseOver="CngTDCl(this,1,41);" onMouseOut="CngTDCl(this,0,41);" style="cursor:pointer; border:none;">8</td>
  					</tr>
          </table>
    		</td></tr>
   	  </table>   
		</td>
	</tr>
	<tr><td height="2px"></td></tr>
</table>
<script language="javascript">
	var TPMD=new Date(), TPMToday=[TPMD.getFullYear(),TPMD.getMonth()+1,TPMD.getDate()];
	var ua=navigator.userAgent.toLowerCase();
	var KO=ua.match(/konqueror\/(\d+)/),KO3=KO&&KO[1]==3,SA=ua.match(/safari\/(\d+)/),SA1=SA&&SA[1]<86; KO=!!KO; SA=!!SA;
	var MAC=/mac/.test(ua),OP=!!self.opera,WEBTV=/webtv/.test(ua),IE=/msie/.test(ua)&&!OP&&!WEBTV&&!SA&&!KO,GK=/gecko/.test(ua),OP8=/opera 8/.test(ua)&&OP;
	var NN4=IE4=NS6=false,IE5=IE&&![].push&&!IE4;
	var TPDCalSelf = window.parent.document.getElementsByTagName("iframe")[self.name];
	var __agenda=[], popkey=["Lite"], flatkey=["Lite"], __stub=[];
	var MILLIDAY=86400000, giInitDelay=200, _lineThru=true, _noBound=false, _mcafee=false, _animPop=NN4||IE&&!IE4&&!MAC, _animInt=20, _preferOOR=true, gbHideCalMiddle=false, _cacheOther=true;
	
	var GlobalPosOffset=[0,0];
	var MontCtrl=new Object();
	var MontValue=new Object();
	var MontBegin=new Object();
	var MontEnd=new Object();
	var MontBeginSet = [];
	var MontEndSet = [];
	var MontValueSet = [];
	var NowDate = [];
	var BeginSet = false;
	var EndSet = false;
	var CalShowNow = false;
	
	var WrkDayInEnaNrmColor = ''; // normal day
	var WrkDayInEnaOvrColor = ''; // normal day	
	var WrkDayInEnaFontColor = '#333333';
	var WrkDayOuEnaNrmColor = '#E8E8E8'; // last month
	var WrkDayOuEnaOvrColor = '#E8E8E8'; // last month
	var WrkDayOuEnaFontColor = '#CCC'; // font last month
	
	var OffDayInEnaNrmColor = ''; // holiday
	var OffDayInEnaOvrColor = ''; // holiday	
	var OffDayInEnaFontColor = '#994444';
	var OffDayOuEnaNrmColor = '#E8E8E8'; // last month holiday
	var OffDayOuEnaOvrColor = '#E8E8E8'; // last month
	var OffDayOuEnaFontColor = '#CCC'; // font last month holiday
	
	var WrkDayInDisNrmColor = ''; // block day
	var WrkDayInDisOvrColor = '';
	var WrkDayInDisFontColor = '#CCC';
	var WrkDayOuDisNrmColor = '';
	var WrkDayOuDisOvrColor = '';
	var WrkDayOuDisFontColor = '#CCC';
	
	var OffDayInDisNrmColor = ''; // block day holiday
	var OffDayInDisOvrColor = '';
	var OffDayInDisFontColor = '#CCC';
	var OffDayOuDisNrmColor = '';
	var OffDayOuDisOvrColor = '';
	var OffDayOuDisFontColor = '#CCC';
	
	var ToDayNrmColor = '#660000'; // To day
	var ToDayOvrColor = '#437643';
	var ToDayFontColor = '#FFFFFF';
	var SelDayNrmColor = '#555555';
	var SelDayOvrColor = '#656565';
	var SelDayFontColor = '#FFEE33';
		
	var DisCursorType = 'default';
	var EnaCursorType = 'pointer';
	var NrmBdrColor = '#969696';
	var SelBdrColor = '#FF0000';
	
	var AllDayBdrColor = [
		NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor,
		NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor,
		NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor,
		NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor,
		NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor,
		NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor, NrmBdrColor
	];
	
	var DayNrmColor = [
		OffDayOuEnaNrmColor, WrkDayOuEnaNrmColor, WrkDayOuEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, OffDayInEnaNrmColor,
		OffDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, OffDayInEnaNrmColor,
		OffDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, OffDayInEnaNrmColor,
		OffDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, OffDayInEnaNrmColor,
		OffDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, OffDayInEnaNrmColor,
		OffDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, WrkDayInEnaNrmColor, OffDayOuEnaNrmColor
	];
	var DayOvrColor = [
		OffDayOuEnaOvrColor, WrkDayOuEnaOvrColor, WrkDayOuEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, OffDayInEnaOvrColor,
		OffDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, OffDayInEnaOvrColor,
		OffDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, OffDayInEnaOvrColor,
		OffDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, OffDayInEnaOvrColor,
		OffDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, OffDayInEnaOvrColor,
		OffDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, WrkDayInEnaOvrColor, OffDayOuEnaOvrColor
	];
	var DayFontColor = [
		OffDayOuEnaFontColor, WrkDayOuEnaFontColor, WrkDayOuEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, OffDayInEnaFontColor,
		OffDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, OffDayInEnaFontColor,
		OffDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, OffDayInEnaFontColor,
		OffDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, OffDayInEnaFontColor,
		OffDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, OffDayInEnaFontColor,
		OffDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, WrkDayInEnaFontColor, OffDayOuEnaFontColor
	];
	
	var DayCursor = [
		EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType,
		EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType,
		EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType,
		EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType,
		EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType,
		EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType, EnaCursorType
	];
	
	var DEnable = [
		1, 1,1,1,1,1, 1,
		1, 1,1,1,1,1, 1,
		1, 1,1,1,1,1, 1,
		1, 1,1,1,1,1, 1,
		1, 1,1,1,1,1, 1,
		1, 1,1,1,1,1, 1
	];
	
	var DayNumValue = [
		29, 30,31, 1, 2, 3,  4,
		 5,  6, 7, 8, 9,10, 11,
		12, 13,14,15,16,17, 18,
		19, 20,21,22,23,24, 25,
		26, 27,28,29,30,31,  1,
		 2,  3, 4, 5, 6, 7,  8
	];
	var MonNumValue = [
		7, 7,7,8,8,8, 8,
		8, 8,8,8,8,8, 8,
		8, 8,8,8,8,8, 8,
		8, 8,8,8,8,8, 8,
		8, 8,8,8,8,8, 9,
		9, 9,9,9,9,9, 9
	];
	var YeaNumValue = [
		2007, 2007,2007,2007,2007,2007, 2007,
		2007, 2007,2007,2007,2007,2007, 2007,
		2007, 2007,2007,2007,2007,2007, 2007,
		2007, 2007,2007,2007,2007,2007, 2007,
		2007, 2007,2007,2007,2007,2007, 2007,
		2007, 2007,2007,2007,2007,2007, 2007
	];
	
  	if(document.getElementsByTagName) onload = function(){
			window.parent.document.getElementsByTagName("BODY")[0].onclick = ChkHideCal;	
	}	
	
	function ChkHideCal(){
    	if(CalShowNow == true){
			TPDCalHideCal();
		}	
	}	
	
	function GetMaxDate(y,m){
		var MaxD = 31;
		var Y = parseInt(y);
		var M = parseInt(m);
		if(M==1 || M==3 || M==5 || M==7 || M==8 || M==10 || M==12)MaxD = 31;
		if(M==4 || M==6 || M==9 || M==11)MaxD = 30;
		if(M==2){
			if((Y%4)==0)MaxD = 29;
			else MaxD = 28;
		}
		return MaxD;
	}
	
	function CheckDateEnable(StrDateSet){
		var DBegin = 0;
		var MBegin = 0;
		var YBegin = 0;
		var DEnd = 0;
		var MEnd = 0;
		var YEnd = 0;
		var y = parseInt(StrDateSet[0]);
		var m = parseInt(StrDateSet[1]);
		var d = parseInt(StrDateSet[2]);
		
		var ToBegEnable = 0;
		var ToEndEnable = 0;
		if(BeginSet){
			YBegin = parseInt(MontBeginSet[0]);
			MBegin = parseInt(MontBeginSet[1]);
			DBegin = parseInt(MontBeginSet[2]);
		}
		if(EndSet){
			YEnd = parseInt(MontEndSet[0]);
			MEnd = parseInt(MontEndSet[1]);
			DEnd = parseInt(MontEndSet[2]);
		}
		
		//alert( y + '-' + m + '-' + d + '\n' + YBegin + '-' + MBegin + '-' + DBegin + '\n' +YEnd + '-' + MEnd + '-' + DEnd);
		
		if(BeginSet){
			if(y < YBegin){
				ToBegEnable = 0;
				//alert('False 1');
			}
			else{
				if(y == YBegin){
					if(m < MBegin){
						ToBegEnable = 0;
						//alert('False 2 M = ' + m + '<' + MBegin);
					}
					else{
						if(m == MBegin){
							if(d < DBegin){
								ToBegEnable = 0;
								//alert('False 3');
							}
							else{
								ToBegEnable = 1;
							}
						}
						else{
							ToBegEnable = 1;	
						}
					}	
				}
				else{
					ToBegEnable = 1;
				}
			}
		}
		else{
			ToBegEnable = 1;
		}
					
		if(EndSet){
			if(y > YEnd){
				ToEndEnable = 0;
				//alert(y + 'Y > End' + YEnd);
				//alert('False 4');
			}
			else{
				if(y == YEnd){
					if(m > MEnd){
						ToEndEnable = 0;
						//alert(y + '-' + m + 'M > End' + MEnd);
						//alert('False 5');
					}
					else{
						if(m == MEnd){
							if(d > DEnd){
								ToEndEnable = 0;	
								//alert(d + 'D > End' + DEnd);
								//alert('False 6');
							}
							else{
								ToEndEnable = 1;
							}
						}
						else{
							ToEndEnable = 1;	
						}
					}
				}
				else{
					ToEndEnable = 1;	
				}
			}			
		}
		else{
			ToEndEnable = 1;
		}
		//alert (ToBegEnable + '-' + ToEndEnable + '-' + BeginSet + '-' + EndSet);
		if(ToBegEnable == 1 && ToEndEnable == 1)return true;
		return false;
	}
	
	
	function SetDCal(StrDateSet){
		var HPastM = false;
		var HNextM = false;
		var PastDSt = 0;
		var NextDSt = 0;
		var y = parseInt(StrDateSet[0]);
		var m = parseInt(StrDateSet[1]);
		var d = parseInt(StrDateSet[2]);
		//alert(y + '-' + m + '-' + d);
		var NwY = parseInt(NowDate[0]);
		var NwM = parseInt(NowDate[1]);
		var NwD = parseInt(NowDate[2]);

		var NsY = parseInt(MontValueSet[0]);
		var NsM = parseInt(MontValueSet[1]);
		var NsD = parseInt(MontValueSet[2]);
		
		var DOFW = 0;
		var DEna = false;
		var DSel = false;
		var DNow = false;
		
		var pm = m-1;
		var py = y;
		if(pm == 0){
			pm = 12;
			py--;
		}
		
		var nm = m+1;
		var ny = y;
		if(nm == 13){
			nm = 1;
			ny++;
		}
		
		var PastMaxDate = GetMaxDate(py,pm);	
		var NowMaxDate = GetMaxDate(y,m);
		var NextMaxDate = 0;	
		var MyDay = new Date();
		
		mdo = (m*1)-1; // January=0 December=11
		MyDay = new Date(y,mdo,1);
		var FstDayOfWeek = MyDay.getDay(); // Sunday=0 Saturday=6
		var ToStart = 0;
		//alert('FstDayOfWeek = ' + FstDayOfWeek + '\nMyDay = ' + MyDay);
		//alert('pm = ' + pm + ' py = ' + py + '\n m = ' + m + ' y = ' + y + '\n nm = ' + nm + ' ny = ' + ny);
		var TotalDatePast = 0;
		if(FstDayOfWeek != 0){
			PastDSt = (PastMaxDate-FstDayOfWeek)+1;
			TotalDatePast = FstDayOfWeek;
		}
		else{
			PastDSt = PastMaxDate-6;
			TotalDatePast = 7;
		}
		
		NextMaxDate = 42-(NowMaxDate + TotalDatePast);
		
		ToStart = 0;
		//alert(py + '-' + pm + '\n' + y + '-' + m + '\n' + ny + '-' + nm);
		for(i=PastDSt; i<=PastMaxDate; i++){
			DayNumValue[ToStart] = i;
			MonNumValue[ToStart] = pm;
			YeaNumValue[ToStart] = py;
			
			mdo = pm-1;
			MyDay = new Date(py,mdo,i);
			DOFW = MyDay.getDay(); // Sunday=0 Saturday=6
				
			DEna = CheckDateEnable([py,pm,i]);
			DSel = false;
			DNow = false;
			if(i== NwD && pm == NwM && py == NwY)DNow = true;
			if(i== NsD && pm == NsM && py == NsY)DSel = true;
			if(DEna){DEnable[ToStart] = 1;}else{DEnable[ToStart] = 0;}
			DayNumValue[ToStart] = i;
			MonNumValue[ToStart] = pm;
			YeaNumValue[ToStart] = py;
			//alert('index = ' + ToStart + ' Day = ' + i + ' Month = ' + pm + ' Year = ' + py + ' Day of Week = ' + DOFW);
			if(DOFW == 0 || DOFW == 6){
				if(DEna){
					DayNrmColor[ToStart]  = OffDayOuEnaNrmColor;
					DayOvrColor[ToStart]  = OffDayOuEnaOvrColor;
					DayFontColor[ToStart] = OffDayOuEnaFontColor;
					DayCursor[ToStart]    = EnaCursorType;
					//alert('index = ' + ToStart + ' Enable Day = ' + i + ' Month = ' + pm + ' Year = ' + py + ' Day of Week = ' + DOFW);
				}
				else{
					DayNrmColor[ToStart]  = OffDayOuDisNrmColor;
					DayOvrColor[ToStart]  = OffDayOuDisOvrColor;
					DayFontColor[ToStart] = OffDayOuDisFontColor;
					DayCursor[ToStart]    = DisCursorType;
					//alert('index = ' + ToStart + ' Disable Day = ' + i + ' Month = ' + pm + ' Year = ' + py + ' Day of Week = ' + DOFW);
				}					
			}
			else{
				if(DEna){
					DayNrmColor[ToStart]  = WrkDayOuEnaNrmColor;
					DayOvrColor[ToStart]  = WrkDayOuEnaOvrColor;
					DayFontColor[ToStart] = WrkDayOuEnaFontColor;
					DayCursor[ToStart]    = EnaCursorType;
				}
				else{
					DayNrmColor[ToStart]  = WrkDayOuDisNrmColor;
					DayOvrColor[ToStart]  = WrkDayOuDisOvrColor;
					DayFontColor[ToStart] = WrkDayOuDisFontColor;
					DayCursor[ToStart]    = DisCursorType;
				}					
			}
			
			AllDayBdrColor[ToStart] = NrmBdrColor;
				
			if(DNow && DSel){
				DayNrmColor[ToStart]  = ToDayNrmColor;
				DayOvrColor[ToStart]  = ToDayOvrColor;
				DayFontColor[ToStart] = ToDayFontColor;
				AllDayBdrColor[ToStart] = SelBdrColor;
			}
			else{
				if(DNow){
					DayNrmColor[ToStart]  = ToDayNrmColor;
					DayOvrColor[ToStart]  = ToDayOvrColor;
					DayFontColor[ToStart] = ToDayFontColor;
					AllDayBdrColor[ToStart] = NrmBdrColor;
				}
				if(DSel){
					DayNrmColor[ToStart]  = SelDayNrmColor;
					DayOvrColor[ToStart]  = SelDayOvrColor;
					DayFontColor[ToStart] = SelDayFontColor;
					AllDayBdrColor[ToStart] = SelBdrColor;
				}
			}				
			ToStart++;
		}
		
		for(i=1; i<=NowMaxDate; i++){
			DayNumValue[ToStart] = i;
			MonNumValue[ToStart] = m;
			YeaNumValue[ToStart] = y;
			mdo = m-1;
			MyDay = new Date(y,mdo,i);
			DOFW = MyDay.getDay(); // Sunday=0 Saturday=6
			//if(i==1){
				//alert('index = ' + ToStart + ' Now Day = ' + i + ' Month = ' + m + ' Year = ' + y + ' Day of Week = ' + DOFW);
			//}
			DEna = CheckDateEnable([y,m,i]);
			DSel = false;
			DNow = false;
			if(i== NwD && m == NwM && y == NwY)DNow = true;
			if(i== NsD && m == NsM && y == NsY)DSel = true;
			if(DEna){DEnable[ToStart] = 1;}else{DEnable[ToStart] = 0;}	
			DayNumValue[ToStart] = i;
			MonNumValue[ToStart] = m;
			YeaNumValue[ToStart] = y;
			if(DOFW == 0 || DOFW == 6){
				if(DEna){
					DayNrmColor[ToStart]  = OffDayInEnaNrmColor;
					DayOvrColor[ToStart]  = OffDayInEnaOvrColor;
					DayFontColor[ToStart] = OffDayInEnaFontColor;
					DayCursor[ToStart]    = EnaCursorType;
				}
				else{
					DayNrmColor[ToStart]  = OffDayInDisNrmColor;
					DayOvrColor[ToStart]  = OffDayInDisOvrColor;
					DayFontColor[ToStart] = OffDayInDisFontColor;
					DayCursor[ToStart]    = DisCursorType;
				}					
			}
			else{
				if(DEna){
					DayNrmColor[ToStart]  = WrkDayInEnaNrmColor;
					DayOvrColor[ToStart]  = WrkDayInEnaOvrColor;
					DayFontColor[ToStart] = WrkDayInEnaFontColor;
					DayCursor[ToStart]    = EnaCursorType;
				}
				else{
					DayNrmColor[ToStart]  = WrkDayInDisNrmColor;
					DayOvrColor[ToStart]  = WrkDayInDisOvrColor;
					DayFontColor[ToStart] = WrkDayInDisFontColor;
					DayCursor[ToStart]    = DisCursorType;
				}					
			}
			
			AllDayBdrColor[ToStart] = NrmBdrColor;
			if(DNow && DSel){
				DayNrmColor[ToStart]  = ToDayNrmColor;
				DayOvrColor[ToStart]  = ToDayOvrColor;
				DayFontColor[ToStart] = ToDayFontColor;
				AllDayBdrColor[ToStart] = SelBdrColor;
			}
			else{
				if(DNow){
					DayNrmColor[ToStart]  = ToDayNrmColor;
					DayOvrColor[ToStart]  = ToDayOvrColor;
					DayFontColor[ToStart] = ToDayFontColor;
					AllDayBdrColor[ToStart] = NrmBdrColor;
				}
				if(DSel){
					DayNrmColor[ToStart]  = SelDayNrmColor;
					DayOvrColor[ToStart]  = SelDayOvrColor;
					DayFontColor[ToStart] = SelDayFontColor;
					AllDayBdrColor[ToStart] = SelBdrColor;
				}
			}				
			ToStart++;
		}
		
		for(i=1; i<=NextMaxDate; i++){
			DayNumValue[ToStart] = i;
			MonNumValue[ToStart] = nm;
			YeaNumValue[ToStart] = ny;
			mdo = nm-1;
			MyDay = new Date(ny,mdo,i);
			
			DOFW = MyDay.getDay(); // Sunday=0 Saturday=6
			//if(i==1){
				//alert('index = ' + ToStart + ' Next Day = ' + i + ' Month = ' + nm + ' Year = ' + ny + ' Day of Week = ' + DOFW);
			//}	
			DEna = CheckDateEnable([ny,nm,i]);
			DSel = false;
			DNow = false;
			if(i== NwD && nm == NwM && ny == NwY)DNow = true;
			if(i== NsD && nm == NsM && ny == NsY)DSel = true;
			if(DEna){DEnable[ToStart] = 1;}else{DEnable[ToStart] = 0;}
			DayNumValue[ToStart] = i;
			MonNumValue[ToStart] = nm;
			YeaNumValue[ToStart] = ny;
			if(DOFW == 0 || DOFW == 6){
				if(DEna){
					DayNrmColor[ToStart]  = OffDayOuEnaNrmColor;
					DayOvrColor[ToStart]  = OffDayOuEnaOvrColor;
					DayFontColor[ToStart] = OffDayOuEnaFontColor;
					DayCursor[ToStart]    = EnaCursorType;
				}
				else{
					DayNrmColor[ToStart]  = OffDayOuDisNrmColor;
					DayOvrColor[ToStart]  = OffDayOuDisOvrColor;
					DayFontColor[ToStart] = OffDayOuDisFontColor;
					DayCursor[ToStart]    = DisCursorType;
				}					
			}
			else{
				if(DEna){
					DayNrmColor[ToStart]  = WrkDayOuEnaNrmColor;
					DayOvrColor[ToStart]  = WrkDayOuEnaOvrColor;
					DayFontColor[ToStart] = WrkDayOuEnaFontColor;
					DayCursor[ToStart]    = EnaCursorType;
				}
				else{
					DayNrmColor[ToStart]  = WrkDayOuDisNrmColor;
					DayOvrColor[ToStart]  = WrkDayOuDisOvrColor;
					DayFontColor[ToStart] = WrkDayOuDisFontColor;
					DayCursor[ToStart]    = DisCursorType;
				}					
			}	
			
			AllDayBdrColor[ToStart] = NrmBdrColor;
			if(DNow && DSel){
				DayNrmColor[ToStart]  = ToDayNrmColor;
				DayOvrColor[ToStart]  = ToDayOvrColor;
				DayFontColor[ToStart] = ToDayFontColor;
				AllDayBdrColor[ToStart] = SelBdrColor;
			}
			else{
				if(DNow){
					DayNrmColor[ToStart]  = ToDayNrmColor;
					DayOvrColor[ToStart]  = ToDayOvrColor;
					DayFontColor[ToStart] = ToDayFontColor;
					AllDayBdrColor[ToStart] = NrmBdrColor;
				}
				if(DSel){
					DayNrmColor[ToStart]  = SelDayNrmColor;
					DayOvrColor[ToStart]  = SelDayOvrColor;
					DayFontColor[ToStart] = SelDayFontColor;
					AllDayBdrColor[ToStart] = SelBdrColor;
				}
			}			
			ToStart++;
		}
		DrawCal();
	}
	
	function CngTDCl(TDObj, changeTo, Id){
		if(changeTo == 0)TDObj.style.backgroundColor = DayNrmColor[Id]; 
		if(changeTo == 1)TDObj.style.backgroundColor = DayOvrColor[Id];
	}
	
	function Test(){
		alert('Tom');
	}
	
	function ChkStartDate(DVal, DBe){
		//alert(DVal + ' --- ' + DBe);
		if(DBe == '')return false;
		if(DVal == '' || DVal == null || DVal == false)return true;
		var DbeChk = SplitDate(DBe);
		var DvalChk = SplitDate(DVal);	
		var y1 = parseInt(DvalChk[0]);
		var m1 = parseInt(DvalChk[1]);
		var d1 = parseInt(DvalChk[2]);
		var y2 = parseInt(DbeChk[0]);
		var m2 = parseInt(DbeChk[1]);
		var d2 = parseInt(DbeChk[2]);
		
		//alert('Test 1 Y1 = ' + y1 + ' Y2 = ' + y2 + ' M1 = ' + m1 + ' M2 = ' + m2 + ' D1 = ' + d1 + ' D2 = ' + d2);
		if(y1 < y2){
			//alert('Test 2');
			return false;
		}
		if(y1 > y2){
			//alert('Test 3');
			return true;
		}
		if(y1 == y2){
			//alert('Test Y1 = Y2');
			if(m1 < m2){
				//alert('Test M1 < M2' + ' M1=' + m1 + ' M2=' + m2);
				return false;
			}
			//alert('Test 1 Y1 = ' + y1 + ' Y2 = ' + y2 + ' M1 = ' + m1 + ' M2 = ' + m2 + ' D1 = ' + d1 + ' D2 = ' + d2);
			if(m1 > m2){
				//alert('Test M1 > M2' + ' M1=' + m1 + ' M2=' + m2);
				//alert('Test 5');
				return true;
			}
			if(m1 == m2){
				//alert('Test M1 = M2' + ' M1=' + m1 + ' M2=' + m2);
				//alert('Test 1 Y1 = ' + y1 + ' Y2 = ' + y2 + ' M1 = ' + m1 + ' M2 = ' + m2 + ' D1 = ' + d1 + ' D2 = ' + d2);
				if(d1 < d2){
					//alert('Test D1 < D2' + ' D1=' + d1 + ' D2=' + d2);
					//alert('Test 6');
					return false;
				}
			}
		}
		return true;
	}
	
	function LoadTPDCal(DOpt,DCtr,DVal,DBe, DEn){
		//alert('Tom' + self.name);
		//return;
		var NxDate = [];
		var DNow=new Date();
		
		if(DNow.getFullYear() == '1970'){
			//var DNowArr = new Array();
			//DNowArr = DBe.value.split('-');
			//var DNow = new Date(DNowArr[0],DNowArr[1] - 1,DNowArr[2]);
			var DNow = new Date(DNow.getFullYear(),DNow.getMonth(),DNow.getDate() + 15426);
		}			
		
		NowDate = [DNow.getFullYear(),DNow.getMonth()+1,DNow.getDate()];
		// DOpt = 0 Normal;
		// DOpt = 1 Start Now Down
		// DOpt = 2 Start Now Up
		// DOpt = 3 Start Now+1 Up 
		// DOpt = 4 Start Now+1 Up  To End-1
		// DOpt = 5 Start Now+1 Up  To End
		// DOpt = 6 Start Now-1 Down
		//alert('Tom');
		var DateCtrl=DCtr;
		var DateValue=DVal;
		var DateSt = DBe;

		//alert(ChkStartDate(DateValue.value, DateSt.value));
		if(DOpt != 6){
			if(ChkStartDate(DateValue.value, DateSt.value) == false){
				//alert('XXX DVal = ' + DateValue.value + ' Dbe = '  + DateSt.value);
				DateValue.value = DateSt.value;	
			}
		}
		
		if (MontCtrl != DateCtrl) {
			TPDCalHideCal(); 
			MontCtrl = DateCtrl;
			MontValue = DateValue;
			//alert('Tom');
		}
		else if (TPDCalIsShown()) {
			TPDCalHideCal(); 
			return;
		}
		//alert('Tom');
		if(DOpt == 0){
			MontBeginSet = [MinYear,1,1];
			MontEndSet = [MaxYear,12,31];	
		}
		
		if(DOpt == 1){
			MontBeginSet = [MinYear,1,1];
			MontEndSet = NowDate;
			BeginSet = true;
			EndSet = true;
		}
				
		if(DOpt == 2){
			if(DBe){
				var DateBegin=DBe;
				MontBegin = DateBegin;
				if(MontBegin.value){
					MontBeginSet = SplitDate(MontBegin.value);
					//alert('MontBegin.value = ' + MontBegin.value + ' MontBeginSet = ' + MontBeginSet[0] + '-' + MontBeginSet[1] + '-' + MontBeginSet[2]);
				}
				else{
					MontBeginSet = NowDate;
					//alert('Tom');
				}
				BeginSet = true;
			}
			else{
				MontBeginSet = NowDate;
				BeginSet = false;
			}

			if(DEn){
				var DateEnd=DEn;
				MontEnd = DateEnd;
				if(MontEnd.value){
					NxDate = SplitDate(MontEnd.value);
					tmpstr = MinusDay(NxDate, 1);
					MontEndSet = SplitDate(tmpstr);
					//alert(MontEndSet[0] + '-' + MontEndSet[1] + '-' + MontEndSet[2]);
				}
				else{
					MontEndSet = [MaxYear,12,31];
				}
				EndSet = true;
			}
			else{
				MontEndSet = [MaxYear,12,31];
				EndSet = true;
			}
		}
		
		if(DOpt == 3){
			if(DBe){
				var DateBegin=DBe;
				MontBegin = DateBegin;
				if(MontBegin.value){
					NxDate = SplitDate(MontBegin.value);
					tmpstr = PlusDay(NxDate, 1);
					MontBeginSet = SplitDate(tmpstr);
				}
				else{
					tmpstr = PlusDay(NowDate, 1);
					MontBeginSet = SplitDate(tmpstr);
				}
				BeginSet = true;
			}
			else{
				tmpstr = PlusDay(NowDate, 1);
				MontBeginSet = SplitDate(tmpstr);
			}
			MontEndSet = [MaxYear,12,31];	
		}
		
		if(DOpt == 4){
			if(DBe){
				var DateBegin=DBe;
				MontBegin = DateBegin;
				if(MontBegin.value){
					NxDate = SplitDate(MontBegin.value);
					tmpstr = PlusDay(NxDate, 1);
					MontBeginSet = SplitDate(tmpstr);
				}
				else{
					tmpstr = PlusDay(NowDate, 1);
					MontBeginSet = SplitDate(tmpstr);
				}
				BeginSet = true;
			}
			else{
				tmpstr = PlusDay(NowDate, 1);
				MontBeginSet = SplitDate(tmpstr);
			}
			
			if(DEn){
				var DateEnd=DEn;
				MontEnd = DateEnd;
				if(MontEnd.value){
					NxDate = SplitDate(MontEnd.value);
					tmpstr = MinusDay(NxDate, 1);
					MontEndSet = SplitDate(tmpstr);
				}
				else{
					MontEndSet = [MaxYear,12,31];
				}
				EndSet = true;
			}
			else{
				MontEndSet = [MaxYear,12,31];
				EndSet = false;
			}
		}
		
		if(DOpt == 5){
			//alert("5 ");
			if(DBe){
				//alert("Dbe");
				var DateBegin=DBe;
				//MontBegin = DateBegin;
				MontBegin = DBe;
				if(MontBegin.value){
					//alert("Dbe Value = " + MontBegin.value);
					 
					NxDate = SplitDate(MontBegin.value);
					tmpstr = PlusDay(NxDate, 1);
					MontBeginSet = SplitDate(tmpstr);
				}
				else{
					//alert("Dbe No Value");
					tmpstr = PlusDay(NowDate, 1);
					MontBeginSet = SplitDate(tmpstr);
				}
				BeginSet = true;
			}
			else{
				//alert("No Dbe");
				tmpstr = PlusDay(NowDate, 1);
				MontBeginSet = SplitDate(tmpstr);
			}
			
			if(DEn){
				var DateEnd=DEn;
				MontEnd = DateEnd;
				if(MontEnd.value){
					//NxDate = SplitDate(MontEnd.value);
					tmpstr = MontEnd.value;
					//tmpstr = MinusDay(NxDate, 1);
					MontEndSet = SplitDate(tmpstr);
				}
				else{
					MontEndSet = [MaxYear,12,31];
				}
				EndSet = true;
			}
			else{
				MontEndSet = [MaxYear,12,31];
				EndSet = false;
			}
		}
		
		if(DOpt == 6){
			MontBeginSet = [MinYear,1,1];
			tmpstr = MinusDay(NowDate, 1);
			MontEndSet = SplitDate(tmpstr);
			
			BeginSet = true;
			EndSet = true;
		}

		
		if(MontValue.value){
			MontValueSet = SplitDate(MontValue.value);
		}
		else{
			if(DOpt == 3 || DOpt == 4 || DOpt == 5){
				MontValueSet = MontBeginSet;
			}
			else{
				MontValueSet = NowDate; 
			}
		}
		
		//alert('MontValue.value = ' + MontValue.value);
		//if(DOpt == 3){
				//alert(' Now Day = ' + MontValueSet[2] + ' Month = ' + MontValueSet[1] + ' Year = ' + MontValueSet[0]);
		//}	
		
		SetYOpt(MontValueSet[0]);
		SetMOpt(MontValueSet[1],MontValueSet[0]);	
		SetDCal(MontValueSet);
		
		var YBe = MontBeginSet[0];
		var YEn = MontEndSet[0];
		
		var MBe = MontBeginSet[1];
		var MEn = MontEndSet[1];
		
		var YSl = MontValueSet[0];
		var MSl = MontValueSet[1];
		if(YBe == YEn){
			if(MBe == MEn){
				document.getElementById('BtDn').style.visibility = 'hidden';
				document.getElementById('BtUp').style.visibility = 'hidden';
			}
			else{
				if(MSl == MBe){
					document.getElementById('BtDn').style.visibility = 'hidden';
				}
				else{
					document.getElementById('BtDn').style.visibility = 'visible';
				}
				if(MSl == MEn){
					document.getElementById('BtUp').style.visibility = 'hidden';
				}
				else{
					document.getElementById('BtUp').style.visibility = 'visible';
				}
			}
		}
		else{
			if(YSl == YBe){
				if(MSl == MBe){
					document.getElementById('BtUp').style.visibility = 'visible';
					document.getElementById('BtDn').style.visibility = 'hidden';
				}
				else{
					document.getElementById('BtUp').style.visibility = 'visible';
					document.getElementById('BtDn').style.visibility = 'visible';
				}
			}
			else{
				if(YSl == YEn){
					if(MSl == MEn){
						document.getElementById('BtUp').style.visibility = 'hidden';
						document.getElementById('BtDn').style.visibility = 'visible';
					}
					else{
						document.getElementById('BtUp').style.visibility = 'visible';
						document.getElementById('BtDn').style.visibility = 'visible';
					}
				}
				else{
					document.getElementById('BtUp').style.visibility = 'visible';
					document.getElementById('BtDn').style.visibility = 'visible';
				}
			}
		}
		
		var p=fGetXY(DateCtrl,GlobalPosOffset);
		var oh=MontCtrl.offsetHeight,ptb=TPDCalGetById(document,"TPDCal"),h=ptb.offsetHeight,w=ptb.offsetWidth, isUp;
		TPDCalSelf.width = w;
		TPDCalSelf.height = h;
		h=(h?h:TPDCalSelf.height)+oh;
		var ws=fGetWinSize(parent);
		var tmp=ws[0]+ws[2]-(w?w:TPDCalSelf.width);
		p[0]=p[0]<ws[2]?ws[2]+2:p[0]>tmp?tmp:p[0];
		tmp=ws[1]+ws[3]-h;
		isUp=p[1]>tmp&&p[1]-ws[3]+oh>=h;
		if (p[1]>tmp&&p[1]-ws[3]+oh<h) p[1]=ws[3]-1-oh;
		if (isUp) p[1]-=oh>0?h+2:h+25;
		TPDCalShowCal(p[0],p[1]+oh+1,isUp);
	}
	
	function ToRet(id){
		var dd = '00';
		var mm = '00';
		
		var En = DEnable[id];
		var d  = DayNumValue[id];
		var m  = MonNumValue[id];
		var y  = YeaNumValue[id];
		if(En == 0)return;
		if(d < 10){dd = '0' + d;}else{dd = d;}
		if(m < 10){mm = '0' + m;}else{mm = m;}
		
		MontCtrl.value = ENMonth[m-1] + ' ' + d + ', ' + y;
		MontValue.value = y + '-' + mm + '-' + dd;
		//MontEndSet.value = 'test';
		//MontBegin.value = 'test';
		//MontEnd.value = 'test';
		//alert( y + '-' + mm + '-' + dd);
		TPDCalHideCal();
	}
	
	function SetToDay(){
		var y = NowDate[0];
		var m = NowDate[1];
		var d = NowDate[2];
		document.getElementById('ToDay').innerHTML = ENMonth[m-1] + ' ' + d + ', ' + y;
	}
	
	function ReturnToDay(){
		var y = NowDate[0];
		var m = NowDate[1];
		var d = NowDate[2];
		DEna = CheckDateEnable([y,m,d]);
		if(DEna == false) return;
		if(d < 10){dd = '0' + d;}else{dd = d;}
		if(m < 10){mm = '0' + m;}else{mm = m;}
		MontCtrl.value = ENMonth[m-1] + ' ' + d + ', ' + y;
		MontValue.value = y + '-' + mm + '-' + dd;
		TPDCalHideCal();
	}
	
	function fGetWinSize(w) {
		if (w.innerWidth)
			return [w.innerWidth-16,w.innerHeight,w.pageXOffset,w.pageYOffset];
		else if (w.document.compatMode=='CSS1Compat')
			with (w.document.documentElement) return [clientWidth,clientHeight,scrollLeft,scrollTop];
		else
			with (w.document.body) return [clientWidth,clientHeight,scrollLeft,scrollTop];
	}
	
	function fGetXY(a,offset) {
		var p=offset?offset.slice(0):[0,0],tn;
		while(a) {
			tn=a.tagName.toUpperCase();
			p[0]+=a.offsetLeft-(!KO3&&tn=="DIV"&&a.scrollLeft?a.scrollLeft:0);
			p[1]+=a.offsetTop-(!KO3&&tn=="DIV"&&a.scrollTop?a.scrollTop:0);
			if (tn=="BODY") break;
			a=a.offsetParent;
		}
		return p;
	}
	
	
	function TPDCalGetById(doc, id) {
		return doc.getElementById(id);
	}
	
	function TPDCalShowCal(xx,yy,isUp) {
		with (TPDCalSelf.style) {
			if (_animPop) clip="rect(0px auto 0px auto)";
			left=xx+"px"; top=yy+"px";
		}
		if (_animPop) {
			__strips=0;
			__stub[2]=setInterval("fAnimPop("+yy+","+TPDCalGetById(document,"TPDCal").offsetHeight+","+isUp+")",_animInt);
		}
		if (TPDCalSelf.focus) TPDCalSelf.focus();
	}
	
	function fAnimPop(t,h,u) {
		h=h?h:TPDCalSelf.height; __strips+=20;
		with (TPDCalSelf.style)
		if (__strips<=h){
			var d=h-__strips;
	 		clip="rect("+(u?"auto":d+"px")+" auto "+(u?h-d+"px":"auto")+" auto)";
			top=(u?t+d:t-d)+"px";
		}
		else {
			clearInterval(__stub[2]);
			clip="rect(auto auto auto auto)";
			top=t+"px";
		}
		CalShowNow = true;
	}
	
	function TPDCalHideCal() {
		if(TPDCalSelf){
			TPDCalSelf.style.top="-500px";
			TPDCalSelf.style.left="-500px";
			CalShowNow = false;
		}
	}
	
	function TPDCalIsShown() {
		return TPDCalSelf.offsetTop>-100;
	}
	
	function DnMonth(){
		var d=1;m=0,y=0;
		var YBe = parseInt(MontBeginSet[0]);
		var YEn = parseInt(MontEndSet[0]);
		var MBe = parseInt(MontBeginSet[1]);
		var MEn = parseInt(MontEndSet[1]);
		var DBe = parseInt(MontBeginSet[2]);
		var DEn = parseInt(MontEndSet[2]);
		var NowYSel = parseInt(document.getElementById('YSel').value);
		var NowMSel = parseInt(document.getElementById('MSel').value);
		if(YBe == YEn || NowYSel == YBe){
			if(NowMSel > MBe){
				m = NowMSel-1;
				y = YBe;
				if(m == MBe){
					d = DBe;
				}
			}
		}
		else{
			if(NowMSel > 1){
				m = NowMSel-1;
				y = NowYSel;
			}
			else{
				m = 12;	
				y = NowYSel-1;
				if(y == YBe && m == MBe){
					d = DEn;
				}
			}
		}
		
		
		if(YBe == YEn){
			if(MBe == MEn){
				document.getElementById('BtDn').style.visibility = 'hidden';
				document.getElementById('BtUp').style.visibility = 'hidden';
			}
			else{
				if(m == MBe){
					document.getElementById('BtDn').style.visibility = 'hidden';
				}
				else{
					document.getElementById('BtDn').style.visibility = 'visible';
				}
				if(m == MEn){
					document.getElementById('BtUp').style.visibility = 'hidden';
				}
				else{
					document.getElementById('BtUp').style.visibility = 'visible';
				}
			}
		}
		else{
			if(y == YBe){
				if(m == MBe){
					document.getElementById('BtUp').style.visibility = 'visible';
					document.getElementById('BtDn').style.visibility = 'hidden';
				}
				else{
					document.getElementById('BtUp').style.visibility = 'visible';
					document.getElementById('BtDn').style.visibility = 'visible';
				}
			}
			else{
				if(y == YEn){
					if(m == MEn){
						document.getElementById('BtUp').style.visibility = 'hidden';
						document.getElementById('BtDn').style.visibility = 'visible';
					}
					else{
						document.getElementById('BtUp').style.visibility = 'visible';
						document.getElementById('BtDn').style.visibility = 'visible';
					}
				}
				else{
					document.getElementById('BtUp').style.visibility = 'visible';
					document.getElementById('BtDn').style.visibility = 'visible';
				}
			}
		}
		
		SetYOpt(y);
		SetMOpt(m,y);	
		SetDCal([y,m,d]);
	}
		
	function UpMonth(){
		var d=1, m=0,y=0;
		var YBe = parseInt(MontBeginSet[0]);
		var YEn = parseInt(MontEndSet[0]);
		var MBe = parseInt(MontBeginSet[1]);
		var MEn = parseInt(MontEndSet[1]);
		var DBe = parseInt(MontBeginSet[2]);
		var DEn = parseInt(MontEndSet[2]);
		var NowYSel = parseInt(document.getElementById('YSel').value);
		var NowMSel = parseInt(document.getElementById('MSel').value);
		//alert(YBe + '-' + YEn + ' - ' + MBe + '-' + MEn + ' - ' + DBe + '-' + DEn)
		if(YBe == YEn || NowYSel == YEn){
			//alert('YBe = ' + YBe + ' YEn = ' +  YEn + '\nNowYSel = ' + NowYSel + ' YEn = ' + YEn);
			if(NowMSel < MEn){
				//alert('NowMSel = ' + NowMSel + ' MEn = ' + MEn);
				m = NowMSel+1;
				y = NowYSel;
				if(m == MBe){
					d = DBe;
				}
			}
		}
		else{
			//alert('xxx1');
			if(NowMSel < 12){
				m = NowMSel+1;
				y = NowYSel;
			}
			else{
				m = 1;	
				y = NowYSel+1;
				if(y == YEn && m == MEn){
					d = DEn;
				}
			}
		}
		
		if(YBe == YEn){
			if(MBe == MEn){
				document.getElementById('BtDn').style.visibility = 'hidden';
				document.getElementById('BtUp').style.visibility = 'hidden';
			}
			else{
				if(m == MBe){
					document.getElementById('BtDn').style.visibility = 'hidden';
				}
				else{
					document.getElementById('BtDn').style.visibility = 'visible';
				}
				if(m == MEn){
					document.getElementById('BtUp').style.visibility = 'hidden';
				}
				else{
					document.getElementById('BtUp').style.visibility = 'visible';
				}
			}
		}
		else{
			if(y == YBe){
				if(m == MBe){
					document.getElementById('BtUp').style.visibility = 'visible';
					document.getElementById('BtDn').style.visibility = 'hidden';
				}
				else{
					document.getElementById('BtUp').style.visibility = 'visible';
					document.getElementById('BtDn').style.visibility = 'visible';
				}
			}
			else{
				if(y == YEn){
					if(m == MEn){
						document.getElementById('BtUp').style.visibility = 'hidden';
						document.getElementById('BtDn').style.visibility = 'visible';
					}
					else{
						document.getElementById('BtUp').style.visibility = 'visible';
						document.getElementById('BtDn').style.visibility = 'visible';
					}
				}
				else{
					document.getElementById('BtUp').style.visibility = 'visible';
					document.getElementById('BtDn').style.visibility = 'visible';
				}
			}
		}
		SetYOpt(y);
		SetMOpt(m,y);	
		SetDCal([y,m,d]);	
	}
	
	function SetYOpt(y){
		var YBe = parseInt(MontBeginSet[0]);
		var YEn = parseInt(MontEndSet[0]);
		var MBe = parseInt(MontBeginSet[1]);
		var MEn = parseInt(MontEndSet[1]);
		var DBe = parseInt(MontBeginSet[2]);
		var DEn = parseInt(MontEndSet[2]);
		var StrOpt = '<select id="YSel" name="YSel"  onChange="SetMOptCng()">';
		for(i = YBe; i<= YEn; i++){	
    	if(y == i){
				StrOpt = StrOpt + '<option value="' + i + '" selected>' + i + '</option>';
			}
			else{
				StrOpt = StrOpt + '<option value="' + i + '">' + i + '</option>';
			}
		}
    StrOpt = StrOpt + '</select>';
		document.getElementById('YeSel').innerHTML = StrOpt;
	}
	
	function SetMOptCng(){
		var YBe = parseInt(MontBeginSet[0]);
		var YEn = parseInt(MontEndSet[0]);
		var MBe = parseInt(MontBeginSet[1]);
		var MEn = parseInt(MontEndSet[1]);
		var DBe = parseInt(MontBeginSet[2]);
		var DEn = parseInt(MontEndSet[2]);
		var y = parseInt(document.getElementById('YSel').value);
		var m = parseInt(document.getElementById('MSel').value);
		var d = 1;
		if(y == YBe){
			if(m >= MBe){
				m = MBe;
				d = DBe
			}
		}
		else{
			if(y == YEn){
				if(m >= MEn){
					m = 1;
					d = DEn;
				}
				else{
				}
			}
		}
		
		if(YBe == YEn){
			if(MBe == MEn){
				document.getElementById('BtDn').style.visibility = 'hidden';
				document.getElementById('BtUp').style.visibility = 'hidden';
			}
			else{
				if(m == MBe){
					document.getElementById('BtDn').style.visibility = 'hidden';
				}
				else{
					document.getElementById('BtDn').style.visibility = 'visible';
				}
				if(m == MEn){
					document.getElementById('BtUp').style.visibility = 'hidden';
				}
				else{
					document.getElementById('BtUp').style.visibility = 'visible';
				}
			}
		}
		else{
			if(y == YBe){
				if(m == MBe){
					document.getElementById('BtUp').style.visibility = 'visible';
					document.getElementById('BtDn').style.visibility = 'hidden';
				}
				else{
					document.getElementById('BtUp').style.visibility = 'visible';
					document.getElementById('BtDn').style.visibility = 'visible';
				}
			}
			else{
				if(y == YEn){
					if(m == MEn){
						document.getElementById('BtUp').style.visibility = 'hidden';
						document.getElementById('BtDn').style.visibility = 'visible';
					}
					else{
						document.getElementById('BtUp').style.visibility = 'visible';
						document.getElementById('BtDn').style.visibility = 'visible';
					}
				}
				else{
					document.getElementById('BtUp').style.visibility = 'visible';
					document.getElementById('BtDn').style.visibility = 'visible';
				}
			}
		}
		
		SetMOpt(m,y);
		SetDCal([y,m,d]);	
	}
	
	function SetCalCng(){
		var YBe = parseInt(MontBeginSet[0]);
		var YEn = parseInt(MontEndSet[0]);
		var MBe = parseInt(MontBeginSet[1]);
		var MEn = parseInt(MontEndSet[1]);
		var DBe = parseInt(MontBeginSet[2]);
		var DEn = parseInt(MontEndSet[2]);
		var y = parseInt(document.getElementById('YSel').value);
		var m = parseInt(document.getElementById('MSel').value);
		var d = 1;
		if(y == YBe){
			if(m >= MBe){
				d = DBe
			}
		}
		else{
			if(y == YEn){
				if(m >= MEn){
					d = DEn;
				}
			}
		}
		if(YBe == YEn){
			if(MBe == MEn){
				document.getElementById('BtUp').style.visibility = 'hidden';
				document.getElementById('BtDn').style.visibility = 'hidden';
			}
			else{
				if(m == MBe){
					document.getElementById('BtDn').style.visibility = 'hidden';
				}
				else{
					document.getElementById('BtDn').style.visibility = 'visible';
				}
				if(m == MEn){
					document.getElementById('BtUp').style.visibility = 'hidden';
				}
				else{
					document.getElementById('BtUp').style.visibility = 'visible';
				}
			}
		}
		else{
			if(y == YBe){
				if(m == MBe){
					document.getElementById('BtUp').style.visibility = 'visible';
					document.getElementById('BtDn').style.visibility = 'hidden';
				}
				else{
					document.getElementById('BtUp').style.visibility = 'visible';
					document.getElementById('BtDn').style.visibility = 'visible';
				}
			}
			else{
				if(y == YEn){
					if(m == MEn){
						document.getElementById('BtUp').style.visibility = 'hidden';
						document.getElementById('BtDn').style.visibility = 'visible';
					}
					else{
						document.getElementById('BtUp').style.visibility = 'visible';
						document.getElementById('BtDn').style.visibility = 'visible';
					}
				}
				else{
					document.getElementById('BtUp').style.visibility = 'visible';
					document.getElementById('BtDn').style.visibility = 'visible';
				}
			}
		}
		SetDCal([y,m,d]);
	}
	
	function SetMOpt(m,y){
		var MToSta = 1;
		var MToEnd = 12;
		var YBe = parseInt(MontBeginSet[0]);
		var YEn = parseInt(MontEndSet[0]);
		var MBe = parseInt(MontBeginSet[1]);
		var MEn = parseInt(MontEndSet[1]);
		var DBe = parseInt(MontBeginSet[2]);
		var DEn = parseInt(MontEndSet[2]);
		if(y > YEn)y = YBe;
		if(y < YBe)y = YEn;
		if(YBe == YEn){
			MToSta = MBe;
			MToEnd = MEn;
		}
		else{
			if(y == YBe){
				MToSta = MBe;
				MToEnd = 12;
			}
			else{
				if(y == YEn){
					MToSta = 1;
					MToEnd = MEn;
				}
				else{
					MToSta = 1;
					MToEnd = 12;
				}
			}
		}
		
		var StrOpt = '<select id="MSel" name="MSel"  onChange="SetCalCng()">';
		for(i = MToSta; i<= MToEnd; i++){	
    	if(m == i){
				StrOpt = StrOpt + '<option value="' + i + '" selected>' + ENMonth[i-1] + '</option>';
			}
			else{
				StrOpt = StrOpt + '<option value="' + i + '">' + ENMonth[i-1] + '</option>';
			}
		}
    StrOpt = StrOpt + '</select>';
		document.getElementById('MoSel').innerHTML = StrOpt;
	}
	
	function DrawCal(){
		//SetToDay();
		
		document.getElementById('D01').style.backgroundColor = 	DayNrmColor[0];
		document.getElementById('D01').style.borderColor = 			AllDayBdrColor[0];
		document.getElementById('D01').style.cursor = 					DayCursor[0];
		document.getElementById('D01').style.color = 						DayFontColor[0];
		document.getElementById('D01').innerHTML = 							DayNumValue[0];
		
		document.getElementById('D02').style.backgroundColor = 	DayNrmColor[1];
		document.getElementById('D02').style.borderColor = 			AllDayBdrColor[1];
		document.getElementById('D02').style.cursor = 					DayCursor[1];
		document.getElementById('D02').style.color = 						DayFontColor[1];
		document.getElementById('D02').innerHTML = 							DayNumValue[1];
		
		document.getElementById('D03').style.backgroundColor = 	DayNrmColor[2];
		document.getElementById('D03').style.borderColor = 			AllDayBdrColor[2];
		document.getElementById('D03').style.cursor = 					DayCursor[2];
		document.getElementById('D03').style.color = 						DayFontColor[2];
		document.getElementById('D03').innerHTML = 							DayNumValue[2];
		
		document.getElementById('D04').style.backgroundColor = 	DayNrmColor[3];
		document.getElementById('D04').style.borderColor = 			AllDayBdrColor[3];
		document.getElementById('D04').style.cursor = 					DayCursor[3];
		document.getElementById('D04').style.color = 						DayFontColor[3];
		document.getElementById('D04').innerHTML = 							DayNumValue[3];
		
		document.getElementById('D05').style.backgroundColor = 	DayNrmColor[4];
		document.getElementById('D05').style.borderColor = 			AllDayBdrColor[4];
		document.getElementById('D05').style.cursor = 					DayCursor[4];
		document.getElementById('D05').style.color = 						DayFontColor[4];
		document.getElementById('D05').innerHTML = 							DayNumValue[4];
		
		document.getElementById('D06').style.backgroundColor = 	DayNrmColor[5];
		document.getElementById('D06').style.borderColor = 			AllDayBdrColor[5];
		document.getElementById('D06').style.cursor = 					DayCursor[5];
		document.getElementById('D06').style.color = 						DayFontColor[5];
		document.getElementById('D06').innerHTML = 							DayNumValue[5];
		
		document.getElementById('D07').style.backgroundColor = 	DayNrmColor[6];
		document.getElementById('D07').style.borderColor = 			AllDayBdrColor[6];
		document.getElementById('D07').style.cursor = 					DayCursor[6];
		document.getElementById('D07').style.color = 						DayFontColor[6];
		document.getElementById('D07').innerHTML = 							DayNumValue[6];
		
		document.getElementById('D08').style.backgroundColor = 	DayNrmColor[7];
		document.getElementById('D08').style.borderColor = 			AllDayBdrColor[7];
		document.getElementById('D08').style.cursor = 					DayCursor[7];
		document.getElementById('D08').style.color = 						DayFontColor[7];
		document.getElementById('D08').innerHTML = 							DayNumValue[7];
		
		document.getElementById('D09').style.backgroundColor = 	DayNrmColor[8];
		document.getElementById('D09').style.borderColor = 			AllDayBdrColor[8];
		document.getElementById('D09').style.cursor = 					DayCursor[8];
		document.getElementById('D09').style.color = 						DayFontColor[8];
		document.getElementById('D09').innerHTML = 							DayNumValue[8];
		
		document.getElementById('D10').style.backgroundColor = 	DayNrmColor[9];
		document.getElementById('D10').style.borderColor = 			AllDayBdrColor[9];
		document.getElementById('D10').style.cursor = 					DayCursor[9];
		document.getElementById('D10').style.color = 						DayFontColor[9];
		document.getElementById('D10').innerHTML = 							DayNumValue[9];
		
		document.getElementById('D11').style.backgroundColor = 	DayNrmColor[10];
		document.getElementById('D11').style.borderColor = 			AllDayBdrColor[10];
		document.getElementById('D11').style.cursor = 					DayCursor[10];
		document.getElementById('D11').style.color = 						DayFontColor[10];
		document.getElementById('D11').innerHTML = 							DayNumValue[10];
		
		document.getElementById('D12').style.backgroundColor = 	DayNrmColor[11];
		document.getElementById('D12').style.borderColor = 			AllDayBdrColor[11];
		document.getElementById('D12').style.cursor = 					DayCursor[11];
		document.getElementById('D12').style.color = 						DayFontColor[11];
		document.getElementById('D12').innerHTML = 							DayNumValue[11];
		
		document.getElementById('D13').style.backgroundColor = 	DayNrmColor[12];
		document.getElementById('D13').style.borderColor = 			AllDayBdrColor[12];
		document.getElementById('D13').style.cursor = 					DayCursor[12];
		document.getElementById('D13').style.color = 						DayFontColor[12];
		document.getElementById('D13').innerHTML = 							DayNumValue[12];
		
		document.getElementById('D14').style.backgroundColor = 	DayNrmColor[13];
		document.getElementById('D14').style.borderColor = 			AllDayBdrColor[13];
		document.getElementById('D14').style.cursor = 					DayCursor[13];
		document.getElementById('D14').style.color = 						DayFontColor[13];
		document.getElementById('D14').innerHTML = 							DayNumValue[13];
		
		document.getElementById('D15').style.backgroundColor = 	DayNrmColor[14];
		document.getElementById('D15').style.borderColor = 			AllDayBdrColor[14];
		document.getElementById('D15').style.cursor = 					DayCursor[14];
		document.getElementById('D15').style.color = 						DayFontColor[14];
		document.getElementById('D15').innerHTML = 							DayNumValue[14];
		
		document.getElementById('D16').style.backgroundColor = 	DayNrmColor[15];
		document.getElementById('D16').style.borderColor = 			AllDayBdrColor[15];
		document.getElementById('D16').style.cursor = 					DayCursor[15];
		document.getElementById('D16').style.color = 						DayFontColor[15];
		document.getElementById('D16').innerHTML = 							DayNumValue[15];
		
		document.getElementById('D17').style.backgroundColor = 	DayNrmColor[16];
		document.getElementById('D17').style.borderColor = 			AllDayBdrColor[16];
		document.getElementById('D17').style.cursor = 					DayCursor[16];
		document.getElementById('D17').style.color = 						DayFontColor[16];
		document.getElementById('D17').innerHTML = 							DayNumValue[16];
		
		document.getElementById('D18').style.backgroundColor = 	DayNrmColor[17];
		document.getElementById('D18').style.borderColor = 			AllDayBdrColor[17];
		document.getElementById('D18').style.cursor = 					DayCursor[17];
		document.getElementById('D18').style.color = 						DayFontColor[17];
		document.getElementById('D18').innerHTML = 							DayNumValue[17];
		
		document.getElementById('D19').style.backgroundColor = 	DayNrmColor[18];
		document.getElementById('D19').style.borderColor = 			AllDayBdrColor[18];
		document.getElementById('D19').style.cursor = 					DayCursor[18];
		document.getElementById('D19').style.color = 						DayFontColor[18];
		document.getElementById('D19').innerHTML = 							DayNumValue[18];
		
		document.getElementById('D20').style.backgroundColor = 	DayNrmColor[19];
		document.getElementById('D20').style.borderColor = 			AllDayBdrColor[19];
		document.getElementById('D20').style.cursor = 					DayCursor[19];
		document.getElementById('D20').style.color = 						DayFontColor[19];
		document.getElementById('D20').innerHTML = 							DayNumValue[19];
		
		document.getElementById('D21').style.backgroundColor = 	DayNrmColor[20];
		document.getElementById('D21').style.borderColor = 			AllDayBdrColor[20];
		document.getElementById('D21').style.cursor = 					DayCursor[20];
		document.getElementById('D21').style.color = 						DayFontColor[20];
		document.getElementById('D21').innerHTML = 							DayNumValue[20];
		
		document.getElementById('D22').style.backgroundColor = 	DayNrmColor[21];
		document.getElementById('D22').style.borderColor = 			AllDayBdrColor[21];
		document.getElementById('D22').style.cursor = 					DayCursor[21];
		document.getElementById('D22').style.color = 						DayFontColor[21];
		document.getElementById('D22').innerHTML = 							DayNumValue[21];
		
		document.getElementById('D23').style.backgroundColor = 	DayNrmColor[22];
		document.getElementById('D23').style.borderColor = 			AllDayBdrColor[22];
		document.getElementById('D23').style.cursor = 					DayCursor[22];
		document.getElementById('D23').style.color = 						DayFontColor[22];
		document.getElementById('D23').innerHTML = 							DayNumValue[22];
		
		document.getElementById('D24').style.backgroundColor = 	DayNrmColor[23];
		document.getElementById('D24').style.borderColor = 			AllDayBdrColor[23];
		document.getElementById('D24').style.cursor = 					DayCursor[23];
		document.getElementById('D24').style.color = 						DayFontColor[23];
		document.getElementById('D24').innerHTML = 							DayNumValue[23];
		
		document.getElementById('D25').style.backgroundColor = 	DayNrmColor[24];
		document.getElementById('D25').style.borderColor = 			AllDayBdrColor[24];
		document.getElementById('D25').style.cursor = 					DayCursor[24];
		document.getElementById('D25').style.color = 						DayFontColor[24];
		document.getElementById('D25').innerHTML = 							DayNumValue[24];
		
		document.getElementById('D26').style.backgroundColor = 	DayNrmColor[25];
		document.getElementById('D26').style.borderColor = 			AllDayBdrColor[25];
		document.getElementById('D26').style.cursor = 					DayCursor[25];
		document.getElementById('D26').style.color = 						DayFontColor[25];
		document.getElementById('D26').innerHTML = 							DayNumValue[25];
		
		document.getElementById('D27').style.backgroundColor = 	DayNrmColor[26];
		document.getElementById('D27').style.borderColor = 			AllDayBdrColor[26];
		document.getElementById('D27').style.cursor = 					DayCursor[26];
		document.getElementById('D27').style.color = 						DayFontColor[26];
		document.getElementById('D27').innerHTML = 							DayNumValue[26];
		
		document.getElementById('D28').style.backgroundColor = 	DayNrmColor[27];
		document.getElementById('D28').style.borderColor = 			AllDayBdrColor[27];
		document.getElementById('D28').style.cursor = 					DayCursor[27];
		document.getElementById('D28').style.color = 						DayFontColor[27];
		document.getElementById('D28').innerHTML = 							DayNumValue[27];
		
		document.getElementById('D29').style.backgroundColor = 	DayNrmColor[28];
		document.getElementById('D29').style.borderColor = 			AllDayBdrColor[28];
		document.getElementById('D29').style.cursor = 					DayCursor[28];
		document.getElementById('D29').style.color = 						DayFontColor[28];
		document.getElementById('D29').innerHTML = 							DayNumValue[28];
		
		document.getElementById('D30').style.backgroundColor = 	DayNrmColor[29];
		document.getElementById('D30').style.borderColor = 			AllDayBdrColor[29];
		document.getElementById('D30').style.cursor = 					DayCursor[29];
		document.getElementById('D30').style.color = 						DayFontColor[29];
		document.getElementById('D30').innerHTML = 							DayNumValue[29];
		
		document.getElementById('D31').style.backgroundColor = 	DayNrmColor[30];
		document.getElementById('D31').style.borderColor = 			AllDayBdrColor[30];
		document.getElementById('D31').style.cursor = 					DayCursor[30];
		document.getElementById('D31').style.color = 						DayFontColor[30];
		document.getElementById('D31').innerHTML = 							DayNumValue[30];
		
		document.getElementById('D32').style.backgroundColor = 	DayNrmColor[31];
		document.getElementById('D32').style.borderColor = 			AllDayBdrColor[31];
		document.getElementById('D32').style.cursor = 					DayCursor[31];
		document.getElementById('D32').style.color = 						DayFontColor[31];
		document.getElementById('D32').innerHTML = 							DayNumValue[31];
		
		document.getElementById('D33').style.backgroundColor = 	DayNrmColor[32];
		document.getElementById('D33').style.borderColor = 			AllDayBdrColor[32];
		document.getElementById('D33').style.cursor = 					DayCursor[32];
		document.getElementById('D33').style.color = 						DayFontColor[32];
		document.getElementById('D33').innerHTML = 							DayNumValue[32];
		
		document.getElementById('D34').style.backgroundColor = 	DayNrmColor[33];
		document.getElementById('D34').style.borderColor = 			AllDayBdrColor[33];
		document.getElementById('D34').style.cursor = 					DayCursor[33];
		document.getElementById('D34').style.color = 						DayFontColor[33];
		document.getElementById('D34').innerHTML = 							DayNumValue[33];
		
		document.getElementById('D35').style.backgroundColor = 	DayNrmColor[34];
		document.getElementById('D35').style.borderColor = 			AllDayBdrColor[34];
		document.getElementById('D35').style.cursor = 					DayCursor[34];
		document.getElementById('D35').style.color = 						DayFontColor[34];
		document.getElementById('D35').innerHTML = 							DayNumValue[34];
		
		document.getElementById('D36').style.backgroundColor = 	DayNrmColor[35];
		document.getElementById('D36').style.borderColor = 			AllDayBdrColor[35];
		document.getElementById('D36').style.cursor = 					DayCursor[35];
		document.getElementById('D36').style.color = 						DayFontColor[35];
		document.getElementById('D36').innerHTML = 							DayNumValue[35];
		
		document.getElementById('D37').style.backgroundColor = 	DayNrmColor[36];
		document.getElementById('D37').style.borderColor = 			AllDayBdrColor[36];
		document.getElementById('D37').style.cursor = 					DayCursor[36];
		document.getElementById('D37').style.color = 						DayFontColor[36];
		document.getElementById('D37').innerHTML = 							DayNumValue[36];
		
		document.getElementById('D38').style.backgroundColor = 	DayNrmColor[37];
		document.getElementById('D38').style.borderColor = 			AllDayBdrColor[37];
		document.getElementById('D38').style.cursor = 					DayCursor[37];
		document.getElementById('D38').style.color = 						DayFontColor[37];
		document.getElementById('D38').innerHTML = 							DayNumValue[37];
		
		document.getElementById('D39').style.backgroundColor = 	DayNrmColor[38];
		document.getElementById('D39').style.borderColor = 			AllDayBdrColor[38];
		document.getElementById('D39').style.cursor = 					DayCursor[38];
		document.getElementById('D39').style.color = 						DayFontColor[38];
		document.getElementById('D39').innerHTML = 							DayNumValue[38];
		
		document.getElementById('D40').style.backgroundColor = 	DayNrmColor[39];
		document.getElementById('D40').style.borderColor = 			AllDayBdrColor[39];
		document.getElementById('D40').style.cursor = 					DayCursor[39];
		document.getElementById('D40').style.color = 						DayFontColor[39];
		document.getElementById('D40').innerHTML = 							DayNumValue[39];
		
		document.getElementById('D41').style.backgroundColor = 	DayNrmColor[40];
		document.getElementById('D41').style.borderColor = 			AllDayBdrColor[40];
		document.getElementById('D41').style.cursor = 					DayCursor[40];
		document.getElementById('D41').style.color = 						DayFontColor[40];
		document.getElementById('D41').innerHTML = 							DayNumValue[40];
		
		document.getElementById('D42').style.backgroundColor = 	DayNrmColor[41];
		document.getElementById('D42').style.borderColor = 			AllDayBdrColor[41];
		document.getElementById('D42').style.cursor = 					DayCursor[41];
		document.getElementById('D42').style.color = 						DayFontColor[41];
		document.getElementById('D42').innerHTML = 							DayNumValue[41];
	}
</script>
</body>
</html>