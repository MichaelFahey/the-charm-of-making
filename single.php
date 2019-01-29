<?php

get_header(); ?>

	<div id="primary" class="content-area clearfix template-single">
		<main id="main" class="site-main">

			<?php
			get_template_part( 'template-parts/headline' );
			get_template_part( 'template-parts/direction', 'rtl' );
			get_template_part( 'template-parts/sidebar', 'begin' );
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			}
			get_template_part( 'template-parts/sidebar', 'end' );

			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
