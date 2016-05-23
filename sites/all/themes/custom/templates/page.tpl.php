<div id="container" class="clearfix">

  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
    <?php if ($main_menu): ?>
      <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
    <?php endif; ?>
  </div>

  <header id="header" role="banner" class="clearfix">
      <div id="ostrich"></div>
	<?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
    <?php if ($site_name || $site_slogan): ?>
      <hgroup id="site-name-slogan">
        <?php if ($site_name): ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      </hgroup>
    <?php endif; ?>

    <?php print render($page['header']); ?>

    <?php if (!empty($page['navigation'])): ?>
      <nav id="navigation" role="navigation" class="clearfix">
        <?php if (!empty($page['navigation'])): ?> <!--if block in navigation region, override $main_menu and $secondary_menu-->
          <?php print render($page['navigation']); ?>
        <?php endif; ?>
      </nav> <!-- /#navigation -->
    <?php endif; ?>
  </header> <!-- /#header -->

  <div id="contentTop"></div>
  <section id="main" role="main" class="clearfix">
    <a id="main-content"></a>
    <div id="messages"><?php print $messages; ?></div>
    <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
    <?php //if ($breadcrumb): print $breadcrumb; endif;?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
    
    <?php if ($page['after_content']): ?>
      <div id="after-content" class="clearfix">
        <?php print render($page['after_content']); ?>
      </div>
    <?php endif; ?>
    
    <?php if ($page['inner_footer']): ?>
      <div class="hr"></div>
      <footer id="inner-footer" class="clearfix">
        <?php print render($page['inner_footer']); ?>
      </footer>
    <?php endif; ?>
    
  </section> <!-- /#main -->
  <div id="contentBottom"></div>

  <footer id="footer" role="contentinfo" class="clearfix">
    <?php print render($page['footer']) ?>
    <?php print $feed_icons ?>
  </footer> <!-- /#footer -->

</div> <!-- /#container -->
