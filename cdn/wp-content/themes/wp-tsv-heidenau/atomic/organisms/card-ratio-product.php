<div class="ratio ratio-1x1">
  <div class="card card-blank shadow-mask shadow-mask-secondary border-0 rounded-0 bg-white h-100">
  <?php if($args->main_url):?>
    <a href="<?php echo $args->main_url; ?>" title="<?php echo apply_filters( 'text_defaults', 'more', $args->main_title ); ?>" class="card-body p-4 py-4-max pb-0 position-relative text-reset text-decoration-none">
      <img loading="lazy" class="position-absolute top-50 start-50 translate-middle d-block my-100" src="<?php echo wp_get_attachment_url($args->main_image); ?>" alt="TODO">
    </a>
  <?php endif; ?>
    <div class="card-footer p-4 border-0 bg-transparent d-flex">
      <div class="me-auto">
        <p class="text-primary fw-extrabold mb-0 lh-sm ptag-base"><?php echo $args->product_price; ?></p>
      <?php if($args->main_url):?>
        <a href="<?php echo $args->main_url; ?>" title="<?php echo apply_filters( 'text_defaults', 'more', $args->main_title ); ?>" class="text-primary text-decoration-none mb-0 lh-sm ptag-base"><?php echo $args->main_title; ?></a>
      <?php else: ?>
        <span class="text-primary d-block text-decoration-none mb-0 lh-sm ptag-base"><?php echo $args->main_title; ?></span>
      <?php endif; ?>
      </div>

    <?php if($args->main_url):?>
      <a href="" class="btn-circle text-primary rounded-circle border-0 d-flex justify-content-center align-items-center text-reset" type="button">
        <i class="fa-solid fa-cart-shopping"></i>
      </a>
    <?php endif; ?>
    </div>
  </div>
</div>