<?php 
	
	function ss($ad,$deger=null){
	
		if($deger!=null){
			// Bir De�er Atarken Ki ��lemi 
			$_SESSION[$ad] = $deger;
		
		}else{
			// Bir De�eri �a��r�rken
			$deger = $_SESSION[$ad];
		
		}
		// Fonksiyonun Sonucunda Bir De�er Geri D�nderir 
		return $deger;
	
	
	}

?>