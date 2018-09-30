<?php

// Template name: Nieuws

get_header();
 ?>

 <div class="uk-container uk-margin-top">

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

 <?php //* The Query
 $exec_query = new WP_Query( array (
 'post_type' => 'nieuws',
 'orderby' => 'menu_order',
 //  'job_role'  => 'executive',
 //'offset' => 3,
 'posts_per_page' => -1
 ) );

 //* The Loop
 if ( $exec_query->have_posts() ) { ?>

   <div class="uk-child-width-1-2 uk-child-width-1-3@m uk-text-center uk-margin-top" uk-grid="masonry: true">
     <?php while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
       <div>
         <div class="uk-card uk-card-default">
           <div class="uk-card-media-top">
             <?php the_post_thumbnail('medium'); ?>
           </div>
           <div class="uk-card-body">
             <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
           </div>
           <div class="uk-card-footer">
               <a href="<?php the_permalink(); ?>" class="uk-button uk-button-text">Lees verder</a>
           </div>
         </div>

       </div>

     <?php endwhile; ?>
   </div>
   <?php //* Restore original Post Data
   wp_reset_postdata();}?>

 <?php get_sidebar(); ?>

 </div>

 <?php get_footer(); ?>
