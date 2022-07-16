<?php

/**
 * Template Name: Sportangebot Template
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
  include(locate_template(TEMPLATES.'/sports-stage.php'));

  /**
   * set main tag - start
   */
  $args = array(
    'tabs' => [
      array('label' => 'Zeiten', 'part_name' => 'sports-times'),
      array('label' => 'Ansprechpartner', 'part_name' => 'sports-contacts'),
      array('label' => 'Infos', 'part_name' => 'sports-info'),
    ],
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