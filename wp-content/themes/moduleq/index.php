<?php get_header(); ?>

<div class="outerwrapper blog_content">
	<div class="innerwrapper cf">
		<h1>Blog</h1>
		<hr class="main_hr"/>
		<div class="content">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

						<header class="article_header">

							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<div class="date"><?php echo get_the_date( "m.d.Y" );?>
						</header>

						<section class="entry-content cf">
							<?php the_content(); ?>
						</section>

						

					</article>
					<div class="share" style="margin-top:40px;">
						<div class="share_title"><strong>Share this:</strong></div>
						<div style="margin-top:20px;"><a href="https://twitter.com/moduleQ" class="social"><i class="fa fa-lg fa-twitter"></i></a><a href="https://www.linkedin.com/company/2708312?trk=tyah&trkInfo=clickedVertical%3Acompany%2Cidx%3A1-1-1%2CtarId%3A1429033159210%2Ctas%3Amoduleq" class="social"><i class="fa fa-lg fa-linkedin"></i></a><a href="https://www.facebook.com/pages/ModuleQ/111268418984871?fref=ts" class="social"><i class="fa fa-lg fa-facebook"></i></a></div>
					</div>
					<hr/>

					<?php endwhile; ?>

							

					<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!'); ?></h1>
								</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.'); ?></p>
								</section>
							</article>

					<?php endif; ?>


			
		</div>
		<div class="sidebar">
			<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	
				<?php dynamic_sidebar( 'sidebar' ); ?>
	
			<?php endif; ?>
		</div>
		<div class="clear"></div>

	</div>

</div>


<?php get_footer(); ?>
