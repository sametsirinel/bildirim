<?php 
	
	function bildirimekle($dizi,$kid = null){
	
		if($kid == null){
			
			$kid = 2;
		
		}
		
	
		$b = ss("b");
		$dizi = json_encode($dizi);
		$sorgu = mysqli_query($b,"insert into bildirim set json='$dizi',kid='$kid',onay='1',ses='1'");
		
		if($sorgu){
			
			return $dizi;
		
		}
	}
	
 ?>