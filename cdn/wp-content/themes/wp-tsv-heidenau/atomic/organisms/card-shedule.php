<div class="card card-blank border-0 rounded-0">
  <div class="card-body p-4">
    <div class="row g-0">
      <div class="<?php echo $args->class_col_first; ?> border-end">
      <?php if($args->match_league):?>
        <p class="text-primary fw-semibold ptag-base"><?php echo $args->match_league; ?></p>
      <?php endif; ?>
        <ul class="text-uppercase fw-semibold list-unstyled text-grey-light">
        <?php if($args->match_location):?>
          <li class="d-flex align-items-center mb-2 lh-1">
            <i class="fa-solid fa-location-dot me-2"></i>
            <span class="text-mini-l"><?php echo $args->match_location; ?></span>
          </li>
        <?php endif; ?>
        <?php if($args->match_location):?>
          <li class="d-flex align-items-center lh-1">
            <i class="fa-solid fa-stopwatch me-2"></i>
            <span class="text-mini-l"><?php echo $args->match_date; ?></span>
          </li>
        <?php endif; ?>
        </ul>
      </div>
      <div class="<?php echo $args->class_col_last; ?> d-flex justify-content-center align-items-center">
        <?php 
          $args_sub = array(
            'layout' => 'h',
            'match_result' => $args->match_result,
            'match_guest' => $args->match_guest,
            'match_home' => $args->match_home,
            'team_home' => $args->team_home,
            'team_home_short' => $args->team_home_short,
            'team_home_logo_id' => $args->team_home_logo_id,
            'team_guest' => $args->team_guest,
            'team_guest_short' => $args->team_guest_short,
            'team_guest_logo_id' => $args->team_guest_logo_id,
          );
          do_action('molecules_result', $args_sub); 
        ?>
      </div>
    </div>
  </div>
</div>