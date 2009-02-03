<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB" xml:lang="en-GB">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php 
		wp_title(' &mdash; ', true, 'right'); 
		bloginfo('name'); 
	?></title>
	<meta name="generatorX" content="WordPress <?php bloginfo('version'); ?>"/> <!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php blog
info('atom_url'); ?>" />	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<?php
	$sites = array(
		'www.frontendtips.com' 					=> 'site-1',
		'www.accessibilitytips.com' 			=> 'site-2',
		'www.internationalisationtips.com' 	=> 'site-3',
		'www.webstandardstips.com' 			=> 'site-4'
	);

	$url    = get_bloginfo('url');
	$domain = parse_url($url, PHP_URL_HOST);
	
	$site = 'site-2';
	if ($domain && !empty($sites[$domain])) {
		$site = $sites[$domain];
	}
?>
<body class="<?php echo $site; ?>">
	<ul id="y-network">
		<li class="site-1"><a href="http://www.frontendtips.com/">Frontend</a></li>		
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
		<div id="y-search">		
			<?php get_search_form(); ?>
		</div>
	