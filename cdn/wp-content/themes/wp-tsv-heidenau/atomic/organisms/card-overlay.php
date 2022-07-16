<div class="card card-blank border-0 rounded-0 text-white">
<?php if($args->main_image):?>
  <?php echo wp_get_attachment_image($args->main_image, 'medium', '', array( 'class' => 'card-img rounded-0 img-object-fit-cover' )); ?>
<?php endif; ?>
  <div class="card-img-overlay d-flex flex-column justify-content-end rounded-0 px-4-max py-4 <?php echo $args->class_center; ?>">
    <div class="d-flex align-items-center mb-3">
    <?php if($args->date_title):?>
      <span class="text-mini fw-bold text-primary text-decoration-none text-reset" title="<?php echo apply_filters( 'text_defaults', 'more', $args->date_title ); ?>"><?php echo $args->date_title; ?></span>
    <?php endif; ?>
    <?php if($args->badge_url):?>
      <a href="<?php echo $args->badge_url; ?>" class="badge border ms-4 rounded-0 text-primary border-white text-uppercase text-mini fw-bold text-decoration-none text-reset" title="<?php echo apply_filters( 'text_defaults', 'more', $args->badge_title ); ?>"><?php echo $args->badge_title; ?></a>
    <?php endif; ?>
    </div>
    <?php if($args->main_title):?>
    <<?php echo $args->tag_title; ?> class="card-title fw-bold text-reset">
    <?php if($args->main_url):?>
      <a href="<?php echo $args->main_url; ?>" title="<?php echo apply_filters( 'text_defaults', 'more', $args->main_title ); ?>" class="text-reset text-decoration-none"><?php echo $args->main_title; ?></a>
    <?php else: ?>
      <?php echo $args->main_title; ?>
    <?php endif; ?>
    </<?php echo $args->tag_title; ?>>
    <?php endif; ?>
  </div>
</div>