<section class="bg-light py-4-max">
  <div class="container">
    <?php the_sub_field( 'matches_next_text' ); ?>
    <div class="row g-0 g-4">

    <?php if ( have_rows( 'matches_next_rp' ) ) : ?>
      <?php while ( have_rows( 'matches_next_rp' ) ) : the_row(); ?>
      <div class="col-xl-6">
      <?php
        $team_home = get_sub_field('match_report_home_gr');
        $team_guest = get_sub_field('match_report_guest_gr');
        $args = array(
          'class_col_first' => 'col-4',
          'class_col_last' => 'col-8',
          'match_league' => get_sub_field( 'match_report_league' ),
          'match_location' => get_sub_field( 'match_report_location' ),
          'match_date' => get_sub_field( 'match_report_time' ),
          'match_url' => get_the_permalink(),
          'match_result' => get_sub_field( 'match_report_result' ),
          'match_guest' => $team_guest['match_report_guest_flag'],
          'match_home' => $team_home['match_report_home_flag'],
          'team_home' => $team_home['match_report_home_clubname'],
          'team_home_short' => $team_home['match_report_home_clubname_short'],
          'team_home_logo_id' => $team_home['match_report_home_logo'],
          'team_guest' => $team_guest['match_report_guest_clubname'],
          'team_guest_short' => $team_guest['match_report_guest_clubname_short'],
          'team_guest_logo_id' => $team_guest['match_report_guest_logo'],
        );
        do_action('organism_card_shedule', $args); 
      ?>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>

    </div>
  </div>
</section>