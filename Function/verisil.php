<?php
	
	function  verisil($dizi){
	
		if(!empty($dizi["sql"])){ $sql = $dizi['sql']; }else{ $sql =""; }
		if(!empty($dizi["islem"])){ $islem = $dizi['islem']; }else{ $islem ="sil"; }
		
		if($islem == g("islem")){
			$b = ss("b");
			$sorgu = mysqli_query($b,$sql);
			if($sorgu){
				uyari("Başarıyla Silindi",1);
			}else{
				uyari(2);
			}
		
		}
	}


 ?>