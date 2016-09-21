<?php /* Start the Loop */ ?>

<?php while ( have_posts() ) : the_post(); ?>

	<article <?php post_class(array('col-lg-3','col-md-4', 'col-sm-6')); ?> id="post-<?php the_ID(); ?>" >
	
		<h2>
			<a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
         	 <?php the_title() ?>
        	</a>
        </h2>
		<p><?php the_excerpt(); ?></p>
		
	</article>

<?php endwhile; ?>
<?php 
  // pagination TODO
?>
