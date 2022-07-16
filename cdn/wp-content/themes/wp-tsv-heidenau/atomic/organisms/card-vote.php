<a href="<?php echo $args->main_url; ?>" title="<?php echo apply_filters( 'text_defaults', 'more', $args->main_title ); ?>" class="card card-blank rounded-2 text-white border-primary h-100 text-decoration-none <?php echo $args->class_border_width; ?>">
  <?php echo wp_get_attachment_image($args->main_image, 'medium', '', array( 'class' => 'card-img rounded-0 h-100 img-object-fit-cover' )); ?>
  <div class="card-img-overlay d-flex flex-column justify-content-end rounded-0 p-2">
  <?php if($args->main_title):?>
    <h4 class="card-title h6 fw-semibold text-reset mb-0">
    <?php if($args->class_icon):?> 
      <span class="badge bg-warning ls-0"><i class="<?php echo $args->class_icon; ?>"></i></span>
    <?php endif; ?>
    <?php echo $args->main_title; ?></h4>
  <?php endif; ?>
  </div>
</a>