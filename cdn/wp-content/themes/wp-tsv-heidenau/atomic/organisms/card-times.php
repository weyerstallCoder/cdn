<div class="card card-blank border-0 rounded-0">
  <div class="card-body p-4">
    <div class="row g-0 border-bottom">
    <?php if($args->times_day): ?>
      <div class="col-9 pb-3 border-end">
        <p class="text-primary fw-bold h3"><?php echo $args->times_day; ?></p>
      </div>
    <?php endif; ?>
      <div class="col-3 pb-3 ps-4 d-flex flex-column justify-content-center">
        <a class="btn btn-lg ls-2 btn-warning rounded-1-min d-block fw-bold text-uppercase text-dark fs-6" href="<?php the_permalink(676); ?>" role="button">Jetzt mitmachen</a>
      </div>
    </div>
    <div class="pt-3">
      <ul class="nav text-uppercase fw-semibold list-unstyled text-grey-light">
      <?php if($args->times_time): ?>
        <li class="d-flex align-items-center me-4 lh-1">
          <i class="fa-solid fa-stopwatch me-1"></i>
          <span class="fw-medium"><?php echo $args->times_time; ?></span>
        </li>
      <?php endif; ?>
      <?php if($args->times_time): ?>
        <li class="d-flex align-items-center lh-1">
          <i class="fa-solid fa-location-dot me-1"></i>
          <span class="fw-medium"><?php echo $args->times_location; ?></span>
        </li>
      <?php endif; ?>
      </ul>
    </div>
  </div>
</div>