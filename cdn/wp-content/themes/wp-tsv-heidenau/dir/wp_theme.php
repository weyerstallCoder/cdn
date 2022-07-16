<?php

/**
 * @author: Dennis Weyerstall
 */


//======================================================================
//  template config
//======================================================================

//-----------------------------------------------------
// navigation
//-----------------------------------------------------
register_nav_menus(array(
	'mainmenu' => 'Hauptmenü',
	'footermenu' => 'Fußzeilenmenü',
	'socialmenu' => 'Socialmenü',
));

//-----------------------------------------------------
// widgets
//-----------------------------------------------------
/*
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name' => 'Seitenleiste',
		'description'   => '',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
		'id' => 'left-sidebar'
	));
}
*/


//-----------------------------------------------------
// Menu groups
//-----------------------------------------------------
function theme_menu_group(){
	/** Group TSV content */
	add_menu_page(
		'TSV Inhalte',
		'TSV Inhalte',
		'read',
		'tsv-content-menu-section',
		'',
		'dashicons-tsv-shield',
		2
	);
}
add_action('admin_menu', 'theme_menu_group');

/** admin styling */
add_action('admin_head', 'theme_menu_group_favicon');
function theme_menu_group_favicon()
{
	echo '<style>
    .dashicons-tsv-shield{
    	background-repeat: no-repeat;
			background-position: center;
			background-size:20px 20px;
			opacity: 0.7;
			background-image: url("' . THEME_DIR_URI . '/assets/img/wpicon/tsv-shield.svg");
    }
    </style>';
}


