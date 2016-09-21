 <?php // Determinar si la imagen que viene es alta o corta 

    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    $size = getimagesize($url);
    $imgHeight = $size[1];
    $imgWidth = $size[0];
    $imgProp = $imgWidth / $imgHeight;
    $imgCut1 = 2.00; 
    $imgCut2 = 1; 
    $imgCut3 = 0.5; 
  ?>

  <?php if ( in_category('destacada') ):  // Foto Destacada ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(array('grid-item','grid-item--height3', 'grid-item--width2','tile')); ?>>

  <?php elseif ( $imgProp > $imgCut1 ):  // Foto Apaisada ?>
     <?php // echo "Apaisada" ?>
     <article id="post-<?php the_ID(); ?>" <?php post_class(array('grid-item','tile')); ?>>

  <?php elseif ( $imgCut1 >= $imgProp && $imgProp > $imgCut2 ): // Foto Cuadrada ?>
     <?php //echo "Foto Cuadrada" ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(array('grid-item', 'grid-item--height2','tile')); ?>>

  <?php elseif ( $imgCut2 >= $imgProp && $imgProp > $imgCut3 ): // Foto Alta ?>
     <?php //echo "Foto Alta" ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(array('grid-item', 'grid-item--height3','tile')); ?>>

  <?php else : // Foto Altisima  ?>
     <?php //echo "Foto Altísima" ?> 
    <article id="post-<?php the_ID(); ?>" <?php post_class(array('grid-item', 'grid-item--height4','tile')); ?>>

  <?php endif ?> 


      <div class="overflow">
        <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
        <?php the_post_thumbnail( 'medium'); ?>
        <?php // the_post_thumbnail( 'thumbnail', array( 'class' => 'img-responsive' ) ); ?>
        </a>
      </div>
      <h1>
        <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
          <?php the_title() ?>
        </a>
      </h1>
    <div class="entry-content">
<!--       <p>Tamaño de la imagen <?php print_r($size) ?></p>
      <p>Ancho <?php echo($size[0]) ?> y Alto <?php echo($size[1]) ?> </p> -->
      <?php if (is_single() || is_page()): ?>
        <?php //the_content() ?>
      <?php else: ?>
        <?php //the_excerpt() ?>
      <?php endif ?>
    </div><!-- .entry-content -->
    <footer class="entry-footer">
      <p class="tag-categoria">
        <?php the_category(', ') ?>
      </p>
    </footer><!-- .entry-footer -->
  </article><!-- #post-## -->