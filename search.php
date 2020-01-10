<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Coral_Nodes
 */

get_header();
?>
	<div class="container-1 is-clearfix">
		<header class="page-header">
			<h1 class="page-title-wrap">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'search results for: %s', 'coralnodes' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
		</header><!-- .page-header -->
		<div class="postcards-container">

		<?php if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

			<?php

			$aspect_percent = '56.25%';
			if(has_post_thumbnail()) {
				$thumbnail_img = get_the_post_thumbnail( null, 'medium_large' );
			}
			else {
				$thumbnail_img = '<img src="' . get_stylesheet_directory_uri() . '/assets/images/default-thumbnail.png" alt="CoralNodes">';
			}

			?>

			<div class="postcard">
				<div class="postcard-image" style="padding-bottom:<?= $aspect_percent ?>">
				<a href="<?= get_the_permalink() ?>"><?php echo $thumbnail_img ?></a>
				</div>
				
				<div class="postcard-title">
					<h2><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="postcard-excerpt">
					<p><?php echo substr(get_the_excerpt(), 0, 100) . '...'; ?></p>
				</div>
				<div class="postcard-meta">
					<span class="postcard-date"><?php the_date(); ?></span>
				</div>
			</div>

			<?php endwhile;
		endif;
		?>
		</div>
		<div class="post-navigation-container">
        <?php coralnodes_numeric_pagination(); ?>
    	</div>
	</div>

<?php
get_footer();
