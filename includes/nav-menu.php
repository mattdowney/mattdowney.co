<a class="menu-toggle">n</a>

<div id="gradient" class="full-menu full-menu-transition">
  <div class="full-menu-middle">
    <a class="menu-toggle menu-toggle-close">c</a>

    <div class="main-nav">

      <?php get_template_part('includes/logo'); ?>

      <ul>
        <li><a href="<?php bloginfo('wpurl'); ?>/about/">About</a></li>
        <li><a href="<?php bloginfo('wpurl'); ?>/work/">Work</a></li>
        <li><a href="<?php bloginfo('wpurl'); ?>/blog/">Blog</a></li>
        <li><a href="mailto:<?php echo antispambot( 'matt@mattdowney.co' );?>"><?php echo antispambot( 'Contact' );?></a></li>
    </ul>
  </div> <!-- End main-nav -->

    <div class="nav-search">
      <form class="searchform" method="get" action="<?php bloginfo( 'url' ); ?>">
        <input class="search" name="s" value="Search..." 
          onfocus="(this.value == 'Search...') && (this.value = '')"
          onblur="(this.value == '') && (this.value = 'Search...')" />
      </form>
    </div> <!-- End nav-search -->

  </div><!-- End full menu-middle -->
</div><!-- End full-menu -->