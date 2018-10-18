    <footer id="footer" class="flex uk-child-width-1-3@s uk-text-center" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true">
      <div class="uk-card uk-light">
        <p>Human Inc. - &copy; <?php echo date('Y'); ?></p>
      </div>
      <div>
        <a href="<?php bloginfo( 'url' ); ?>">
          <img src="<?php echo get_template_directory_uri() . '/img/logo-humaninc-white.svg'; ?>" style="width:25%;" alt="logo">
        </a>
      </div>
      <div>
        <div class="uk-card uk-light">
          <p>p/a Voormalige Gravin Aleidaschool | Oostsingel 9 | 3112GC Schiedam</p>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
