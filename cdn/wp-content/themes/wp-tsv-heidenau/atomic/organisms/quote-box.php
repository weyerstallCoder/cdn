<?php if($args->main_text): ?>
<figure class="text-center blockquote-comment border border-3 border-primary py-4 px-5 mt-5 mb-5 position-relative">
  <i class="fa-solid fa-quote-right text-warning fs-2 position-absolute top-0 start-50 translate-middle bg-white px-3"></i>
  <blockquote class="blockquote mb-0">
    <p class="fst-italic text-primary"><?php echo $args->main_text; ?></p>
  </blockquote>
  <?php if($args->quote_author): ?>
  <figcaption class="blockquote-footer fw-semibold position-absolute top-100 start-50 translate-middle my-0 bg-white px-3"><?php echo $args->quote_author; ?></figcaption>
  <?php endif; ?>
</figure>
<?php endif; ?>