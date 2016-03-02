<?php

/**
 * @file
 * Display Suite 2 column template.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?>>
  
  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <<?php print $left_wrapper ?> class="col-sm-3">
    <?php print $left; ?>
  </<?php print $left_wrapper ?>>

  <<?php print $right_wrapper ?> class="col-sm-9">
    <?php print $right; ?>
  </<?php print $right_wrapper ?>>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
