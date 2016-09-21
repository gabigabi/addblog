<?php /* Start the Loop */ ?>

<div class="grid-sizer"></div> <!-- Para establecer el ancho -->
<div class="gutter-sizer"></div> <!-- Para que tenga gutter -->

<?php while ( have_posts() ) : the_post(); ?>

   <?php get_template_part('content','masonry') ?>

<?php endwhile; ?>
<?php 
  // pagination TODO
?>
