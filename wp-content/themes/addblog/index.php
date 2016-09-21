<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package temeitor
 */
get_header(); ?>


    <?php if ( have_posts() ) : ?>

      <?php if (is_single() ) : ?>

        <?php get_template_part('loop', 'single') ?>

      <?php elseif ( is_home() ) : ?>

        <?php
            // Solo muestro los últimos 4 posts
            // query_posts('showposts=8'); 
        ?>

        <div class="row">
          <div class="col-md-9">
            <div class="row grid">
              <div class="grid-sizer"></div>
              <?php get_template_part('loop') ?>
            </div>
          </div>
          <div class="col-md-3">
            <div class="catmenu">
              <h2>Leer Más</h2>
              <?php 
                  $categories = get_categories( array(
                      'orderby' => 'name',
                      'parent'  => 0,
                      'exclude' => array(1)
                  ) );
                   
                  foreach ( $categories as $category ) {
                      printf( '<h3><a href="%1$s">%2$s</a></h3><p>%3$s</p>',
                          esc_url( get_category_link( $category->term_id ) ),
                          esc_html( $category->name ),
                          esc_html( $category->description )
                      );
                  }
               ?>
             </div>
          </div>
        </div>

      <?php else: ?>

        <?php if (is_category()): ?>

            <h1><?php single_cat_title(); ?></h1>
          
        <?php endif ?>

        <div class="row">
          <?php get_template_part('loop','itemlist') ?>
        </div>
      <?php endif ?>

    <?php else : ?>
      <div class="row">
      <?php get_template_part( 'loop', 'none' ); ?>
      </div>
    <?php endif; ?>

<div class="clear"></div>
  
<?php get_footer(); ?>

