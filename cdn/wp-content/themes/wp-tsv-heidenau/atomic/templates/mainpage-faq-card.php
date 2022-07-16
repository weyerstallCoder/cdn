<span class="fw-bold mb-3 h1 d-block">&nbsp;</span>

<?php 
  $args = array(
    'class_ratio' => false,
    'main_title' => 'Fragen?',
    'main_url' => get_the_permalink(126),
    'main_text' => 'In unseren FAQ findest du zahlreiche Fragestellung und Antworten.',
    'main_thumbnail' => 17,
  );
  do_action('organism_card_ratio_action', $args); 
?>