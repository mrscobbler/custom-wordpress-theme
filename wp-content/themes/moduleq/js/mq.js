var $ =jQuery.noConflict();
$(function () {
	
	var nojs;
	$(window).bind('resize load',function() {
		nojs = ($(this).width() < 768) ? false : true;
	});

	$('.navbar li.menu-item-has-children').on('hover',function(){
		if(nojs){
			$(this).children('.sub-menu').toggle();
		}
		
	});
	$('.click').click (shownav);
	function shownav (){
		$('nav .menu').toggle();
	}
	
	var timer_auto;
	
	$('.tag').delay(1500).fadeIn(1000);
	
	$('.learnmore').click(function(){
		$.scrollTo( '#greencurve_waypoint', 500, { easing:'swing'} );
	})
	
	var greencurve = new Waypoint({
	  element: document.getElementById('greencurve_waypoint'),
	  offset:'200',
	  handler: function(direction) {
	  	
	  	if($(window).width() > 768){
	  		$('.greencurve').animate({left:0, display:'block'}, 2500, function () {
					$('.greencurve li:eq(0)').delay(0).fadeIn(600);
					$('.greencurve li:eq(1)').delay(1000).fadeIn(600);
					$('.greencurve li:eq(2)').delay(2000).fadeIn(600);
				});
	  	}
	   	
	  }
	});
	
	
});