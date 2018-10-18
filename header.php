<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <!-- NAVIGATION -->
      <nav class="uk-navbar-container uk-padding-small" uk-navbar>
        <div class="uk-navbar-left">
          <a class="uk-navbar-item uk-logo uk-visible@s" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri() . '/img/logo-humaninc.svg'; ?>" width="150" height="150" alt="human inc logo" uk-svg></a>
          <a class="uk-navbar-item uk-logo uk-hidden@s" href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_template_directory_uri() . '/img/logo-humaninc.svg'; ?>" width="75" height="75" alt="human inc logo" uk-svg></a>
        </div>
        <div class="uk-navbar-item uk-dark uk-visible@s bs-motto">
          <p><?php bloginfo('description'); ?> <span uk-icon="quote-right"></span></p>
        </div>
        <div class="uk-navbar-right">
          <?php wp_nav_menu(
            array(
              'theme_location' => 'humaninc_menu',
              'container' => 'ul',
              'menu_class' => 'uk-subnav uk-subnav-divider uk-flex-nowrap uk-visible@l'
             ) ); ?>

           <!-- MOBILE OFFCANVAS -->
           <div class="uk-offcanvas-content uk-hidden@l">

             <a href="#hambie" uk-toggle uk-icon="menu" class="uk-position-top-right uk-margin-top uk-margin-right uk-dark"></a>

             <div id="hambie" uk-offcanvas>
               <div class="uk-offcanvas-bar">

                 <button class="uk-offcanvas-close" type="button" uk-close></button>

                 <?php wp_nav_menu(
                   array(
                     'theme_location' => 'humaninc_menu_mobile',
                     'container' => 'ul',
                     'menu_class' => 'uk-nav uk-nav-default'
                   ) ); ?>
               </div>
             </div>
           </div>
        </div>



      </nav>

    </header>
