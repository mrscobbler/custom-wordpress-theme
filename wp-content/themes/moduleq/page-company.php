<?php
/**
 * Template Name: Company Page
 **/
 get_header(); ?>
<div class="outerwrapper page_content page_about">
	<div class="innerwrapper">
		<h1><?php echo types_render_field("page-title");?></h1>
		<?php echo types_render_field("page-content");?>
		

		<?php $taxonomy_terms = get_terms( 'assigned-team' );
		foreach($taxonomy_terms as $term):?>
		<hr/>
		<h2><?php echo $term->name?></h2>
		<div class="about-container cf">
		<?php
		$args = array(
			'orderby'=>'menu_order',
			'post_type' => 'team-member',
			'tax_query' => array(
				array(
					'taxonomy' => 'assigned-team',
					'field'    => 'slug',
					'terms'    => $term->slug,
				),
			),

		);
		 $query = new WP_Query( $args );
		 
		 while ( $query->have_posts() ) : $query->the_post(); ?>
		 		<div class="about-card">
					<?php echo types_render_field("team-member-image");?>
					<div class="about-card-info">
						<div class="name"><?php the_title();?></div>
						<div class="title"><?php echo types_render_field("title");?></div>
						<hr/>
						<ul class="accomplishments">
							<li><?php echo types_render_field("accomplishments",array('separator'=>"</li><li>"));?></li>
						</ul>
						<div class="linkedin"><a href="<?php echo types_render_field("linkedin",array('output'=>'raw'));?>"><i class="fa fa-2x fa-linkedin-square"></i></a></div>
					</div>
			 	</div>
		
		  
		 <? wp_reset_postdata();
		 	$count++;

		  endwhile; ?>
		  
		</div>
		 <?php endforeach;?>
	</div>
</div>
  <?php get_footer();?>
