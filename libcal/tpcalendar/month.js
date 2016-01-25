var MinYear = 1900;
var MaxYear = 2100;
var MinMont = 1;
var MaxMont = 12;
var THMonth=["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"];
var ENMonth=["January","February","March","April","May","June","July","August","September","October","November","December"];


function SplitDate(Str){
		var r=null,pd=[],pdr=[0,0,0];
		if (!Str) return r;
		pd=Str.split('-');
		//alert(' Split Val' + pd[0] + '-' + pd[1] + '-' + pd[2]);
		pd[0] = ((pd[0] * 2)/2);
		pd[1] = ((pd[1] * 2)/2);
		pd[2] = ((pd[2] * 2)/2);
		pdr=[parseInt(pd[0]),parseInt(pd[1]),parseInt(pd[2])];
		return pdr; 
}

//Plus
function PlusDay(BaseDate, NumToPlus){
	var DateRet = '';
	for(i=0; i<NumToPlus; i++){
		DateRet = IncDate(BaseDate);
		BaseDate = DateRet;
	}
	return DateRet;
}
	
function IncDate(DayUp){
	y = DayUp[0];
	m = DayUp[1];
	d = DayUp[2];
	if(m==1 || m==3 || m==5 || m==7 || m==8 || m==10 || m==12)MaxD = 31;
	if(m==4 || m==6 || m==9 || m==11)MaxD = 30;
	if(m==2){
		if((y%4)==0)MaxD = 29;
		else MaxD = 28;
	} 
	if(d == MaxD){
		if(m == 12){
			d = 1;
			m = 1;
			y = y+1;
		}
		else{
			d = 1;
			m = m+1;
		}
	}
	else{
		d = d+1;
	}
	return y + '-' + m + '-' + d;
}
	
//Minus
function MinusDay(BaseDate, NumToMinus){
	var DateRet = '';
	for(i=0; i<NumToMinus; i++){
		DateRet = DecDate(BaseDate);
		BaseDate = DateRet;
	}
	return DateRet;
}
	
function DecDate(DayDwn){
	y = DayDwn[0];
	m = DayDwn[1];
	d = DayDwn[2];
		
	if(m==1 || m==2 || m==4 || m==6 || m==8 || m==9 || m==11)MaxD = 31;
	if(m==5 || m==7 || m==10 || m==12)MaxD = 30;
	if(m==3){
		if((y%4)==0)MaxD = 29;
		else MaxD = 28;
	} 
		
	if(d == 1){
		if(m == 1){
			d = MaxD;
			m = 12;
			y = y-1;
		}
		else{
			d = MaxD;
			m = m-1;
		}
	}
	else{
		d = d-1;
	}
	return y + '-' + m + '-' + d;
}
