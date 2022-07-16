<?php

/**
 * @author:Dennis Weyerstall
 */
get_header();

/**
 * set main tag - start
 */
do_action('molecules_main_start');

/**
 * stage hero
 */
$args = array(
  'main_title' => 'Aktuelle Aktionen <br>aus Heidenau',
);
do_action('organism_stage_hero', $args);

/**
 * check posts
 */
global $wp_query;
$news_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$news_args = array(
  'post_type' => get_post_type(),
  'posts_per_page' => 8,
  'paged' => $news_paged
);
$news_query = new WP_Query( $news_args ); 
if ( $news_query->have_posts() ):
  /**
   * start with section / sidebar
   */
  do_action('molecules_section_sidebar_start');
?>
<h2 class="fw-bold mb-3 h1">Was unser Dorf bewegt</h2>
<div class="row row-cols-xl-2 border-cols g-5 mb-max">
  <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
  <div class="col border-end border-light">
  <?php 
    $args = array(
      'date_title' => 'vor '. esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') )),
      'badge_title' => 'Aktion',
      'badge_url' => get_post_type_archive_link(get_post_type()),
      'main_title' => get_the_title(),
      'main_url' => get_the_permalink(),
      'main_image' => get_post_thumbnail_id(),
    );
    do_action('organism_card_vertical', $args); 
  ?>
  </div>
  <?php endwhile; wp_reset_postdata(); ?>
</div>

<?php
  /**
   * post loop pagination
   */
  $args = array(
    'button_label_next' => 'Neuere News anzeigen',
    'button_label_prev' => 'Ältere news anzeigen',
    'paged' => $news_paged,
    'total' => $wp_query->max_num_pages,
  );
  do_action('molecules_post_pagination', $args);

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
 * end check posts
 */
endif;

/**
 * set main tag - end
 */
do_action('molecules_main_end');

get_footer(); ?>