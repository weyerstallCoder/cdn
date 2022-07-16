<?php

/**
 * @author: Dennis Weyerstall
 */

/* define const */
define('ATOMIC', 'atomic');
define('MOLECULES', ATOMIC.'/molecules');
define('ORGANISMS', ATOMIC.'/organisms');
define('TEMPLATES', ATOMIC.'/templates');

if ( ! function_exists( 'organism_card_vertical_atomic' ) ) {

	/**
	 * Display vertical cards
	 */
	function organism_card_vertical_atomic( $args = array() ) {
    $defaults = array(
      'class_card' => false,
      'class_ratio' => 'ratio-4x3',
      'class_icon' => false,
      'class_sqaure_meta' => 'fs-4',
      'class_title_tag' => 'h3',
      'date_title' => false,
      'badge_title' => false,
      'badge_url' => false,
      'main_title' => false,
      'main_url' => false,
      'main_image' => false,
      'meta_big_number' => false,
      'meta_label' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/card-vertical.php'));
	}
}

if ( ! function_exists( 'organism_card_horizontal_atomic' ) ) {

	/**
	 * Display horizontal cards
	 */
	function organism_card_horizontal_atomic( $args = array() ) {
    $defaults = array(
      'class_card' => false,
      'badge_title' => false,
      'main_title' => false,
      'main_image' => false,
      'main_text' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/card-horizontal.php'));
	}
}

if ( ! function_exists( 'organism_card_overlay_atomic' ) ) {

	/**
	 * Display overlay cards
	 */
	function organism_card_overlay_atomic( $args = array() ) {
    $defaults = array(
      'class_center' => false,
      'tag_title' => 'h3',
      'date_title' => false,
      'badge_title' => false,
      'badge_url' => false,
      'main_title' => false,
      'main_url' => false,
      'main_image' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/card-overlay.php'));
	}
}

if ( ! function_exists( 'organism_card_action_atomic' ) ) {

	/**
	 * Display action cards
	 */
	function organism_card_action_atomic( $args = array() ) {
    $defaults = array(
      'class_card' => false,
      'class_button_color' => 'btn-warning',
      'attr_value' => false,
      'main_title' => false,
      'badge_title' => false,
      'main_url' => false,
      'button_label' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/card-action.php'));
	}
}

if ( ! function_exists( 'organism_card_vote_atomic' ) ) {

	/**
	 * Display vote cards
	 */
	function organism_card_vote_atomic( $args = array() ) {
    $defaults = array(
      'class_border_width' => 'border-4',
      'class_icon' => 'fa-solid fa-chart-simple',
      'main_title' => false,
      'main_url' => false,
      'main_image' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/card-vote.php'));
	}
}

if ( ! function_exists( 'organism_card_ratio_shadow_atomic' ) ) {

	/**
	 * Display ratio shadow cards
	 */
	function organism_card_ratio_shadow_atomic( $args = array() ) {
    $defaults = array(
      'class_ratio' => 'ratio ratio-1x1',
      'class_card_bg' => 'bg-primary',
      'class_card_shadow' => 'shadow-mask-secondary',
      'class_headline' => 'h-mega',
      'main_title' => false,
      'main_url' => false,
      'main_text' => false,
      'button_label' => 'Mehr erfahren',
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/card-ratio-shadow.php'));
	}
}

if ( ! function_exists( 'organism_card_ratio_action_atomic' ) ) {

	/**
	 * Display ratio action cards
	 */
	function organism_card_ratio_action_atomic( $args = array() ) {
    $defaults = array(
      'class_ratio' => 'ratio ratio-1x1',
      'class_card_bg' => 'bg-secondary',
      'main_title' => false,
      'main_url' => false,
      'main_text' => false,
      'main_thumbnail' => false,
      'button_label' => 'Mehr erfahren',
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/card-ratio-action.php'));
	}
}

if ( ! function_exists( 'organism_hero_numbers_atomic' ) ) {

	/**
	 * Display hero numbers
	 */
	function organism_hero_numbers_atomic( $args = array() ) {
    $defaults = array(
      'pre_title' => false,
      'main_title' => false,
      'post_title' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/hero-numbers.php'));
	}
}

if ( ! function_exists( 'organism_card_ratio_product_atomic' ) ) {

	/**
	 * Display ratio product cards
	 */
	function organism_card_ratio_product_atomic( $args = array() ) {
    $defaults = array(
      'main_title' => false,
      'main_url' => false,
      'main_text' => false,
      'main_image' => false,
      'product_price' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/card-ratio-product.php'));
	}
}

if ( ! function_exists( 'organism_card_membership_atomic' ) ) {

	/**
	 * Display membership cards
	 */
	function organism_card_membership_atomic( $args = array() ) {
    $defaults = array(
      'class_card_bg' => 'bg-secondary',
      'class_badge_border_color' => 'border-primary',
      'class_badge_text_color' => 'text-primary',
      'class_trikot_shadow_color' => 'card-image-trikot--secondary',
      'badge_title' => 'TSV Heidenau',
      'main_title' => false,
      'main_url' => false,
      'main_image' => 20,
      'membership_year_label' => 'Jährlich',
      'membership_year_price' => false,
      'membership_quarter_price' => false,
      'membership_month_price' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/card-membership.php'));
	}
}

if ( ! function_exists( 'organism_card_reports_atomic' ) ) {

	/**
	 * Display report cards
	 */
	function organism_card_reports_atomic( $args = array() ) {
    $defaults = array(
      'match_league' => false,
      'match_location' => 'Sportplatz Heidenau',
      'match_date' => '01. Januar 1901 - 00:00 Uhr',
      'match_result' => '0 - 0',
      'match_home' => true,
      'match_url' => false,
      'match_links' => false,
      'match_gallery_url' => false,
      'team_home' => 'TSV Heidenau',
      'team_home_short' => false,
      'team_guest' => 'MTV Muster',
      'team_guest_short' => 'MM',
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/card-reports.php'));
	}
}

if ( ! function_exists( 'organism_card_shedule_atomic' ) ) {

	/**
	 * Display report cards
	 */
	function organism_card_shedule_atomic( $args = array() ) {
    $defaults = array(
      'class_col_first' => 'col-3',
      'class_col_last' => 'col-6',
      'match_league' => false,
      'match_location' => 'Allieanz-Arena',
      'match_date' => '01. Januar 1901',
      'match_result' => '15:00',
      'match_home' => true,
      'match_url' => false,
      'match_links' => false,
      'match_gallery_url' => false,
      'team_home' => 'TSV Heidenau',
      'team_home_short' => false,
      'team_home_logo_id' => false,
      'team_guest' => 'MTV Muster',
      'team_guest_short' => 'MM',
      'team_guest_logo_id' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/card-shedule.php'));
	}
}

if ( ! function_exists( 'organism_card_times_atomic' ) ) {

	/**
	 * Display times cards
	 */
	function organism_card_times_atomic( $args = array() ) {
    $defaults = array(
      'times_day' => false,
      'times_time' => 'Noch nicht bekannt',
      'times_location' => 'Sportplatz Heidenau',
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/card-times.php'));
	}
}

if ( ! function_exists( 'organism_card_roaster_atomic' ) ) {

	/**
	 * Display roaster cards
	 */
	function organism_card_roaster_atomic( $args = array() ) {
    $defaults = array(
      'class_card' => false,
      'player_type' => 'fld', //gk or fld
      'player_number' => 0,
      'player_prename' => false,
      'player_postname' => false,
      'player_position' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/card-roaster.php'));
	}
}

if ( ! function_exists( 'organism_iframe_ratio_atomic' ) ) {

	/**
	 * Display iframe ratio
	 */
	function organism_iframe_ratio_atomic( $args = array() ) {
    $defaults = array(
      'class_ratio' => 'ratio-4x3',
      'iframe_url' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/iframe-ratio.php'));
	}
}

if ( ! function_exists( 'organism_iframe_video_ratio_atomic' ) ) {

	/**
	 * Display iframe video ratio with captions
	 */
	function organism_iframe_video_ratio_atomic( $args = array() ) {
    $defaults = array(
      'class_figure_overflow_space' => false,
      'class_ratio' => 'ratio-16x9',
      'iframe_url' => false,
      'iframe_target' => false,
      'figcaption' => false
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/iframe-video-ratio.php'));
	}
}

if ( ! function_exists( 'organism_image_gallery_atomic' ) ) {

	/**
	 * Display image gallery
	 */
	function organism_image_gallery_atomic( $args = array() ) {
    $defaults = array(
      'lightbox_url' => false,
      'image_id' => false,
      'image_alt' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/image-gallery.php'));
	}
}

if ( ! function_exists( 'organism_quote_box_atomic' ) ) {

	/**
	 * Display image gallery
	 */
	function organism_quote_box_atomic( $args = array() ) {
    $defaults = array(
      'main_text' => false,
      'quote_author' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/quote-box.php'));
	}
}

if ( ! function_exists( 'organism_share_footer_atomic' ) ) {

	/**
	 * Display share footer
	 */
	function organism_share_footer_atomic( $args = array() ) {
    $defaults = array();

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/share-footer.php'));
	}
}

if ( ! function_exists( 'organism_hero_result_atomic' ) ) {

	/**
	 * Display share footer
	 */
	function organism_hero_result_atomic( $args = array() ) {
    $defaults = array(
      'tag_title' => 'h1',
      'main_title' => false,
      'match_result' => '0 - 0',
      'match_home' => true,
      'team_home' => 'TSV Heidenau',
      'team_home_short' => false,
      'team_home_logo_id' => false,
      'team_guest' => 'MTV Muster',
      'team_guest_short' => 'MM',
      'team_guest_logo_id' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/hero-result.php'));
	}
}

if ( ! function_exists( 'organism_stage_hero_atomic' ) ) {

	/**
	 * Display share footer
	 */
	function organism_stage_hero_atomic( $args = array() ) {
    $defaults = array(
      'main_title' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/stage-hero.php'));
	}
}

if ( ! function_exists( 'organism_tabs_atomic' ) ) {

	/**
	 * Display tabbed sections
	 */
	function organism_tabs_atomic( $args = array() ) {
    $defaults = array(
      'tabs' => false,
      'result_term' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/tabs.php'));
	}
}

if ( ! function_exists( 'organism_card_text_atomic' ) ) {

	/**
	 * Display times cards
	 */
	function organism_card_text_atomic( $args = array() ) {
    $defaults = array(
      'main_title' => false,
      'main_text' => false,
      'main_url' => false,
      'main_label' => 'Mehr erfahren',
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(ORGANISMS.'/card-text.php'));
	}
}



/**
 * Molecues
 */

/**
 * group deivder title
 */
function molecules_group_devider_title_atomic( $args = array() ){
  $defaults = array(
    'class_elem' => false,
    'main_text' => 'Datum XXX',
  );

  $args = wp_parse_args( $args, $defaults );
  $args = (object) $args;
  include(locate_template(MOLECULES.'/group-devider-title.php'));
}


if ( ! function_exists( 'molecules_section_sidebar_start_atomic' ) ) {

	/**
	 * Display section with sidebar start
	 */
	function molecules_section_sidebar_start_atomic( $args = array() ) {
    $defaults = array(
      'class_pseudo_offset' => 'border-psudeo-offset-custom',
    );
  
    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(MOLECULES.'/section-sidebar-start.php'));
	}
}

if ( ! function_exists( 'molecules_section_sidebar_middle_atomic' ) ) {

	/**
	 * Display section with sidebar middle
	 */
	function molecules_section_sidebar_middle_atomic() {
		include(locate_template(MOLECULES.'/section-sidebar-middle.php'));
	}
}

if ( ! function_exists( 'molecules_section_sidebar_end_atomic' ) ) {

	/**
	 * Display section with sidebar end
	 */
	function molecules_section_sidebar_end_atomic() {
		include(locate_template(MOLECULES.'/section-sidebar-end.php'));
	}
}


if ( ! function_exists( 'molecules_single_content_start_atomic' ) ) {

	/**
	 * Display single content start
	 */
	function molecules_single_content_start_atomic($args) {
    $defaults = array(
      'class_container' => 'bg-white ps-8 pe-8 pb-5',
      'class_meta_bar' => 'p-0 py-3',
      'intro' => 'organism_card_overlay',
      'badge_title' => false,
      'addon_bar' => 'molecules_single_meta_bar',
    );
    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(MOLECULES.'/single_content_start.php'));
	}
}

if ( ! function_exists( 'molecules_single_content_end_atomic' ) ) {

	/**
	 * Display single content end
	 */
	function molecules_single_content_end_atomic($args) {
    $defaults = array(
      'back_url' => false,
      'back_title' => false,
      'addons' => false,
    );
  
    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(MOLECULES.'/single_content_end.php'));
	}
}

if ( ! function_exists( 'molecules_single_meta_bar_atomic' ) ) {

	/**
	 * Display meta bar
	 */
	function molecules_single_meta_bar_atomic($args) {
    $defaults = array(
      'badge_title' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(MOLECULES.'/single-meta-bar.php'));
	}
}

if ( ! function_exists( 'molecules_single_story_bar_atomic' ) ) {

	/**
	 * Display meta bar
	 */
	function molecules_single_story_bar_atomic($args) {
    $defaults = array(
      'badge_title' => false,
      'post_count_number' => false,
      'label_title' => false,
      'rights_title' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(MOLECULES.'/single-story-bar.php'));
	}
}

if ( ! function_exists( 'molecules_main_start_atomic' ) ) {

	/**
	 * Display main tag
	 */
	function molecules_main_start_atomic() {
		include(locate_template(MOLECULES.'/main-start.php'));
	}
}

if ( ! function_exists( 'molecules_main_end_atomic' ) ) {

	/**
	 * Display main tag
	 */
	function molecules_main_end_atomic() {
		include(locate_template(MOLECULES.'/main-end.php'));
	}
}

if ( ! function_exists( 'molecules_post_pagination_atomic' ) ) {

	/**
	 * Display main tag
	 */
	function molecules_post_pagination_atomic($args) {
    $defaults = array(
      'button_label_next' => 'Nächste Seite',
      'button_label_prev' => 'Vorherige Seite',
      'paged' => false,
      'total' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(MOLECULES.'/post-pagination.php'));
	}
}

if ( ! function_exists( 'molecules_result_atomic' ) ) {

	/**
	 * Display result
	 */
	function molecules_result_atomic($args) {
    $defaults = array(
      'layout' => 'h',
      'class_figure_svg' => false,
      'class_figure' => false,
      'match_result' => '0 - 0',
      'match_home' => true,
      'team_home' => 'TSV Heidenau',
      'team_home_short' => false,
      'team_home_logo_id' => false,
      'team_guest' => 'MTV Muster',
      'team_guest_short' => 'MM',
      'team_guest_logo_id' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(MOLECULES.'/result.php'));
	}
}

if ( ! function_exists( 'molecules_month_group_atomic' ) ) {

	/**
	 * Display month group
	 */
	function molecules_month_group_atomic($match_report_query) {
		include(locate_template(MOLECULES.'/month-group.php'));
	}
}


/**
 * Templates
 */
if ( ! function_exists( 'template_modulator_atomic' ) ) {

	/**
	 * Display tabbed sections
	 */
	function template_modulator_atomic( $args = array() ) {
    $defaults = array(
      'type' => false,
    );

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;
		include(locate_template(TEMPLATES.'/modulator.php'));
	}
}

if ( ! function_exists( 'template_tab_shedule_atomic' ) ) {

	/**
	 * Display tabbed sections
	 */
	function template_tab_shedule_atomic( $args = array() ) {
    /*$defaults = array();

    $args = wp_parse_args( $args, $defaults );
    $args = (object) $args;*/
		include(locate_template(TEMPLATES.'/tab-shedule.php'));
	}
}

if ( ! function_exists( 'template_search_results_atomic' ) ) {

	/**
	 * Display tabbed sections
	 */
	function template_search_results_atomic() {
		include(locate_template(TEMPLATES.'/search-results.php'));
	}
}


?>