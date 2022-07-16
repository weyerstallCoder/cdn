<?php if ( have_rows( 'sportsteam_links' ) ) : ?>
<div class="row row-cols-xl-3 g-4">
	<?php while ( have_rows( 'sportsteam_links' ) ) : the_row(); ?>
  <div class="col">
  <?php 
    $args = array(
      'class_card' => 'h-100',
      'main_title' => get_sub_field( 'sportsteam_links_title', $post->ID ),
      'main_url' => get_sub_field( 'sportsteam_links_url', $post->ID ),
      'button_label' => 'Zur Website',
      'attr_value' => 'target="_blank" rel="noopener"',
    );
    do_action('organism_card_action', $args); 
  ?>
  </div>
	<?php endwhile; ?>
</div>
<?php endif; ?>