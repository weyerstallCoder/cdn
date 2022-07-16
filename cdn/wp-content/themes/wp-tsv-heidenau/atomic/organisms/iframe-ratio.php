<?php if($args->iframe_url):?>
<div class="ratio <?php echo $args->class_ratio; ?>">
  <iframe class="border border-4 border-primary rounded-2" src="<?php echo $args->iframe_url; ?>"></iframe>
</div>
<?php endif; ?>