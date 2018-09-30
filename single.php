<?php get_header(); ?>

  <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
    <div class="uk-container uk-margin-top">
      <h2 class="uk-heading-line uk-text-center"><span><?php the_title(); ?></span></h2>
      <div class="uk-grid-divider" uk-grid>
        <div class="uk-width-expand@s">
          <?php the_content(); ?>
        </div>
        <div class="uk-width-1-3@s">
          <?php the_post_thumbnail(); ?>
        </div>
      </div>
    <?php endwhile; endif; ?>
    <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>
