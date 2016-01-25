<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Month Calendar</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="http://www.onehotelsolutions.com/libcal/tpcalendar/tpcal.css" rel="stylesheet" type="text/css" />
</head>
<body leftmargin=0 topmargin=0 marginwidth=0 marginheight=0 hspace=0 vspace=0 onselectstart="return false" ondraggesture="return false" ondragstart="return false" oncontextmenu="return false" onmouseup="top.defaultStatus=''; return true;">
<script type="text/javascript" src="http://www.onehotelsolutions.com/libcal/tpcalendar/month.js"></script>
<table id="TPMCal" width="205px" cellpadding="0" cellspacing="0" border="0" bgcolor="#969696" align="center">
	<tr>
    <td width="205px" height="2px"></td>
	</tr>
  <tr>
    <td>
    	<table width="201" cellpadding="2" cellspacing="0" border="0" align="center" bgcolor="#CCCCCC">
      	<tr align="center">
       	 	<td width="50" align="right"><input id="BtDn" name="BtDn" type="button" onClick="DnYear();" value="&lt;" style="cursor:pointer; visibility:visible;"></td>
          <td width="94" align="center">
          	<span id="YearSel">
            <select id="YSel" name="YSel" onChange="SteMontOpt();">
      				<option value="2007">2007</option>
          	</select>
            </span>
          </td>
          <td width="50" align="left"><input id="BtUp" name="BtUp" type="button" onClick="UpYear();" value="&gt;" style="cursor:pointer; visibility:visible;"></td>
       	</tr>
      </table>
    </td>
	</tr>
  
	<tr>
    <td>
    	<table width="201" cellpadding="1px" cellspacing="5px" border="1" align="center" bgcolor="#CCCCCC" style="border-style:none">
      	<tr><td style="border-color:#969696; border-style:ridge; border-width:1px;">
        	<table width="165" cellpadding="4" cellspacing="2" border="1" bgcolor="#CCCCCC" align="center" style="border-style:none">
            <tr align="center">
    					<td id="M01" width="55" bgcolor="#E8E8E8" onClick="ToRet(this,1)" onMouseOver="CngTDCl(this,1,0);" onMouseOut="CngTDCl(this,0,0);" style="cursor:pointer; color:#333333; border-style:ridge; border-width:1px; border-color:#969696;">January</td>
    					<td id="M02" width="55" bgcolor="#E8E8E8" onClick="ToRet(this,2)" onMouseOver="CngTDCl(this,1,1);" onMouseOut="CngTDCl(this,0,1);" style="cursor:pointer; color:#333333; border-style:ridge; border-width:1px; border-color:#969696;">February</td>
    					<td id="M03" width="55" bgcolor="#E8E8E8" onClick="ToRet(this,3)" onMouseOver="CngTDCl(this,1,2);" onMouseOut="CngTDCl(this,0,2);" style="cursor:pointer; color:#333333; border-style:ridge; border-width:1px; border-color:#969696;">March</td>
  					</tr>
  					<tr align="center">
    					<td id="M04" bgcolor="#E8E8E8" onClick="ToRet(this,4)" onMouseOver="CngTDCl(this,1,3);" onMouseOut="CngTDCl(this,0,3);" style="cursor:pointer; color:#333333; border-style:ridge; border-width:1px; border-color:#969696">April</td>
    					<td id="M05" bgcolor="#E8E8E8" onClick="ToRet(this,5)" onMouseOver="CngTDCl(this,1,4);" onMouseOut="CngTDCl(this,0,4);" style="cursor:pointer; color:#333333; border-style:ridge; border-width:1px; border-color:#969696">May</td>
    					<td id="M06" bgcolor="#E8E8E8" onClick="ToRet(this,6)" onMouseOver="CngTDCl(this,1,5);" onMouseOut="CngTDCl(this,0,5);" style="cursor:pointer; color:#333333; border-style:ridge; border-width:1px; border-color:#969696">June</td>
  					</tr>
  					<tr align="center">
    					<td id="M07" bgcolor="#E8E8E8" onClick="ToRet(this,7)" onMouseOver="CngTDCl(this,1,6);" onMouseOut="CngTDCl(this,0,6);" style="cursor:pointer; color:#333333; border-style:ridge; border-width:1px; border-color:#969696">July</td>
    					<td id="M08" bgcolor="#E8E8E8" onClick="ToRet(this,8)" onMouseOver="CngTDCl(this,1,7);" onMouseOut="CngTDCl(this,0,7);" style="cursor:pointer; color:#333333; border-style:ridge; border-width:1px; border-color:#969696">August</td>
    					<td id="M09" bgcolor="#E8E8E8" onClick="ToRet(this,9)" onMouseOver="CngTDCl(this,1,8);" onMouseOut="CngTDCl(this,0,8);" style="cursor:pointer; color:#333333; border-style:ridge; border-width:1px; border-color:#969696">September</td>
  					</tr>
  					<tr align="center">
    					<td id="M10" bgcolor="#CCCCCC" onClick="ToRet(this,10)" onMouseOver="CngTDCl(this,1,9);" onMouseOut="CngTDCl(this,0,9);" style="cursor:pointer; color:#F8F8F8; border-style:ridge; border-width:1px; border-color:#969696">October</td>
    					<td id="M11" bgcolor="#336633" onClick="ToRet(this,11)" onMouseOver="CngTDCl(this,1,10);" onMouseOut="CngTDCl(this,0,10);" style="cursor:pointer; color:#FFFFFF; border-style:ridge; border-width:1px; border-color:#969696">November</td>
    					<td id="M12" bgcolor="#888888" onClick="ToRet(this,12)" onMouseOver="CngTDCl(this,1,11);" onMouseOut="CngTDCl(this,0,11);" style="cursor:default; color:#FFEE33; border-style:ridge; border-width:1px; border-color:#969696">December</td>
  					</tr>
      
          </table>
    		</td></tr>
    	</table>   
		</td>
	</tr>
  <tr>
    <td>
      <table width="201" cellpadding="2" cellspacing="0" border="0" align="center" bgcolor="#CCCCCC">
      	<tr><td align="center" style="font-weight:bold; cursor:pointer; color:#006600" onClick="ReturnThisMonth();">This Month : <span id="ThisMonth"></span></td></tr>
      </table>
    </td>
  </tr>
	<tr><td height="2px"></td></tr>
