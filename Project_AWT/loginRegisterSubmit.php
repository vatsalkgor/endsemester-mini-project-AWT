<?php 
	if(isset($_POST['register'])){
		$conn = new mysqli('localhost','root','','awt');
		$username = $_POST['username'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "insert into users(u_username,u_firstname,u_lastname,u_mobile,u_email) values('$username','$firstname','$lastname','$mobile','$email')";
		$hpass = md5($_POST['password']);
		$sql1 = "insert into login(l_username,l_password,l_hpassword) values('$username','$password','$hpass')";
		echo "$sql1";
		if(strcmp($_POST['password'], $_POST['c_pass']) == 0 && $conn->query($sql) == TRUE && $conn->query($sql1) == TRUE){
			echo "in if";
			header('location:index.php');
		}else{
			echo "else";
			echo $conn->error;
			header('location:loginRegister.php');
		}

	}else{
		echo "in else";
		header('location:index.php');
	}
 ?>