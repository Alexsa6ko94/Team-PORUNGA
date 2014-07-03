$(document).ready(function(){
	function theId(id){
		switch(id){
			case "seminar":
			return 1;
			break;
			case "kurs":
			return 2;
			break;
		}
	}
	function contentGetter(id){
		$.ajax({
			url: "scripts/funContentCatcher.php",
			type: "GET",
			data: {
				getFunId: theId(id),
				getFunVictim: "text"},
			success: function(result){
				var txt=result;
				$(".txtHolder").html(txt);
			}
		});
		$.ajax({
			url: "scripts/funContentCatcher.php",
			type: "GET",
			data: {
				getFunId: theId(id),
				getFunVictim: "img"},
			success: function(result){
				var img="<img src='" + result + "' />";
				$(".imgHolder").html(img);
			}
		});
	}
	$(".funContent").on("mouseover", function(){
		contentGetter($(".funContent").attr("id"));
	});
	$(".funContent").on("mouseover", function(){
		contentGetter($(".funContent").attr("id"));
	});
});