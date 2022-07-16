<section class="bg-dark bg-pattern-zigzag text-white pt-max pb-max">
  <div class="container">
    <h2 class="text-white h1 fw-bold mb-4">Downloads</h2>
<?php if ( have_rows( 'dloads_rp' ) ) : ?>
  <div class="row row-cols-xl-4 g-4">
  <?php while ( have_rows( 'dloads_rp' ) ) : the_row(); ?>
    <div class="col">
    <?php 
      $args = array(
        'class_card' => 'h-100',
        'main_title' => get_sub_field( 'dloads_title' ),
        'badge_title' => 'PDF-Datei',
        'main_url' => get_sub_field( 'dloads_file' ),
        'button_label' => 'Download',
      );
      do_action('organism_card_action', $args); 
    ?>
    </div>
  <?php endwhile; ?>
  </div>
<?php endif; ?>

  </div>
</section>