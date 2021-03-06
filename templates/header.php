<section class="top-bar">
<div class="container">
<ul>
<li><span class="hidden-xs"><i class="fa fa-phone"></i> <?php echo imaginaire_get_option('telephone'); ?></span>
<span class="visible-xs">
<a href="Tel:<?php echo imaginaire_get_option('telephone'); ?>">
<i class="fa fa-phone"></i> <?php echo imaginaire_get_option('telephone'); ?>
</a>
</span></li>
<li class="hidden-xs"><i class="fa fa-envelope-o"></i> <?php echo imaginaire_get_option('email'); ?></li>
</ul>
</div>
</section>
<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_directory'); ?>/dist/images/logo.png" class="logo" /></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav navbar-right']);
      endif;
      ?>
    </nav>
  </div>
</header>