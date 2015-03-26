<!DOCTYPE html>
<html>
<head>
<title>ModuleQ</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery.min.js" language="javascript" type="text/javascript"></script>
<script src="velocity.min.js" language="javascript" type="text/javascript"></script>
<link rel="shortcut icon" href="images/favicon.ico" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="//use.typekit.net/lgp2sgt.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<script src="jquery.scrollTo-1.4.3.1.js" language="javascript" type="text/javascript"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43333339-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>

<div class="outerwrapper" style="display:none; position:fixed; opacity:.5; z-index:50000">
	<div class="innerwrapper responsivecheck"></div><!-- END innerwrapper responsivecheck -->
</div><!-- END outerwrapper responsivecheck -->

<div class="outerwrapper header page turnoff_whenmobile">
	<div class="innerwrapper header page">
		<header class="cf">
			
			<a href="index.html"><img src="images/icon_logo_about.png" id="logo_about"></a>
						
			<div class="navbar cf">
				<nav>
					<a href="about.html">About</a> 
					<a href="https://moduleq.zendesk.com/home">Support</a>
				</nav>
			</div><!-- END navbar-->
			
		</header>
	</div><!-- END innerwrapper header-->			
</div><!-- END outerwrapper header-->

<script>
$(function () {
	$('.click').click (shownav);
	function shownav (){
		$('#dropdown_mobile').toggle();
	}
})
</script>

<div class="outerwrapper header_mobile page turnoff_whendesktop">
	<div class="innerwrapper header_mobile">
		<div class="header_mobile_content">

			<div class="nav_mobile">
				<a href="index.html"><img src="images/icon_logo_about.png" id="logo_mobile_about"></a>
				<div id="mobilebtn" class="click cf"><img src="images/btn_mobilenav.png"></div><!-- END mobilebtn-->
				<div id="dropdown_mobile">
					<a href="about.html">About</a> 
					<a href="https://moduleq.zendesk.com/home">Support</a>
					<a href="trymoduleq.php">Try ModuleQ</a> 
				</div><!-- END dropdown_mobile-->
			</div><!-- END nav_mobile-->
			
			
		</div><!-- END header_mobile_content-->	
	</div><!-- END innerwrapper header_mobile-->			
</div><!-- END outerwrapper header_mobile-->


<?php 
	if (isset($_REQUEST["submit"])) {
		
		$emailto = 'varouzhan@moduleq.com';
		//$emailto = 'sales@kumardesai.com';
		$header  = "Content-type: text/html\r\n";
		$header .= "From: ". $_REQUEST['myemail']."\r\n";
		$subject = 'Hi ModuleQ, please sign me up!';
		
		$body = "
			<b>Name</b>: ".stripslashes($_REQUEST['myname'])."<br><br> 
			<b>Work Email</b>: ".$_REQUEST['myemail']."<br><br>";

		$txt_file_body = " Name:".stripslashes($_REQUEST['myname'])."  Work Email: ".$_REQUEST['myemail']."\n"; 
		$file = 'beta_customers.txt';
		file_put_contents($file, $txt_file_body, FILE_APPEND | LOCK_EX);

		//mail('sales@kumardesai.com', $subject, $body, $header);

		if (mail($emailto, $subject, $body, $header)) {
			?><script language="javascript" type="text/javascript">
				$(function () {
					$('.trymoduleqpage_content').hide()
					$('.thankyou_content').show();
				})
			</script><?php
			unset($_REQUEST);
		} else {
			?><script>alert ('There was a problem with your request, please try again'); </script><?php
		}
	}
?>

<script src="validation.js" language="javascript" type="text/javascript"></script>

<script>
$(function () {
	$('#submitform').submit(function(){

		$('input:not(.sub)').css ({'background-color':'#fff'});
			
		if ($('#name').val()=='') {
			alert ('Don\'t forget your name');
			colorbackground($('#name'));
			return false;
		} else if ($('#email').val()=='') {
			alert ('Don\'t forget your email');
			colorbackground($('#email'));
			return false;
		} else if (($('#email').val()!='')&& (!validateEmail ($('#email').val()))) {
			colorbackground($('#email'));
			return false;
		} else {
			return true;
		}	
		return false;
		
		function colorbackground(field) {
			$(field).css ({'background-color':'#F3D200'});
			$(field).focus();
		}
	})
})
</script>

<div class="outerwrapper trymoduleqpage">
	<div class="innerwrapper trymoduleqpage">
		
		<div class="trymoduleqpage_content">
			<h2>Sign Up for ModuleQ. It's Free.</h2>
			<p>Please enter your name and work email address to<br> reserve a space in our beta program. We'll be in touch as<br> soon as an invitation becomes available.</p>

			<div id="form">
				<form action="" method="post" id="submitform">
				<div class="row cf"><label>Name</label><input type="text" id="name" name="myname" class="lg"></div>  
				<div class="row cf"><label>Work Email</label><input type="text" id="email" name="myemail" class="lg"></div> 
				<div class="row submit cf"><label>&nbsp;</label><input type="submit" value="" name="submit" class="sub"></div>
				</form>
			</div><!-- END form-->

		</div><!-- END trymoduleqpage_content-->	
		
		<div class="thankyou_content"><a href="trymoduleq.php"><img src="images/img_thankyou.gif" class="thankyou"></a></div><!-- END trymoduleqpage_content-->	
	
	</div><!-- END innerwrapper trymoduleqpage-->			
</div><!-- END outerwrapper trymoduleqpage-->
<div style="display:none"><img src="images/btn_signup_on.png"></div><!-- END hide-->
<div class="outerwrapper footer">
	<div class="innerwrapper footer">
		<footer class="cf">
			<div class="copy">
				<h2><span>ModuleQ</span> Keep Closing.</h2>
				<p>© 2015  ModuleQ. All rights reserved.</p>
			</div>
			<!-- END copy-->
			<div class="links"> <a href="about.html">About</a> <a href="https://moduleq.zendesk.com/home">Support</a> </div>
			<!-- END links--> 
		</footer>
		<!-- END footer--> 
	</div>
	<!-- END innerwrapper footer--> 
</div>
<!-- END outerwrapper footer--> 

<!--IMAGE LOADER-->
<div style="display:none">
	<img src="images/btn_trymoduleq_on.png" width="475" height="83">
	<img src="images/btn_trymoduleq_panel2_on.png" width="287" height="128">
</div><!-- END hideelements-->

</body>
</html>
