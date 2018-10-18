<?php get_header(); ?>

<div class="uk-container uk-container-large" uk-scrollspy="cls:uk-animation-fade; delay:100">
  <h2 class="uk-padding uk-heading-line uk-text-center"><span>Eerste deel van Human Inc. in januari 2019 op tournee!</span></h2>

  <?php //* The Query
  $exec_query = new WP_Query( array (
  'post_type' => 'producties',
  'orderby' => 'menu_order',
  'posts_per_page' => 1
  ) );

  //* The Loop
  if ( $exec_query->have_posts() ) { ?>
    <div uk-grid>
      <?php while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
      <div class="uk-width-expand@s">
        <div class="uk-card uk-card-default">
          <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'medium-large' ); ?> style="background-image: url('<?php echo $backgroundImg[0]; ?>'); background-repeat:no-repeat;background-position:25% 20%;">
          </div>
          <div class="uk-card-body">
            <h1 class="uk-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <p><?php echo(get_the_excerpt()); ?></p>
          </div>
          <div class="uk-card-footer">
              <a href="<?php the_permalink(); ?>" class="uk-button uk-button-text">Lees verder</a>
          </div>
        </div>

      </div>
      <?php
         endwhile;
         //* Restore original Post Data
       wp_reset_postdata();}?>

      <div class="uk-width-1-3@s">
        <?php //* The Query
        $exec_query = new WP_Query( array (
        'post_type' => 'nieuws',
        'orderby' => 'menu_order',
        'posts_per_page' => 3
        ) );

        //* The Loop
        if ( $exec_query->have_posts() ) { ?>
          <?php while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>

            <div class="uk-card" style="box-shadow: 1px 1px 0 #f5f5f5;">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto">
                            <img width="40" height="40" src="<?php echo get_template_directory_uri() . '/img/logo-humaninc-40x40.png'; ?>">
                        </div>
                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom">  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="uk-text-meta uk-margin-remove-top"><?php the_date(); ?></p>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body">
                  <?php the_excerpt(); ?>

                </div>
                <div class="uk-card-footer">
                    <a href="<?php the_permalink(); ?>" class="uk-button uk-button-text">Lees verder</a>
                </div>
            </div>


        <?php
           endwhile;
           //* Restore original Post Data
         wp_reset_postdata();}?>
      </div>
   </div>
   <?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
