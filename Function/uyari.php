<?php
	
	function uyari($msj,$tur=2){
	
		if($tur==2){
		
			echo '<div class="alert alert-info" role="alert">'.$msj.'</div>';
		
		}else if($tur==1){
		
			echo '<div class="alert alert-success" role="alert">'.$msj.'</div>';
		
		}else if($tur==0){
		
			echo '<div class="alert alert-warning" role="alert">'.$msj.'</div>';
		
		}else{
		
			echo '<div class="alert alert-danger" role="alert">'.$msj.'</div>';
		
		}
	
	}


?>