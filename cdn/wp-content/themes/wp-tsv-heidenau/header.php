<?php

/**
 *@author:Dennis Weyerstallr
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php
  include(locate_template('template-parts/part_head_meta.php'));
  include(locate_template('template-parts/part_head_favicon.php'));
  ?>
  <?php wp_head(); ?>
</head>

<body>
  <?php include(locate_template('template-parts/part_header.php')); ?>