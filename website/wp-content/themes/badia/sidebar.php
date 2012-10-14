<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
    <div id="secondary" class="widget-area" role="complementary">
      <h1 id="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/logo-N.png" alt="logo" width="249" height="290" /></a></h1>
      <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        
        <aside id="archives" class="widget">
          <h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
          <ul>
            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
          </ul>
        </aside>

        <aside id="meta" class="widget">
          <h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
          <ul>
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <?php wp_meta(); ?>
          </ul>
        </aside>

      <?php endif; // end sidebar widget area ?>
   <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?> 
</div><!-- #secondary .widget-area -->
<?php endif; ?>
