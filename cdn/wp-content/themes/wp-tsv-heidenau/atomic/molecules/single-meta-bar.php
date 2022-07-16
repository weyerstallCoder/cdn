<nav class="navbar navbar-light bg-white border-bottom border-light mb-5 <?php echo $args->class_meta_bar; ?>">
  <div class="container-fluid p-0 justify-content-start">
    <span class="text-small fw-bold text-primary text-decoration-none">
      <?php echo 'vor '. esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') )); ?>
    </span>
  <?php if($args->badge_title):?>
    <span class="badge border border-primary ms-4 rounded-0 text-primary text-uppercase text-mini fw-bold text-decoration-none" ><?php echo $args->badge_title; ?></span>
  <?php endif; ?>
    <div class="vr mx-4"></div>
    <span class="text-small fw-bold text-primary text-decoration-none"><?php echo apply_filters( 'reading_time', get_the_ID() ); ?></span>
  </div>
</nav>