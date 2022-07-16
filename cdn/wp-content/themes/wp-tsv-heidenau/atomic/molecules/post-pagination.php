<div class="row row-cols-3 g-0">
  <div class="col">
    <?php previous_posts_link($args->button_label_next); ?>
  </div>
  <div class="col d-flex justify-content-center align-items-center">
    <p class="mb-0 fw-bold text-uppercase ptag-base text-primary">Seite <?php echo $args->paged; ?>/<?php echo $args->total;?></p>
  </div>
  <div class="col text-end">
    <?php next_posts_link($args->button_label_prev); ?>
  </div>
</div>