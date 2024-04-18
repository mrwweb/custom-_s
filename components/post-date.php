<?php
/**
 * The Publication Date of a post
 *
 * @package _s
 */

$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
}

$time_string = sprintf(
	$time_string,
	esc_attr( get_the_date( DATE_W3C ) ),
	esc_html( get_the_date() ),
	esc_attr( get_the_modified_date( DATE_W3C ) ),
	esc_html( get_the_modified_date() )
);

$posted_on = sprintf(
	/* translators: %s: post date. */
	esc_html_x( 'Posted on %s', 'post date', '_s' ),
	'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
);
?>
<span class="posted-on"><?php echo $posted_on; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
