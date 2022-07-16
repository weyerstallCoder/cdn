<?php

/**
 * @author: Dennis Weyerstall
 */

//======================================================================
// misc
//======================================================================
add_theme_support('post-thumbnails', array ('news', 'aktionen', 'page', 'bild-story'));

//======================================================================
// last modified extension
//======================================================================

/* add kader shortcode column */
add_filter( 'manage_edit-kader_columns', 'theme_kader_shortcode_admin_column' );
function theme_kader_shortcode_admin_column($columns){
	if (current_user_can('administrator')) {
		$columns['kader-shortcode'] = 'Shortcode';
	}
	return $columns;
}

add_filter( 'manage_edit-kader_sortable_columns', 'theme_kader_shortcode_column' );
function theme_kader_shortcode_column($columns){
	if (current_user_can('administrator')) {
		$columns['kader-shortcode'] = '';
	}
	return $columns;
}

add_action('manage_kader_posts_custom_column', 'theme_kader_shortcode_admin_column_content', 10, 2);
function theme_kader_shortcode_admin_column_content($column_name, $post_id){
	if ('kader-shortcode' != $column_name) {
		return;
	}
	echo '<span class="shortcode"><input type="text" onfocus="this.select();" readonly="readonly" value="[kader id=&quot;'.$post_id.'&quot;]" class="large-text code"></span>';
}


/* add new column to post types */
add_filter('manage_edit-page_columns', 'theme_last_modified_admin_column');
//add_filter( 'manage_edit-NAME_columns', 'theme_last_modified_admin_column' );
function theme_last_modified_admin_column($columns){
	if (current_user_can('administrator')) {
		$columns['modified-last'] = 'Zuletzt bearbeitet';
	}
	return $columns;
}

/* make column sortable */
add_filter('manage_edit-page_sortable_columns', 'theme_sortable_last_modified_column');
//add_filter( 'manage_edit-NAME_sortable_columns', 'theme_sortable_last_modified_column' );
function theme_sortable_last_modified_column($columns){
	if (current_user_can('administrator')) {
		$columns['modified-last'] = 'modified';
	}
	return $columns;
}

/* output the modified data */
add_action('manage_pages_custom_column', 'theme_last_modified_admin_column_content', 10, 2);
//add_action( 'manage_NAME_posts_custom_column', 'theme_last_modified_admin_column_content', 10, 2 );
function theme_last_modified_admin_column_content($column_name, $post_id){
	if ('modified-last' != $column_name) {
		return;
	}
	$modified_date   = the_modified_date('d.m.Y - H:i:s');
	$modified_author = get_the_modified_author();
	echo $modified_date;
	echo '<br>';
	echo '<strong>' . $modified_author . '</strong>';
}


//======================================================================
// media settings
//======================================================================

/* set upload mime types */
add_filter('upload_mimes', 'theme_myme_types_function', 1, 1);
function theme_myme_types_function($mime_types)
{
	$mime_types['eps'] = 'eps';
	$mime_types['ico'] = 'ico';
	$mime_types['tif'] = 'tif';
	$mime_types['zip'] = 'zip';
	$mime_types['svg'] = 'svg';
	$mime_types['svg'] = 'image/svg+xml';
	$mime_types['vcf'] = 'text/x-vcard';
	$mime_types['doc'] = 'application/msword';
  $mime_types['docx'] = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
  $mime_types['dotx'] = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
	return $mime_types;
}

/* automatically set the image Title, Alt-Text, Caption & Description upon upload */
add_action('add_attachment', 'theme_set_image_meta_upon_image_upload');
function theme_set_image_meta_upon_image_upload($post_ID)
{
	if (wp_attachment_is_image($post_ID)) {

		$my_image_title = get_post($post_ID)->post_title;
		$my_image_title = preg_replace('%\s*[-_\s]+\s*%', ' ',  $my_image_title);
		$my_image_title = ucwords(strtolower($my_image_title));

		$my_image_meta = array(
			'ID'		=> $post_ID,			    // Specify the image (ID) to be updated
			'post_title'	=> $my_image_title,		// Set image Title to sanitized title
			'post_excerpt'	=> $my_image_title,		// Set image Caption (Excerpt) to sanitized title
			'post_content'	=> $my_image_title,		// Set image Description (Content) to sanitized title
		);

		update_post_meta($post_ID, '_wp_attachment_image_alt', $my_image_title);
		wp_update_post($my_image_meta);
	}
}


//======================================================================
// remove wp defaults
//======================================================================

/* remove core functions */
add_action('init', 'theme_remove_wp_defaults');
function theme_remove_wp_defaults()
{
	//remove all emoji support
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

	// remove admin bar
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'theme_admin_bar_comments_menu', 60);
	}
}

/* remove tinyMCE emoji support */
function theme_admin_bar_comments_menu($plugins)
{
	if (!is_array($plugins)) {
		return array();
	}
	return array_diff($plugins, array('wpemoji'));
}

/* remove xmlrpc support */
add_filter('xmlrpc_enabled', '__return_false');

/* disable wp auto update */
add_filter('auto_update_plugin', '__return_false');
add_filter('auto_update_theme', '__return_false');

/* hide admin update notifications */
add_action('admin_menu', 'theme_hide_wpnav_items');
function theme_hide_wpnav_items()
{
	remove_action('admin_notices', 'update_nag', 3);
	remove_menu_page('edit-comments.php');
}

/* hide admin plugin updates */
add_filter('site_transient_update_plugins', 'theme_filter_plugin_updates_function');
function theme_filter_plugin_updates_function($value)
{
	unset($value->response['acf-theme-code-pro/acf_theme_code_pro.php']);
	return $value;
}

