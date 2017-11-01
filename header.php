<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title('&#8211;', true, 'left'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="google-site-verification" content="HJ8hMLJekYWmaI9m9kf4fo2SrZhLqvQ6Re2Ybitndbw" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://mattdowney.co" />
		<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/sharer.jpg" />

		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">

		<script src="https://use.fontawesome.com/3d3aa07ec0.js"></script>

		<!-- Global Site Tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-25954660-2"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-25954660-2');
		</script>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="wrap">
			<header>
				<?php get_template_part('includes/logo'); ?>
				<?php get_template_part('includes/nav-menu'); ?>
			</header>

