<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coral_Nodes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
	<div>
		<?php
		the_post_thumbnail(
			'full',
			array(
				'itemprop' => 'image',
				'alt' => the_title_attribute( 'echo=0' ),
			)
		);
		?>
	</div>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title" itemprop="headline name">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				coralnodes_posted_on();
				coralnodes_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="text">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'coralnodes' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
		?>
		<div class="post-author-bio">
			<div class="author-photo">
			<img src="https://cdn.coralnodes.com/wp-content/uploads/2019/06/profile-photo-1.jpg" alt="Abhinav R (Vishnu) - author at CoralNodes">
			</div>
			<div class="author-intro">
				<div class="author-intro-title">About the author</div>
				<p>Abhinav R (Vishnu) is a blogger with a keen interest in learning web trends and exploring the world of WordPress. Apart from that, he also has a passion for nature photography and travel.</p>
			</div>
		</div>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'coralnodes' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php coralnodes_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
