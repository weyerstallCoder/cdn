<?php if($args->iframe_url):?>
<figure class="<?php echo $args->class_figure_overflow_space; ?>">
  <div class="ratio mb-1 <?php echo $args->class_ratio; ?>">
    <iframe class="rounded-2" src="<?php echo $args->iframe_url; ?>" title="<?php echo $args->iframe_target; ?> video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <figcaption class="figure-caption fw-medium text-truncate"><i class="fa-solid fa-video me-2"></i><?php echo $args->figcaption; ?> • <?php echo $args->iframe_target; ?></figcaption>
</figure>
<?php endif; ?>