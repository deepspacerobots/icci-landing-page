<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Base meta tags -->
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="language" content="english" />

	<!-- Reassure the browser that we are mobile-friendly -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1">
	<meta name="HandheldFriendly" content="True">
	<meta name="view-transition" content="same-origin" />

	<?php wp_head(); ?>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>