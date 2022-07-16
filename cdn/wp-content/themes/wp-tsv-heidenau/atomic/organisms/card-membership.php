<div class="card card-blank border-0 rounded-2 h-100 <?php echo $args->class_card_bg; ?>">
  <div class="card-header border-0 bg-transparent px-3 pt-4 text-center">
    <span class="badge border mb-2 rounded-0 text-uppercase text-mini fw-bold <?php echo $args->class_badge_border_color; ?> <?php echo $args->class_badge_text_color; ?>"><?php echo $args->badge_title; ?></span>
    <h3 class="fw-bold text-white"><?php echo $args->main_title; ?></h3>
  </div>
  <div class="card-body card-image-trikot card-image-trikot--price position-relative p-0 overflow-hidden <?php echo $args->class_trikot_shadow_color; ?>">
    <img loading="lazy" src="<?php echo wp_get_attachment_url($args->main_image); ?>" alt="TODO" class="position-absolute top-50 start-50 translate-middle d-block">
    <span class="h-mega fw-bold text-white text-center position-absolute bottom-0 start-50 translate-middle-x z-index-1 lh-1"><?php echo $args->membership_year_price; ?><small class="d-block fs-7 text-uppercase"><?php echo $args->membership_year_label; ?></small>
    </span>
  </div>
  <div class="card-footer border-0 bg-transparent text-center pt-4 pb-3">
    <p class="mb-4 text-white fs-6 lh-sm"><?php echo $args->membership_quarter_price; ?> <br><?php echo $args->membership_month_price; ?></p>
  <?php if($args->main_url):?>
    <p class="mb-0">
      <a class="btn btn-lg ls-2 btn-warning rounded-1-min d-block fw-bold text-uppercase text-dark fs-6" data-bs-toggle="modal" data-bs-target="#staticMembershipModal" role="button" title="<?php echo apply_filters( 'text_defaults', 'more', $args->main_title ); ?>">Jetzt anmelden</a>
    </p>
  <?php endif; ?>
  </div>
</div>