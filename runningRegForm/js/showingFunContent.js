$(document).ready(function(){
	//funkciq, proverqvashta, dali e imalo 3 minavaniq s ishkata prez formata za registraciq
	function howMuchTurns(){
		var count=$(".mouseTurns").val();
		count=parseInt(count);
		$(".funChanger").text($(".mouseTurns").val());
		if(count>3){
			funChanger($(window).width(), $(window).height());
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
	//funkciq, zanulitel - maha forata za registraciq i zanulqva poleto za poqvqvane na zatamnenieto
	function zanulitel(){
		$(".regForm").hide();
		$(".mouseTurns").val(0);
	}
	//funkciq, zakrivashta zatamnenoto pole pri klick varhu spana cross
	function closeFunChanger(){	
		$(".closeFunContent").css({visibility: "hidden"});
		$(".funContent").animate({width: "0px", height: "0px"}, 2000);
		setTimeout(
			function(){
				$(".funContent").css({background: "white", opacity: "0"});
				$("body").css({overflow: "auto"});
				$(".regForm").show();
		}, 2000);
	}
	//deistvame
	$(".regForm").on("mouseover", function(){
		howMuchTurns();
	});
	$(".closeFunContent").on("click", function(){
		closeFunChanger();
	});
});
