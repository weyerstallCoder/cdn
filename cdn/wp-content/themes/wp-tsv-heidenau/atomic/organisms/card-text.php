<div class="card card-blank border-0 rounded-0">
  <div class="card-body p-4">
  <?php if($args->main_title): ?>
    <h4 class="text-primary fw-bold h4"><?php echo $args->main_title; ?></h4>
  <?php endif; ?>
  <?php if($args->main_text): ?>
    <p class="ptag-base mb-3"><?php echo $args->main_text; ?></p>
  <?php endif; ?>
  <?php if($args->main_url): ?>
    <p class="mb-0 text-primary ptag-base">
      <a class="text-reset fw-extrabold text-uppercase text-decoration-none" href="<?php echo $args->main_url; ?>" title="#" role="button">
        <?php echo $args->main_label; ?> <span class="badge p-0 bg-transparent ls-0"><i class="fa-solid fa-arrow-right-long text-primary"></i></span>
      </a>
    </p>
  <?php endif; ?>
  </div>
</div>