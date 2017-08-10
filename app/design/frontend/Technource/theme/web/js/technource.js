
    require([
        'jquery',
        ], function ($) {
	$(document).ready(function(){
	$(".become_fan").click(function(){

	 	$("#fb-like").show(); 
		$("#sidebar-social-fan").hide();
	});
	});
	hometabs=function (curId)
	{
		//$(".tabs-content").css('display','none');
		$(".tabs-content").hide();

		//$("#"+curId).css('display','block');
		$("#"+curId).show();
	},
	$(window).load(function(){
	hometabs('tabs-1');
	});


    });
