<?php
/**
 * Set up css to lay out right to left
 *
 * @package WordPress
 * @subpackage TheCharmOfMaking
 */

?>

<style type="text/css">
	@media (min-width: 768px) {
		.site-main > [class^="col-"] {
			float:left;
		}
		.widget-area {
			float:right;
		}
	}
</style>
