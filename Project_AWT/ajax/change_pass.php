<?php 
	$oldpass = $_POST['oldpass'];
	$newpass = $_POST['newpass'];
	$cpass = $_POST['cpass'];
	$conn = new mysqli('localhost','root','','awt');
	$ohpass = md5($oldpass);
	$sql = "select * from login where l_hpassword = '$ohpass'";
	$res = $conn->query($sql);
	if(mysqli_num_rows($res) == 1 && strcmp($newpass,$cpass) == 0){
		$hpass = md5($newpass);
		$sql = "update login set l_password = '$newpass', l_hpassword = '$hpass' where l_hpassword = '$ohpass'";
		$res = $conn->query($sql);
		if(mysqli_affected_rows($conn) == 1){
			echo "Password Updated.";
		}else{
			echo "Confirm Password Doesn't match with New Password.";
		}
	}else{
		echo "Old Password wrong.";
	}

 ?>