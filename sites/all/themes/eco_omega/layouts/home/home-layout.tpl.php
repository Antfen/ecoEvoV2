<div id="mm-page">
  <div class="l-page">
    <header class="l-header" role="banner">
      <div class="l-branding">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
        <?php endif; ?>

        <?php if ($site_name || $site_slogan): ?>
          <?php if ($site_name): ?>
            <h1 class="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
          <?php endif; ?>
        <?php endif; ?>

        <?php print render($page['branding']); ?>
      </div>

      <?php print render($page['header']); ?>
      <?php print render($page['navigation']); ?>
    </header>


    <div class="impact">

      <a id="top"></a>

      <div class="hp-box">
        <div class="hp-info-holder">
         <div class="scroll-button">
          <a href="#welcome-to-eco">
            <span></span>
            scroll
          </a>
         </div>
        </div>
      </div>

    </div>

    
    <div class="l-main">

      <div class="l-content" role="main">

        <a id="welcome-to-eco"></a>

        <div class="straplineHolder">
          <h1 class="strapline">The Marine Migration Coastal Tracker</h1>
        </div>

        <?php print render($page['highlighted']); ?>
        <?php print $breadcrumb; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div>
    </div>
     <div class="hp-info-holder-alt">
        <div class="scroll-button-up">
        <!--  <a href="#top" id="bottom">scroll up</a> -->
         <a href="#top">
          <span></span>
          scroll up
        </a>
        </div>
      </div>
    <footer class="l-footer" role="contentinfo">
      <?php print render($page['footer']); ?>
    </footer>
  </div>
</div>


