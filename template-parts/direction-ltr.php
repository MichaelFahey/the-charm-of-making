<?php
/**
 * Set up css to lay out left to right
 *
 * @package WordPress
 * @subpackage TheCharmOfMaking
 */

?>

<style type="text/css">
	@media (min-width: 768px) {
		.site-main > [class^="col-"] {
			float:right;
		}
		.widget-area {
			float:left;
		}
	}
</style>
