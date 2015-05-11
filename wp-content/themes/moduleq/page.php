<?php get_header(); ?>
<div class="outerwrapper page_content">
	<div class="innerwrapper">
		<?php $page_title = types_render_field("page-title");?>
		<?php if($page_title != ''):?>
		<h1></h1>
		<?php endif;?>
		<?php echo types_render_field("page-sub-title");?>
		<?php if($page_title != ''):?>
		<hr class="main_hr"/>
		<?php endif;?>
			<article role="article" itemscope itemtype="http://schema.org/BlogPosting">

				<section class="entry-content cf" itemprop="articleBody">
					<?php echo types_render_field("page-content");?>
				</section>


			</article>
	</div>
</div>
<?php get_footer(); ?>