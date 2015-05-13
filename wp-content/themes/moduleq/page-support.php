<?php
/**
 * Template Name: Support Page
 **/
get_header(); ?>
<div class="page_support">
<div class="outerwrapper page_content">
	<div class="innerwrapper cf">
		<div class="content no_sidebar">
			<?php echo types_render_field("page-content");?>
		</div>
	</div>


	
</div>
<div  class="outerwrapper page_content support_people_container">
		<div class="innerwrapper cf">
			<h2 style="font-size: 35px; text-align: center; font-weight: 100; margin-bottom: 40px;">Anything We Can Help You With?</h2>
			<p>Contact Lee or Michelle at 
				<a style="font-weight: 400; color: #000; border-bottom: 1px solid #d1d1d1;" href="mailto:support@moduleq.com">support@moduleq.</a>
			</p>
			<div class="support_people">
				<img src="<?php bloginfo('template_url'); ?>/images/support_lee.png"> 
				<p><strong>Lee</strong></p>
				<p>Engine Tuner</p>
			</div>
			<div class="support_people">
				<img src="<?php bloginfo('template_url'); ?>/images/support_michelle.png"> 
				<p><strong>Michelle</strong></p>
				<p>Pit Crew Coach</p>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>