<?php if ( have_rows( 'pages_grid_rp' ) ) : ?>
<div class="row row-cols-xl-2 border-cols g-5 mb-max">
  <?php while ( have_rows( 'pages_grid_rp' ) ) : the_row();
    $post_id = get_sub_field( 'pages_grid_id' ); 
    if ( get_post_status ( $post_id ) == 'publish' ):?>
  <div class="col border-end border-light">
  <?php 
    $args = array(
      'class_icon' => get_sub_field( 'pages_grid_icon_class' ),
      'date_title' => get_sub_field( 'pages_grid_label' ),
      'badge_title' => get_sub_field( 'pages_grid_badge' ),
      'badge_url' => get_the_permalink($post_id),
      'main_title' => get_the_title($post_id),
      'main_url' => get_the_permalink($post_id),
      'main_image' => get_post_thumbnail_id($post_id),
    );
    do_action('organism_card_vertical', $args); 
  ?>
  </div>
    <?php endif; ?>
  <?php endwhile; ?>
</div>
<?php endif; ?>