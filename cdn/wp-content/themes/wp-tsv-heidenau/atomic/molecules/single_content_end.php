      
      <?php 
      if($args->back_url){
        echo apply_filters('back_link_button', $args);
      }

      /**
       * social share bar
       */
      do_action('organism_share_footer'); 
      
      /**
       * add addon bars
       */
      if($args->addons){
        foreach( $args->addons as $addon ){
          include(locate_template(TEMPLATES.'/'.$addon.'.php'));
        }
      }
      ?>
    </div>
  </div>
</main>