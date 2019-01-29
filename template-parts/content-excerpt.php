<?php
/**
 * Template part for displaying archive excerpt content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the-charm-of-making
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

	<div class="col-xs-12">
	   <div class="excerpt-content">

	<?php

	get_template_part( 'template-parts/featured-image', 'excerpt' );

	echo '<h2>' . get_the_title() . '</h2></br>';
	echo wp_kses_post( short_content( get_the_content() ) );

	echo '<div class="readmore">';
   global $post;
   $post_slug=$post->post_name;
	echo '   <a href="' . esc_url_raw( get_the_permalink()  ) . '">';
	echo '      Read More';
	echo '   </a>';
	echo '</div>';

	wp_link_pages(
		array(
			'before' => '<div class="page-links">Pages:',
			'after'  => '</div>',
		)
	);
	?>
	   </div><!-- .col-xs-12 -->
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses_post(
							/* translators: %s: Name of current post. Only visible to screen readers */
							'Edit <span class="screen-reader-text">%s</span>',
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
