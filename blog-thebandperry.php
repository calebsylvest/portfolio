<?php /* Template Name: The Band Perry */ ?>

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
	
	<title>Caleb Sylvest |  The Band Perry</title>
	
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
		
			<h2>The Band Perry</h2>
			
			<div class="project-data">
			
				<ul>
					<li><b>Client:</b> The Band Perry</a></li>
					<li><b>Role:</b> Wireframe, Design, Theme</li>
					<li><b>URL:</b> <a class="link-underline" target="_blank" href="https://thefansperry.com/home">www.TheFansPerry.com</a></li>
				</ul>
			
			</div> <!-- end project-data -->
			
			<img class="portfolio-piece" src="<?php echo get_template_directory_uri(); ?>/assets/custom/images/The-Band-Perry-MacBook.jpg" alt="The-Band-Perry-MacBook" width="1000" height="667">
			
			<img class="portfolio-piece" src="<?php echo get_template_directory_uri(); ?>/assets/custom/images/The-Band-Perry-Music.jpg" alt="The-Band-Perry-Music" width="1000" height="750">
			
			<img class="portfolio-piece" src="<?php echo get_template_directory_uri(); ?>/assets/custom/images/The-Band-Perry-Legacy.jpg" alt="The-Band-Perry-Legacy" width="1000" height="1773">
			
			<img class="portfolio-piece" src="<?php echo get_template_directory_uri(); ?>/assets/custom/images/The-Band-Perry-Split.jpg" alt="The-Band-Perry-Split" width="1000" height="611">
			
			<div class="arrow-pager">
				<a href="/the-doors" title="The Doors" class="arrow arrow-left icon-alone">
					<span class="screen-reader-text">The Doors Merchandise by Caleb Sylvest</span>
				</a>
				<a href="/kip-moore" title="Kip Moore" class="arrow arrow-right icon-alone">
					<span class="screen-reader-text">Kip Moore by Caleb Sylvest</span>
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