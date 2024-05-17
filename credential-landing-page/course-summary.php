<?php

/**
 * Template Name: Landing Page - Course Summary
 */
require_once get_template_directory() . '/credential-landing-page/lib/functions.php';
?>
<?php get_template_part('/credential-landing-page/partials/header'); ?>
<?php get_template_part('/credential-landing-page/partials/nav'); ?>
<main class="layout">
	<div class="container-lg course-summary">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div>
</main>
<?php get_template_part('/credential-landing-page/partials/footer'); ?>