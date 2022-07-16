<div class="<?php echo $args->class_ratio; ?>">
  <div class="card card-blank border-0 rounded-0 text-white h-100 <?php echo $args->class_card_bg; ?>">
    <div class="card-head p-4 py-4-max pb-0 d-flex align-items-center">
    <?php if($args->main_thumbnail):?>
      <figure class="figure-thumbnail rounded-circle d-flex bg-white align-items-center justify-content-center ratio ratio-1x1 p-3 col-4 mb-0 me-3">
        <img loading="lazy" src="<?php echo wp_get_attachment_url($args->main_thumbnail); ?>" alt="TODO" class="p-3">
      </figure>
    <?php endif; ?>
    <?php if($args->main_title):?>
      <h3 class="fw-bold text-reset h-mega"><?php echo $args->main_title; ?></h3>
    <?php endif; ?>
    </div>
  <?php if($args->main_text):?>
    <div class="card-body p-4 py-3 pb-0">
      <p class="text-reset fw-bold lh-sm"><?php echo $args->main_text; ?></p>
    </div>
  <?php endif; ?>
  <?php if($args->main_url):?>
    <div class="card-footer p-4 border-0 bg-transparent">
      <a class="btn btn-lg ls-2 btn-dark rounded-1-min d-block fw-bold text-uppercase text-white fs-6" href="<?php echo $args->main_url; ?>" title="<?php echo apply_filters( 'text_defaults', 'more', $args->main_title ); ?>" role="button"><?php echo $args->button_label; ?></a>
    </div>
  <?php endif; ?>
  </div>
</div>