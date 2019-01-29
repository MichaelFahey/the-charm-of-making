<?php
/**
 * Template part for headline feature
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the-charm-of-making
 */

global $post;
if ( is_object( $post ) ) {
	$cur_post_slug = $post->post_name;

	$headline_slug = $cur_post_slug . '-headline';
	$headline_args = array(
		'name'      => $headline_slug,
		'post_type' => 'any',
	);

	$headline = new WP_Query( $headline_args );

	if ( $headline->have_posts() ) {
		echo '<div class="page-headline">' . "\n\r";

		while ( $headline->have_posts() ) {
			$headline->the_post();
			get_template_part( 'template-parts/content', 'bare' );
		}

		echo '</div> <!-- .page-headline -->' . "\n\r";
	}
}
wp_reset_postdata();

