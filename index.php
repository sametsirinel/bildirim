<?php include "ayar.php"; ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>B.Samet Şirinel - Bildirim Sistemi</title>
	
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
	<audio src="ses/bildirim.mp3" id="bildirim" ></audio>
	<nav class="navbar-inverse	">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bildirim Sistemi</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown open">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true" id="badgedegis"><i class='fa fa-bullhorn'></i><span class="caret"></span></a>
              <div class="dropdown-menu bildirim" role="menu">
					<div class="acilirbaslik">
						<span class="pull-left">Bildirimler</span>
						<span class="pull-right"><a href="JavaScript:;" class="oisaretle" onclick="okundu()">Okundu Olarak İşaretle</a></span>
						<div class="clearfix"></div>
					</div>
					<ul id="bildirimsonuc">
					</ul>
					<div class="tumoku text-center">
						<h4><a href="">Tümünü Gör</a></h4>
					</div>
				</div>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<div class="container">
		<div class="page-header">
			<h2>Bildirimler</h2>
		</div>
		<div class="row">
			<div class="col-md-12">
			<?php verisil(["islem"=>"sil","sql"=>"delete from bildirim where id='".g("id")."'"]); ?>
				<button type="button" onclick="temizle()" class="btn btn-info pull-right" style="margin:5px;">Hepsini Temizle</button>
				<button type="button" onclick="okundu()" class="btn btn-success pull-right" style="margin:5px;">Okundu Olarak İşaretle</button>
				<table class="table">
					<thead>
						<tr>
							<th>Bildirim Türü</th>
							<th>Bildirim Yazı</th>
							<th>Bildirim Tarih</th>
							<th>İşlemler</th>
						</tr>
					</thead>
					<tbody id="temizsonuc">
						<?php $sorgu = mysqli_query($b,"select * from bildirim where kid='2' order by onay desc");
						if(mysqli_num_rows($sorgu)<1){ ?>
							<tr colspan="4">
								<td>Herhangi Bir Yeni Bildirim Yok</td>
							</tr>
						
						<?php 
						}else{
							while($row = mysqli_fetch_array($sorgu)){ ?>
								<?php $dizi = json_decode($row['json'],true); 
								
								?>
								<tr <?php if($row['onay']==1){ echo 'class="success"'; }?>>
									<td><?php echo varsa(@$dizi['tur']) ?></td>
									<td><a href="<?php echo $dizi['link']; ?>"><?php echo varsa($dizi['msg']) ?></a></td>
									<td><?php echo date("20y-m-d h:i:s",$dizi['tarih']) ?></td>
									<td><a href="?islem=sil&id=<?php echo $row['id']; ?>">Sil</a></td>
								</tr>
							<?php } ?>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	<?php 
		
		$dizi = ["msg"=>"Söyle Böyle Bir Şey Oldu Böyle Bir Bildirim Verdik","onay"=>0,"link"=>"http://localhost/asd.php?id=10","tarih"=>time(),"tur"=>"Yorum"];
		bildirimekle($dizi);
	?>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>