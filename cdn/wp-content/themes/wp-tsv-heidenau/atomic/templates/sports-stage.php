<section class="bg-dark bg-pattern-zigzag pt-max pb-max text-white">
  <div class="container">
    <h1 class="text-reset fw-bold h-ultra lh-1 mb-5"><?php the_title(); ?></h1>
    <div class="row">
      <div class="col-xl-7">
      <?php if(get_post_thumbnail_id()):?>
        <figure class="ratio ratio-16x9 obj-fit-image mb-0">
          <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'large'); ?>
        </figure>
      <?php endif; ?>
      </div>
      <div class="col-xl-3">
        
        <div class="card card-blank bg-white border-0 rounded-0 text-white shadow-mask shadow-mask-secondary">
          <div class="card-body p-4 py-4-max lst-normal-size text-primary">
            <?php the_field( 'sports_note' ); ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>