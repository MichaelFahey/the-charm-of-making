<?php
/**
 * Template part for first part of sidebar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the-charm-of-making
 */

if ( has_post_thumbnail() ) {
	echo '<div class="col-xs-12 rightfloat">';
				the_post_thumbnail( 'full' );
			echo '&nbsp;';
	echo '</div>';
}
