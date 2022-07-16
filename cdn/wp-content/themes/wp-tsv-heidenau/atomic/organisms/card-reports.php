<div class="card card-blank border-0 rounded-0">
  <div class="card-body p-4">
    <div class="row g-0 border-bottom">
      <div class="col-3 pb-3 border-end">
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
      <div class="col-6 pb-3 border-end d-flex justify-content-center align-items-center">
        <?php 
          $args_sub = array(
            'layout' => 'h',
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
      <div class="col-3 pb-3 ps-4 d-flex flex-column justify-content-center vstack gap-2">
      <?php if($args->match_url):?>
        <a class="btn btn-lg ls-2 btn-warning rounded-1-min d-block fw-bold text-uppercase text-dark fs-6" href="<?php echo $args->match_url; ?>" role="button">Spielbericht</a>
      <?php else: ?>
        <a class="text-primary fw-semibold d-block text-center" target="_blank" rel="noopener" href="#">Spielbericht einreichen</a>
      <?php endif; ?>
      </div>
    </div>
    <div class="pt-3">
      <ul class="nav text-decoration-underline">
      <?php if($args->match_links):
        foreach($args->match_links as $match_link):?>
        <li class="nav-item">
          <a class="nav-link text-primary fw-semibold py-0 ps-0" target="_blank" rel="noopener" href="<?php echo $match_link['link_url']; ?>"><?php echo $match_link['link_label']; ?><i class="fa-solid fa-arrow-up-right-from-square ms-1"></i></a>
        </li>
      <?php endforeach; endif; ?>
      <?php if($args->match_gallery_url):?>
        <li class="nav-item">
          <a class="nav-link text-primary fw-semibold py-0" href="<?php echo $args->match_gallery_url; ?>">Fotos<i class="fa-solid fa-camera ms-1"></i></a>
        </li>
      <?php endif; ?>
      </ul>
    </div>
  </div>
</div>