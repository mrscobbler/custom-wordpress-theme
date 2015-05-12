<?php get_header(); ?>
<div class="outerwrapper page_content">
	<div class="innerwrapper cf">
		<?php get_template_part('page-top');?>
		
		<div class="content">
			<?php echo types_render_field("page-content");?>
		</div>
		<div class="sidebar">
			<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
				
					<?php dynamic_sidebar( 'sidebar' ); ?>
				
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>