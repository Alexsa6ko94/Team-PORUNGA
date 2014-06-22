$(document).ready(function(){
	//funkciq, proverqvashta, dali e imalo 3 minavaniq s ishkata prez formata za registraciq
	//var resize - "true": orazmerqvame prozoreca, "false": minali sme s mihkata prez formata za registraciq
	function howMuchTurns(resize){
		var count=$(".mouseTurns").val();
		count=parseInt(count);
		if(count>3){
			if(resize==false){
				funChanger($(window).width(), $(window).height());
			}
			else{
				funChangerResize($(window).width(), $(window).height());
			}
		}
	}
	//kogato e vreme pokazvame smeshnoto sadarjanie
	function funChanger(width, height){
		$(".funContent").animate({width: width + "px", height: height + "px"}, 2000);
		$(".funContent").css({background: "rgba(0, 0, 0, 0.7)"});
		$(".closeFunContent").css({visibility: "visible"});
		//pravim overflow hidden, za da mahnem scrolla dokato imame zatamnen ekran
		$("body").css({overflow:"hidden"});
		zanulitel();
	}
	//pri resize preorazmerqvame 4ernoto pole
	function funChangerResize(width, height){
		$(".funContent").animate({width: width + "px", height: height + "px"}, 0);
	}
	//funkciq, zanulitel - maha forata za registraciq i zanulqva poleto za poqvqvane na zatamnenieto
	function zanulitel(){
		$(".regForm").hide();
	}
	//funkciq, zakrivashta zatamnenoto pole pri klick varhu spana cross
	function closeFunChanger(){	
		$(".closeFunContent").css({visibility: "hidden"});
		$(".funContent").animate({width: "0px", height: "0px"}, 2000);
		setTimeout(
			function(){
				$(".funContent").css({background: "rgba(255, 255, 255, 0.0)"});
				$("body").css({overflow: "auto"});
				$(".regForm").show();
		}, 2000);
		$(".mouseTurns").val(0);
	}
	//deistvame
	$(".regForm").on("mouseover", function(){
		howMuchTurns(false);
	});
	$(window).on("resize", function(){
		howMuchTurns(true);
	});
	$(".closeFunContent").on("click", function(){
		closeFunChanger();
	});
});
