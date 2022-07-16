<section class="faq pt-max bg-light<?php if($total_modules == get_row_index()){echo ' pb-max';}else{echo ' pb-1';} ?>">
  <div class="container">
    <?php the_sub_field('faq_text'); ?>

    <div class="row g-0">
      <div class="col-xl-8">

      <?php if ( have_rows( 'faq_rp' ) ) : 
        $faq_id = substr(md5(uniqid(rand(1,6))), 0, 8);?>
        <div class="accordion accordion-flush mt-3" id="accordion-<?php echo $faq_id; ?>">
        <?php while ( have_rows( 'faq_rp' ) ) : the_row(); ?>
          <div class="accordion-item border-0 rounded-0 mb-2">
            <h2 class="accordion-header" id="flush-<?php echo $faq_id.'-'.get_row_index(); ?>">
              <button class="accordion-button collapsed fw-semibold fs-5 text-primary" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php echo $faq_id.'-'.get_row_index(); ?>" aria-expanded="false" aria-controls="flush-collaspse-<?php echo $faq_id.'-'.get_row_index(); ?>"><?php the_sub_field( 'faq_rp_title' ); ?></button>
            </h2>
            <div id="flush-collapse-<?php echo $faq_id.'-'.get_row_index(); ?>" class="accordion-collapse collapse border-0" aria-labelledby="flush-<?php echo $faq_id.'-'.get_row_index(); ?>" data-bs-parent="#accordion-<?php echo $faq_id; ?>">
              <div class="accordion-body ptag-base-wrap lst-default fw-medium py-4"><?php the_sub_field( 'faq_rp_text' ); ?></div>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
      <?php endif; ?>

      </div>
    </div>

  </div>
</section>