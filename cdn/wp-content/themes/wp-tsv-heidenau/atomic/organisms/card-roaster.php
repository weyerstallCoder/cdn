<div class="card card-blank border-0 rounded-2 bg-light h-100 <?php echo $args->class_card; ?>">
  <div class="card-body card-image-trikot position-relative p-0 overflow-hidden">
    <?php echo apply_filters('player_trikot_type', $args->player_type); ?>
    <?php if($args->player_number): ?>
    <span class="card-rounded-trikot rounded-circle bg-warning d-flex justify-content-center align-items-center fs-5 fw-bold text-dark position-absolute bottom-0 start-50 translate-middle-x"><?php echo $args->player_number; ?></span>
    <?php endif; ?>
  </div>
  <div class="card-footer border-0 bg-transparent text-center pb-3 position-relative">
    <p class="mb-0 fw-medium text-grey-light lh-1"><?php echo $args->player_prename; ?></p>
    <p class="mb-2 fw-bold text-primary lh-sm"><?php echo $args->player_postname; ?></p>
    <p class="mb-0 text-secondary text-uppercase text-mini-l fw-bold ls-5"><?php echo $args->player_position; ?></p></div>
</div>