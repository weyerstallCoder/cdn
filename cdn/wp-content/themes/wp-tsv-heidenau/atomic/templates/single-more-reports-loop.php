<h2 class="fw-bold mb-3 h1 text-center mt-5">Weitere Spielberichte</h2>

<?php
  $exclude_id = array( get_the_ID() );
  $post_type_name = 'spielbericht';
  $query_news_slider = new WP_Query( array(
    'post_type' => $post_type_name,
    'posts_per_page'=> 3,
    'post__not_in' => $exclude_id
  ));
  if ( $query_news_slider->have_posts() ) : ?>
<div class="row row-cols-xl-3 border-cols gx-4 gy-5 mb-max">
  <?php while ( $query_news_slider->have_posts() ) : $query_news_slider->the_post(); ?>
  <div class="col border-end border-light">
  <?php 
    $args = array(
      'class_ratio' => 'ratio-16x9',
      'class_title_tag' => 'h5 mb-0',
      'date_title' => 'vor '. esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') )),
      'badge_title' => 'News',
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