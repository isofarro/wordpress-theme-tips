<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB" xml:lang="en-GB">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php 
		bloginfo('name'); 
		if ( is_single() ) { 
			echo ' - ';
		}
		wp_title(); 
	?></title>
	<meta name="generatorX" content="WordPress <?php bloginfo('version'); ?>"/> <!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body class="site-1">
	<ul id="y-network">
		<li class="site-1"><a href="/">Tips Network</a></li>		
		<li class="site-2"><a href="http://www.accessibilitytips.com/">Accessibility</a></li>		
		<li class="site-3"><a href="http://www.internationalisationtips.com/">Internationalisation</a></li>		
		<li class="site-4"><a href="http://www.webstandardstips.com/">Web Standards</a></li>		
	</ul>
	<div id="y-page">
		<div id="y-head">
			<?php if ( is_home() || is_front_page() ): ?>
			<h1><?php bloginfo('name'); ?></h1>
			<?php else: ?>
			<a class="site" href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a>
			<?php endif; ?>
			<p><?php bloginfo('description'); ?></p>
		</div>
	