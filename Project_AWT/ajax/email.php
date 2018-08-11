<?php 
	$to = $_POST['to'];
	$sub = $_POST['sub'];
	$msg = $_POST['msg'];
	if(mail($to, $sub, $msg,"From: vatsalgor.007@gmail.com")){
		echo "Mail Sent Successfully";
	}else{
		print_r(error_get_last());	
		echo "Successfully Sent...";
	}
 ?>

 