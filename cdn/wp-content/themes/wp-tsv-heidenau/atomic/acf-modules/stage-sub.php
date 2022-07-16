<?php
  $stage_title = get_the_title();
  $stage_links = false;
  $stage_section_class = ' pt-max pb-max';
  if(get_sub_field('stage_sub_title_seo')){
    $stage_title = get_sub_field('stage_sub_title_seo');
  }
  
  if ( $post->post_parent == 24 || is_page(120,111) ) {
    $stage_section_class = ' pt-max';
    $stage_links = array(
      array('label' => 'Platzbelegung', 'class_icon' => 'fa-solid fa-clock-rotate-left', 'url' => get_the_permalink(111)),
      array('label' => 'Hallenzeiten', 'class_icon' => 'fa-solid fa-archway', 'url' => get_the_permalink(120)),
    );
  }
?>
<section class="bg-dark bg-pattern-zigzag text-white<?php echo $stage_section_class; ?>">
  <div class="container">
    <div class="row">
      <div class="col-xl-7">
        <h1 class="text-reset fw-bold h-ultra lh-sm"><?php echo $stage_title; ?></h1>
      </div>
    </div>

  <?php if($stage_links): ?>
    <nav class="navbar navbar-dark ps-0 pe-0 pb-0 pt-max">
      <ul class="nav nav-icon mb-2 mb-lg-0">
        <?php foreach( $stage_links as $stage_link):?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $stage_link['url']; ?>"><i class="<?php echo $stage_link['class_icon']; ?> me-2"></i><?php echo $stage_link['label']; ?></a>
        </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  <?php endif; ?>
  </div>
</section>