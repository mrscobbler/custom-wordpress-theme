var $ =jQuery.noConflict();
$(function () {
	$('.click').click (shownav);
	function shownav (){
		$('#dropdown_mobile').toggle();
	}
	var nojs;
	$(window).bind('resize load',function() {
		nojs = ($(this).width() < 768) ? false : true;
	});
	
	
	var timer_auto;
	
	$('.tag').delay(1500).fadeIn(1000);
	
	$('.learnmore').click(function(){
		$.scrollTo( '#greencurve_waypoint', 500, { easing:'swing'} );
	})
	
	var greencurve = new Waypoint({
	  element: document.getElementById('greencurve_waypoint'),
	  handler: function(direction) {
	  	
	  	if($(window).width() > 768){
	  		$('.greencurve').show(2000).animate({left:0, display:'block'}, 2000, function () {
					$('.greencurve li:eq(0)').delay(0).fadeIn(600);
					$('.greencurve li:eq(1)').delay(1000).fadeIn(600);
					$('.greencurve li:eq(2)').delay(2000).fadeIn(600);
				});
	  	}
	   	
	  }
	});
	//disable after creation
	//greencurve.disable();
	
	var phone = new Waypoint({
		element: document.getElementById('startphone_waypoint'),
	  	handler: function(direction) {
	  	console.log("passed startphone waypoint")
	  	if(nojs){
	  		$('#phone').fadeIn('slow', function () {
				$('#phone_screen2').delay(4000).fadeIn('slow', function () {
					$('#phone_screen3').delay(1000).show().css('left','100%').velocity({'left':'22px'}, 500);
				})
			});
	  	}
	   	
	  }
	});
	//phone.disable();
	
});