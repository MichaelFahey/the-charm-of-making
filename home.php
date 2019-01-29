<?php
/**
 * Default archive page template
 *
 * @package WordPress
 * @subpackage TheCharmOfMakingCatherineRevland
 */

get_header(); ?>

	<div id="primary" class="content-area clearfix template-home">
		<main id="main" class="site-main archive">

			<?php
			get_template_part( 'template-parts/headline' );
			get_template_part( 'template-parts/direction', 'rtl' );
			get_template_part( 'template-parts/sidebar', 'begin' );

			$post_count = 0;
			echo '<h1>Archive</h1>' . "\r\n";
			echo '</br>' . "\r\n";
			echo '</br>' . "\r\n";

			while ( have_posts() ) {
				the_post();
				echo '<div class="col-xs-12">' . "\r\n";
				echo '   <div class="clearfix">' . "\r\n";

				if ( 0 === $post_count ) {
					echo '      <div class="post clearfix">' . "\r\n";
					get_template_part( 'template-parts/content', 'post' );
					echo '      </div>' . "\r\n";
				} else {
					echo '      <div class="excerpt clearfix">' . "\r\n";
					get_template_part( 'template-parts/content', 'excerpt' );
					echo '      </div>' . "\r\n";
				}

				echo '   </div>' . "\r\n";
				echo '</div>' . "\r\n";

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
				$post_count++;
			}
			get_template_part( 'template-parts/sidebar', 'end' );

			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
