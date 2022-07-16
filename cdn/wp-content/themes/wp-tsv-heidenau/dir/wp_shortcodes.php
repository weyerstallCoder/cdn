<?php

/**
 * @author: Dennis Weyerstall
 */

//======================================================================
// shortcodes
//======================================================================
/** [navi-icon] */
function nav_icon_shortcode_func( $atts ) {
  $params = shortcode_atts( array(
		'class' => ''
	), $atts );

  return '<span class="icon-svg-'.$params["class"].' icon-nav"></span>';
}
add_shortcode( 'nav-icon', 'nav_icon_shortcode_func' );

/** [font-awesome-helper] */
function font_awesome_helper_shortcode_func( $atts ) {
  $params = shortcode_atts( array(
		'class' => ''
	), $atts );

  return '<i class="'.$params["class"].' text-white fs-4"></i>';
}
add_shortcode( 'font-awesome-helper', 'font_awesome_helper_shortcode_func' );

/** [youtube_embed] */
function youtube_embed_shortcode_func( $atts ) {
  $params = shortcode_atts( array(
		'url' => false,
    'description' => false
	), $atts );

  ob_start();
  $args = array(
    'class_figure_overflow_space' => 'fg-half-offset-x mb-5',
    'iframe_url' => $params['url'],
    'iframe_target' => 'YouTube',
    'figcaption' => $params['description']
  );
  do_action('organism_iframe_video_ratio', $args);
	return ob_get_clean();
}
add_shortcode( 'youtube-embed', 'youtube_embed_shortcode_func' );

/** [iframe_embed] */
function iframe_embed_shortcode_func( $atts ) {
  $params = shortcode_atts( array(
		'url' => false,
	), $atts );

  ob_start();
  $args = array(
    'class_ratio' => 'ratio-16x9',
    'iframe_url' => $params['url'],
  );
  do_action('organism_iframe_ratio', $args); 
	return ob_get_clean();
}
add_shortcode( 'iframe-embed', 'iframe_embed_shortcode_func' );

/** [quote-box] */
function quote_box_shortcode_func( $atts ) {
  $params = shortcode_atts( array(
		'text' => false,
    'from' => false
	), $atts );

  ob_start();
  $args = array(
    'main_text' => $params['text'],
    'quote_author' => $params['from'],
  );
  do_action('organism_quote_box', $args);  
	return ob_get_clean();
}
add_shortcode( 'quote-box', 'quote_box_shortcode_func' );

/** [kader] */
function kader_shortcode_func( $atts ) {
  $params = shortcode_atts( array(
		'id' => false
	), $atts );
  $post_id = $params['id'];
  
  ob_start();
if ( have_rows( 'squad_rp', $post_id) ) :
	?>
<div class="row row-cols-xl-4 g-2"><?php while ( have_rows( 'squad_rp', $post_id ) ) : the_row(); ?><div class="col">
  <?php 
    $args = array(
      'player_type' => get_sub_field( 'squad_type' ),
      'player_number' => get_sub_field( 'squad_number' ),
      'player_prename' => get_sub_field( 'squad_prename' ),
      'player_postname' => get_sub_field( 'squad_postname' ),
      'player_position' => get_sub_field( 'squad_position' ),
    );
    do_action('organism_card_roaster', $args); 
  ?></div><?php endwhile; ?></div>
  <?php
else:
  echo '<span class="">Dieser Kader wird gerade überarbeitet!</span>';
endif;
	return ob_get_clean();
}
add_shortcode( 'kader', 'kader_shortcode_func' );