<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php if(is_page('contacto')): ?>
      <a href="" id="lb">Como llegar?</a>
      <div id="hidden">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/comollegar.png" />
        <div class="close"></div>
      <div>
    <?php endif ?>

	</header><!-- .entry-header -->

  <div class="entry-content">
    <div class="box-wrap antiscroll-wrap">
      <div class="box">
        <div class="antiscroll-inner">
          <div class="box-inner">
		<?php the_content(); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
          </div>
        </div>
      </div>
    </div>


	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
