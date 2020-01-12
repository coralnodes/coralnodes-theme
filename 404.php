<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Coral_Nodes
 */

get_header();
?>
<div class="container-fullwidth is-clearfix">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<h1 style="text-align: center">404 Error</h1>
		<p style="text-align: center; margin-bottom: 1rem">Looks like the page you looked doesn't exist. But no problem. Try visiting our <a href="<?php echo home_url(); ?>">home page</a> or perform a search for what you were looking.</p>
		<?php get_search_form(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();