//-----------------------------------------------------
// custom post types
//-----------------------------------------------------
function theme_post_type() {
	/** aktionen */
	register_post_type( 'aktionen',
		array(
			'labels' => array(
				'name' => 'Aktion',
				'singular_name' => 'Aktion',
				'menu_name' => 'Aktionen',
				'all_items' => 'Aktionen',
				'view_item' => 'Aktion ansehen',
				'add_new_item' => 'Neue Aktion hinzufügen',
				'add_new' => 'Neu hinzufügen',
				'edit_item' => 'Aktion bearbeiten',
				'update_item' => 'Aktion aktualisieren',
				'not_found' => 'Keine Aktionen gefunden.',
				'not_found_in_trash' => 'Keine Aktionen gefunden.',
			),
			'menu_icon' => 'dashicons-megaphone',
			'public' => true,
			'menu_position' => 7,
			'has_archive' => true,
			'show_ui' => true,
			'show_in_menu' => 'tsv-content-menu-section',
			'supports' => array(
				'title',
				'editor',
				'thumbnail')
		)
	);

	/** news */
	register_post_type( 'news',
		array(
			'labels' => array(
				'name' => 'News',
				'singular_name' => 'News',
				'menu_name' => 'News',
				'all_items' => 'News',
				'view_item' => 'News ansehen',
				'add_new_item' => 'Neue News hinzufügen',
				'add_new' => 'Neu hinzufügen',
				'edit_item' => 'News bearbeiten',
				'update_item' => 'News aktualisieren',
				'not_found' => 'Keine News gefunden.',
				'not_found_in_trash' => 'Keine News gefunden.',
			),
			'menu_icon' => 'dashicons-format-aside',
			'public' => true,
			'menu_position' => 8,
			'has_archive' => true,
			'show_ui' => true,
			'show_in_menu' => 'tsv-content-menu-section',
			'supports' => array(
				'title',
				'editor',
				'thumbnail')
		)
	);

	/** votings */
	register_post_type( 'voting',
		array(
			'labels' => array(
				'name' => 'Voting',
				'singular_name' => 'Voting',
				'menu_name' => 'Votings',
				'all_items' => 'Votings',
				'view_item' => 'Voting ansehen',
				'add_new_item' => 'Neues Voting hinzufügen',
				'add_new' => 'Neu hinzufügen',
				'edit_item' => 'Voting bearbeiten',
				'update_item' => 'Voting aktualisieren',
				'not_found' => 'Keine Votings gefunden.',
				'not_found_in_trash' => 'Keine Votings gefunden.',
			),
			'menu_icon' => 'dashicons-chart-pie',
			'public' => true,
			'menu_position' => 9,
			'has_archive' => true,
			'show_ui' => true,
			'show_in_menu' => 'tsv-content-menu-section',
			'supports' => array(
				'title',
				'editor')
		)
	);

	/** spielberichte */
	register_post_type( 'spielbericht',
		array(
			'labels' => array(
				'name' => 'Spielbericht',
				'singular_name' => 'Spielbericht',
				'menu_name' => 'Spielberichte',
				'all_items' => 'Spielberichte',
				'view_item' => 'Spielbericht ansehen',
				'add_new_item' => 'Neuen Spielbericht hinzufügen',
				'add_new' => 'Neu hinzufügen',
				'edit_item' => 'Spielbericht bearbeiten',
				'update_item' => 'Spielbericht aktualisieren',
				'not_found' => 'Keine Spielberichte gefunden.',
				'not_found_in_trash' => 'Keine Spielberichte gefunden.',
			),
			'menu_icon' => 'dashicons-format-chat',
			'public' => true,
			'menu_position' => 9,
			'has_archive' => true,
			'show_ui' => true,
			'show_in_menu' => 'tsv-content-menu-section',
			'supports' => array(
				'title',
				'editor')
		)
	);
	register_taxonomy(
		'mannschaft',
		'spielbericht',
		array(
			'hierarchical' => true,
			'labels' => array(
				'name' => 'Mannschaft',
				'singular_name' => 'Mannschaft',
				'all_items' => 'Alle Mannschaften',
				'edit_item' => 'Mannschaft bearbeiten',
				'update_item' => 'Mannschaft aktualisieren',
				'add_new_item' => 'Mannschaft hinzufügen',
				'menu_name' => 'Mannschaft',
				'not_found' => 'Keine Mannschaft gefunden',
			),
			'query_var' => true
		)
	);

	/** bild storys */
	register_post_type( 'bild-story',
		array(
			'labels' => array(
				'name' => 'Bild-Storys',
				'singular_name' => 'Bild-Story',
				'menu_name' => 'Bild-Storys',
				'all_items' => 'Bild-Storys',
				'view_item' => 'Bild-Story ansehen',
				'add_new_item' => 'Neuen Bild-Story hinzufügen',
				'add_new' => 'Neu hinzufügen',
				'edit_item' => 'Bild-Story bearbeiten',
				'update_item' => 'Bild-Story aktualisieren',
				'not_found' => 'Keine Bild-Storys gefunden.',
				'not_found_in_trash' => 'Keine Bild-Storys gefunden.',
			),
			'menu_icon' => 'dashicons-format-gallery',
			'public' => true,
			'menu_position' => 9,
			'has_archive' => true,
			'show_ui' => true,
			'show_in_menu' => 'tsv-content-menu-section',
			'supports' => array(
				'title',
				'thumbnail')
		)
	);

	/** Kader */
	register_post_type( 'kader',
		array(
			'labels' => array(
				'name' => 'Kader',
				'singular_name' => 'Kader',
				'menu_name' => 'Kader',
				'all_items' => 'Kader',
				'view_item' => 'Kader ansehen',
				'add_new_item' => 'Neuen Kader hinzufügen',
				'add_new' => 'Neu hinzufügen',
				'edit_item' => 'Kader bearbeiten',
				'update_item' => 'Kader aktualisieren',
				'not_found' => 'Keinen Kader gefunden.',
				'not_found_in_trash' => 'Keinen Kader gefunden.',
			),
			'public' => true,
			'menu_position' => 10,
			'has_archive' => false,
			'show_ui' => true,
			'show_in_menu' => 'tsv-content-menu-section',
			'supports' => array(
				'title')
		)
	);
}
add_action( 'init', 'theme_post_type' );
flush_rewrite_rules( false );


//======================================================================
//  styles & scripts
//======================================================================

//-----------------------------------------------------
// registration
//-----------------------------------------------------
add_action('init', 'register_theme_sources_function');
function register_theme_sources_function()
{

	/* fontawesome cdn */
	wp_register_style('fontawesome-style','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css',[],1,'all');

	/* swiper.js cdn */
	wp_register_style('swiper-style','https://unpkg.com/swiper@8/swiper-bundle.min.css',[],1,'all');
	wp_register_script('swiper-script','https://unpkg.com/swiper@8/swiper-bundle.min.js',['jquery'],1,true);

	/* codyhouse shedule template */
	wp_register_style('shedule-style', THEME_DIR_URI . '/dist/shedule-template-style.css',[],1,'all');
	wp_register_script('shedule-util', THEME_DIR_URI . '/dist/shedule-template-util.js',[],1,true);
	wp_register_script('shedule-main', THEME_DIR_URI . '/dist/shedule-template-main.js',[],1,true);

	/* fs lightbox */
	wp_register_script('fslightbox', THEME_DIR_URI . '/dist/fslightbox.js',[],1,'all');

	/* fs lightbox */
	wp_register_script('pure-js', THEME_DIR_URI . '/dist/pure.min.js',[],1,'all');

	/* main app style */
	wp_register_style('main-app-style',THEME_DIR_URI . '/dist/app.css',[],1,'all');

	/* main app script */
	wp_register_script('app',THEME_DIR_URI . '/dist/app.js',['jquery'],1,true);
}


