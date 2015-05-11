<?php get_header(); ?>
<div class="outerwrapper page_content">
	<div class="innerwrapper">
		<h1><?php echo types_render_field("page-title");?></h1>
		<?php echo types_render_field("page-sub-title");?>
		<hr class="main_hr"/>
			<article role="article" itemscope itemtype="http://schema.org/BlogPosting">

				<section class="entry-content cf" itemprop="articleBody">
					<?php echo types_render_field("page-content");?>
				</section>


			</article>
	</div>
</div>
<?php get_footer(); ?>