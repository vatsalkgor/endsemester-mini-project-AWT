<?php 
	$num = $_POST['number'];
	function recursion($number){
		$ans;
		if($number>=1){
			return $number*recursion($number-1);
		}else{
			return 1;
		}
	}
	$ans = recursion($num);
	echo "Factorial of $num is $ans";
 ?>