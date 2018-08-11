function del(id) {
	if(confirm("Are you sure you want to Delete??")){
		$('#rudResult').html('');
		$.ajax({
			url:'ajax/db_delete.php',
			type:'post',
			data: {id:id},
			success: function(data){
				$('#rudResult').append(data);
			}
		});
	}
}
function upda(id){
	if(confirm("Are you sure you want to update")){
		var s_name = $('#s_r_name'+id).val();
		var sm_ajt = $('#sm_r_ajt'+id).val();
		var sm_awt = $('#sm_r_awt'+id).val();
		var sm_is = $('#sm_r_is'+id).val();
		$('#rudResult').html('');
		$.ajax({
			url:'ajax/db_update.php',
			type:'post',
			data: {id:id,s_name:s_name,sm_ajt:sm_ajt,sm_awt:sm_awt,sm_is:sm_is},
			success: function(data){
				$('#s_r_name'+id).prop('readonly',true);
				$('#sm_r_ajt'+id).prop('readonly',true);
				$('#sm_r_awt'+id).prop('readonly',true);
				$('#sm_r_is'+id).prop('readonly',true);
				$('#rudResult').html(data);
				$('#update'+id).hide();
				$('#edit'+id).show();
			}
		});
	}else{
		$('#s_r_name'+id).prop('readonly',true);
		$('#sm_r_ajt'+id).prop('readonly',true);
		$('#sm_r_awt'+id).prop('readonly',true);
		$('#sm_r_is'+id).prop('readonly',true);
		$('#update'+id).hide();
		$('#edit'+id).show();
	}
}	
function edit(id){
	$('#s_r_name'+id).prop('readonly',false);
	$('#sm_r_ajt'+id).prop('readonly',false);
	$('#sm_r_awt'+id).prop('readonly',false);
	$('#sm_r_is'+id).prop('readonly',false);
	$('#edit' + id).hide();
	$('#update' + id).show();
}