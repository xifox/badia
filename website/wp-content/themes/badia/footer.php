<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.roundabout.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-mousewheel.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/antiscroll.js" type="text/javascript"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/Slides/source/slides.min.jquery.js" type="text/javascript"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.lightbox_me.js"></script>
<script>
;(function($){
  $(function() {
    var lb = $('#lb'), lb2 = $('#lb2');
    lb.on('click', null, function(e) {
      $('#hidden').lightbox_me({
        centered: true, 
        overlayCSS: {background: 'black', opacity: .6}
      });
     e.preventDefault();
    });
   lb2.on('click', null, function(e) {
      $('#hidden2').lightbox_me({
        centered: true, 
        overlayCSS: {background: 'black', opacity: .6}
      });
     e.preventDefault();
    });

  })

  $(document).ready(function() {
    $('ul.slide').roundabout({
       btnNext: ".next",
       btnPrev: ".prev",
       autoplay: true,
       autoplayDuration: 5000,
       autoplayPauseOnHover: true,
       minScale: 0
    });
    $(function () {
        scroller = $('.box-wrap').antiscroll().data('antiscroll');
    });
    $(function(){
      $('#slides').slides({
        preload: true,
        preloadImage: '<?php echo get_stylesheet_directory_uri(); ?>/images/loading.gif',
        play: 5000,
        pause: 2500,
        hoverPause: true,
        ieffect: 'slide, fade',
        slideEasing: "easeOutQuad",
        fadeEasing: "easeOutQuad"
      });
    });
  });
  $(window).resize(function () {   scroller.refresh(); })
})(jQuery);
</script>


</body>
</html>
