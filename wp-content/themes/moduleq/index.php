<?php get_header(); ?>
<div class="outerwrapper" style="display:none; position:fixed; opacity:.5; z-index:50000">
	<div class="innerwrapper responsivecheck"></div><!-- END innerwrapper responsivecheck -->
</div><!-- END outerwrapper responsivecheck -->

<div class="outerwrapper header index turnoff_whenmobile">
	<div class="innerwrapper header index">
		<header class="cf">
			
			<?php get_template_part('logo');?>
			<?php get_template_part('navigation');?>
			
			<div class="tag cf">
				<h1>The Lean, Mean, Deal Closing Machine For Sales Pros.</h1>
				<div class="try_moduleQ cf">
					<a href="trymoduleq.php"  class="rollover-button">Try ModuleQ</a>
					<a href="#" class="learnmore">Learn More</a> 
				</div><!-- END try_moduleQ--> 
			</div><!-- END tag--> 
		
		</header>
	</div>
	<!-- END innerwrapper header--> 
</div>
<!-- END outerwrapper header--> 

<div class="outerwrapper header_mobile index turnoff_whendesktop">
	<div class="innerwrapper header_mobile">
		<div class="header_mobile_content">
			<div class="nav_mobile">
				<div id="mobilebtn" class="click cf"><img src="<?php bloginfo('template_url'); ?>/images/btn_mobilenav.png"></div>
				<!-- END mobilebtn-->
				<div id="dropdown_mobile"> 
					<?php get_template_part('navigation');?>
				 </div>
				<!-- END dropdown_mobile--> 
			</div>
			<!-- END nav_mobile-->
			
			<div class="tag_mobile cf">
				<h1>The Lean, Mean, Deal Closing Machine<br>For Sales Pros.</h1>
				<div class="try_moduleQ cf"> <a href="/sign-up"  class="rollover-button">Try ModuleQ</a> <a href="#" class="learnmore">Learn More</a> </div>
				<!-- END try_moduleQ--> 
			</div>
			<!-- END tag_mobile--> 
			
		</div>
		<!-- END header_mobile_content--> 
	</div>
	<!-- END innerwrapper header_mobile--> 
</div>
<!-- END outerwrapper header_mobile--> 

<div id="greencurve_waypoint"></div><!-- END scrolltohere_01-->

<div class="outerwrapper homepanel_1">
	<div class="innerwrapper homepanel_1">
		<div class="homepanel_1_content cf">
			
			<div class="homepanel_1_text">
				<h2>CRM Can Slow You Down</h2>
				<p>
					If you are an on the go sales pro with a <br>
					lot of deals to track, ModuleQ is for you.Using <br>
					our mobile app, it is simple to manage your <br>
					personal sales opportunities and close them faster. Unlike complicated CRMs and <br>
					sales tools, ModuleQ is designed for frontline sales reps in the field.</p> 
							
			</div><!-- END right-->
			<ul class="greencurve">
				<li>Manage Opportunities In Play</li>
				<li>Stay On Top of Future Deals</li>
				<li>Organize Emails and Actions<br/> Around Opportunities</li>
			</ul><!-- END greencurve-->
		</div><!-- END homepanel_1_content--> 
	</div><!-- END innerwrapper homepanel_1--> 
</div><!-- END outerwrapper homepanel_1-->

<div class="clear startphone"></div>

<div class="outerwrapper homepanel_2" id="startphone_waypoint">
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
				<a href="/sign-up" class="rollover-button">Try ModuleQ</a> 
			</div><!-- END right-->
		</div>
		<!-- END homepanel_2_content--> 
	</div>
	<!-- END innerwrapper homepanel_2--> 
</div>
<!-- END outerwrapper homepanel_2-->



<?php get_footer(); ?>
