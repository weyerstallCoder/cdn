<main class="main main-single bg-light" role="main">
  <div class="bg-dark bg-light-bottom-50 bg-pattern-zigzag pt-max position-relative">
    <div class="container container-single">
    <?php
      /**
       * intro
       */
      do_action($args->intro, $args); 
    ?>
    </div>
  </div>
  <div class="container container-single">
    <div class="<?php echo $args->class_container; ?>">
      <?php 
        /**
         * start single container
         */
        do_action($args->addon_bar, $args);
      ?>
      <?php the_content(); ?>