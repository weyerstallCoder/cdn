<?php

/**
 * @author:Dennis Weyerstall
 */

add_filter( 'text_defaults', 'text_defaults_callback', 10, 2);
add_filter( 'logo_placeholder', 'logo_placeholder_callback');
add_filter( 'player_trikot_type', 'player_trikot_type_callback');
add_filter( 'reading_time', 'reading_time_callback');
add_filter( 'back_link_button', 'back_link_button_callback');
add_filter( 'weekday', 'weekday_callback');
add_filter( 'total_fotos', 'total_fotos_callback');



/**
 * text defaults callback
 */
function text_defaults_callback($arg, $value){

  //all text defaults
  $arr_text_defaults = [
    'more' => 'Hier gibt es mehr Information zum Thema ',
  ];

  return $arr_text_defaults[$arg] . $value;
}

/**
 * logo placeholder fallback
 */
function logo_placeholder_callback($arg){
  return '<figure class="figure-logo m-0 ratio ratio-1x1 position-relative '.$arg['class'].'"><img loading="lazy" src="'.wp_get_attachment_url(371).'" alt=""><span class="text-uppercase position-absolute top-0 start-0 d-flex justify-content-center fs-5 ls-2 fw-semibold text-white">'.$arg['label'].'</span></figure>';
}

/**
 * Player trikot type
 */
function player_trikot_type_callback($arg){
  $trikotId = 0;
  switch ($arg){
    case 'gk':
      $trikotId = 21;
      break;
    case 'hoody':
      $trikotId = 204;
      break;
    case 'fld':
    default:
      $trikotId = 20;
      break;
  }
  return '<img class="position-absolute top-50 start-50 translate-middle d-block" src="'.wp_get_attachment_url($trikotId).'">';
}

/**
 * reading time
 */
function reading_time_callback($postid){
  $content = get_the_content($postid);
  $count_words = str_word_count( strip_tags( $content ) );
  $read_time = ceil($count_words / 250);

  return $read_time.' Min. Lesezeit';
}

/**
 * back link button
 */
function back_link_button_callback($args){
  return '<a class="text-primary fw-extrabold text-uppercase text-decoration-none" href="'.$args->back_url.'" title="'.$args->back_title.'" role="button"><span class="badge p-0 bg-transparent ls-0"><i class="fa-solid fa-arrow-left-long text-primary"></i></span> Zurück zur Übersicht</a>';
}

/**
 * back link button
 */
function weekday_callback($args){
  $weekday_name = ['Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag','Sonntag'];
  return $weekday_name[$args];
}

/**
 * 
 */
function total_fotos_callback($rags){
  $total_images = 0;
  if(get_field('story_board_rp')){
    $total_images = $total_images + count(get_field('story_board_rp', $rags));
  }
  if(get_field('story_gl')){
    $total_images = $total_images + count(get_field('story_gl', $rags));
  }
  if($total_images == 0){
    $total_images = '0x';
  }

  return $total_images;
}

?>