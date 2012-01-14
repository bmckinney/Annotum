<?php

/**
 * @package anno
 * This file is part of the Annotum theme for WordPress
 * Built on the Carrington theme framework <http://carringtontheme.com>
 *
 * Copyright 2008-2011 Crowd Favorite, Ltd. All rights reserved. <http://crowdfavorite.com>
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 */
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

// the_search_query uses echo not return, so buffer the output to store 
// in $s
ob_start();
the_search_query();

$s = ob_get_contents();

ob_end_clean()

?>

<form class="search" method="get" action="<?php echo esc_url(home_url()); ?>">
	<input type="text" name="s" value="<?php echo esc_html($s); ?>" placeholder="<?php _e('Search', 'anno'); ?>" class="type-text" />
	<button class="type-submit imr" type="submit"><?php _e('Search', 'anno'); ?></button>
</form>