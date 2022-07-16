<?php 
$class_text_image_section_row = 'row';
$class_text_image_section_col_small = 'col-xl-5';
$class_text_image_section_col_big = 'col-xl-6 offset-xl-1';
if (get_row_index() % 2 == 0) {
  $class_text_image_section_row = 'row flex-row-reverse';
  $class_text_image_section_col_small = 'col-xl-5 offset-xl-1';
  $class_text_image_section_col_big = 'col-xl-6';
}
?>
<section class="container mb-max mt-max">
  <div class="<?php echo $class_text_image_section_row; ?>">
    <div class="<?php echo $class_text_image_section_col_small; ?>">
      <?php the_sub_field( 'text_image_section_text' ); ?>
    </div>
    <div class="<?php echo $class_text_image_section_col_big; ?>">
    <?php if ( get_sub_field( 'text_image_section_img' ) ): ?>
      <figure class="ratio ratio-16x9 obj-fit-image mb-0">
        <?php echo wp_get_attachment_image(get_sub_field( 'text_image_section_img' ), 'full'); ?>
      </figure>
    <?php endif; ?>
    </div>
  </div>
</section>