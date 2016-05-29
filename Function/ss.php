<?php 
	
	function ss($ad,$deger=null){
	
		if($deger!=null){
			// Bir Deðer Atarken Ki Ýþlemi 
			$_SESSION[$ad] = $deger;
		
		}else{
			// Bir Deðeri Çaðýrýrken
			$deger = $_SESSION[$ad];
		
		}
		// Fonksiyonun Sonucunda Bir Deðer Geri Dönderir 
		return $deger;
	
	
	}

?>