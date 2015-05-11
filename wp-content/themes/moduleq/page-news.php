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
			<?php
		$args = array(
			'orderby'=>'menu_order',
			'post_type' => 'news-single',

		);
		 $query = new WP_Query( $args );
		 
		 while ( $query->have_posts() ) : $query->the_post(); ?>
		 		<div class="news-item">
		 			<div class="title"><a href="<?php echo types_render_field("news-item-url",array("output"=>"raw"));?>"><?php the_title();?></a></div>
		 			<div class="date"><?php echo types_render_field("news-item-date",array("style"=>"text","format"=>"m.d.Y"));?></div>
					<hr/>
			 	</div>
		
		  
		 <? wp_reset_postdata();
		 	$count++;

		  endwhile; ?>
		</div>
		<div class="sidebar">
			<?php if ( is_active_sidebar( 'news-sidebar' ) ) : ?>
				
					<?php dynamic_sidebar( 'news-sidebar' ); ?>
				
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>