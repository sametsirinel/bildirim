<?php 
	
	function g($ad){
		
		if(!empty($_GET[$ad]) || isset($_GET[$ad])){
			
			$deger = $_GET[$ad];
		
		}else{
		
			$deger = "";
		
		}
		
		return $deger;
	
	}

?>