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
      <?php get_template_part('loop', 'page') ?>
    <?php else : ?>
      <?php get_template_part( 'loop', 'none' ); ?>
    <?php endif; ?>
    </main><!-- #main -->
  </div>
</div>

  
<?php get_footer(); ?>