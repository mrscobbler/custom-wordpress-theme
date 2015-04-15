<?php get_header(); ?>
<div class="outerwrapper page_content">
	<div class="innerwrapper">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

				<section class="entry-content cf" itemprop="articleBody">
					<?php
						// the content (pretty self explanatory huh)
						the_content();

					?>
				</section>


			</article>

		<?php endwhile; endif; ?>
	</div>
</div>
<?php get_footer(); ?>