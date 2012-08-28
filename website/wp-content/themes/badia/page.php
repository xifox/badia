<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

  <div id="primary">
    <div class="box-wrap antiscroll-wrap">
      <div class="box">
        <div class="antiscroll-inner">
          <div class="box-inner">
            <div id="content" role="main">
            <?php while ( have_posts() ) : the_post(); ?>
              <?php get_template_part( 'content', 'page' ); ?>
              <?php// comments_template( '', true ); ?>
            <?php endwhile; // end of the loop. ?>
            </div><!-- #content -->
          </div>
        </div>
      </div>
    </div>
  </div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
