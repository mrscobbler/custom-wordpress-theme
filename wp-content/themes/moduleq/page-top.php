<?php $page_title = types_render_field("page-title");?>
<?php $page_sub_title = types_render_field("page-sub-title");?>
<?php if($page_title != ''):?>
<h1><?php echo $page_title?></h1>
<?php endif;?>
<?php if($page_sub_title):?>
<h2 class="subtitle"><?php echo types_render_field("page-sub-title");?></h2>
<?php endif;?>
<?php if($page_title != ''):?>
<hr class="main_hr"/>
<?php endif;?>