<?php

/**
 * @author:Dennis Weyerstall
 */
get_header(); 

/**
 * start single container
 */
$args = array(
  'class_container' => 'pb-5',
  'class_meta_bar' => 'ps-8 pe-8 py-3',
  'intro' => 'organism_card_overlay',
  'tag_title' => 'h1',
  'badge_title' => 'Fotos',
  'class_center' => 'text-center',
  'main_title' => get_the_title(),
  'main_image' => get_post_thumbnail_id(),
  'addon_bar' => 'molecules_single_story_bar',
  'post_count_number' => apply_filters('total_fotos', get_the_ID()),
  'label_title' => get_field( 'story_date' ),
  'rights_title' => get_field( 'story_rights' ),
);
do_action('molecules_single_content_start', $args);

  if ( have_rows( 'story_board_rp' ) ) : ?>
  <div class="row row-cols-1 gx-4 gy-5">
    <?php while ( have_rows( 'story_board_rp' ) ) : the_row(); ?>
    <div class="col">
      <div class="row g-0">
        <div class="col-xl-4">
          <?php 
            $args = array(
              'class_elem' => 'fs-1',  
              'main_text' => '0'.get_row_index(),
            );
            do_action('molecules_group_devider_title', $args); 
          ?>
          <p class="fw-bold mb-1 me-5"><?php the_sub_field( 'story_title' ); ?></p>
          <p class="mb-0 lh-sm me-5"><?php the_sub_field( 'story_text' ); ?></p>
        </div>
        <div class="col-xl-8">
        <?php if(get_sub_field( 'story_image' )):?>
          <figure class="ratio ratio-16x9 obj-fit-image mb-0">
            <?php echo wp_get_attachment_image(get_sub_field( 'story_image' ), 'large'); ?>
          </figure>
        <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
  <?php endif;

  $story_gl_images = get_field( 'story_gl' );
  if ( $story_gl_images ):  ?>
  <div class="row row-cols-xl-4 g-2 mb-max mt-max">
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
  <?php endif;

/**
 * start single container
 */
$args = array(
  'back_url' => get_post_type_archive_link('bild-story'),
  'back_title' => 'Zurück zu den Storys',
  'addons' => array(
    'single-more-story-loop',
  ),
);
do_action('molecules_single_content_end', $args);

get_footer(); ?>