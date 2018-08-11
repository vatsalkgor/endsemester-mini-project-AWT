<?php 
	if(isset($_POST['submit'])){
		echo "in if";
		$conn = new mysqli('localhost','root','','awt');
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hpass = md5($password);
		$sql = "select * from login where l_username='$username' and l_hpassword = '$hpass'";
		$result = $conn->query($sql);
		if(mysqli_num_rows($result) == 1){
			session_start();
			$_SESSION['username'] = $username;
			header('location:AWT_Home.php');
		}else{
			header('location:index.php');
		}
	}
	else{
		header('location:loginRegister.php');
	}
 ?>