<?php

/**
 * Template Name: Teamsport Template
 * 
 * @author:Dennis Weyerstall
 */
get_header(); 

/**
 * set main tag - start
 */
do_action('molecules_main_start');

  /**
   * stage
   */
  include(locate_template(TEMPLATES.'/teamsports-stage.php'));

  /**
   * set main tag - start
   */
  $args = array(
    'tabs' => [
      array('label' => 'Training', 'part_name' => 'sports-times'),
      array('label' => 'Ansprechpartner', 'part_name' => 'sports-contacts'),
      array('label' => 'Infos', 'part_name' => 'sports-info'),
      array('label' => 'Spielberichte', 'part_name' => 'teamsports-results'),
      array('label' => 'Links', 'part_name' => 'teamsports-links'),
    ],
    'result_term' => get_field( 'sportsteam_report_term' )
  );
  do_action('organism_tabs', $args);

  /**
   * pagination
   */
  include(locate_template(TEMPLATES.'/sports-pagination.php'));

/**
 * set main tag - end
 */
do_action('molecules_main_end');

get_footer(); 
?>