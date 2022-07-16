<section class="mb-max mt-max container">
  <?php the_sub_field( 'gallery_grid_text' ); ?>

  <?php 
$story_gl_images = get_sub_field( 'gallery_grid_gl' );
if ( $story_gl_images ):  ?>
  <div class="row row-cols-xl-4 g-2">
  <?php foreach ( $story_gl_images as $story_gl_image ):?>
    <div class="col">
    <?php 
      $args = array(
        'lightbox_url' => '#',
        'image_id' => $story_gl_image,
        'image_alt' => 'Lorem Ipsum',
      );
      do_action('organism_image_gallery', $args); 
    ?>
    </div>
  <?php endforeach; ?>
  </div>
<?php endif; ?>
</section>