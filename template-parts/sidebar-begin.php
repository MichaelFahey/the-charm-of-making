<?php
/**
 * Template part for first part of sidebar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the-charm-of-making
 */

if ( ! ( '' === get_theme_mod( 'sidebar_body_classes' ) ) ) {
	echo '<div class="' . esc_attr( get_theme_mod( 'sidebar_body_classes' ) ) . '">';
} else {
	echo '<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xl-9">';
}
