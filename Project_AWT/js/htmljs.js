$("#pract2").click(function(){
	$("#canvas").hide();
	$("#Geolocation").hide();
	$("#webStorage").hide();
	$("#clicks").hide();
	$("#AudioVid").show();


});
$("#pract3").click(function(){
	$("#AudioVid").hide();
	$("#Geolocation").hide();
	$("#webStorage").hide();
	$("#clicks").hide();
	$("#canvas").show();
});
$("#pract4").click(function(){
	$("#canvas").hide();
	$("#AudioVid").hide();
	$("#webStorage").hide();
	$("#clicks").hide();
	$("#Geolocation").show();
})
$("#pract5").click(function(){
	$("#canvas").hide();
	$("#AudioVid").hide();
	$("#Geolocation").hide();
	$("#webStorage").show();
	$("#clicks").show();
})