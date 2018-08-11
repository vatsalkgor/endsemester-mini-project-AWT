<?php 
	$val = $_POST['number'];
	if($val%2 == 0){
		echo "Number $val is Even";
	}else{
		echo "Number $val is Odd";
	}
?>