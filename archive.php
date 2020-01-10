<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Web_Blog
 */

get_header();
?>

<div class="container-1 is-clearfix">
	<?php
	the_archive_title( '<h1 class="page-title-wrap">', '</h1>' );
	the_archive_description( '<div class="archive-description">', '</div>' );
	?>
    <div class="postcards-container">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
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

        
        <?php endwhile; ?>
    <?php endif; ?>
    </div><!--.postcards-container-->
    <div class="post-navigation-container">
        <?php coralnodes_numeric_pagination(); ?>
    </div>
</div>

<?php
get_footer();