</table>
<script language="javascript">
	//for (var i = 0; i < parent.frames.length; i++)
  	//alert(parent.frames[i].name);
	//alert(this.name);
	
	var TPMD=new Date(), TPMToday=[TPMD.getFullYear(),TPMD.getMonth()+1,TPMD.getDate()];
	var ua=navigator.userAgent.toLowerCase();
	var KO=ua.match(/konqueror\/(\d+)/),KO3=KO&&KO[1]==3,SA=ua.match(/safari\/(\d+)/),SA1=SA&&SA[1]<86; KO=!!KO; SA=!!SA;
	var MAC=/mac/.test(ua),OP=!!self.opera,WEBTV=/webtv/.test(ua),IE=/msie/.test(ua)&&!OP&&!WEBTV&&!SA&&!KO,GK=/gecko/.test(ua),OP8=/opera 8/.test(ua)&&OP;
	var NN4=IE4=NS6=false,IE5=IE&&![].push&&!IE4;
	var TPMCalSelf=window.parent.document.getElementsByTagName("iframe")[self.name];
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
	var MEnable = [1,1,1,1 ,1,1,1,1 ,1,1,1,1 ];
	
	var MDisNrmColor = '#CCCCCC';
	var MDisOvrColor = '#CCCCCC';
	var MDisFontColor = '#F8F8F8';
	
	var MEnaNrmColor = '#E8E8E8';
	var MEnaOvrColor = '#F8F8F8';
	var MEnaFontColor = '#333333';
	
	var MTodNrmColor = '#336633';
	var MTodOvrColor = '#535653';
	var MTodFontColor = '#FFFFFF';
	
	var MSelNrmColor = '#888888';
	var MSelOvrColor = '#AAAAAA';
	var MSelFontColor = '#FFEE33';
	
	var DisCursorType = 'default';
	var EnaCursorType = 'pointer';
	
	var MOvrColor = ['#F8F8F8','#F8F8F8','#F8F8F8','#F8F8F8' ,'#F8F8F8','#F8F8F8','#F8F8F8','#F8F8F8' ,'#F8F8F8','#F8F8F8','#F8F8F8','#F8F8F8' ];
	var MOutColor = ['#E8E8E8','#E8E8E8','#E8E8E8','#E8E8E8' ,'#E8E8E8','#E8E8E8','#E8E8E8','#E8E8E8' ,'#E8E8E8','#E8E8E8','#E8E8E8','#E8E8E8' ];
	var MBdrColor = ['#969696','#969696','#969696','#969696' ,'#969696','#969696','#969696','#969696' ,'#969696','#969696','#969696','#969696' ];
	var MOvrCursor = ['pointer','pointer','pointer','pointer' ,'pointer','pointer','pointer','pointer' ,'pointer','pointer','pointer','pointer' ];
	var MFontColor = ['#333333','#333333','#333333','#333333' ,'#333333','#333333','#333333','#333333' ,'#333333','#333333','#333333','#333333' ];
	
	function LoadTPMCal(DCtr,DVal,DBe, DEn){
		var DNow=new Date();
		NowDate = [DNow.getFullYear(),DNow.getMonth()+1,DNow.getDate()];
		var DateCtrl=DCtr;
		var DateValue=DVal;
		
		if (MontCtrl != DateCtrl) {
			TPMCalHideCal(); 
			MontCtrl = DateCtrl;
			MontValue = DateValue;
		}
		else if (TPMCalIsShown()) {
			TPMCalHideCal(); 
			return;
		}
		
		if(DBe){
			var DateBegin=DBe;
			MontBegin = DateBegin;
			if(MontBegin.value){
				MontBeginSet = SplitDate(MontBegin.value);
				//alert(MontBegin.value);
			}
			else{
				MontBeginSet = [MinYear,1,1];
			}
			BeginSet = true;
		}
		else{
			MontBeginSet = [MinYear,1,1];
			BeginSet = false;
		}
		
		if(DEn){
			var DateEnd=DEn;
			MontEnd = DateEnd;
			if(MontEnd.value){
				MontEndSet = SplitDate(MontEnd.value);
				//alert("HHH");
			}
			else{
				MontEndSet = [MaxYear,12,31];
				//alert("Max " + MaxYear);
			}
			EndSet = true;
		}
		else{
			MontEndSet = [MaxYear,12,31];
			EndSet = false;
		}
		
		
		
		if(MontValue.value){
			MontValueSet = SplitDate(MontValue.value);
		}
		else{
			MontValueSet = NowDate; 
		}
		
		SetMCal(MontValueSet[0]);
		
		var p=fGetXY(DateCtrl,GlobalPosOffset);
		var oh=MontCtrl.offsetHeight,ptb=TPMCalGetById(document,"TPMCal"),h=ptb.offsetHeight,w=ptb.offsetWidth, isUp;
		TPMCalSelf.width = w;
		TPMCalSelf.height = h;
		h=(h?h:TPMCalSelf.height)+oh;
		var ws=fGetWinSize(parent);
		var tmp=ws[0]+ws[2]-(w?w:TPMCalSelf.width);
		p[0]=p[0]<ws[2]?ws[2]+2:p[0]>tmp?tmp:p[0];
		tmp=ws[1]+ws[3]-h;
		isUp=p[1]>tmp&&p[1]-ws[3]+oh>=h;
		if (p[1]>tmp&&p[1]-ws[3]+oh<h) p[1]=ws[3]-1-oh;
		if (isUp) p[1]-=oh>0?h+2:h+25;
		TPMCalShowCal(p[0],p[1]+oh+1,isUp);
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
		
	function CngTDCl(TDObj, changeTo, Id){
		if(changeTo == 0)TDObj.style.backgroundColor = MOutColor[Id]; 
		if(changeTo == 1)TDObj.style.backgroundColor = MOvrColor[Id];
	}
	
	function TPMCalGetById(doc, id) {
		return doc.getElementById(id);
	}
	
	function TPMCalShowCal(xx,yy,isUp) {
		with (TPMCalSelf.style) {
			if (_animPop) clip="rect(0px auto 0px auto)";
			left=xx+"px"; top=yy+"px";
		}
		if (_animPop) {
			__strips=0;
			__stub[2]=setInterval("fAnimPop("+yy+","+TPMCalGetById(document,"TPMCal").offsetHeight+","+isUp+")",_animInt);
		}
		if (TPMCalSelf.focus) TPMCalSelf.focus();
	}
	
	function fAnimPop(t,h,u) {
		h=h?h:TPMCalSelf.height; __strips+=20;
		with (TPMCalSelf.style)
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
	}
	
	function TPMCalHideCal() {
		TPMCalSelf.style.top="-500px";
		TPMCalSelf.style.left="-500px";
	}
	
	function TPMCalIsShown() {
		return TPMCalSelf.offsetTop>-100;
	}
	
		
	function SetThisMnt(){
		var m = NowDate[1];
		if(m == 1)document.getElementById('ThisMonth').innerHTML = document.getElementById('M01').innerHTML + ' - ' + NowDate[0];
		if(m == 2)document.getElementById('ThisMonth').innerHTML = document.getElementById('M02').innerHTML + ' - ' + NowDate[0];
		if(m == 3)document.getElementById('ThisMonth').innerHTML = document.getElementById('M03').innerHTML + ' - ' + NowDate[0];
		if(m == 4)document.getElementById('ThisMonth').innerHTML = document.getElementById('M04').innerHTML + ' - ' + NowDate[0];
		if(m == 5)document.getElementById('ThisMonth').innerHTML = document.getElementById('M05').innerHTML + ' - ' + NowDate[0];
		if(m == 6)document.getElementById('ThisMonth').innerHTML = document.getElementById('M06').innerHTML + ' - ' + NowDate[0];
		if(m == 7)document.getElementById('ThisMonth').innerHTML = document.getElementById('M07').innerHTML + ' - ' + NowDate[0];
		if(m == 8)document.getElementById('ThisMonth').innerHTML = document.getElementById('M08').innerHTML + ' - ' + NowDate[0];
		if(m == 9)document.getElementById('ThisMonth').innerHTML = document.getElementById('M09').innerHTML + ' - ' + NowDate[0];
		if(m == 10)document.getElementById('ThisMonth').innerHTML = document.getElementById('M10').innerHTML + ' - ' + NowDate[0];
		if(m == 11)document.getElementById('ThisMonth').innerHTML = document.getElementById('M11').innerHTML + ' - ' + NowDate[0];
		if(m == 12)document.getElementById('ThisMonth').innerHTML = document.getElementById('M12').innerHTML + ' - ' + NowDate[0];
	}
	
	function ReturnThisMonth(){
		var m = NowDate[1];
		var chk = m-1;
		if(MEnable[chk] == 0)return;
		m = NowDate[1];
		if(m < 10)m = '0' + m;
		MontValue.value = NowDate[0] + '-' + m + '-01'; 
		if(m == 1)MontCtrl.value = document.getElementById('M01').innerHTML + ' - ' + NowDate[0];
		if(m == 2)MontCtrl.value = document.getElementById('M02').innerHTML + ' - ' + NowDate[0];
		if(m == 3)MontCtrl.value = document.getElementById('M03').innerHTML + ' - ' + NowDate[0];
		if(m == 4)MontCtrl.value = document.getElementById('M04').innerHTML + ' - ' + NowDate[0];
		if(m == 5)MontCtrl.value = document.getElementById('M05').innerHTML + ' - ' + NowDate[0];
		if(m == 6)MontCtrl.value = document.getElementById('M06').innerHTML + ' - ' + NowDate[0];
		if(m == 7)MontCtrl.value = document.getElementById('M07').innerHTML + ' - ' + NowDate[0];
		if(m == 8)MontCtrl.value = document.getElementById('M08').innerHTML + ' - ' + NowDate[0];
		if(m == 9)MontCtrl.value = document.getElementById('M09').innerHTML + ' - ' + NowDate[0];
		if(m == 10)MontCtrl.value = document.getElementById('M10').innerHTML + ' - ' + NowDate[0];
		if(m == 11)MontCtrl.value = document.getElementById('M11').innerHTML + ' - ' + NowDate[0];
		if(m == 12)MontCtrl.value = document.getElementById('M12').innerHTML + ' - ' + NowDate[0];
		TPMCalHideCal();
	}
	
	function SetYearOpt(y){
		var YBe = MontBeginSet[0];
		var YEn = MontEndSet[0];
		var StrOpt = '<select id="YSel" name="YSel"  onChange="SetMontOpt()">';
		for(i = YBe; i<= YEn; i++){	
    	if(y == i){
				StrOpt = StrOpt + '<option value="' + i + '" selected>' + i + '</option>';
			}
			else{
				StrOpt = StrOpt + '<option value="' + i + '">' + i + '</option>';
			}
		}
    StrOpt = StrOpt + '</select>';
		if(y == YBe){
			document.getElementById('BtDn').style.visibility = 'hidden';
			//alert('Year BE = ' + YBe);
		}
		else{
			document.getElementById('BtDn').style.visibility = 'visible';
		}
		if(y == YEn){
			document.getElementById('BtUp').style.visibility = 'hidden';
			//alert('Year EN = ' + YEn);
		}
		else{
			document.getElementById('BtUp').style.visibility = 'visible';
		}
		document.getElementById('YearSel').innerHTML = StrOpt;
	}
	
	function UpYear(){
		var YBe = MontBeginSet[0];
		var YEn = MontEndSet[0];
		var y = document.getElementById('YSel').value;
		y++;
		if(y > YEn)y = YBe;
		SetYearOpt(y);
		SetMontOpt();
	}
	
	function DnYear(){
		var YBe = MontBeginSet[0];
		var YEn = MontEndSet[0];
		var y = document.getElementById('YSel').value;
		y--;
		if(y < YBe)y = YEn;
		SetYearOpt(y);
		SetMontOpt();
	}
	
	function SetMontOpt(){

		var y = document.getElementById('YSel').value;
		var YSel = MontValueSet[0];
		var MSel = MontValueSet[1];
		var YBe = MontBeginSet[0];
		var MBe = MontBeginSet[1];
		var YEn = MontEndSet[0];
		var MEn = MontEndSet[1];
		var YNw = NowDate[0];
		var MNw = NowDate[1];
		var NowSel = 0;
		var ToDay = 0;
		
		for(i=0; i < 12; i++){
			j = i+1;
			if(y == YBe && j < MBe){
				MEnable[i] = 0;
				MOvrColor[i] = MDisOvrColor;
				MOutColor[i] = MDisNrmColor;
				MFontColor[i] = MDisFontColor;
				MOvrCursor[i] = DisCursorType;
				//MBdrColor[i] = '#0000FF';	
				
			}
			else{
				if(y == YEn && j > MEn){
					MEnable[i] = 0;
					MOvrColor[i] = MDisOvrColor;
					MOutColor[i] = MDisNrmColor;
					MFontColor[i] = MDisFontColor;
					MOvrCursor[i] = DisCursorType;
					//MBdrColor[i] = '#0000FF';	
				}
				else{
					MEnable[i] = 1;
					MOvrColor[i] = MEnaOvrColor;
					MOutColor[i] = MEnaNrmColor;
					MFontColor[i] = MEnaFontColor;
					MOvrCursor[i] = EnaCursorType;
					//MBdrColor[i] = '#0000FF';	
				}
			}
						
			if(y == YSel && j == MSel){
				NowSel = 1;
				
				MOvrColor[i] = MSelOvrColor;
				MOutColor[i] = MSelNrmColor;
				MFontColor[i] = MSelFontColor;
				//MOvrCursor[i] = EnaCursorType;
				//MBdrColor[i] = '#FF0000';
			}
			else{
				NowSel = 0;
				//MBdrColor[i] = '#0000FF';
			}
			if(y == YNw && j == MNw){
				ToDay = 1;
				MOvrColor[i] = MTodOvrColor;
				MOutColor[i] = MTodNrmColor;
				MFontColor[i] = MTodFontColor;
				//MOvrCursor[i] = EnaCursorType;
				//MBdrColor[i] = '#FF0000';
			}
			else{
				ToDay = 0;
			}
		}
		
		document.getElementById('M01').style.backgroundColor = MOutColor[0];
		document.getElementById('M01').style.borderColor = MBdrColor[0];
		document.getElementById('M01').style.cursor = MOvrCursor[0];
		document.getElementById('M01').style.color = MFontColor[0];
		
		document.getElementById('M02').style.backgroundColor = MOutColor[1];
		document.getElementById('M02').style.borderColor = MBdrColor[1];
		document.getElementById('M02').style.cursor = MOvrCursor[1];
		document.getElementById('M02').style.color = MFontColor[1];
		
		document.getElementById('M03').style.backgroundColor = MOutColor[2];
		document.getElementById('M03').style.borderColor = MBdrColor[2];
		document.getElementById('M03').style.cursor = MOvrCursor[2];
		document.getElementById('M03').style.color = MFontColor[2];
		
		document.getElementById('M04').style.backgroundColor = MOutColor[3];
		document.getElementById('M04').style.borderColor = MBdrColor[3];
		document.getElementById('M04').style.cursor = MOvrCursor[3];
		document.getElementById('M04').style.color = MFontColor[3];
		
		document.getElementById('M05').style.backgroundColor = MOutColor[4];
		document.getElementById('M05').style.borderColor = MBdrColor[4];
		document.getElementById('M05').style.cursor = MOvrCursor[4];
		document.getElementById('M05').style.color = MFontColor[4];
		
		document.getElementById('M06').style.backgroundColor = MOutColor[5];
		document.getElementById('M06').style.borderColor = MBdrColor[5];
		document.getElementById('M06').style.cursor = MOvrCursor[5];
		document.getElementById('M06').style.color = MFontColor[5];
		
		document.getElementById('M07').style.backgroundColor = MOutColor[6];
		document.getElementById('M07').style.borderColor = MBdrColor[6];
		document.getElementById('M07').style.cursor = MOvrCursor[6];
		document.getElementById('M07').style.color = MFontColor[6];
		
		document.getElementById('M08').style.backgroundColor = MOutColor[7];
		document.getElementById('M08').style.borderColor = MBdrColor[7];
		document.getElementById('M08').style.cursor = MOvrCursor[7];
		document.getElementById('M08').style.color = MFontColor[7];
		
		document.getElementById('M09').style.backgroundColor = MOutColor[8];
		document.getElementById('M09').style.borderColor = MBdrColor[8];
		document.getElementById('M09').style.cursor = MOvrCursor[8];
		document.getElementById('M09').style.color = MFontColor[8];
		
		document.getElementById('M10').style.backgroundColor = MOutColor[9];
		document.getElementById('M10').style.borderColor = MBdrColor[9];
		document.getElementById('M10').style.cursor = MOvrCursor[9];
		document.getElementById('M10').style.color = MFontColor[9];
		
		document.getElementById('M11').style.backgroundColor = MOutColor[10];
		document.getElementById('M11').style.borderColor = MBdrColor[10];
		document.getElementById('M11').style.cursor = MOvrCursor[10];
		document.getElementById('M11').style.color = MFontColor[10];
		
		document.getElementById('M12').style.backgroundColor = MOutColor[11];
		document.getElementById('M12').style.borderColor = MBdrColor[11];
		document.getElementById('M12').style.cursor = MOvrCursor[11];
		document.getElementById('M12').style.color = MFontColor[11];
	}
	
	function ToRet(Td, m){
		var chk = m*1;
		if(MEnable[chk] == 0)return;
		
		MontCtrl.value = Td.innerHTML + ' - ' + document.getElementById('YSel').value;
		if(m < 10)m = '0' + m;
		MontValue.value = document.getElementById('YSel').value + '-' + m + '-01';
		TPMCalHideCal();
	}
	
	function SetMCal(y){
		SetThisMnt();
		SetYearOpt(y);
		SetMontOpt();	
	}
</script>
</body>
</html>