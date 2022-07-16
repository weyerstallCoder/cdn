<?php

/**
 * Template Name: Startseite Template
 * 
 * @author:Dennis Weyerstall
 */
get_header(); 

wp_enqueue_style('swiper-style');
wp_enqueue_script('swiper-script');

/**
 * set main tag - start
 */
do_action('molecules_main_start');

  /**
   * news slider loop
   */
  include(locate_template(TEMPLATES.'/mainpage-news-slider-loop.php'));

  /**
   * today programm loop
   */
  include(locate_template(TEMPLATES.'/mainpage-today-programm-loop.php'));

  /**
   * start with section / sidebar
   */
  do_action('molecules_section_sidebar_start');

    /**
     * events loop
     */
    include(locate_template(TEMPLATES.'/mainpage-events-loop.php'));

    /**
     * news loop
     */
    include(locate_template(TEMPLATES.'/mainpage-news-loop.php'));

  /**
   * start with section / sidebar
   */
  do_action('molecules_section_sidebar_middle');

    /**
     * newsletter form
     */
    include(locate_template(TEMPLATES.'/sidebar-newsletter-form.php'));

  /**
   * end with section / sidebar
   */
  do_action('molecules_section_sidebar_end');

  /**
   * news loop
   */
  include(locate_template(TEMPLATES.'/mainpage-sports-slider-loop.php'));

  /**
   * start with section / sidebar
   */
  do_action('molecules_section_sidebar_start');

    /**
     * clup content
     */
    include(locate_template(TEMPLATES.'/mainpage-club-content.php'));

    /**
     * allianz banner
     */
    include(locate_template(TEMPLATES.'/allianz-banner.php'));

  /**
   * start with section / sidebar
   */
  do_action('molecules_section_sidebar_middle');

    /**
     * faq card
     */
    include(locate_template(TEMPLATES.'/mainpage-faq-card.php'));

  /**
   * end with section / sidebar
   */
  do_action('molecules_section_sidebar_end');

  /**
   * allianz cup hero
   */
  include(locate_template(TEMPLATES.'/allianz-cup-hero.php'));

  /**
   * keyfacts
   */
  include(locate_template(TEMPLATES.'/mainpage-keyfacts.php'));

  /**
   * seo content
   */
  include(locate_template(TEMPLATES.'/mainpage-seo-content.php'));

/**
 * set main tag - end
 */
do_action('molecules_main_end');

get_footer(); 
?>