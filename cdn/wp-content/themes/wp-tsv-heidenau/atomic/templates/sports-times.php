<h3 class="h1 fw-bold mb-4">Unsere Trainingszeiten</h3>

<?php if ( have_rows( 'sports_times', $post->ID ) ) : ?>
<div class="row g-4">
  <?php while ( have_rows( 'sports_times', $post->ID ) ) : the_row(); ?>
  <div class="col-xl-10">
    <?php 
      $sports_times_day = '';
      if(get_sub_field( 'sports_times_day', $post->ID ) == 'x'){
        $sports_times_day = get_sub_field( 'sports_times_title', $post->ID );
      }else{
        $sports_times_day = apply_filters('weekday', get_sub_field( 'sports_times_day', $post->ID )).'<small class="d-block mt-1 fs-6 text-uppercase opacity-25">'.get_sub_field( 'sports_times_title', $post->ID ).'</small>';
      }
      $args = array(
        'times_day' => $sports_times_day,
        'times_time' => get_sub_field( 'sports_times_start', $post->ID ),
        'times_location' => get_sub_field( 'sports_times_location', $post->ID ),
      );
      do_action('organism_card_times', $args); 
    ?>
  </div>
  <?php endwhile; ?>
</div>
<?php else: ?>
<div class="row g-4">
  <div class="col-xl-5">

    <div class="card card-blank border-0 rounded-0 bg-white <?php echo $args->class_card; ?>">
      <div class="card-body p-4">
        <p class="mb-0">Trainingszeiten werden aktuell überarbeitet. Bitte kommt gerne zu einem späteren Zeitpunkt wider.</p>
      </div>
    </div>

  </div>
</div>
<?php endif; ?>