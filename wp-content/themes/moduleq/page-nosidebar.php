<?php
/**
 * Template Name: Page (no sidebar)
 **/
get_header(); ?>
<div class="outerwrapper page_content">
	<div class="innerwrapper cf">
		<?php get_template_part('page-top');?>
		
		<div class="content no_sidebar">
			<?php echo types_render_field("page-content");?>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>