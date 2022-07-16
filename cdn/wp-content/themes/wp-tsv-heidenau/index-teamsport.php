<?php

/**
 * Template Name: Sidebar-Teamsport Template
 * 
 * @author:Dennis Weyerstall
 */
get_header(); 

/**
 * set main tag - start
 */
do_action('molecules_main_start');

    /**
     * modulator
     */
    $args = array(
      'type' => 'section-support',
    );
    do_action('template_modulator', $args);

  /**
   * start with section / sidebar
   */
  do_action('molecules_section_sidebar_start');

    /**
     * modulator
     */
    $args = array(
      'type' => 'sidebar-support',
    );
    do_action('template_modulator', $args);

  /**
   * start with section / sidebar
   */
  do_action('molecules_section_sidebar_middle');

    /**
     * newsletter form
     */
    include(locate_template(TEMPLATES.'/sidebar-newsletter-form.php'));

    /**
     * faq card
     */
    include(locate_template(TEMPLATES.'/mainpage-faq-card.php'));

  /**
   * end with section / sidebar
   */
  do_action('molecules_section_sidebar_end');

  /**
   * set main tag - start
   */
  $args = array(
    'tabs' => [
      array('label' => 'Ergebnisse', 'part_name' => 'teamsports-results'),
      array('label' => 'Vereinsspielplan', 'part_name' => 'teamsports-shedule'),
      array('label' => 'Infos', 'part_name' => 'sports-info'),
    ],
  );
  do_action('organism_tabs', $args);

/**
 * set main tag - end
 */
do_action('molecules_main_end');

get_footer(); 
?>