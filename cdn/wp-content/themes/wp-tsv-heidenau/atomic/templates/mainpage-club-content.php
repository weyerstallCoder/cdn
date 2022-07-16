<h2 class="fw-bold mb-3 h1">Werde ein Teil der TSV Heidenau Familie</h2>

<?php
  $data_club_pages = [
    '88' => array('badge_title' => 'Dein Ehrenamt'),
    '86' => array('badge_title' => 'Historie'),
    '84' => array('badge_title' => 'Mitgliedrschaft'),
  ];
  $query_club_pages = new WP_Query( array(
    'post_type' => 'page',
    'post__in' => array(88, 86, 84)
  ));
  if ( $query_club_pages->have_posts() ) : ?>
<div class="row row-cols-xl-3 border-cols gx-4 gy-4 mb-4">
  <?php while ( $query_club_pages->have_posts() ) : $query_club_pages->the_post(); ?>
  <div class="col border-end border-light">
  <?php 
    $args = array(
      'class_ratio' => 'ratio-16x9',
      'class_title_tag' => 'h5',
      'date_title' => 'Sportverein',
      'badge_title' => $data_club_pages[$query_club_pages->post->ID]['badge_title'],
      'badge_url' => get_the_permalink(),
      'main_title' => get_the_title(),
      'main_url' => get_the_permalink(),
      'main_image' => get_post_thumbnail_id(),
    );
    do_action('organism_card_vertical', $args); 
  ?>
  </div>
  <?php endwhile; wp_reset_postdata(); ?>
</div>
<?php endif; ?>