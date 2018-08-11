<?php 
	$id = $_POST['id'];
	$name = $_POST['s_name'];
	$ajt = $_POST['sm_ajt'];
	$awt = $_POST['sm_awt'];
	$is = $_POST['sm_is'];
	$conn = new mysqli('localhost','root','','awt');
	$sql = "update practical set p_name='$name',p_ajt=$ajt,p_awt=$awt,p_is=$is where p_id=$id";
	if($conn->query($sql) == TRUE){
		echo "Updated Successfully";
	}else{
		echo "$sql";
		echo "Not Updated".$conn->error;
	}
?>