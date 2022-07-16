<?php 
  $page_list = get_pages('sort_column=menu_order&sort_order=asc&child_of=24');
  $arr_pages = array();

  foreach ($page_list as $page_item) {
    $arr_pages[] += $page_item->ID;
  }

  $page_current = array_search(get_the_ID(), $arr_pages);
  if(!empty($arr_pages[$page_current-1])){
    $page_prev_id = $arr_pages[$page_current-1];
  }
  if(!empty($arr_pages[$page_current+1])){
    $page_next_id = $arr_pages[$page_current+1];
  }
?>
<section class="bg-white pt-max pb-max">
  <div class="container">
    <div class="row">
      <div class="col-xl-4">
        <p><a class="fw-extrabold text-uppercase text-decoration-none text-primary" href="<?php the_permalink(24); ?>" role="button" title="TODO:">
          <span class="badge p-0 bg-transparent ls-0"><i class="fa-solid text-primary fa-arrow-left-long"></i></span>
          Zurück zur Übersicht
        </a></p>
        <p class="text-primary mb-0">Inhalte unvollständig oder Fehlerhafte Links? Schreib eine E-Mail direkt an unseren <a href="mailto:info@tsv-heidenau.de" title="TODO:">Support</a>.</p>
      </div>
      <div class="col-xl-6 offset-xl-2 d-flex justify-content-end">
        <div class="hstack gap-3 align-items-baseline">
        <?php if (!empty($page_prev_id)): ?>
          <a class="btn btn-lg btn-lg-x ls-2 btn-primary rounded-1-min d-block fw-bold text-uppercase text-white fs-6" href="<?php echo get_permalink($page_prev_id); ?>" role="button" title="TODO:">
            Zum Sportbereich <?php echo get_the_title($page_prev_id); ?>
          </a>
        <?php endif; ?>
        <?php if (!empty($page_next_id)): ?>
          <a class="btn btn-lg btn-lg-x ls-2 btn-primary rounded-1-min d-block fw-bold text-uppercase text-white fs-6" href="<?php echo get_permalink($page_next_id); ?>" role="button" title="TODO:">
            Zum Sportbereich <?php echo get_the_title($page_next_id); ?>
          </a>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>