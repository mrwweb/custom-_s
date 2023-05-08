<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'is-layout-constrained' ); ?>>
	<header class="entry-header flow">
		<?php
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				_s_posted_on();
				_s_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php _s_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php
		the_excerpt();
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php _s_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
