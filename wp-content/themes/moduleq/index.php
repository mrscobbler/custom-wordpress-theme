<!DOCTYPE html>
<html><head>
<title>ModuleQ</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
<script src="<?php bloginfo('template_url'); ?>/jquery.min.js" language="javascript" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/velocity.min.js" language="javascript" type="text/javascript"></script>
<link rel="shortcut icon" href="images/favicon.ico" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="//use.typekit.net/lgp2sgt.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<script src="<?php bloginfo('template_url'); ?>/jquery.scrollTo-1.4.3.1.js" language="javascript" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43333339-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_head(); ?>
</head>
<body>

<div class="outerwrapper" style="display:none; position:fixed; opacity:.5; z-index:50000">
	<div class="innerwrapper responsivecheck"></div><!-- END innerwrapper responsivecheck -->
</div><!-- END outerwrapper responsivecheck -->

<div class="outerwrapper header index turnoff_whenmobile">
	<div class="innerwrapper header index">
		<header class="cf">
			
			<a href="index.html"><img id="logo_about" src="<?php bloginfo('template_url'); ?>/images/icon_logo_about.png"></a>
			
			<div class="navbar cf">
				<nav> <a href="about.html">About</a> <a href="https://moduleq.zendesk.com/home">Support</a> </nav>
			</div><!-- END navbar-->
			
			<div class="tag cf">
				<p>The Lean, Mean, Deal Closing Machine For Sales Pros.</p>
				<div class="try_moduleQ cf"><a href="trymoduleq.php"><img src="<?php bloginfo('template_url'); ?>/images/btn_trymoduleq_off.png" id="btn_trymoduleq" class="rollover" style="float:left"></a><a href="#" class="learnmore">Learn More</a> </div><!-- END try_moduleQ--> 
			</div><!-- END tag--> 
		
		</header>
	</div>
	<!-- END innerwrapper header--> 
</div>
<!-- END outerwrapper header--> 

<script>
$(function () {
	$('.click').click (shownav);
	function shownav (){
		$('#dropdown_mobile').toggle();
	}
})
</script>
<div class="outerwrapper header_mobile index turnoff_whendesktop">
	<div class="innerwrapper header_mobile">
		<div class="header_mobile_content">
			<div class="nav_mobile">
				<div id="mobilebtn" class="click cf"><img src="<?php bloginfo('template_url'); ?>/images/btn_mobilenav.png"></div>
				<!-- END mobilebtn-->
				<div id="dropdown_mobile"> <a href="about.html">About</a> <a href="https://moduleq.zendesk.com/home">Support</a> <a href="trymoduleq.php">Try ModuleQ</a> </div>
				<!-- END dropdown_mobile--> 
			</div>
			<!-- END nav_mobile-->
			
			<div class="tag_mobile cf">
				<p>The Lean, Mean, Deal Closing Machine<br>For Sales Pros.</p>
				<div class="try_moduleQ cf"> <a href="trymoduleq.php"><img src="<?php bloginfo('template_url'); ?>/images/btn_mobile_trymoduleq_off.png" id="btn_mobile_trymoduleq" class="rollover"></a> <a href="#" class="learnmore">Learn More</a> </div>
				<!-- END try_moduleQ--> 
			</div>
			<!-- END tag_mobile--> 
			
		</div>
		<!-- END header_mobile_content--> 
	</div>
	<!-- END innerwrapper header_mobile--> 
</div>
<!-- END outerwrapper header_mobile--> 

<div id="scrolltohere_01"></div><!-- END scrolltohere_01-->

<script>
$(function () {
	
	var nojs;
	$(window).bind('resize load',function() {
		nojs = ($(this).width() < 768) ? false : true;
	});
	
	
	var timer_auto;
	
	$('.rollover').hover (
		function () {var id = $(this).attr('id');$(this).attr('src','/images/'+id+'_on.png')},
		function () {var id = $(this).attr('id');$(this).attr('src','/images/'+id+'_off.png')}
	)
	
	$('.tag').delay(1500).fadeIn(1000);
	
	$('.learnmore').click(function(){
		$.scrollTo( '#scrolltohere_01', 500, { easing:'swing'} );
	})
	
	var viewed1=0;
	var viewed2=0;
	//alert ($(window).width());
	if ($(window).width() < 993) {
		var slidefromleft_to = -450;
	} else if ($(window).width() < 1152) {
		var slidefromleft_to = -350;
	} else {
		var slidefromleft_to = -300;
	}
	
	
	$(window).scroll(function(){
		if ((isElementInViewport('.greencurve'))&&(viewed1!=1)&&($(window).width() > 768)) {
			
			$('.greenslide').show(2000).animate({left:slidefromleft_to, display:'block'}, 2000, function () {
				$('.greencurve p:eq(0)').delay(0).fadeIn(600);
				$('.greencurve p:eq(1)').delay(1000).fadeIn(600);
				$('.greencurve p:eq(2)').delay(2000).fadeIn(600);
				viewed1=1;
			});
			
		}
		if ((isElementInViewport('.startphone'))&&(viewed2!=1) && nojs) {
			
			$('#phone').fadeIn('slow', function () {
				$('#phone_screen2').delay(4000).fadeIn('slow', function () {
					$('#phone_screen3').delay(1000).show().css('left','100%').velocity({'left':'22px'}, 500);
				})
			})
			viewed2=1;
		}
		function isElementInViewport(elem) {
			var $elem = $(elem);
		
			// Get the scroll position of the page.
			var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
			var viewportTop = $(scrollElem).scrollTop();
			var viewportBottom = viewportTop + $(window).height();
		
			// Get the position of the element on the page.
			var elemTop = Math.round( $elem.offset().top );
			var elemBottom = elemTop + $elem.height();
		
			return ((elemTop < viewportBottom) && (elemBottom > viewportTop));
		}
	});
	
	

});
</script>

