<div class="card card-blank border-0 rounded-0 <?php echo $args->class_card; ?>">
  <div class="row g-0">
    <?php if($args->main_image):?>
    <div class="col-md-4">
      <?php echo wp_get_attachment_image($args->main_image, 'medium', '', array( 'class' => 'img-fluid rounded-0 w-100 h-100 img-object-fit-cover' )); ?>
    </div>
    <?php endif; ?>
    <div class="col-md-8 bg-primary">
      <div class="card-body py-4-max px-4 text-white">
      <?php if($args->badge_title):?>
        <span class="badge border mb-3 rounded-0 text-secondary border-secondary text-uppercase text-mini fw-bold"><?php echo $args->badge_title; ?></span>
      <?php endif; ?>
      <?php if($args->main_title):?>
        <h5 class="card-title text-reset h3 fw-bold"><?php echo $args->main_title; ?></h5>
      <?php endif; ?>
      <?php if($args->main_text):?>
        <p class="card-text"><?php echo $args->main_text; ?></p>
      <?php endif; ?>
      </div>
    </div>
  </div>
</div>