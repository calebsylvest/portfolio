<?php /* Template Name: Third Day */ ?>

<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-calebsylvest-com" data-template-set="html5-reset">

	<meta charset="utf-8">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Caleb Sylvest | Third Day</title>
	
	<meta name="title" content="Caleb Sylvest | Portfolio">
	<meta name="description" content="The web portfolio of designer Caleb Sylvest">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<meta name="author" content="Caleb Sylvest">
	<meta name="Copyright" content="Copyright Caleb Sylvest 2013. All Rights Reserved.">

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/custom/images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/custom/images/touch-icon-iphone-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/custom/images/touch-icon-ipad-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/custom/images/touch-icon-iphone-retina-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/custom/images/touch-icon-ipad-retina-precomposed.png" />
	
	<!-- CSS: screen, mobile & print are all in the same file -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/custom/css/custom-style.css">
	
	<!-- all our JS is at the bottom of the page, except for Modernizr and Responsive-Nav. -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/custom/js/modernizr-1.7.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/custom/js/responsive-nav.js"></script>

</head>

<body class="interior-page">

<?php get_template_part('navigation'); ?>

<div class="wrapper">
		
	<section id="selected-work" class="selected-work clearfix">
			
		<div class="container-small">
		
			<h2>Third Day</h2>
			
			<div class="project-data">
			
				<ul>
					<li><b>Client:</b> Third Day</li>
					<li><b>Role:</b> Wireframe, Design, Theme</li>
					<li><b>URL:</b> <a class="link-underline" target="_blank" href="https://thirdday.com/">www.ThirdDay.com</a></li>
				</ul>
			
			</div> <!-- end project-data -->
			
			<p>Third Day has enjoyed great success throughout a twenty year career. Third Day is an internationally renowned band with millions of loyal fans, dozens of awards and nominations, and a devoted online community.</p>

			<p>The launch of the new website coincided with the release of Third Day's eleventh album and spring tour. The site takes advantage of all available features of the FanTorrent platform built by <a class="link-underline" target="_blank" href="http://ideaden.com/">Idea Den</a>, including the sale of <a class="link-underline" target="_blank" href="http://thirddaylive.com/">Legacy Shows</a> (live recordings to concerts).</p>
			
			<img class="portfolio-piece" src="<?php echo get_template_directory_uri(); ?>/assets/custom/images/Third-Day-MacBook.jpg" alt="Third-Day-MacBook" width="1200" height="800">
			
			<img class="portfolio-piece" src="<?php echo get_template_directory_uri(); ?>/assets/custom/images/Third-Day-Home.jpg" alt="ThirdDay-Home" width="1000" height="3154">
			
			<img class="portfolio-piece" src="<?php echo get_template_directory_uri(); ?>/assets/custom/images/Third-Day-About.jpg" alt="ThirdDay-About" width="1000" height="3302">
			
			<img class="portfolio-piece" src="<?php echo get_template_directory_uri(); ?>/assets/custom/images/Third-Day-Music.jpg" alt="ThirdDay-Music" width="1000" height="902">
			
			<div class="arrow-pager">
				<a href="/kip-moore" title="Kip Moore" class="arrow arrow-left icon-alone">
					<span class="screen-reader-text">Kip Moore by Caleb Sylvest</span>
				</a>
				<a href="/marketing-demo" title="Orange Mobile Marketing Demo" class="arrow arrow-right icon-alone">
					<span class="screen-reader-text">Orange Mobile Marketing Demo by Caleb Sylvest</span>
				</a>
			</div> <!-- end arrow-pager -->
					
		</div> <!-- end container -->
	
	</section> <!-- end portfolio -->

</div> <!-- end wrapper -->

<!-- here comes the javascript -->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='<?php echo get_template_directory_uri(); ?>/assets/custom/js/jquery-1.9.1.min.js'>\x3C/script>")</script>

<!-- this is where we put our custom functions -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/custom/js/functions.js"></script>

<!-- Asynchronous google analytics  -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29565053-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>