/* remove toolbar for all loggedin users */
add_action('after_setup_theme', 'theme_remove_admin_bar');
function theme_remove_admin_bar()
{
	if (current_user_can('editor') && is_admin()) {
		show_admin_bar(false);
	}
}

/* disable user theme color picker */
remove_action('admin_color_scheme_picker', 'admin_color_scheme_picker');
add_action('user_register', 'theme_default_sheme_function');
function theme_default_sheme_function($user_id)
{
	$args = array('ID' => $user_id, 'admin_color' => 'default');
	wp_update_user($args);
}

/* remove dashboard default items */
add_action('wp_dashboard_setup', 'theme_remove_dashboard_widgets_function');
function theme_remove_dashboard_widgets_function()
{
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
	remove_meta_box('dashboard_primary', 'dashboard', 'normal');
	remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
	remove_action('welcome_panel', 'wp_welcome_panel');
	remove_meta_box('dashboard_primary', 'dashboard', 'side');
	remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
	remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}

/* disable settings on admin init */
add_action('admin_init', 'theme_admin_init_function');
function theme_admin_init_function()
{
	//get post types
	$post_types = get_post_types();

	//remove comments in wp admin
	foreach ($post_types as $post_type) {
		if (post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}

	//disable dashboard drag an drop
	if (!current_user_can('manage_options')) {
		wp_deregister_script('postbox');
	}
}

/* disable comments in frontend */
add_filter('comments_open', 'theme_disable_comments_status', 20, 2);
add_filter('pings_open', 'theme_disable_comments_status', 20, 2);
function theme_disable_comments_status()
{
	return false;
}

/* hide existing comments */
add_filter('comments_array', 'theme_disable_comments_hide_existing_comments', 10, 2);
function theme_disable_comments_hide_existing_comments($comments)
{
	$comments = array();
	return $comments;
}

/* remove wp-version from html code */
add_filter('the_generator', 'remove_wp_version_function');
function remove_wp_version_function()
{
	return '';
}


//======================================================================
// wp admin theme
//======================================================================

/* add login header url */
add_filter('login_headerurl', 'theme_login_logo_url_function');
function theme_login_logo_url_function($url)
{
	return THEME_OWNER_URL;
}

/* replace admin footer claim */
add_filter('admin_footer_text', 'theme_admin_footer_function');
function theme_admin_footer_function()
{
	echo '<span id="footer-note">Entwickelt durch <a href="' . THEME_OWNER_URL . '" target="_blank" rel="nofollow">' . THEME_OWNER_NAME . '</a>.</span>';
}

/* admin layout style */
add_action('admin_head', 'theme_admin_style');
function theme_admin_style()
{
?><style type="text/css">
		.column-modified-last {
			text-align: left;
			width: 155px !important;
			overflow: hidden;
		}
		.column-kader-shortcode{
			width: 20%;
		}
		body #wpadminbar #wp-admin-bar-wp-logo>.ab-item .ab-icon:before {
			background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/wpicon/cms-icon.png');
			background-repeat: no-repeat;
			background-position: top left;
			content: '';
			height: 20px;
    	width: 20px;
			display: block;
		}
		#wpadminbar #wp-admin-bar-wp-logo>.ab-item .ab-icon {
			width: 26px;
		}
		#wp-admin-bar-new-content,
		#wp-admin-bar-comments,
		#wp-admin-bar-updates,
		#footer-thankyou {
			display: none;
		}
		body #wp-admin-bar-wp-logo a {
			pointer-events: none;
			cursor: none;
		}
		body #wp-admin-bar-wp-logo-default,
		body #wp-admin-bar-wp-logo-external {
			display: none !important;
		}
		#acf-upgrade-notice {
			display: none !important;
		}
	</style><?php
				}

				/* login layout styles */
				add_action('login_enqueue_scripts', 'theme_login_layout_function');
				function theme_login_layout_function()
				{
					?><style type="text/css">
		.login h1 a {
			background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/wpicon/cms-logo.png') !important;
			height: 34px !important;
			width: 118px !important;
			background-size: 100% !important;
		}
	</style><?php
				}


//======================================================================
// tinymce shortcode
//======================================================================
add_action( 'init', 'custom_editor_buttons' );
function custom_editor_buttons() {
    add_filter( "mce_external_plugins", "custom_editor_add_buttons" );
    add_filter( 'mce_buttons', 'custom_editor_register_buttons' );
}
function custom_editor_add_buttons( $plugin_array ) {
		$plugin_array['youtube_embed_block'] = get_template_directory_uri() . '/src/admin/youtube-shortcode-btn.js';
		$plugin_array['iframe_embed_block'] = get_template_directory_uri() . '/src/admin/iframe-shortcode-btn.js';
		$plugin_array['quote_block'] = get_template_directory_uri() . '/src/admin/quote-shortcode-btn.js';
    return $plugin_array;
}
function custom_editor_register_buttons( $buttons ) {
	array_push( $buttons, 'youtube_embed_block');
	array_push( $buttons, 'iframe_embed_block');
	array_push( $buttons, 'quote_block');
	return $buttons;
}



/*function add_class_attachment_link($html){
	$postid = get_the_ID();
	$html = str_replace('<a','<a data-fslightbox="gallery"',$html);
	return $html;
}
add_filter('wp_get_attachment_link','add_class_attachment_link',10,1);*/


//======================================================================
// search marker
//======================================================================
add_filter('the_excerpt', 'wps_highlight_results');
add_filter('the_title', 'wps_highlight_results');
function wps_highlight_results($text){
	if(is_search()){
		$sr = get_query_var('s');
		$keys = explode(" ",$sr);
		$text = preg_replace('/('.implode('|', $keys) .')/iu', '<mark>'.$sr.'</mark>', $text);
	}
	return $text;
}