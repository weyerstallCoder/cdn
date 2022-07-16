<div class="bg-white ps-8 pe-8 pt-5 pb-3 position-relative">
  <div class="d-flex justify-content-center align-items-center mb-5">

    <?php 
      $args_sub = array(
        'layout' => 'v',
        'class_figure' => 'figure-logo-xl',
        'match_result' => $args->match_result,
        'match_guest' => $args->match_guest,
        'match_home' => $args->match_home,
        'team_home' => $args->team_home,
        'team_home_short' => $args->team_home_short,
        'team_guest' => $args->team_guest,
        'team_guest_short' => $args->team_guest_short,
      );
      do_action('molecules_result', $args_sub); 
    ?>
  </div>

  <<?php echo $args->tag_title; ?> class="fw-bold mb-0">
    <?php echo $args->main_title; ?>
  </<?php echo $args->tag_title; ?>>
</div>