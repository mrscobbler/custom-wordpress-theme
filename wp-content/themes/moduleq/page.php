<?php get_header(); ?>
<div class="outerwrapper page_content">
	<div class="innerwrapper cf">
		<?php $page_title = types_render_field("page-title");?>
		<?php if($page_title != ''):?>
		<h1></h1>
		<?php endif;?>
		<?php echo types_render_field("page-sub-title");?>
		<?php if($page_title != ''):?>
		<hr class="main_hr"/>
		<?php endif;?>
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