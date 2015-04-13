<!DOCTYPE html>
<html><head>
<title>ModuleQ</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="//use.typekit.net/lgp2sgt.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43333339-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_head(); ?>
</head>
<body>

<div class="outerwrapper header page turnoff_whenmobile">
	<div class="innerwrapper header page">
		<header class="cf">
			
			<?php get_template_part('logo');?>
						
			<?php get_template_part('navigation');?> 
			
		</header>
	</div><!-- END innerwrapper header-->			
</div><!-- END outerwrapper header-->
<div class="outerwrapper header_mobile page turnoff_whendesktop">
	<div class="innerwrapper header_mobile">
		<div class="header_mobile_content">

			<div class="nav_mobile">
				<a href="index.html">
					<img src="<?php bloginfo('template_url'); ?>/images/icon_logo_about.png" id="logo_mobile_about">
				</a>
				<div id="mobilebtn" class="click cf">
					<img src="<?php bloginfo('template_url'); ?>/images/btn_mobilenav.png">
				</div><!-- END mobilebtn-->
				<div id="dropdown_mobile">
					<a href="about.html">About</a> 
					<a href="https://moduleq.zendesk.com/home">Support</a>
					<a href="trymoduleq.php">Try ModuleQ</a> 
				</div><!-- END dropdown_mobile-->
			</div><!-- END nav_mobile-->
			
			
		</div><!-- END header_mobile_content-->	
	</div><!-- END innerwrapper header_mobile-->			
</div><!-- END outerwrapper header_mobile-->


