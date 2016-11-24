/* ---------- 部件 -----------------*/
$(function(){
	var $ettab = $('.boxtab ').children(".boxtab-t").find(".boxtab-t-item");
	$ettab.click(function(){
		$(this).addClass('art').siblings().removeClass('art');
		var index = $ettab.index(this);
		$('.boxtab').children(".boxtab-c").children(".boxtab-c-goup").eq(index).show().siblings().hide();
	});	
	
	$(".mat-con li .cosem .tiemw").click(function(){
		$(this).toggleClass("art");
	});	
	
	$(".btncluckadd").click(function(){
		$(this).toggleClass("art");
	});	
	
	$(".tabradio .tabradioitem").click(function(){
    $(this).addClass('art').siblings().removeClass('art');
	});

    $(".click_distablediv").click(function(){
		$("#boxdeisngron").fadeIn();
	});	
	
	$(".click_boclediv").click(function(){
		$(".Filemanagerdom").fadeIn();
	});	
	
	$(".click_drawunitbox").click(function(){
		$("#drawunitbox").fadeIn();
	});		
	$(".Closebtn").click(function(){
		$(this).parents(".popup").fadeOut();
	});	
	
	
	
});
function moublesprompsm(){
	var $ettab = $('.boxsetuptab ').children(".boxsetuptab-hd").find(".boxsetuptab-hd-item");
		$ettab.click(function(){
			$(this).addClass('art').siblings().removeClass('art');
			var index = $ettab.index(this);
			$('.boxsetuptab').children(".boxsetuptab-cn").children(".boxsetuptab-co-goup").eq(index).show().siblings().hide();
			
		});
		$(".boxsetuptab .boxsetuptab-hd .boxsetuptab-hd-item").last().addClass('art').siblings().removeClass('art');
		$(".boxsetuptab .boxsetuptab-cn .boxsetuptab-co-goup").last().show().siblings().hide();
		
	$("#pref_modelproperties").show().siblings().hide();
	
}
function selectTab03Syn ( i )
	{
		var $ettab = $('.boxsetuptab ').children(".boxsetuptab-hd").find(".boxsetuptab-hd-item");
		$ettab.click(function(){
			$(this).addClass('art').siblings().removeClass('art');
			var index = $ettab.index(this);
			$('.boxsetuptab').children(".boxsetuptab-cn").children(".boxsetuptab-co-goup").eq(index).show().siblings().hide();
			
		});
		$(".boxsetuptab .boxsetuptab-hd .boxsetuptab-hd-item").last().addClass('art').siblings().removeClass('art');
		$(".boxsetuptab .boxsetuptab-cn .boxsetuptab-co-goup").last().show().siblings().hide();
		switch(i){
			case 1:
			document.getElementById("pref_lighting").style.display="block";
			document.getElementById("pref_camera").style.display="none";
			document.getElementById("pref_baking_ao").style.display="none";
			document.getElementById("pref_baking_gi").style.display="none";
			document.getElementById("pref_Renderer").style.display="none";
			document.getElementById("pref_panoramao").style.display="none";
			document.getElementById("pref_vrexperience").style.display="none";
			break;
			case 2:
			document.getElementById("pref_lighting").style.display="none";
			document.getElementById("pref_camera").style.display="block";
			document.getElementById("pref_baking_ao").style.display="none";
			document.getElementById("pref_baking_gi").style.display="none";
			document.getElementById("pref_Renderer").style.display="none";
			document.getElementById("pref_panoramao").style.display="none";
			document.getElementById("pref_vrexperience").style.display="none";
			break;
			case 3:
			document.getElementById("pref_lighting").style.display="none";
			document.getElementById("pref_camera").style.display="none";
			document.getElementById("pref_baking_ao").style.display="block";
			document.getElementById("pref_baking_gi").style.display="none";
			document.getElementById("pref_Renderer").style.display="none";
			document.getElementById("pref_panoramao").style.display="none";
			document.getElementById("pref_vrexperience").style.display="none";
			break;
			case 4:
			document.getElementById("pref_lighting").style.display="none";
			document.getElementById("pref_camera").style.display="none";
			document.getElementById("pref_baking_ao").style.display="none";
			document.getElementById("pref_baking_gi").style.display="block";
			document.getElementById("pref_Renderer").style.display="none";
			document.getElementById("pref_panoramao").style.display="none";
			document.getElementById("pref_vrexperience").style.display="none";
			break;
			case 5:
			document.getElementById("pref_lighting").style.display="none";
			document.getElementById("pref_camera").style.display="none";
			document.getElementById("pref_baking_ao").style.display="none";
			document.getElementById("pref_baking_gi").style.display="none";
			document.getElementById("pref_Renderer").style.display="block";
			document.getElementById("pref_panoramao").style.display="none";
			document.getElementById("pref_vrexperience").style.display="none";
			break;
			case 6:
			document.getElementById("pref_lighting").style.display="none";
			document.getElementById("pref_camera").style.display="none";
			document.getElementById("pref_baking_ao").style.display="none";
			document.getElementById("pref_baking_gi").style.display="none";
			document.getElementById("pref_Renderer").style.display="none";
			document.getElementById("pref_panoramao").style.display="block";
			document.getElementById("pref_vrexperience").style.display="none";
			break;
			case 7:
			document.getElementById("pref_lighting").style.display="none";
			document.getElementById("pref_camera").style.display="none";
			document.getElementById("pref_baking_ao").style.display="none";
			document.getElementById("pref_baking_gi").style.display="none";
			document.getElementById("pref_Renderer").style.display="none";
			document.getElementById("pref_panoramao").style.display="none";
			document.getElementById("pref_vrexperience").style.display="block";
			break;
		}
	}
