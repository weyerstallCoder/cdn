<?php

/**
 * @author: Dennis Weyerstall
 */

//======================================================================
// const & imports
//======================================================================

/* define const */
define('THEME_DIR_PATH', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());

define('THEME_OWNER_URL', 'https://www.dennis-weyerstall.de/');
define('THEME_OWNER_NAME', 'Dennis Weyerstall');

/* include wp, plugin & theme config */
include(locate_template('dir/wp_core.php'));
include(locate_template('dir/wp_theme.php'));
include(locate_template('dir/wp_plugins.php'));
include(locate_template('dir/wp_shortcodes.php'));

/* atomic functions */
include(locate_template('dir/wp_template_functions.php'));
include(locate_template('dir/wp_template_hooks.php'));
include(locate_template('dir/wp_text_filters.php'));