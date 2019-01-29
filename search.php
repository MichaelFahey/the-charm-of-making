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

			<?php
			get_template_part( 'template-parts/direction', 'ltr' );
			echo '<div class="col-xs-12">' . "\r\n";
			if ( have_posts() ) {
			?>
			<header class="page-header">
				<h1 class="page-title">
					<?php echo 'Search Results for: <span>' . get_search_query() . '</span>'; ?>
				</h1>
			</header><!-- .page-header --> 

			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content', 'search' );
			}
			the_posts_navigation();

			} else {
				get_template_part( 'template-parts/content', 'none' );
			}
			echo '</div> <!-- col-xs-12 -->' . "\r\n";
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
