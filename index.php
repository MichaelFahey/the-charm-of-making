<?php
/**
 * Template Name: Page Sidebar Right
 *
 * @package WordPress
 * @subpackage TheCharmOfMaking
 */

get_header(); ?>

	<div id="primary" class="content-area clearfix template-index">
		<main id="main" class="site-main">

			<?php

			echo '<div class="col-xs-12">' . "\r\n";

			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/headline' );
				get_template_part( 'template-parts/direction', 'rtl' );

				get_template_part( 'template-parts/sidebar', 'begin' );
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
				get_template_part( 'template-parts/sidebar', 'end' );
			}

			echo '</div> <!-- col-xs-12 -->' . "\r\n";

			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
