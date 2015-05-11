<?php
/**
 * Template Name: News Page
 **/
get_header(); ?>
<div class="outerwrapper page_content">
	<div class="innerwrapper cf">
		<h1><?php echo types_render_field("page-title");?></h1>
		<?php echo types_render_field("page-sub-title");?>
		<hr class="main_hr"/>
		<div class="content">
			<?php echo types_render_field("page-content");?>
		</div>
		<div class="sidebar">
			<?php if ( is_active_sidebar( 'news-sidebar' ) ) : ?>
				
					<?php dynamic_sidebar( 'news-sidebar' ); ?>
				
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>