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
    'main_title' => 'Fußball <br>Spielberichte',
  );
  do_action('organism_stage_hero', $args);


  /**
   * check posts
   */
  global $wp_query;
  $match_report_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  $match_report_args = array(
    'post_type' => get_post_type(),
    'posts_per_page' => 8,
    'paged' => $match_report_paged
  );
  $match_report_query = new WP_Query( $match_report_args );
  if ( $match_report_query->have_posts() ):?>
  <section class="pb-max pt-max bg-light">
    <div class="container">
      <div class="row row-cols-1 gx-0 gy-4 mb-max">
      <?php while ( $match_report_query->have_posts() ) : $match_report_query->the_post(); 
        $team_home = get_field('match_report_home_gr');
        $team_guest = get_field('match_report_guest_gr');?>
        <div class="col">
          <div class="row g-0">
            <div class="col-xl-2">
            <?php do_action('molecules_month_group', $match_report_query); ?>
            </div>
            <div class="col-xl-10">
            <?php 
              $args = array(
                'match_league' => get_field( 'match_report_league' ),
                'match_location' => get_field( 'match_report_location' ),
                'match_date' => get_field( 'match_report_time' ),
                'match_url' => get_the_permalink(),
                'match_links' => false,
                'match_gallery_url' => false,
                'match_result' => get_field( 'match_report_result' ),
                'match_guest' => $team_guest['match_report_guest_flag'],
                'match_home' => $team_home['match_report_home_flag'],
                'team_home' => $team_home['match_report_home_clubname'],
                'team_home_short' => $team_home['match_report_home_clubname_short'],
                'team_guest' => $team_guest['match_report_guest_clubname'],
                'team_guest_short' => $team_guest['match_report_guest_clubname_short'],
              );
              do_action('organism_card_reports', $args); 
            ?>
            </div>
          </div>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
      </div>

      <?php 
        /**
         * post loop pagination
         */
        $args = array(
          'button_label_next' => 'Neuere Spielberichte anzeigen',
          'button_label_prev' => 'Ältere Spielberichte anzeigen',
          'paged' => $match_report_paged,
          'total' => $wp_query->max_num_pages,
        );
        do_action('molecules_post_pagination', $args);
      ?>

    </div>
  </section>
  <?php endif;

/**
 * set main tag - end
 */
do_action('molecules_main_end');

get_footer(); ?>