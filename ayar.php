<?php 
	
	$b = mysqli_connect("localhost","root","","deneme");
	if($b){
		include "Function/function.php";
		
		ss("b",$b);
	}else{
		echo "hata";
	}

?>