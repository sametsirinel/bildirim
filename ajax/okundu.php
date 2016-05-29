<?php include "../ayar.php";

	$sorgu  = mysqli_query($b,"update bildirim set onay ='0' where kid='2'");
	
	if($sorgu){
		
		$dizi =["durum"=>1];
	
	}else{
		
		$dizi = ["durum"=>0];
	
	}
	echo json_encode($dizi);


?>