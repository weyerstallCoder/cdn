<?php
  $query_keyfacts = [
    array(
      'pre_label' => 'Seit',
      'keyfact' => '98 Jahre',
      'post_label' => 'Sportverein in Heidenau',
    ),
    array(
      'pre_label' => 'Über',
      'keyfact' => '300',
      'post_label' => 'Vereinsmitglieder aktiv und passiv',
    ),
    array(
      'pre_label' => 'Mit',
      'keyfact' => '10',
      'post_label' => 'Attraktiven Sportangeboten für Klein und Groß',
    ),
  ];
?>
<section class="container mb-max mt-max">
  <div class="row row-cols-xl-3 g-5">
    <?php foreach( $query_keyfacts as $query_item ):?>
    <div class="col">
    <?php 
      $args = array(
        'pre_title' => $query_item['pre_label'],
        'main_title' => $query_item['keyfact'],
        'post_title' => $query_item['post_label'],
      );
      do_action('organism_hero_numbers', $args); 
    ?>
    </div>
    <?php endforeach; ?>
  </div>
</section>