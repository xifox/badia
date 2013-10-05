<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1"/>
<meta
     name="viewport"
     content="width=100%; 
             initial-scale=1;
             maximum-scale=1;
             minimum-scale=1; 
             user-scalable=no;"
/>
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Electromontajes Badía SRL",
  "image" : "http://www.electromontajebadia.com.ar/wp-content/themes/badia/images/logo-N.png",
  "telephone" : "0299 441 3112",
  "email" : "info@electromontajebadia.com.ar",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "PARQUE INDUSTRIAL NEUQUEN (ESTE) MANZANA R, LOTE 2B",
    "addressLocality" : "NEUQUEN",
    "addressCountry" : "ARGENTINA",
    "postalCode" : "8300"
  }
}
</script>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel= "javascript" type= "text/js" href="<?php bloginfo( 'template_url' ); ?>../../twentyeleven/js/tabs.js" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>../../badia/stylesheets/base.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>../../badia/stylesheets/layout.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>../../badia/stylesheets/skeleton.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>../../badia/stylesheets/styles.css" />
<link rel="stylesheet" type="text/css" media="screen and (max-width:960px)" href="<?php bloginfo( 'template_url' ); ?>../../badia/stylesheets/medium.style.css" />
<link rel="stylesheet" type="text/css" media="screen and (max-width:768px)" href="<?php bloginfo( 'template_url' ); ?>../../badia/stylesheets/small.style.css" />

<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
  
 <style>
   .roundabout-holder {
      list-style: none;
      padding: 0;
      margin: 0 auto;
      height: 300px;
      width: 800px;
   }
   .roundabout-moveable-item {
      height: 300px;
      width: 300px;
      cursor: pointer;

     
   }
   .roundabout-in-focus {
      cursor: auto;
   }
</style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-38598480-4', 'electromontajebadia.com.ar');
  ga('send', 'pageview');
</script>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
 </head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
			<hgroup>
				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>

<div id="slides">
        <div class="slides_container">

<?php
  $slideID = 33; 
  $slides = get_children(array('post_type' => 'attachment', 'post_parent' => $slideID, 'orderby' => 'menu_order','order' => 'ASC')); ?>
        <?php if ($slides == true) foreach($slides as $id => $attachment) : ?>
          <?php
            $img = wp_get_attachment_image_src($id, 'full');
            $imgth = wp_get_attachment_image_src($id, 'full');

?>
<div>
            <img data-original="<?php echo $img[0] ?>" class="lazy-slide" src="<?php echo $imgth[0]  ?>" width="<?php echo $img[1] ?>"  height="<?php echo $img[2] ?>"  alt="<?php $post->post_title ?>" />
</div>
        <?php endforeach; ?>

        </div>
        <a href="#" class="prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide-left.png" width="27" height="44" alt="Arrow Prev"></a>
        <a href="#" class="next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slide-right.png" width="27" height="44" alt="Arrow Next"></a>
      </div>

			<nav id="access" role="navigation">
				<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
				<?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
	</header><!-- #branding -->


	<div id="main">
