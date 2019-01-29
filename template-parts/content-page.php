<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the-charm-of-making
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  	<div class="entry-content">
   	<?php

  		get_template_part( 'template-parts/featured-image' );
   	the_content();
  		wp_link_pages(
   		array(
	   		'before' => '<div class="page-links">Pages:',
		   	'after'  => '</div>',
  			)
   	);
  	?> 
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

