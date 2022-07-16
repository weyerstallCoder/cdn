<?php if($args->tabs): 
  global $post;
  global $global_args;
  $global_args = $args;
  ?>
<section class="bg-light pb-max">
  <nav class="bg-primary pt-3 nav-center">
    <div class="justify-content-center g-0 border-0 nav nav-tabs" id="nav-tab" role="tablist">
    <?php 
      foreach($args->tabs as $key=>$tab_item): 
        $tab_class_active = ' active';
        if($key > 0){
          $tab_class_active = '';
        }
    ?>
      <button class="nav-link text-uppercase fw-semibold rounded-0 border-0<?php echo $tab_class_active; ?>" id="nav-<?php echo sanitize_title($tab_item['label']); ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?php echo sanitize_title($tab_item['label']); ?>" type="button" role="tab" aria-controls="nav-<?php echo sanitize_title($tab_item['label']); ?>" aria-selected="true"><?php echo $tab_item['label']; ?></button>
    <?php endforeach; ?>
    </div>
  </nav>
  <div class="tab-content container pt-max" id="nav-tabContent">
  <?php 
    foreach($args->tabs as $key=>$tab_item): 
      $tab_class_active = ' show active';
      if($key > 0){
        $tab_class_active = '';
      }
  ?>
    <div class="tab-pane fade<?php echo $tab_class_active; ?>" id="nav-<?php echo sanitize_title($tab_item['label']); ?>" role="tabpanel" aria-labelledby="nav-<?php echo sanitize_title($tab_item['label']); ?>-tab">
    
      <?php 
       if(isset($tab_item['part_name'])){
        include(locate_template(TEMPLATES.'/'.$tab_item['part_name'].'.php'));
       }
      ?>

    </div>
  <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>