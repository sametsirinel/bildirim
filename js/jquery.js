$(function(){


	bildirimcek = function(){
		$.ajax({
			
			type:"POST",
			url:"ajax/bildirimvarmi.php",
			data:"",
			dataType:"json",
			success:function(cevap){
				
				if(cevap.durum==1){
					document.getElementById('bildirim').play();
					
				}else{
					$("#badgedegis").html("<i class='fa fa-bullhorn'></i><span class='caret'></span>");
				}
				if(cevap.yenimsj!=$("#badgesayi").html()){
					if(cevap.yenimsj==0){
						$("#badgedegis").html("<i class='fa fa-bullhorn'></i><span class='caret'></span>");
					}else{
						$("#badgedegis").html("<i class='fa fa-bullhorn'></i> <span class='badge'>"+ cevap.yenimsj+"</span><span class='caret'></span>");
					}
				}
				if(cevap.bildirimsonuc != $("#bildirimsonuc").html()){
					
					$("#bildirimsonuc").html(cevap.bildirimsonuc);
				
				}
			}
		
		});
	
	}
	
	tekraret = setInterval(bildirimcek,3000);
	
});


function okundu(){
	$.ajax({
	
		type:"POST",
		url:"ajax/okundu.php",
		data:"",
		dataType:"json",
		success:function(cevap){
			
			$(".yesilarka").removeClass("yesilarka");
			$(".success").removeClass("success");
			
			
		}
	
	});

}
function temizle(){
	
	$.ajax({
	
		type:"POST",
		url:"ajax/temizle.php",
		data:"",
		dataType:"json",
		success:function(cevap){
			
			$("#temizsonuc").html("");
			
		}
	
	});

}