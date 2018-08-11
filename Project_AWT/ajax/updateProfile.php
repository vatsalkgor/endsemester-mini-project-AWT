<?php  
	$conn = new mysqli('localhost','root','','awt');
	$fn = $_POST['firstname'];
	$ln = $_POST['lastname'];
	$email = $_POST['email'];
	$mob = $_POST['mobile'];
	$un = $_POST['username'];
	$img = 'upload/user_images/'.$_FILES['userpic']['name'];
	move_uploaded_file($_FILES['userpic']['tmp_name'], '../upload/user_images/'.$_FILES['userpic']['name']);
	$sql = "update users set u_firstname='$fn', u_lastname = '$ln',u_email='$email',u_mobile=$mob,u_image='$img' where u_username = '$un'";
	if($conn->query($sql) == TRUE){
		echo "Profile Updated Successfully";
	}else{
		echo $conn->error;
		echo "Something went wrong. Please Try again Later.";
	}
?>