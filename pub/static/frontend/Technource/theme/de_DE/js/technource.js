
    require([
        'jquery',
	'slick'
        ], function ($) {
	$(document).ready(function(){

	 $(".center").slick({
        //dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3,	
        variableWidth: true,

      });

	window.setTimeout(refreshWindow, 100)

	function refreshWindow() {

	  $(window).resize();
	}


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
