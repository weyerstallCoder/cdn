<?php
  global $wp_query;
  $total_results = $wp_query->found_posts;
?>
<section class="search-results pb-max pt-max bg-light">
  <div class="container">

  

  <?php if ( have_posts() ): ?>
    <h2 class="fw-bold mb-3 h1">Suchergebnisse</h2>
    <p class="text-small fw-medium">Es wurden <span class="fw-bold text-primary"><?php echo $total_results; ?></span> Einträge gefunden</p>
    <div class="row row-cols-1 g-3">
    <?php while ( have_posts() ): the_post();  ?>
      <div class="col">
      <?php 
        $args = array(
          'main_title' => get_the_title(),
          'main_text' => get_the_excerpt(),
          'main_url' => get_the_permalink(),
          'main_label' => 'Mehr erfahren',
        );
        do_action('organism_card_text', $args); 
      ?>
      </div>
    <?php endwhile;?>
    </div>
  <?php endif; ?>
  </div>
</section>