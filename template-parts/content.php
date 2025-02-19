<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _mrw
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'flow' ); ?>>
	<header class="page-header flow is-layout-constrained">
		<?php
		the_title( '<h1 class="page-title">', '</h1>' );
		get_template_part( 'components/post-meta', get_post_type() );
		?>
	</header>
	<div class="page-content is-root-container is-layout-constrained">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', '_mrw' ),
					[
						'span' => [
							'class' => [],
						],
					]
				),
				wp_kses_post( get_the_title() )
			)
		);
		?>
	</div>
	
	<?php get_template_part( 'components/post-footer', get_post_type(), [ 'class' => 'page-footer is-layout-constrained' ] ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
