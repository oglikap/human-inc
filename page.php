<?php get_header(); ?>

<div class="uk-container">

  <h1 class="uk-text-center uk-heading-line">
    <span><?php the_title(); ?></span>
  </h1>

  <?php if( have_posts() ): while( have_posts() ): the_post(); ?>

  <div uk-grid>
    <div class="uk-width-expand@s">
      <?php the_content(); ?>
    </div>
    <div class="uk-width-1-3@s">
      <?php the_post_thumbnail(); ?>
    </div>
  </div>

<?php endwhile; else: ?>

  <p><?php e_( 'Sorry, niks gevonden op deze pagina qua content...' ); ?></p>

<?php endif; ?>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
