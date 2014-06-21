$(document).ready(function(){
	//promenliva sadarjashta tochnata shiro4ina na monitora
	var screenWidth=$(window).width();
	//promenliva sadarjashta to4nata viso4ina na monitora
	var screenHeight=$(window).height();
	//vzimame width i height na formata za registaciq
	var regWidth=$(".regForm").css("width");
	var regHeight=$(".regForm").css("height");
	//vzimame sekundite v format vsi4ki sekundi ot 01.01.1970, kato odtelqme poslednite 3 cifri v celo4islen format
	function timeWork(){
		var seconds=new Date().getTime();
		seconds=parseInt(seconds);
		seconds=seconds%1000;
		return seconds;
	}
	//funkciq vzemashta random shiro4inata na ekrana
	function getRandWidth(width, height, elementWidth){
		seconds=timeWork();
		finalSeconds=dontRunAway(width, elementWidth, seconds);
		return finalSeconds;
	}
	//funkciq, vzemashta random visochinata na monitora
	function getRandHeight(width, height, elementHeight){
		delitel=timeWork()%10;
		if(delitel<=0 || isNaN(delitel)){
			delitel=1;
		}
		var seconds=timeWork()/delitel;
		seconds=parseInt(seconds);
		finalSeconds=dontRunAway(width, elementHeight, seconds);
		return finalSeconds;
	}
	//funckiq, opredelqshta, dali formata za registraciq, nqma da izleze ot ekrana
	//sabirame slu4ainata stoinost sas saotvetniqt razmer na formata i ako nqkoi ot kraishtata izleze ot ekrana
	//izvajdam ot stoinostta, tolkova, kolkoto da prilepne na kraq na ekrana
	//var fullLength - celiq razmer na monitora
	//var elementSize - razmera na formata
	//var randLength - sluchaino generiranata stoinost
	function dontRunAway(fullLength, elementSize, randLength){
		if((elementSize+randLength)>fullLength){
			return fullLength;
		}
		else{
			return randLength;
		}
	}
	//funkciq, vzemashta tova, kolko pati sme minali s mishkata prez formata za registraciq
	//za zapazvane na dannite izpolozvame "hidden" pole s klas "mouseTurns"
	function mouseTurns(){
		var count=$(".mouseTurns").val();
		if(isNaN(count)==true || count<1 || count==''){
			count=1;
			$(".mouseTurns").val(1);
			return 1;
		}
		else{
			count=parseInt(count);
			count+=1;
			$(".mouseTurns").val(count);
			return count;
		}
	}
	//rezultatat ot vsi4ko
	function move(){
		var randWidth=getRandWidth(screenWidth, screenHeight, regWidth);
		var randHeight=getRandHeight(screenWidth, screenHeight, regHeight);
		$(".regForm").css({"top": randHeight + "px", "left": randWidth + "px"});
		mouseTurns();
	}
	$(".regForm").on("mouseover", function(){
		move();
	});
});
