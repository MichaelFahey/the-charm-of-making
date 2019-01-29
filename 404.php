<?php
/**
 * Standard implementation of page.php
 *
 * @package WordPress
 * @subpackage TheCharmOfMaking
 */

get_header(); ?>

	<div id="primary" class="content-area clearfix">
		<main id="main" class="site-main">

			<div class="col-xs-12">

				<p><?php esc_html( 'Nothing was found at this location.' ); ?></p>

			<?php
				get_search_form();
			echo '</div> <!-- col-xs-12 -->' . "\r\n";
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
