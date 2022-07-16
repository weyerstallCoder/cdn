<?php

/**
 * @author: Dennis Weyerstall
 */

//======================================================================
// advanced custom fields
//======================================================================

/* save fields as json to theme */
add_filter('acf/settings/save_json', 'theme_acf_json_save_point_function');
function theme_acf_json_save_point_function($path)
{
	$path = get_stylesheet_directory() . '/dir/acf';
	return $path;
}

/* load field from theme json */
add_filter('acf/settings/load_json', 'theme_acf_json_load_point_function');
function theme_acf_json_load_point_function($paths)
{
	unset($paths[0]);
	$paths[] = get_stylesheet_directory() . '/dir/acf';
	return $paths;
}

/* acf empty paragraph fix */
add_filter('acf_the_content', 'theme_remove_empty_tags_acf_function', 10, 1);
function theme_remove_empty_tags_acf_function($value)
{
	$tags = array(
		'<p>[' => '[',
		']</p>' => ']',
		']<br>' => ']',
		']<br />' => ']'
	);
	$content = apply_filters('the_content', $value);
	$content = strtr($content, $tags);
	return $content;
}

/* add options page */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Einstellungen',
		'menu_title'	=> 'Einstellungen',
		'menu_slug' 	=> 'dw-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url'		=> THEME_DIR_URI.'/assets/img/wpicon/settings-icon.svg',
	));
}



//======================================================================
// contact form 7
//======================================================================

/* remove cf7 ressources */
add_filter('wpcf7_load_js', '__return_false');
add_filter('wpcf7_load_css', '__return_false');

/* load cf7 ressourcen only on form page */
add_shortcode('cf7-add-sources', 'theme_cf7_add_sources_shortcode_function');
function theme_cf7_add_sources_shortcode_function($atts)
{
	if (function_exists('wpcf7_enqueue_scripts')) {
		wpcf7_enqueue_scripts();
	}
	if (function_exists('wpcf7_enqueue_styles')) {
		wpcf7_enqueue_styles();
	}
	return '';
}


//======================================================================
// yoast seo plugin
//======================================================================

/* remove html comments tag from theme */
add_action('wp_head', 'theme_remove_yoast_html_tag_function', ~PHP_INT_MAX);
function theme_remove_yoast_html_tag_function($o)
{
	ob_start(function ($o) {
		return preg_replace('/^\n?<!--.*?[Y]oast.*?-->\n?$/mi', '', $o);
	});
}


//======================================================================
// disable plugin updates
//======================================================================
add_filter( 'http_request_args', 'theme_prevent_update_check', 10, 2 );
function theme_prevent_update_check( $r, $url ) {
	if ( 0 === strpos( $url, 'http://api.wordpress.org/plugins/update-check/' ) ) {
		$my_plugin = plugin_basename( __FILE__ );
		$plugins = unserialize( $r['body']['plugins'] );
		unset( $plugins->plugins[$my_plugin] );
		unset( $plugins->active[array_search( $my_plugin, $plugins->active )] );
		$r['body']['plugins'] = serialize( $plugins );
	}
	return $r;
}