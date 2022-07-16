<?php
  $tax_query_args = false;
  if($global_args->result_term){
    $tax_query_args = array(
      array(
          'taxonomy' => 'mannschaft',
          'field'    => 'id',
          'terms'    => $global_args->result_term,
      ),
    );
  }

  $post_type = 'spielbericht';
  $last_match_args = array(
    'post_type' => $post_type,
    'posts_per_page' => 10,
    'order' => 'DESC',
    'orderby' => 'date',
    'tax_query' => $tax_query_args
  );
  $last_match_query = new WP_Query( $last_match_args ); 
  if ( $last_match_query->have_posts() ):?>
  <div class="row row-cols-1 gx-0 gy-4">
  <?php while ( $last_match_query->have_posts() ) : $last_match_query->the_post(); 
    $team_home = get_field('match_report_home_gr');
    $team_guest = get_field('match_report_guest_gr');?>
    <div class="col">
    
      <div class="row g-0">
        <div class="col-xl-2">
        <?php do_action('molecules_month_group', $last_match_query); ?>
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
<div class="d-flex justify-content-end mt-5">
  <a href="<?php echo get_post_type_archive_link($post_type); ?>" class="btn btn-lg ls-2 btn-primary rounded-1-min d-block fw-bold text-uppercase text-white fs-6">Weitere Spielberichte ansehen</a>
</div>
<?php endif; ?>