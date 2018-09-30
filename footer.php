    <footer id="footer" class="flex uk-child-width-1-3@s uk-text-center" uk-grid>
      <div>
        <p>Human Inc. - &copy; <?php echo date('Y'); ?></p>
      </div>
      <div>
        <a href="<?php bloginfo( 'url' ); ?>">
          <img src="<?php echo get_template_directory_uri() . '/img/logo-humaninc-white.svg'; ?>" style="width:25%;" alt="logo">
        </a>
      </div>
      <div>
        <ul class="uk-list">
          <li>P/a Voormalige Gravin Aleidaschool</li>
          <li>Oostsingel 9</li>
          <li>3112GC Schiedam</li>
        </ul>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
