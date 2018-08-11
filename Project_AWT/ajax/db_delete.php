<?php  
	$id = $_POST['id'];
	$conn = new mysqli('localhost','root','','awt');
	$sql = "DELETE FROM practical WHERE p_id=$id";
	if($conn->query($sql) == TRUE){
		echo "Data Deleted";
	}else{
		echo "Eroor: ".$conn->error;
	}
?>