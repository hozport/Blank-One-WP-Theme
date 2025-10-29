<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Blank
 */

get_header();
?>

<div class="container">
	<h1><?php esc_html_e( '404 – Page Not Found', 'blank' ); ?></h1>
	<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'blank' ); ?></p>
	<?php get_search_form(); ?>
</div>

<?php
get_footer();