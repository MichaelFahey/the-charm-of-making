<?php
/**
 * Template Name: Page No Sidebar
 *
 * @package WordPress
 * @subpackage TheCharmOfMaking
 */

get_header(); ?>

	<div id="primary" class="content-area clearfix template-page-no-sidebar">
		<main id="main" class="site-main">

			<?php

			echo '<div class="col-xs-12">' . "\r\n";

			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/headline' );
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			}

			echo '</div> <!-- col-xs-12 -->' . "\r\n";

			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