//-----------------------------------------------------
// set sources
//-----------------------------------------------------
add_action('wp_enqueue_scripts', 'enqueue_theme_sources_function');
function enqueue_theme_sources_function()
{

	/* set jquery to footer */
	wp_dequeue_script('jquery');
	wp_dequeue_script('jquery-core');
	wp_dequeue_script('jquery-migrate');
	wp_enqueue_script('jquery', false, array(), false, true);
	wp_enqueue_script('jquery-core', false, array(), false, true);
	wp_enqueue_script('jquery-migrate', false, array(), false, true);

	/* remove gutenberg block css */
	wp_dequeue_style('wp-block-library');


	/* enqueu sources by mode */
	if (is_user_logged_in()) {
	} else {
	}

	/* styles */
	wp_enqueue_style('fontawesome-style');
	wp_enqueue_style('main-app-style');

	/* scripts */
	wp_enqueue_script('app');
	//wp_enqueue_script('fslightbox');
}

//-----------------------------------------------------
// remove wp core
//-----------------------------------------------------
add_action('wp_footer', 'theme_deregister_scripts_function');
function theme_deregister_scripts_function()
{
	wp_deregister_script('wp-embed');
}


//======================================================================
//  filters
//======================================================================

/* enable shortcode run in navigation */
add_filter('wp_nav_menu_items', 'do_shortcode');



//======================================================================
//  tinymce config
//======================================================================
/* remove tinymce buttons */
add_filter('mce_buttons_2', 'wdk_mce_formats');
function wdk_mce_formats($formats)
{
	array_unshift($formats, 'styleselect');
	return $formats;
}

/* add custom styling */
add_action('init', 'wdk_theme_add_editor_styles');
function wdk_theme_add_editor_styles()
{
	add_editor_style('src/admin/tinymce-style.css');
}


/* tinymce formats */
add_filter('tiny_mce_before_init', 'wdk_mce_before_init_insert_formats');
function wdk_mce_before_init_insert_formats($init_array)
{
	$style_formats = array(
		array(  
			'title' => 'Schriftgrößen',
			'items' => array(
				array(
					'title' => 'H-Mega',
					'selector' => 'h1,h2,h3,p',
					'classes' => 'h-mega'
				),
				array(
					'title' => 'H1',
					'selector' => 'h2,h3,h4,p',
					'classes' => 'h1'
				),
			),
		),
		array(  
			'title' => 'Schrift-Styles',
			'items' => array(
				array(
					'title' => 'Bold',
					'inline' => 'span',
					'classes' => 'fw-bold',
				),
				array(
					'title' => 'Semi-Bold',
					'inline' => 'span',
					'classes' => 'fw-semibold',
				),
				array(
					'title' => 'Medium',
					'inline' => 'span',
					'classes' => 'fw-medium',
				),
				array(
					'title' => 'Uppercase',
					'inline' => 'span',
					'classes' => 'text-uppercase',
				),
			),
		),
		array(  
			'title' => 'Schrift-Visuals',
			'items' => array(
				array(
					'title' => 'Seperator (unten)',
					'selector' => 'h1,h2,h3',
					'classes' => 'hb-seperator'
				),
				array(
					'title' => 'Badge (hellblau)',
					'selector' => 'p,h1,h2,h3,h4',
					'classes' => 'badge border mb-2 rounded-0 text-uppercase text-mini fw-bold border-secondary text-secondary'
				),
			),
		),
		array(  
			'title' => 'Listen',
			'items' => array(
				array(
					'title' => 'Liste unterstrichen',
					'selector' => 'ul',
					'classes' => 'lst-border-bottom'
				),
				array(
					'title' => 'Liste angleichen',
					'selector' => 'ul',
					'classes' => 'lst-normal-size'
				),
			),
		),
		array(  
			'title' => 'Buttons',
			'items' => array(
				array(
					'title' => 'Button gelb',
					'selector' => 'a',
					'classes' => 'btn btn-lg ls-2 btn-warning rounded-1-min d-block fw-bold text-uppercase text-dark fs-6 mt-5'
				),
			),
		),
	);
	$init_array['style_formats'] = json_encode($style_formats);
	return $init_array;
}


//======================================================================
//  misc filter & actions
//======================================================================
/**
 * add css class to posts pagination
 */
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="btn btn-lg ls-2 btn-primary rounded-1-min fw-bold text-uppercase text-white fs-6"';
}