<?php
/*
Template Name: テーマのヘッダー
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<?php if( is_front_page() ): ?><title><?php bloginfo( 'name' ); ?></title>
		<?php elseif( is_archive() ): ?><title><?php echo get_the_archive_title(); ?>｜<?php bloginfo( 'name' ); ?></title>
		<?php else: ?><title><?php the_title(); ?>｜<?php bloginfo( 'name' ); ?></title><?php endif; ?>
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
		<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php /*
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/sidr/jquery.sidr.light.min.css" type="text/css" media="screen" />
*/ ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<?php /*
		<script src="<?php bloginfo('template_directory'); ?>/sidr/jquery.sidr.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/ah/jQueryAutoHeight.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/scroll/jquery.slimscroll.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/autoexpand/jquery.autoexpand.js"></script>
*/ ?>
		<script src="https://unpkg.com/flickity@1.1/dist/flickity.pkgd.min.js"></script>
		<?php wp_head(); ?>
	</head>
	<body>
	<header>
	</header>
