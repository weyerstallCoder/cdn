<?php
  //enqueue sources
  wp_enqueue_style('shedule-style');
  wp_enqueue_script('shedule-util');
  wp_enqueue_script('shedule-main');

  //add custom
  wp_add_inline_script( 'shedule-util', 'document.getElementsByTagName("html")[0].className += " js";' );

  //get data
  $post_times_data = [];
  $post_times_start = [];
  $post_times_end = [];
  $hall_data = [
    array(
      'label' => 'Halle Rechts',
      'icon_html' => '<i class="fa-solid fa-archway fs-4"></i><i class="fa-solid fa-angles-right text-warning fs-6 ms-1"></i>'
    ),
    array(
      'label' => 'Halle Links',
      'icon_html' => '<i class="fa-solid fa-angles-left text-warning fs-6 me-1"></i><i class="fa-solid fa-archway fs-4"></i>'
    ),
    array(
      'label' => 'Halle Gesamt',
      'icon_html' => '<i class="fa-solid fa-archway fs-4"></i><i class="fa-solid fa-arrows-left-right-to-line text-warning fs-6 ms-1"></i>'
    ),
    array(
      'label' => 'Halle Galerie',
      'icon_html' => '<i class="fa-solid fa-archway fs-4"></i><i class="fa-solid fa-arrows-to-circle text-warning fs-6 ms-1"></i>'
    ),
    array(
      'label' => 'Allianz-Arena',
      'icon_html' => '<i class="tsv-solid tsv-soccer-field-h"></i><i class="fa-solid fa-a text-warning fs-6 ms-1"></i>'
    ),
    array(
      'label' => 'Duden',
      'icon_html' => '<i class="tsv-solid tsv-soccer-field-v"></i><i class="fa-solid fa-d text-warning fs-6 ms-1"></i>'
    ),
    array(
      'label' => 'Trainingsplatz',
      'icon_html' => '<i class="tsv-solid tsv-soccer-field-v"></i><i class="fa-solid fa-d text-warning fs-6 ms-1"></i>'
    ),
  ];

  $week_short_names = array('mo','di','mi','do','fr','sa','so');
  $week_full_names = array('Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag','Sonntag');
  foreach( $week_short_names as $name){
    if( have_rows('shedule_gr_'.$name) ){
      while( have_rows('shedule_gr_'.$name) ){
        the_row();
        if( have_rows('shedule_rp') ){
          while( have_rows('shedule_rp') ){
            the_row();
            if(get_sub_field( 'shedule_start' )){
              array_push($post_times_start, get_sub_field( 'shedule_start' ));
            }
            if(get_sub_field( 'shedule_end' )){
              array_push($post_times_end, get_sub_field( 'shedule_end' ));
            }
          }
        }
      }
    }
  }

  //remove duplicates
  $post_times_start = array_unique($post_times_start);
  $post_times_end = array_unique($post_times_end);
  
  //sort
  sort($post_times_start);
  rsort($post_times_end);

  //set interval
  $period = new DatePeriod(
    new DateTime('today '.$post_times_start[0].':00'),
    new DateInterval('PT30M'),
    new DateTime('today '.$post_times_end[0].':00')
  );

  //get start and end time
  $post_times_diff_time = strtotime($post_times_end[0]) - strtotime($post_times_start[0]);
  $post_times_diff = ((date("G",$post_times_diff_time) * 2) + 1);
  wp_add_inline_style( 'shedule-style', ':root{--schedule-rows-number:'.$post_times_diff.';}' );

  // post loop counter
  $post_loop_counter = 0;
?>

