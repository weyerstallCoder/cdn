<?php
 $post_type = 'spielbericht';
 $last_match_args = array(
   'post_type' => $post_type,
   'posts_per_page' => 1,
   'order' => 'DESC',
   'orderby' => 'date',
 );
 $last_match_query = new WP_Query( $last_match_args ); 
?>

<div class="tab-shedule position-absolute bottom-0 start-0 end-0 bg-white p-0">
  <nav>
    <div class="nav nav-tabs border-0" id="nav-tab-shedule" role="tablist">
      <button class="nav-link border-0 rounded-0 flex-fill text-uppercase fw-semibold ls-2" id="nav-next-match-tab" data-bs-toggle="tab" data-bs-target="#nav-next-match" type="button" role="tab" aria-controls="nav-next-match" aria-selected="false">Nächstes Spiel</button>
      <button class="nav-link active border-0 rounded-0 flex-fill text-uppercase fw-semibold" id="nav-last-match-tab" data-bs-toggle="tab" data-bs-target="#nav-last-match" type="button" role="tab" aria-controls="nav-last-match" aria-selected="true"<?php if ( !$last_match_query->have_posts() ){echo ' disabled';} ?>>Letztes Spiel</button>
    </div>
  </nav>
  <div class="tab-content p-4" id="nav-tab-shedule-content">
    <div class="tab-pane fade show active" id="nav-last-match" role="tabpanel" aria-labelledby="nav-last-match-tab">
    <?php if ( $last_match_query->have_posts() ): 
      while ( $last_match_query->have_posts() ) : $last_match_query->the_post();
      $team_home = get_field('match_report_home_gr');
      $team_guest = get_field('match_report_guest_gr');
    ?>
    <?php if(get_field( 'match_report_league' )): ?>
      <p class="text-primary fw-semibold ptag-base mb-2"><?php the_field( 'match_report_league' ); ?></p>
    <?php endif; ?>

      <ul class="text-uppercase fw-semibold list-unstyled text-grey-light d-flex">
      <?php if(get_field( 'match_report_location' )): ?>
        <li class="d-flex align-items-center me-3 lh-1">
          <i class="fa-solid fa-location-dot me-2"></i>
          <span class="text-mini-l"><?php the_field( 'match_report_location' ); ?></span>
        </li>
      <?php endif; ?>
      <?php if(get_field( 'match_report_time' )): ?>
        <li class="d-flex align-items-center lh-1">
          <i class="fa-solid fa-stopwatch me-2"></i>
          <span class="text-mini-l"><?php the_field( 'match_report_time' ); ?></span>
        </li>
      <?php endif; ?>
      </ul>
      <hr class="mb-5">

      <?php 
      $args_sub = array(
        'layout' => 'v',
        'match_result' => get_field( 'match_report_result' ),
        'match_guest' => $team_guest['match_report_guest_flag'],
        'match_home' => $team_home['match_report_home_flag'],
        'team_home' => $team_home['match_report_home_clubname'],
        'team_home_short' => $team_home['match_report_home_clubname_short'],
        'team_guest' => $team_guest['match_report_guest_clubname'],
        'team_guest_short' => $team_guest['match_report_guest_clubname_short'],
      );
      do_action('molecules_result', $args_sub); ?>

      <a class="btn btn-lg ls-2 btn-warning rounded-1-min d-block fw-bold text-uppercase text-dark fs-6 mt-5" href="<?php the_permalink(); ?>" role="button">zum Spielbericht</a>
      <?php endwhile; 
      wp_reset_postdata();
    endif; ?>
      
    </div>
    <div class="tab-pane fade" id="nav-next-match" role="tabpanel" aria-labelledby="nav-next-match-tab">
      <p class="fs-4 text-primary fw-bold">Nächstes Spiel</p>
      <p class="text-primary fw-semibold ptag-base">Für aktuelle Spielansetzungen und Ergebnisse verweisen wir auf den Anbeiter Fussball.de</p>
      <a href="https://www.fussball.de/verein/tsv-heidenau-niedersachsen/-/id/00ES8GN7RK00006MVV0AG08LVUPGND5I#!/" class="p-0 text-reset text-decoration-none d-block" title="" target="_blank" rel="noopener">
        <img loading="lazy" src="<?php echo wp_get_attachment_url('597'); ?>" alt="Fussball.de Logo" class="mx-100 pe-5">
      </a>
      <a class="btn btn-lg ls-2 btn-warning rounded-1-min d-block fw-bold text-uppercase text-dark fs-6 mt-5" href="https://www.fussball.de/verein/tsv-heidenau-niedersachsen/-/id/00ES8GN7RK00006MVV0AG08LVUPGND5I#!/" target="_blank" rel="noopener" role="button">Spiele ansehen</a>
    </div>
  </div>
</div>

<?php add_action('wp_print_footer_scripts', function (){ ?>
<script>

</script>
<?php }) ?>