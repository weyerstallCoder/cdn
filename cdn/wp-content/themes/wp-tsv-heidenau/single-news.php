<?php

/**
 * @author:Dennis Weyerstall
 */
get_header(); 

/**
 * start single container
 */
$args = array(
  'intro' => 'organism_card_overlay',
  'tag_title' => 'h1',
  'badge_title' => 'News',
  'class_center' => 'text-center',
  'main_title' => get_the_title(),
  'main_image' => get_post_thumbnail_id(),
);
do_action('molecules_single_content_start', $args);

/**
 * start single container
 */
$args = array(
  'back_url' => get_post_type_archive_link('news'),
  'back_title' => 'Zurück zur Newsliste',
  'addons' => array(
    'single-more-news-loop',
    'single-more-story-loop',
  ),
);
do_action('molecules_single_content_end', $args);

get_footer(); ?>