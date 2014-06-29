$(document).ready(function(){
	function whatIsClicked(what){
		$.ajax({
			url: "scripts/gallery.php",
			type: "GET",
			data: {
				side: what,
				src: $(".virtualImg").attr("id")},
			success: function(result){
				$(".virtualImg").attr("src", result);
			}
		});
		$.ajax({
			url: "scripts/gallery.php",
			type: "GET",
			data: {
				side: what,
				id: $(".virtualImg").attr("id")},
			success: function(result){
				$(".virtualImg").attr("id", result);
			}
		});
	}
	//orazmerqvame
	//fona
	function virtualImgResizer(){
		$(".big").css("width", $(window).width());
		$(".big").css("height", $(window).height());
		//lqva i dqsna chast
		$(".left, .right").css({"height": $(window).height(),
								"width": $(window).width()/6});
		$(".image").css({"width": $(window).width()/1.5,
						"height": $(window).height()});
	}
	//orazmerqvame razmera na konteinerite za kartinki
	function galleryContainersResizer(){
		var fullGalleryImgWidth=$(".smallImgContainer").css("width");
		$(".smallImgContainer").css({"height": fullGalleryImgWidth + "px"});
		$(".smallImg").css("width", fullGalleryImgWidth + "px");
		$(".smallImg").css("height", fullGalleryImgWidth + "px");
	}
	//ako sme kliknali na element ot galeriqta
	//parvo mahame "small_" pred imeto na kartinkata, za da izvadim originala i
	function getOriginalImg(src){
		var name=src.split("smalls/small_");
		return name[0] + name[1];
	}
	//var target - koi to4no element sme kliknali
	function smallImgClicker(target){
		//mahame scolla, kogqto iskame da razgledame kartinka
		$("body").css({"overflow": "hidden"});
		//preorazmerqvame poleto s kartinkata ni, za da zatamni fona i tm kadeto e bil scrolla, koito sm mahnali
		virtualImgResizer();
		$(".big, .image, .right, .left").show();
		var imgSrc=target.attr("src");
		imgSrc=getOriginalImg(imgSrc);
		var imgId=target.attr("id");
		$(".virtualImg").attr("src", imgSrc);
		$(".virtualImg").attr("id", imgId);
	}
	//funkviq, skrivashta izkachastata originalna kartinka
	function hideVirtualImg(){
		$(document).on("click", function(event){
			if(event.target.className!='leftArrow' &&
				event.target.className!='rightArrow' &&
				event.target.className!='virtualImg' &&
				event.target.className!='smallImg')
				{
					$(".big, .image, .right, .left").hide();
					$("body").css({"overflow": "auto"});
				}
		});
	}
	//funkciq, ulavqshta natisnat buton po klaviaturata (lqva i dqsna strelka)
	function side(side){
		switch(side){
			case "left":
			whatIsClicked("minus");
			break;
			case "right":
			whatIsClicked("plus");
			break;
		}
	}
	//vijda koda na kliu4a koito e natisnat
	function keyHunter(key){
		switch(key){
			case 37:
			return "left";
			break;
			case 39:
			return "right";
			break;
		}
	}
	//orazmerqvame
	//oshte s loada oramqrqvame
	//orazmerqvame kartinkat, koqto se poqvqva pri klik na nqkoq ot malkite kartinki
	virtualImgResizer();
	//konteinerite za kartibkite (te sa kvardatni ispored width-to si, opredelqt i heighta)
	galleryContainersResizer();
	//tezi 2 neshta gi povtarqme vseki pat kogato orazmerim prozoreca, za da postignem responsive design
	$(window).on("resize", function(){
		virtualImgResizer();
		galleryContainersResizer()
	});
	//vijdame kade potrebitelq e kliknal i deistvame
	$(".rightArrow").on("click", function(){
		whatIsClicked("plus");
	});
	$(".leftArrow").on("click", function(){
		whatIsClicked("minus");
	});
	$(".virtualImg").on("click", function(){
		whatIsClicked("plus");
	});
	$(".smallImg").on("click", function(){
		var target=$(this);
		smallImgClicker(target);
	});
	//dali e natisnat buton po klaviaturata (ulavqme ako e strelka nalqvo ili nadqsno)
	//izplozvame eventa (keydown), zashoto keypress ne raboti pri chrome
	$(document).on("keydown", function(event){
		side(keyHunter(event.keyCode));
	});
	hideVirtualImg();
	$(".big, .image, .right, .left").hide();
});
