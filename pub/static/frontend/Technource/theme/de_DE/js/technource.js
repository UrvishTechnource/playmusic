
    require([
        'jquery',
//	'js/owl.carousel'	
        ], function ($) {
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