<section class="mb-max mt-max container">

  <div class="cd-schedule cd-schedule--loading m-0 js-cd-schedule border border-4 border-primary rounded-3">
    <div class="cd-schedule__timeline">
      <ul>
        <?php foreach ($period as $dt): 
        ?>
        <li><span><?php printf(
            '%1$s' . "\n",
            $dt->format('H:i'),
            $dt->format('a'),
            $dt->modify('+30 minutes')->format('H:i')
          ); ?></span></li>
        <?php endforeach; ?>
      </ul>
    </div> <!-- .cd-schedule__timeline -->

    <div class="cd-schedule__events">
      <ul>
      <?php
      foreach( $week_short_names as $key=>$name){
        if( have_rows('shedule_gr_'.$name) ){
          while( have_rows('shedule_gr_'.$name) ): the_row(); 
            if( have_rows('shedule_rp') ):?>
          <li class="cd-schedule__group">
            <div class="cd-schedule__top-info"><span><?php echo $week_full_names[$key]; ?></span></div>
            <ul>
            <?php while( have_rows('shedule_rp') ): the_row(); 
              $hall_site_index = get_sub_field('shedule_side');
              $hall_site_str = false;
              $hall_icon_html = false;
              $event_item_time_diff = strtotime(get_sub_field( 'shedule_end' )) - strtotime(get_sub_field( 'shedule_start' ));

              if(isset($hall_data[$hall_site_index]['label']) && !empty($hall_data[$hall_site_index]['label'])){
                $hall_site_str = $hall_data[$hall_site_index]['label'];
              }
              if(isset($hall_data[$hall_site_index]['icon_html']) && !empty($hall_data[$hall_site_index]['icon_html'])){
                $hall_icon_html = $hall_data[$hall_site_index]['icon_html'];
              }

              array_push($post_times_data, array(
                'title' => get_sub_field( 'shedule_title' ),
                'start_time' => get_sub_field( 'shedule_start' ),
                'end_time' => get_sub_field( 'shedule_end' ),
                'weekday' => $week_full_names[$key],
                'hall_site' => $hall_site_str,
                'hall_icon_html' => $hall_icon_html,
              ));
            ?>
              <li class="cd-schedule__event">
                <a data-start="<?php echo get_sub_field( 'shedule_start' ); ?>" data-end="<?php echo get_sub_field( 'shedule_end' ); ?>" data-content="event-abs-circuit" data-event="event-<?php echo get_row_index(); ?>" href="#0" class="px-3 py-2" data-bs-toggle="modal" data-bs-target="#sheduleModal" data-shedule-id="<?php echo $post_loop_counter; ?>">
                  <em class="cd-schedule__name fs-5 lh-sm text-hyphens-auto"><?php echo get_sub_field( 'shedule_title' ); ?></em>
                <?php if($hall_site_index != ""): ?>
                  <?php if($event_item_time_diff >= 3600): ?>
                  <div class="position-absolute bottom-0 start-0 w-100 px-3 pb-2 text-white d-flex align-items-center justify-content-center">
                    <span class="me-2 fw-medium text-small"><?php echo $hall_site_str; ?></span>
                    <?php echo $hall_icon_html; ?>
                  </div>
                  <?php endif; ?>
                <?php endif; ?>
                </a>
              </li>
            <?php $post_loop_counter++; endwhile; ?>
            </ul>
          <?php endif; ?>
          </li>
          <?php endwhile;
        }
      }
      ?>
      </ul>
    </div>
    <div class="cd-schedule-empty"></div>

    <div class="cd-schedule-modal"> <header class="cd-schedule-modal__header"> <div class="cd-schedule-modal__content"> <h3 class="cd-schedule-modal__name fs-3 text-hyphens-auto mb-3"></h3> <span class="cd-schedule-modal__date"></span> </div><div class="cd-schedule-modal__header-bg"></div></header> <div class="cd-schedule-modal__body"> <div class="cd-schedule-modal__event-info"></div><div class="cd-schedule-modal__body-bg"></div></div><a href="#0" class="cd-schedule-modal__close text-replace">Close</a> </div>

    <div class="cd-schedule__cover-layer"></div>
  </div> <!-- .cd-schedule -->

</section>


<!-- Modal -->
<div class="modal fade" id="sheduleModal" tabindex="-1" aria-labelledby="sheduleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-0 border-0">
      <div class="modal-header border-0 px-4">
        <h5 class="modal-title fw-bold fs-2" id="sheduleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-4 pb-4 pt-0">
        <p class="mb-0 fs-3" id="sheduleModalTimes"></p>
      </div>
      <div class="modal-footer px-4 py-3 border-0 bg-primary text-white justify-content-start rounded-0">
        <p class="m-0 d-flex align-items-center">
          <span class="me-2 fw-medium fs-5 d-flex align-items-center" id="sheduleModalHallDir"></span>
          <span id="sheduleModalHallDirIcons" class="d-flex align-items-center"></span>
        </p>
      </div>
    </div>
  </div>
</div>

<?php add_action('wp_print_footer_scripts', function () use ($post_times_data) { ?>
<script>
var arrPostTimesData = <?php echo json_encode( $post_times_data); ?>;
var cardModalEl = document.getElementById('sheduleModal');
cardModalEl.addEventListener('show.bs.modal', function (event) {
  var sheduleIndex = jQuery(event.relatedTarget).data('shedule-id');
  var sheduleIndexData = arrPostTimesData[sheduleIndex];

  jQuery('#sheduleModalLabel').text(sheduleIndexData.title);
  jQuery('#sheduleModalTimes').text(sheduleIndexData.start_time+' - '+sheduleIndexData.end_time);
  if(sheduleIndexData.hall_site){
    jQuery('#sheduleModalHallDir').text(sheduleIndexData.hall_site);
  }
  if(sheduleIndexData.hall_icon_html){
    jQuery('#sheduleModalHallDirIcons').html(' '+sheduleIndexData.hall_icon_html);
  }
});
</script>
<?php })
?>