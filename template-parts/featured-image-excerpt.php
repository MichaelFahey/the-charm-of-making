<?php
/**
 * Template part which inserts the featured image for an excerpt template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the-charm-of-making
 */

if ( has_post_thumbnail() ) {
	the_post_thumbnail( 'medium' );
} else {
   echo '&nbsp;';
}
