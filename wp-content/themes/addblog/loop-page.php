<?php /* Start the Loop */ ?>

<?php while ( have_posts() ) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php  post_class(); //post_class(array('col-md-6', 'otra-clase')); ?>>
    <header class="entry-header">
      <figure>
        <?php the_post_thumbnail('large'); ?>
      </figure>
      <h1><?php the_title() ?></h1>
    </header><!-- .entry-header -->
    <div class="entry-content">
        <?php the_content() ?>
    </div><!-- .entry-content -->
  </article><!-- #post-## -->
<?php endwhile; ?>
<?php 
  // pagination TODO
?>
