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

  <div class="row">
  <div class="col-md-12">
    <main id="main" class="" role="main">
    <?php if ( have_posts() ) : ?>
      <?php get_template_part('loop','page') ?>
    <?php else : ?>
      <?php get_template_part( 'loop', 'none' ); ?>
    <?php endif; ?>
    </main><!-- #main -->
  </div>
  </div>
  <div class="row grid">  
    
  <?php
      // the query
         $args = array (
             'post_type' => 'post',
             'nopaging' => true
         );
          $the_query = new WP_Query( $args );
         ?>

   <?php if ( $the_query->have_posts() ) : ?>

         <!-- the loop -->

         <div class="grid-sizer"></div> <!-- Para establecer el ancho -->
        <div class="gutter-sizer"></div> <!-- Para que tenga gutter -->

         <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <?php get_template_part('content','masonry') ?>
                                

  <?php endwhile; ?>
         <!-- end of the loop -->

         <?php wp_reset_postdata(); ?>

  <?php else : ?>
     <p><?php echo 'El query no produjo resultados' ?></p>
   <?php endif; ?>


  </div>

  
<?php get_footer(); ?>