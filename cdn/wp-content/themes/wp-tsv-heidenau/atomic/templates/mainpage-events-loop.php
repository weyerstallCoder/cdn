<h2 class="fw-bold mb-3 h1">Top Aktionen</h2>

<?php
  $post_type_name = 'aktionen';
  $query_news_slider = new WP_Query( array(
    'post_type' => $post_type_name,
    'posts_per_page'=> 2,
  ));
  if ( $query_news_slider->have_posts() ) : ?>
<div class="row row-cols-xl-2 border-cols g-5 mb-max">
  <?php while ( $query_news_slider->have_posts() ) : $query_news_slider->the_post(); ?>
  <div class="col border-end border-light">
  <?php 
    $args = array(
      'class_icon' => 'fa-solid fa-bolt',
      'date_title' => 'vor '. esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') )),
      'badge_title' => 'Aktionen',
      'badge_url' => get_post_type_archive_link($post_type_name),
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