<div class="outerwrapper homepanel_1">
	<div class="innerwrapper homepanel_1">
		<div class="homepanel_1_content cf">
			<img src="<?php bloginfo('template_url'); ?>/images/img_homepanel_1_back.png" class="greenslide">
			<div class="left cf turnoff_whenmobile">
				<div class="greencurve">
					<p>Manage Today's<br>
					Opportuntities In Play</p>
					
					<p>Stay On Top of Future Deals</p>
								
					<p>Connect Opportunities to<br>
					Emails and Actions</p>
				</div><!-- END greencurve-->
			
			</div><!-- END left-->
			<div class="right">
				<h2>CRM Can Slow You Down</h2>
				<p>
					If you are a B2B sales person who has a lot of deals<br> 
				 	to track, ModuleQ is for you. We make it simple<br> 
					to manage your personal sales opportunities and close<br> 
					them faster. Unlike complicated CRMs and sales<br> 
					tools that are designed for some senior exec's<br> 
					revenue forecast, ModuleQ is designed for frontline<br> 
					sales reps in the field and on the phone.</p> 
					
					<div class="turnoff_whendesktop greencurve_mobile">
						<li><p>Manage Today's Opportuntities In Play</p></li>
						<li><p>Stay On Top of Future Deals</p></li>
						<li><p>Connect Opportunities to Emails and Actions</p></li>
					</div><!-- END greencurve-->
					
			</div><!-- END right-->
		</div><!-- END homepanel_1_content--> 
	</div><!-- END innerwrapper homepanel_1--> 
</div><!-- END outerwrapper homepanel_1-->

<div class="outerwrapper homepanel_2">
	<div class="innerwrapper homepanel_2">
		<div class="homepanel_2_content cf">
			<div class="left">
				<div id="phone" class="turnoff_whenmobile"> 
					<img src="<?php bloginfo('template_url'); ?>/images/img_phone_screen1.png" id="phone_screen1"> 
					<img src="<?php bloginfo('template_url'); ?>/images/img_phone_screen2.png" id="phone_screen2"> 
					<img src="<?php bloginfo('template_url'); ?>/images/img_phone_screen3.png" id="phone_screen3"> 
					<img src="<?php bloginfo('template_url'); ?>/images/img_phone_background.png" id="phone_cover"> 
				</div><!-- END phone-->
				<div id="phone_mobile" class="turnoff_whendesktop"> <img src="<?php bloginfo('template_url'); ?>/images/img_mobile_phone.jpg"> </div><!-- END phone_mobile--> 
			</div><!-- END left--> 
			<div class="right">
				<h2>Streamlined to Keep Deals Moving.</h2>
				<p>With ModuleQ, you can manage your <br>
					personal sales pipeline in the app and your personal <br>
					email at the same time. You'll have all of your <br>
					opportunities, emails, and next steps at your fingertips. <br>
					Save time, stay organized, and manage your deals in <br>
					play today and on deck for tomorrow.</p>
				<a href="trymoduleq.php"><img src="<?php bloginfo('template_url'); ?>/images/btn_trymoduleq_panel2_off.png" id="btn_trymoduleq_panel2" class="rollover"></a> 
			</div><!-- END right-->
		</div>
		<!-- END homepanel_2_content--> 
	</div>
	<!-- END innerwrapper homepanel_2--> 
</div>
<!-- END outerwrapper homepanel_2-->

<div class="clear startphone"></div>
<!-- END startphone-->

<div class="outerwrapper footer">
	<div class="innerwrapper footer">
		<footer class="cf">
			<div class="copy">
				<h2><span>ModuleQ</span> Keep Closing.</h2>
				<p>© 2015  ModuleQ. All rights reserved.</p>
			</div>
			<!-- END copy-->
			<div class="links"> <a href="about.html">About</a> <a href="https://moduleq.zendesk.com/home">Support</a> </div>
			<!-- END links--> 
		</footer>
		<!-- END footer--> 
	</div>
	<!-- END innerwrapper footer--> 
</div>
<!-- END outerwrapper footer--> 

<!--IMAGE LOADER-->
<div style="display:none"> <img src="<?php bloginfo('template_url'); ?>/images/btn_trymoduleq_on.png" width="475" height="83"> <img src="<?php bloginfo('template_url'); ?>/images/btn_trymoduleq_panel2_on.png" width="287" height="128"> </div>
<!-- END hideelements-->

</body>
</html>
