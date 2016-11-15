<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title('&#8211;', true, 'left'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="google-site-verification" content="HJ8hMLJekYWmaI9m9kf4fo2SrZhLqvQ6Re2Ybitndbw" />
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
		<script src="/mint/?js" type="text/javascript"></script>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="wrap">
			<div class="header-wrapper">
				<header>
					<?php get_template_part('includes/logo'); ?>
					<?php get_template_part('includes/nav-menu'); ?>
				</header>
			</div> <!-- End .header-wrapper -->

			<!--<div class="spacer"></div>-->

