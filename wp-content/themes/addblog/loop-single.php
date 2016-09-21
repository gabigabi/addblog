<?php /* Start the Loop */ ?>

<?php while ( have_posts() ) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(array('row')); ?>>
      <div class="row">
        <div class="col-md-6">
            <?php the_post_thumbnail( 'large', array( 'class' => 'img-responsive' ) ); ?>
        </div>    
        <div class="col-md-6">
            <p class="small"><?php the_category(', ') ?></p>
          <h1><?php the_title() ?></h1>
          <div class="entry-content">
              <?php the_content() ?>
              <div id="share"></div>
          </div><!-- .entry-content -->
        </div>    
    </div>
  </article><!-- #post-## -->
<?php endwhile; ?>
<?php 
  // pagination TODO
?>

