<?php get_header(); ?>

  <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
    <h2 class="line-between"><?php the_title(); ?></h2>
    <div class="" uk-grid>
      <div class="uk-width-expand@s">
        <?php the_content(); ?>
      </div>
      <div class="uk-width-1-3@s">
        <?php the_post_thumbnail(); ?>
      </div>
    </div>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>
