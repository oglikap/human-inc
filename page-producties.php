<?php

// Template name: Producties

get_header();
 ?>

 <div class="uk-container uk-margin-top uk-margin-bottom">

   <h1 class="uk-text-center uk-heading-line">
     <span><?php the_title(); ?></span>
   </h1>

   <?php if( have_posts() ): while( have_posts() ): the_post(); ?>

   <div class="uk-grid-divider" uk-grid>
     <div class="uk-width-expand@s uk-card uk-margin" uk-scrollspy="cls:uk-animation-fade">
       <?php the_content(); ?>
     </div>
     <div class="uk-width-1-3@s">
       <?php the_post_thumbnail(); ?>
     </div>
   </div>

 <?php endwhile; else: ?>

   <p><?php e_( 'Sorry, niks gevonden op deze pagina qua content...' ); ?></p>

 <?php endif; ?>

 <?php //* The Query
 $exec_query = new WP_Query( array (
 'post_type' => 'producties',
 'orderby' => 'menu_order',
 //  'job_role'  => 'executive',
 //'offset' => 3,
 'posts_per_page' => -1
 ) );

 //* The Loop
 if ( $exec_query->have_posts() ) { ?>

   <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center uk-margin-top" uk-grid="masonry: true">
     <?php while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>


       <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'full' ); ?> style="background-image: url('<?php echo $backgroundImg[0]; ?>'); background-repeat:no-repeat;">
          <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
            <h1 style="text-shadow: 1px 1px 1px black;" uk-parallax="opacity: 0,1; y: 100,0; scale: 2,1; viewport: 0.5;"><?php the_title(); ?></h1>
            <!-- <p class="uk-text-bold" uk-parallax="opacity: 0,1; y: 100,0; scale: 0.5,1; viewport: 0.5;"><//?php echo(get_the_excerpt()); ?></p> -->
          </div>
        </div>

     <?php endwhile; ?>
   </div>

   <?php //* Restore original Post Data
   wp_reset_postdata();}?>

 <?php get_sidebar(); ?>

 </div>

 <?php get_footer(); ?>
