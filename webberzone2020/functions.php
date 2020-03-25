<?php
/**
 * WebberZone 2020 functions and definitions
 *
 * @package WZ_Theme_2020
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! function_exists( 'neve_child_load_css' ) ) :
	/**
	 * Load CSS file.
	 */
	function neve_child_load_css() {
		wp_enqueue_style( 'neve-child-style', trailingslashit( get_stylesheet_directory_uri() ) . 'style.min.css', array( 'neve-style' ), NEVE_VERSION );
	}
endif;
add_action( 'wp_enqueue_scripts', 'neve_child_load_css', 20 );


/**
 * Add javascript to header.
 *
 * @return void
 */
function neve_child_load_js() {
	?>
	<a href="#" class="scrollToTop"><i class="fas fa-arrow-circle-up fa-2x"></i></a>
	<script>
		jQuery(document).ready(function( $ ){

			//Check to see if the window is top if not then display button
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('.scrollToTop').fadeIn();
				} else {
					$('.scrollToTop').fadeOut();
				}
			});

			//Click event to scroll to top
			$('.scrollToTop').click(function(){
				$('html, body').animate({scrollTop : 0},800);
				return false;
			});

		});
	</script>
	<?php
}
add_action( 'wp_footer', 'neve_child_load_js', 5000 );
