<?php
$current_month = get_the_date('F');
if( $match_report_query->current_post === 0 ) { 
  $args = array(
    'main_text' => get_the_date('F Y'),
  );
  do_action('molecules_group_devider_title', $args); 
}else{ 
  $f = $match_report_query->current_post - 1;       
  $old_date =   mysql2date( 'F', $match_report_query->posts[$f]->post_date ); 
  if($current_month != $old_date) {
    $args = array(
      'main_text' => get_the_date('F Y'),
    );
    do_action('molecules_group_devider_title', $args); 
  }
}
