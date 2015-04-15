<?php get_header(); ?>
	<?php
		 $query = new WP_Query( array('post_type' => 'team-member', 'posts_per_page' => 10 ) );
		 while ( $query->have_posts() ) : $query->the_post(); 

					echo types_render_field("team-member-image");
					echo types_render_field( "title", array( ) );
					echo types_render_field( "accomplishments", array( ) );
			 wp_reset_postdata();
		  endwhile; ?>
<?php get_footer(); ?>