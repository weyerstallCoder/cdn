<?php if(get_sub_field( 'contacts_grid_title' )):?>
<h2 class="fw-bold mb-3 h1"><?php the_sub_field( 'contacts_grid_title' ); ?></h2>
<?php endif; ?>
<?php if ( have_rows( 'contacts_grid_rp' ) ) : ?>
<div class="row row-cols-xl-2 border-cols g-5 mb-max">
  <?php while ( have_rows( 'contacts_grid_rp' ) ) : the_row(); ?>
  <div class="col border-end border-light">
  <?php 
    $args = array(
      'class_card' => 'card-member-max-size',
      'badge_title' => get_sub_field( 'contacts_grid_label' ),
      'main_title' => get_sub_field( 'contacts_grid_fullname' ),
      'main_image' => get_sub_field( 'contacts_grid_image' ),
      'main_text' => get_sub_field( 'contacts_grid_position' ),
    );
    do_action('organism_card_horizontal', $args); 
  ?>
  </div>
  <?php endwhile; ?>
</div>
<?php endif; ?>