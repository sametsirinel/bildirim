<?php  include "../ayar.php";

	$sorgu = mysqli_query($b,"select * from bildirim where kid='2' and onay='1'");
	if(mysqli_num_rows($sorgu)<1){
		$ekle = "";
		$sorgu2 = mysqli_query($b,"select * from bildirim where kid='2' order by id desc limit 10");
		while($row = mysqli_fetch_array($sorgu2)){
			$json = json_decode($row['json'],true);
			$isaretle="";
			if($row['onay']==1){ $isaretle =  'yesilarka'; }
			$ekle .= '<li class=" '.$isaretle.'">
							<div class="col-md-3">
								<div class="row">
									<img src="images/profil.jpg"  style="width:100%;padding:10px;" alt=""/>
								</div>
							</div>
							<div class="col-md-9">
								<div class="bilbaslik">
									<h6>
										<a href="">'.$json['msg'].'</a>
									</h6>
									<p>'.$json['tarih'].'</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</li>';
		
		}
		$dizi = ["duum"=>0,"yenimsj"=>mysqli_num_rows($sorgu),"bildirimsonuc"=>$ekle];
	
	}else{
		$sorgu1 = mysqli_query($b,"select * from bildirim where kid='2' and onay='1' and ses='1'");
		$ekle = "";
		$sorgu2 = mysqli_query($b,"select * from bildirim where kid='2' order by id desc limit 10");
		while($row = mysqli_fetch_array($sorgu2)){
			$json = json_decode($row['json'],true);
			$isaretle="";
			if($row['onay']==1){ $isaretle =  'yesilarka'; }
			$ekle .= '<li class=" '.$isaretle.'">
							<div class="col-md-3">
								<div class="row">
									<img src="images/profil.jpg"  style="width:100%;padding:10px;" alt=""/>
								</div>
							</div>
							<div class="col-md-9">
								<div class="bilbaslik">
									<h6>
										<a href="">'.$json['msg'].'</a>
									</h6>
									<p>'.$json['tarih'].'</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</li>';
		
		}
		
		if(mysqli_num_rows($sorgu1)<1){
			$dizi = ["duum"=>0,"yenimsj"=>mysqli_num_rows($sorgu),"bildirimsonuc"=>$ekle];
		}else{
			$dizi = ["durum"=>1,"bildirimsonuc"=>$ekle];
			mysqli_query($b,"update bildirim set ses='0'");
		}
	}
	echo json_encode($dizi);

?>