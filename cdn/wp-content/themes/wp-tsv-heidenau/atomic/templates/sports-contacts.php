<h3 class="h1 fw-bold mb-4">Unsere Übungsleiter/-innen</h3>

<?php if ( have_rows( 'sports_contacts', $post->ID ) ) : ?>
<div class="row row-cols-xl-3 g-4">
  <?php while ( have_rows( 'sports_contacts', $post->ID ) ) : the_row(); ?>
  <div class="col">
  <?php
    $card_image_id = 95;
    $card_text = false;
    $card_text_html = '';
    if(get_sub_field( 'sports_contacts_phone', $post->ID )){
      $card_text_html .= '<a href="tel:'.get_sub_field( 'sports_contacts_phone', $post->ID ).'" class="d-block text-reset text-truncate">'.get_sub_field( 'sports_contacts_phone', $post->ID ).'</a>';
    }
    if(get_sub_field( 'sports_contacts_mail', $post->ID )){
      $card_text_html .= '<a href="mailto: '.get_sub_field( 'sports_contacts_mail', $post->ID ).'" class="d-block text-reset text-truncate">'.get_sub_field( 'sports_contacts_mail', $post->ID ).'</a>';
    }
    if($card_text_html){
      $card_text = $card_text_html;
    }
    if(get_sub_field( 'sports_contacts_image', $post->ID )){
      $card_image_id = get_sub_field( 'sports_contacts_image', $post->ID );
    }
    $args = array(
      'class_card' => 'card-member-max-size',
      'badge_title' => get_sub_field( 'sports_contacts_position', $post->ID ),
      'main_title' => get_sub_field( 'sports_contacts_fullname', $post->ID ),
      'main_image' => $card_image_id,
      'main_text' => $card_text,
    );
    do_action('organism_card_horizontal', $args); 
  ?>
  </div>
  <?php endwhile; ?>
</div>
<?php endif; ?>