<header class="banner">
  <div class="container">
    <div class="header-wrap">
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img class="header-logo" width="325" src="/kfg/wp-content/themes/kfs/dist/images/kfs-logo.jpg" alt="<?php bloginfo('name'); ?>" /></a>
      <div class="header-right">
        To Request an Appointment,<br>
        <strong>Call (718) 340-3611</strong><br>
        <?php get_search_form(); ?>
      </div>
    </div>
  </div>
  <nav class="nav bar navbar-default nav-primary" role="navigation">
    <div class="navbar-header"> 
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
        <span class="sr-only">Toggle navigation</span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
      </button> 
    </div> 
    <div id="nav-container" class="container collapse navbar-collapse navbar-ex1-collapse">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'nav',
          'menu' => 'top_navigation',
          'depth' => 3,
          'container' => true,
          'menu_class' => 'nav'
        ]);
      endif;
      ?>
    </div>
  </nav>
</header>
