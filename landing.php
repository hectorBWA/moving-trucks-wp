<?php
/**
 * The template for displaying all pages
 * Template Name: Landing Template
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package whc-moving
 */

get_header();
?>

	<div id="primary" class="content-area">
    <?php the_content(); ?>
	</div><!-- #primary -->

<?php

get_footer();
