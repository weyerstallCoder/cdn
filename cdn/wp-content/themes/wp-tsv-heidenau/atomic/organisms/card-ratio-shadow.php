<div class="<?php echo $args->class_ratio; ?>">
  <div class="card card-blank shadow-mask border-0 rounded-0 text-white h-100 <?php echo $args->class_card_bg; ?> <?php echo $args->class_card_shadow; ?>">
    <div class="card-body p-4 py-4-max pb-0">
    <?php if($args->main_title):?>
      <h3 class="fw-bold text-reset text-hyphens-auto <?php echo $args->class_headline; ?>">
      <?php if($args->main_url):?>
        <a href="<?php echo $args->main_url; ?>" title="<?php echo apply_filters( 'text_defaults', 'more', $args->main_title ); ?>" class="text-reset text-decoration-none"><?php echo $args->main_title; ?></a>
      <?php else: ?>
        <?php echo $args->main_title; ?>
      <?php endif; ?>
      </h3>
    <?php endif; ?>
    <?php if($args->main_text):?>
      <p class="text-reset fw-medium lh-sm"><?php echo $args->main_text; ?></p>
    <?php endif; ?>
    </div>
    <div class="card-footer p-4 border-0 bg-transparent">
      <a class="text-reset fw-extrabold text-uppercase text-decoration-none" href="<?php echo $args->main_url; ?>" title="<?php echo apply_filters( 'text_defaults', 'more', $args->main_title ); ?>" role="button">
          <?php echo $args->button_label; ?>
        <span class="badge p-0 bg-transparent ls-0"><i class="fa-solid fa-arrow-right-long"></i></span>
      </a>
    </div>
  </div>
</div>