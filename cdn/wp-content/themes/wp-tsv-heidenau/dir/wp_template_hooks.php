<?php

/**
 * @author:Dennis Weyerstall
 */

//molecules
add_action( 'molecules_group_devider_title', 'molecules_group_devider_title_atomic', 5 );
add_action( 'molecules_section_sidebar_start', 'molecules_section_sidebar_start_atomic', 5 );
add_action( 'molecules_section_sidebar_end', 'molecules_section_sidebar_end_atomic', 5 );
add_action( 'molecules_section_sidebar_middle', 'molecules_section_sidebar_middle_atomic', 5 );
add_action( 'molecules_single_content_start', 'molecules_single_content_start_atomic', 5 );
add_action( 'molecules_single_content_end', 'molecules_single_content_end_atomic', 5 );
add_action( 'molecules_single_meta_bar', 'molecules_single_meta_bar_atomic', 5 );
add_action( 'molecules_single_story_bar', 'molecules_single_story_bar_atomic', 5 );
add_action( 'molecules_main_start', 'molecules_main_start_atomic', 5 );
add_action( 'molecules_main_end', 'molecules_main_end_atomic', 5 );
add_action( 'molecules_post_pagination', 'molecules_post_pagination_atomic', 5 );
add_action( 'molecules_result', 'molecules_result_atomic', 5 );
add_action( 'molecules_month_group', 'molecules_month_group_atomic', 5 );

// organism
add_action( 'organism_card_vertical', 'organism_card_vertical_atomic', 5 );
add_action( 'organism_card_horizontal', 'organism_card_horizontal_atomic', 5 );
add_action( 'organism_card_overlay', 'organism_card_overlay_atomic', 5 );
add_action( 'organism_card_action', 'organism_card_action_atomic', 5 );
add_action( 'organism_card_vote', 'organism_card_vote_atomic', 5 );
add_action( 'organism_card_ratio_shadow', 'organism_card_ratio_shadow_atomic', 5 );
add_action( 'organism_card_ratio_action', 'organism_card_ratio_action_atomic', 5 );
add_action( 'organism_hero_numbers', 'organism_hero_numbers_atomic', 5 );
add_action( 'organism_card_ratio_product', 'organism_card_ratio_product_atomic', 5 );
add_action( 'organism_card_membership', 'organism_card_membership_atomic', 5 );
add_action( 'organism_card_reports', 'organism_card_reports_atomic', 5 );
add_action( 'organism_card_shedule', 'organism_card_shedule_atomic', 5 );
add_action( 'organism_card_text', 'organism_card_text_atomic', 5 );
add_action( 'organism_card_times', 'organism_card_times_atomic', 5 );
add_action( 'organism_card_roaster', 'organism_card_roaster_atomic', 5 );
add_action( 'organism_iframe_ratio', 'organism_iframe_ratio_atomic', 5 );
add_action( 'organism_iframe_video_ratio', 'organism_iframe_video_ratio_atomic', 5 );
add_action( 'organism_image_gallery', 'organism_image_gallery_atomic', 5 );
add_action( 'organism_share_footer', 'organism_share_footer_atomic', 5 );
add_action( 'organism_quote_box', 'organism_quote_box_atomic', 5 );
add_action( 'organism_hero_result', 'organism_hero_result_atomic', 5 );
add_action( 'organism_stage_hero', 'organism_stage_hero_atomic', 5 );
add_action( 'organism_tabs', 'organism_tabs_atomic', 5 );

//templates
add_action( 'template_modulator', 'template_modulator_atomic', 5 );
add_action( 'template_tab_shedule', 'template_tab_shedule_atomic', 5 );
add_action( 'template_search_results', 'template_search_results_atomic', 5 );

?>