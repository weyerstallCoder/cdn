<?php

/**
 * Template Name: Sidebar Template
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
  $args = array();
  if(is_page(array(676))){
    $args = array(
      'class_pseudo_offset' => false,
    );
  }

  do_action('molecules_section_sidebar_start', $args);

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


  if(is_page(array(676))){
    /**
     * contact data card
     */
    include(locate_template(TEMPLATES.'/contact-data-card.php'));

  }else{
    /**
     * newsletter form
     */
    include(locate_template(TEMPLATES.'/sidebar-newsletter-form.php'));

    /**
     * faq card
     */
    include(locate_template(TEMPLATES.'/mainpage-faq-card.php'));
  }

  /**
   * end with section / sidebar
   */
  do_action('molecules_section_sidebar_end');

/**
 * set main tag - end
 */
do_action('molecules_main_end');

get_footer(); 
?>