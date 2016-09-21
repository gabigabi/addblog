<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package temeitor
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Advent+Pro:400,500,600,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<title>
<?php if(is_single()): ?>
  <?php 
    $post = get_post();
    // print_r($post);
    echo $post->post_title;   
  ?>
<?php else: ?>
  <?php wp_title( '|', true, 'right' ); ?>
<?php endif; ?>
</title>
<meta description="<?php echo $post->post_excerpt ?>">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Tienne' rel='stylesheet' type='text/css'>

<!-- Bug herd -->
<script type='text/javascript'>
(function (d, t) {
  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
  bh.type = 'text/javascript';
  bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=efic5j5qczvidyngq5euvq';
  s.parentNode.insertBefore(bh, s);
  })(document, 'script');
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45362554-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="container-fluid">
  		<header class="row main">
    		<div class="col-md-2">
          <h1><a href="http://www.addwebdesign.com">
            <img src=" <?php echo( get_template_directory_uri() . "/images/add-diseno-web.png" ) ; ?> " alt="<?php bloginfo( 'name' ); ?>"> 
            </a></h1>
    		</div>
       <div class="col-md-10">
       <aside class="rrss">
            <h1>Síguenos</h1>
            <ul class="rrss-list">
              <!-- <li>
                <a href="#" target="_blank">
            <img src=" <?php echo( get_template_directory_uri() . "/images/ico-facebook.png" ) ; ?> " alt="Siguenos en Facebook"> 
            </a>
              </li> -->
              <li>
                <a href="https://twitter.com/ADDcreativo" target="_blank">
            <img src=" <?php echo( get_template_directory_uri() . "/images/ico-twitter.png" ) ; ?> " alt="Síguenos en Twitter"> 
            </a>
              </li>
              <!-- <li>
                <a href="#" target="_blank">
            <img src=" <?php echo( get_template_directory_uri() . "/images/ico-instagram.png" ) ; ?> " alt="Síguenos en Instagram"> 
            </a>
              </li>
              <li>
                <a href="#" target="_blank">
            <img src=" <?php echo( get_template_directory_uri() . "/images/ico-pinterest.png" ) ; ?> " alt="Síguenos en Pinterest"> 
            </a>
              </li> -->
            </ul>
       </aside>
       <nav class="menu-container main">
               <?php wp_nav_menu( array( 
                          'theme_location' => 'principal',
                          'container'       => 'div',
                          'container_class' => '',
                          'container_id'    => '',
                          'menu_class'      => 'nav nav-pills',
                          'menu_id'         => ''
                         ) 
                       ); ?>        
       </nav>

       </div>
    	 </header>