$(document).ready(function(){
	$(".funContent").children("main").on("click", function(){
		$.ajax({
			url: "scripts/funContentCatcher.php",
			type: "GET",
			data: {
				getFunId: "1",
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
				getFunId: "1",
				getFunVictim: "img"},
			success: function(result){
				var img="<img src='" + result + "' />";
				$(".imgHolder").html(img);
			}
		});
	});
});
