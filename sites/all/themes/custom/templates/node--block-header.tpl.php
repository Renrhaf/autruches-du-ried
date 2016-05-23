<?php if (!$page): ?>
  <article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php endif; ?>
  <div class="content"<?php print $content_attributes; ?>>
    <?php print render($content['field_image']); ?>
    <div class="block-header-title"><?php print $node->title; ?></div>
    <?php print render($content['body']); ?>      
  </div>
<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif; ?>
