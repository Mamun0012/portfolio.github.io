<?php
/**
 * Functions
 *
 * @package Words Blog
 */

if ( ! function_exists( 'words_blog_enqueue_scripts' ) ) :
	
	function words_blog_enqueue_scripts() {

		wp_enqueue_style( 'words-blog-parent-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_script( 'words-blog-custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), '20151215', true );
		
	}

endif;

add_action( 'wp_enqueue_scripts', 'words_blog_enqueue_scripts');

require get_stylesheet_directory() . '/inc/customizer.php';