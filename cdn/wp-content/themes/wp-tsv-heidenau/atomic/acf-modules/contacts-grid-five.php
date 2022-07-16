<?php if(get_sub_field( 'contacts_grid_five_title' )):?>
<h2 class="fw-bold mb-3 h1"><?php the_sub_field( 'contacts_grid_five_title' ); ?></h2>
<?php endif; ?>
<?php if ( have_rows( 'contacts_grid_five_rp' ) ) : ?>
<div class="row row-cols-xl-4 border-cols g-2 mb-max">
  <?php while ( have_rows( 'contacts_grid_five_rp' ) ) : the_row(); ?>
  <div class="col">
  <?php 
    $args = array(
      'class_card' => 'card-roaster-hoody',
      'player_type' => 'hoody',
      'player_number' => false,
      'player_prename' => get_sub_field( 'contacts_grid_five_prename' ),
      'player_postname' => get_sub_field( 'contacts_grid_five_postname' ),
      'player_position' => get_sub_field( 'contacts_grid_five_position' ),
    );
    do_action('organism_card_roaster', $args); 
  ?>
  </div>
  <?php endwhile; ?>
</div>
<?php endif; ?>