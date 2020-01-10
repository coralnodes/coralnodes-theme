<?php
get_header();
?>
<div class="container-1">

    <div class="postcards-container is-clearfix">
    <?php if(have_posts()) : ?>
        <?php 
        while(have_posts()) : 
            the_post(); 
            $cats = get_the_tags(); 
        ?>
        <?php
        $aspect_percent = '56.25%';
        if(has_post_thumbnail()) {

            $thumbnail_img = get_the_post_thumbnail( null, 'thumbnail', [ 'sizes' => '(min-width: 1080px) 360px'] );
        }
        else {
            $thumbnail_img = '<img src="' . get_stylesheet_directory_uri() . '/assets/images/default-thumbnail.png" alt="CoralNodes">';
        }
        
        ?>
        
        <article class="postcard">
            <div class="postcard-top">
                <div class="postcard-image" style="padding-bottom:<?= $aspect_percent ?>">
                <a href="<?= get_the_permalink() ?>"><?php echo $thumbnail_img ?></a>
                </div>
                <div class="postcard-cat">
                    <a href="<?= get_tag_link($cats[0]->term_id) ?>"><span><?= $cats[0]->name ?></span></a>
                </div>
            </div>
            <div class="postcard-title">
                <h2><a href="<?= get_the_permalink() ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="postcard-excerpt">
                <p><?php echo substr(get_the_excerpt(), 0, 160) . '...'; ?></p>
            </div>
            <div class="postcard-meta">
                <span class="postcard-date"><?php echo get_the_date(); ?></span>
            </div>
        </article>
        
        <?php endwhile; ?>
    <?php endif; ?>
    </div><!--.postcards-container-->
    <div class="post-navigation-container">
        <?php coralnodes_numeric_pagination(); ?>
    </div>
</div>

<?php
get_footer();