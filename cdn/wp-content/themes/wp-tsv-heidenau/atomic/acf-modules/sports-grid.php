<?php
  $query_sports_pages = new WP_Query( array(
    'post_type' => 'page',
    'post_parent' => 24,
    'order' => 'ASC',
    'orderby' => 'title',
    'posts_per_page' => -1
  ));
  if ( $query_sports_pages->have_posts() ) :
?>
<section class="mb-max mt-max container">
  <div class="row row-cols-xl-4 g-xl-5 g-4">
  <?php while ( $query_sports_pages->have_posts() ) : $query_sports_pages->the_post(); ?>
    <div class="col">
    <?php 
      $args = array(
        'main_title' => get_the_title(),
        'main_url' => get_the_permalink(),
        'main_text' => get_field('sports_short_description'),
      );
      do_action('organism_card_ratio_shadow', $args); 
    ?>
    </div>
  <?php endwhile; wp_reset_postdata();?>
    <div class="col">
    <?php 
      $args = array(
        'main_title' => 'Fragen?',
        'main_url' => get_the_permalink(126),
        'main_text' => 'In unseren FAQ findest du zahlreiche Fragestellung und Antworten.',
        'main_thumbnail' => 17,
        'button_label' => 'Zum FAQ',
      );
      do_action('organism_card_ratio_action', $args); 
    ?>
    </div>
  </div>
</section>
<?php endif; ?>