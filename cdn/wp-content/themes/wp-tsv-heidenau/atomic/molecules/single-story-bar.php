<nav class="navbar navbar-light bg-white border-bottom border-light mb-5 <?php echo $args->class_meta_bar; ?>">
  <div class="container-fluid p-0 justify-content-start">
  <?php if($args->post_count_number):?>
    <span class="text-small fw-bold text-primary text-decoration-none">
      <i class="fa-solid fa-camera fs-4"></i>
      <span class="fw-bold fs-3 ms-2"><?php echo $args->post_count_number; ?></span>
    </span>
    <div class="vr mx-4"></div>
  <?php endif; ?>
  <?php if($args->badge_title):?>
    <span class="text-small fw-bold text-primary text-decoration-none"><?php echo $args->label_title; ?></span>
  <?php endif; ?>
  <?php if($args->badge_title):?>
    <span class="badge border border-primary ms-4 rounded-0 text-primary text-uppercase text-mini fw-bold text-decoration-none" ><?php echo $args->badge_title; ?></span>
  <?php endif; ?>
  <?php if($args->rights_title):?>
    <div class="vr mx-4"></div>
    <span class="text-small fw-bold text-primary text-decoration-none">Bildrechte: <?php echo $args->rights_title; ?></span>
  <?php endif; ?>
  </div>
</nav>