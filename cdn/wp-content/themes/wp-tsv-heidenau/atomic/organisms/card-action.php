<div class="card card-blank border-0 rounded-0 bg-white <?php echo $args->class_card; ?>">
  <div class="card-body p-4 pb-0">
  <?php if($args->main_title):?>
    <h3 class="fw-bold">
      <?php if($args->main_url):?>
        <a href="<?php echo $args->main_url; ?>" title="<?php echo apply_filters( 'text_defaults', 'more', $args->main_title ); ?>" class="text-reset text-decoration-none" <?php echo $args->attr_value;?>><?php echo $args->main_title; ?></a>
      <?php else: ?>
        <?php echo $args->main_title; ?>
      <?php endif; ?>
    </h3>
  <?php endif; ?>
  <?php if($args->badge_title):?>
    <span class="badge border mb-2 rounded-0 text-uppercase text-mini fw-bold border-secondary text-secondary"><?php echo $args->badge_title; ?></span>
  <?php endif; ?>
    <hr class="mt-4 mb-0">
  </div>
<?php if($args->main_url):?>
  <div class="card-footer p-4 border-0 bg-transparent">
    <a class="btn btn-lg ls-2 rounded-1-min d-block fw-bold text-uppercase text-dark fs-6 <?php echo $args->class_button_color; ?>" href="<?php echo $args->main_url; ?>" title="<?php echo apply_filters( 'text_defaults', 'more', $args->main_title ); ?>" role="button" <?php echo $args->attr_value;?>><?php echo $args->button_label; ?></a>
  </div>
<?php endif; ?>
</div>
