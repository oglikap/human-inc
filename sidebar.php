<div id="sidebar" class="uk-padding">
  <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
    <?php if( is_active_sidebar( 'sidebar-1' ) ): ?>
      <?php dynamic_sidebar( 'sidebar-1' ) ?>
    <?php endif; ?>
    <?php if( is_active_sidebar( 'sidebar-2' ) ): ?>
      <?php dynamic_sidebar( 'sidebar-2' ) ?>
    <?php endif; ?>
    <?php if( is_active_sidebar( 'sidebar-3' ) ): ?>
      <?php dynamic_sidebar( 'sidebar-3' ) ?>
    <?php endif; ?>

  </div>
</div>
