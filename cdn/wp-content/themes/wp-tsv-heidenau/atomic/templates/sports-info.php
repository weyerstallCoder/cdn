<?php if ( have_rows( 'sports_info', $post->ID ) ) : ?>
  <?php while ( have_rows( 'sports_info', $post->ID ) ) : the_row(); ?>
<div class="bg-white mb-4 p-5 lst-normal-size">
  <div class="row g-0">
    <div class="col-xl-4">
      <?php the_sub_field( 'sports_info_text_l', $post->ID ); ?>
    </div>
    <div class="col-xl-7 offset-xl-1">
      <?php the_sub_field( 'sports_info_text_r', $post->ID ); ?>
    </div>
  </div>
</div>
  <?php endwhile; ?>
<?php endif; ?>