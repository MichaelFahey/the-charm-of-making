<?php
/**
 * Template part for second part of sidebar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the-charm-of-making
 */

echo '</div>  <!-- (body classes) -->';

if( !( '' === get_theme_mod( 'sidebar_classes' ) ) ) {
	echo '<div  class="' . esc_attr( get_theme_mod( 'sidebar_classes' ) ) . '">';
} else {
	echo '<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-3" >';
}

?>

   <div class="sidebar-sticky">
      <div class="sidebar">
		   <div class="sidebar-debug" style="background:blue;color:white;position:fixed;top:60px;left:10px;">
            <small>
			  <div class="col-xs-12">
			  	   <div class="col-xs-6">
					   headerOffset: <span id="headerOffset"></span></br>
					   footerDepth: <span id="footerDepth"></span></br>
				   </div>
				   <div class="col-xs-6">
					   sidebarHeight: <span id="sidebarHeight"></span></br>
					   currentScroll: <span id="currentScroll"></span></br>
					   sidebarMarginTop: <span id="sidebarMarginTop"></span></br>
				   </div>
			   </div>
	         </small>
		   </div><!-- sidebar-debug -->
	      <div id="secondary" class="widget-area">
		      <?php dynamic_sidebar( 'sidebar-1' ); ?>
		   </div><!-- #secondary -->
	   </div><!-- .sidebar -->
	</div><!-- .sidebar-sticky -->
</div>   <!-- (sidebar_classes)  -->

