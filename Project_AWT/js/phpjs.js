$("#pract15").click(function(){
	$("#function").hide();
	$("#arrays").hide();
	$("#emails").hide();
	$("#file").hide();
	$("#db").hide();
	$("#decision").show();


});
$("#pract16").click(function(){
	$("#decision").hide();
	$("#arrays").hide();
	$("#emails").hide();
	$("#file").hide();
	$("#db").hide();
	$("#function").show();
});
$("#pract17").click(function(){
	$("#decision").hide();
	$("#function").hide();
	$("#emails").hide();
	$("#file").hide();
	$("#db").hide();
	$("#arrays").show();
})
$("#pract18").click(function(){
	$("#decision").hide();
	$("#function").hide();
	$("#arrays").hide();
	$("#file").hide();
	$("#db").hide();
	$("#emails").show();
})
$("#pract19").click(function(){
	$("#decision").hide();
	$("#function").hide();
	$("#arrays").hide();
	$("#emails").hide();
	$("#db").hide();
	$("#file").show();
})
$("#pract20").click(function(){
	$("#decision").hide();
	$("#textShadow").hide();
	$("#arrays").hide();
	$("#emails").hide();
	$("#file").hide();
	$("#db").show();
})
$("#db_insert").click(function(){
	$("#rud").hide();
	$("#insert").show();
})
$("#db_rud").click(function(){
	$("#insert").hide();
	$("#rud").show();
})

$(document).ready(function(){
	$("#evenOdd").click(function(){
		var val = $("#oeNumber").val();
		$("#evenOddRes").html('');
		$.ajax({
			url:"ajax/evenodd.php",
			method:"post",
			data:{number:val},
			success:function(data){
				$("#evenOddRes").append(data);
			}
		})
	});
	$("#fact").click(function(){
		var val = $("#fNumber").val();
		$("#factRes").html('');
		$.ajax({
			url:"ajax/factorial.php",
			method:"post",
			data:{number:val},
			success:function(data){
				$("#factRes").append(data);
			}
		})
	});
	$("#emailButton").click(function(){
		var to = $("#to").val();
		var sub = $("#sub").val();
		var msg = $("#msg").val();
		$("#emailRes").html('');
		$.ajax({
			url:"ajax/email.php",
			method:"post",
			data:{to:to,sub:sub,msg:msg},
			success:function(data)
			{
				$("#emailRes").append(data);
			}
		})
	});
	$("form#fileUpload").submit(function(e) {
		e.preventDefault();    
		var formData = new FormData(this);
		$('#fileResult').html('');
		$.ajax({
			url: 'ajax/file.php',
			type: 'POST',
			data: formData,
			contentType: false,
			processData: false,
			success: function (data) {
				$('#fileResult').append(data);
			}
		});
	});
	$("form#db_form").submit(function(e) {
		e.preventDefault();    
		var s_name = $('#s_name').val();
		var sm_ajt = $('#sm_ajt').val();
		var sm_awt = $('#sm_awt').val();
		var sm_is = $('#sm_is').val();

		$('#db_form_result').html('');
		$.ajax({
			url: 'ajax/db_insert.php',
			type: 'POST',
			data: {s_name:s_name,sm_ajt:sm_ajt,sm_awt:sm_awt,sm_is:sm_is},
			success: function (data) {
				$('#db_form_result').append(data);
			}
		});
	});
})