$(document).ready(function(){
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
		var finalSeconds=dontRunAway(width, elementWidth, seconds);
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
		var finalSeconds=dontRunAway(height, elementHeight, seconds);
		return finalSeconds;
	}
	//funckiq, opredelqshta, dali formata za registraciq, nqma da izleze ot ekrana
	//sabirame slu4ainata stoinost sas saotvetniqt razmer na formata i ako nqkoi ot kraishtata izleze ot ekrana
	//izvajdam ot stoinostta, tolkova, kolkoto da prilepne na kraq na ekrana
	//var fullLength - celiq razmer na monitora
	//var elementSize - razmera na formata
	//var randLength - sluchaino generiranata stoinost
	function dontRunAway(fullLength, elementSize, randLength){
		if( (parseInt(randLength) ) > ( parseInt(fullLength) - parseInt(elementSize) ) ){
			return parseInt(fullLength) - parseInt(elementSize) - 2;
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
	//rezultatat ot vsi4ko kogatonaso4vame s mishkata varhu formata
	//var resize - "true": preorazmerqvame prozoreca, "false": minali sme s mishkata prez prozoreca
	function move(resize){
		if(resize==false){
			var randWidth=getRandWidth($(window).width(), $(window).height(), regWidth);
			var randHeight=getRandHeight($(window).width(), $(window).height(), regHeight);
			$(".regForm").css({"top": randHeight + "px", "left": randWidth + "px"});
			mouseTurns();
		}
		else{
			centerRegForm();
		}
	}
	//funkciq, centrirashta formata za rgisraciq
	function centerRegForm(){
		var centerWidth=$(window).width()/2;
		var randWidth=centerWidth-parseInt($(".regForm").css("width"))/2;
		var centerHeight=$(window).height()/2;
		var randHeight=centerHeight-parseInt($(".regForm").css("height"))/2;
		$(".regForm").css({"top": randHeight + "px", "left": randWidth + "px"});
	}
	//deistvame
	//ako minem s mishkata prez formata mestim q i uveli4avame s 1
	$(".regForm").on("mouseover", function(){
		move(false);
	});
	//ako preorazmerim otnovoq mestim no bez da uveli4avame s 1 za da ne izvikme 4erniqt ekran pri resize
	$(window).on("resize", function(){
		move(true);
	});
});
