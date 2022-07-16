<div class="card card-blank border-0 rounded-0 <?php echo $args->class_card; ?>">
  <a href="<?php echo $args->main_url; ?>" title="<?php echo apply_filters( 'text_defaults', 'more', $args->date_title ); ?>" class="card-image position-relative mb-3 ratio <?php echo $args->class_ratio; ?>">
  <?php if($args->main_image):?>
    <?php echo wp_get_attachment_image($args->main_image, 'medium'); ?>
  <?php endif; ?>
  <?php if($args->class_icon):?>
    <span class="card-type-square position-absolute top-0 start-0 bg-primary text-white d-flex align-items-center justify-content-center <?php echo $args->class_sqaure_meta; ?>">
      <i class="<?php echo $args->class_icon; ?>"></i>
    <?php if($args->meta_big_number):?>
      <span class="d-block text-center fw-bold fs-3 lh-1 mt-2 mb-1"><?php echo $args->meta_big_number; ?></span>
    <?php endif; ?>
    <?php if($args->meta_label):?>
      <span class="d-block text-center fw-semibold text-mini-l lh-1"><?php echo $args->meta_label; ?></span>
    <?php endif; ?>
    </span>
  <?php endif; ?>
  </a>
  <div class="card-body p-0">
    <div class="d-flex align-items-center mb-3">
    <?php if($args->date_title):?>
      <span class="text-mini fw-bold text-primary text-decoration-none" title="<?php echo apply_filters( 'text_defaults', 'more', $args->date_title ); ?>"><?php echo $args->date_title; ?></span>
    <?php endif; ?>
    <?php if($args->badge_url):?>
      <a href="<?php echo $args->badge_url; ?>" class="badge border border-primary rounded-0 text-primary text-uppercase text-mini fw-bold text-decoration-none<?php if($args->date_title){echo' ms-4';}?>" title="<?php echo apply_filters( 'text_defaults', 'more', $args->badge_title ); ?>"><?php echo $args->badge_title; ?></a>
    <?php endif; ?>
    </div>
  <?php if($args->main_title):?>
    <h3 class="fw-bold <?php echo $args->class_title_tag; ?>">
    <?php if($args->main_url):?>
      <a href="<?php echo $args->main_url; ?>" title="<?php echo apply_filters( 'text_defaults', 'more', $args->main_title ); ?>" class="text-reset text-decoration-none"><?php echo $args->main_title; ?></a>
    <?php else: ?>
      <?php echo $args->main_title; ?>
    <?php endif; ?>
    </h3>
  <?php endif; ?>
  </div>
</div>