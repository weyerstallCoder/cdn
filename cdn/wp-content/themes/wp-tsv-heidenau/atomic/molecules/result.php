<?php
  $default_club_data = array(
    'logo' => '<figure class="figure-logo mb-0 ratio ratio-1x1 '.$args->class_figure.' '.$args->class_figure_svg.'">'.get_field( 'conf_main_logo_svg', 'option' ).'</figure>',
    'clubname' => 'TSV Heidenau',
    'clubname_short' => 'TSV',
  );
  $team_home_data = array(
    'logo' => apply_filters('logo_placeholder', array('label' => $args->team_home_short, 'class' => $args->class_figure)),
    'clubname' => $args->team_home,
    'clubname_short' => $args->team_home_short,
  );
  $team_guest_data = array(
    'logo' => apply_filters('logo_placeholder', array('label' => $args->team_guest_short, 'class' => $args->class_figure)),
    'clubname' => $args->team_guest,
    'clubname_short' => $args->team_guest_short,
  );

  if($args->match_home){
    $team_home_data = $default_club_data;
  }
  if($args->match_guest){
    $team_guest_data = $default_club_data;
  }
  if($args->team_home_logo_id){
    $team_home_data['logo'] = '<figure class="figure-logo mb-0 ratio ratio-1x1"><img src="'.wp_get_attachment_url($args->team_home_logo_id).'" alt="" class="w-auto top-0 start-50 translate-middle-x"></figure>';
  }
  if($args->team_guest_logo_id){
    $team_guest_data['logo'] = '<figure class="figure-logo mb-0 ratio ratio-1x1"><img src="'.wp_get_attachment_url($args->team_guest_logo_id).'" alt="" class="w-auto top-0 start-50 translate-middle-x"></figure>';
  }
?>

<div class="row g-0 align-items-center result-teams">

<?php if($args->layout == 'v'):?>
  <div class="col d-flex flex-column align-items-center justify-content-end">
    <p class="text-primary fw-bold text-small text-nowrap mb-1"><?php echo $team_home_data['clubname']; ?></p>
    <?php echo $team_home_data['logo']; ?>
  </div>
<?php else: ?>
  <div class="col col-result-teams d-flex flex-column align-items-center justify-content-end">
    <?php echo $team_home_data['logo']; ?>
    <p class="text-primary fw-bold text-small text-nowrap mt-1 mb-0"><?php echo $team_home_data['clubname']; ?></p>
  </div>
<?php endif; ?>

<?php if($args->match_result):?>
  <div class="col">
    <span class="shadow-mask shadow-mask-md text-white bg-primary shadow-mask-secondary px-3 fw-bold py-1 h-kilo text-nowrap mx-4"><?php echo $args->match_result; ?></span>
  </div>
<?php endif; ?>

<?php if($args->layout == 'v'):?>
  <div class="col d-flex flex-column align-items-center justify-content-start">
    <p class="text-primary fw-bold text-small mb-1 text-nowrap"><?php echo $team_guest_data['clubname']; ?></p>
    <?php echo $team_guest_data['logo']; ?>
  </div>
<?php else: ?>
  <div class="col col-result-teams d-flex flex-column align-items-center justify-content-start">
    <?php echo $team_guest_data['logo']; ?>
    <p class="text-primary fw-bold text-small text-nowrap mt-1 mb-0"><?php echo $team_guest_data['clubname']; ?></p>
  </div>
<?php endif; ?>
</div>