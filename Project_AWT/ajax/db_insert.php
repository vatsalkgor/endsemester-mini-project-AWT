<?php 
	$name = $_POST['s_name'];
	$ajt = $_POST['sm_ajt'];
	$awt = $_POST['sm_awt'];
	$is = $_POST['sm_is'];
	$sql = "insert into practical(p_name,p_ajt,p_awt,p_is) values('$name',$ajt,$awt,$is)";
	$conn = new mysqli('localhost','root','','awt');
	if($conn->query($sql) == TRUE){
		echo "Data Added Successfully...";
	}else{
		echo $sql;
		echo "Insert Error: ".$conn->error;
	}
 ?>