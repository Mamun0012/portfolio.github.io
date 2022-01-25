<?php
/**
 * The Words Pro Theme Customizer
 *
 * @package Words_Blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function words_blog_customize_register( $wp_customize ) {

	/**
	 * The Words Pro Header Optionl
	 *
	 * @package Words_Blog
	 */

	$wp_customize->add_section( 'top_bar_section',
	    array(
	    'title'      => esc_html__( 'Top Notice Bar Setting', 'words-blog' ),
	    'capability' => 'edit_theme_options',
	    'panel'      => 'theme_option_panel',
	    'priority'   => 1,
	    )
	);

	$wp_customize->add_setting('ed_top_notiece_bar',
	    array(
	        'default' => 1,
	        'capability' => 'edit_theme_options',
	        'sanitize_callback' => 'words_blog_sanitize_checkbox',
	    )
	);
	$wp_customize->add_control('ed_top_notiece_bar',
	    array(
	        'label' => esc_html__('Enable Top Notice Bar', 'words-blog'),
	        'section' => 'top_bar_section',
	        'type' => 'checkbox',
	    )
	);

	$wp_customize->add_setting(
	    'ed_top_notiece_bar_sticker_label',
	    array(
	        'default' => esc_html__( 'Info', 'words-blog' ),
	        'sanitize_callback' => 'sanitize_text_field'
	    )
	);
	$wp_customize->add_control(
	    'ed_top_notiece_bar_sticker_label',
	    array(
	        'label' => esc_html__('Sticker Label','words-blog'),
	        'type' => 'text',
	        'section' => 'top_bar_section'
	    )
	);

	$wp_customize->add_setting(
	    'ed_top_notiece_bar_title',
	    array(
	        'default' => esc_html__( 'The hedgehog was engaged in a fight with', 'words-blog' ),
	        'sanitize_callback' => 'sanitize_text_field'
	    )
	);
	$wp_customize->add_control(
	    'ed_top_notiece_bar_title',
	    array(
	        'label' => esc_html__('Notice Bar Title','words-blog'),
	        'type' => 'text',
	        'section' => 'top_bar_section'
	    )
	);

	$wp_customize->add_setting(
	    'ed_top_notiece_bar_link_label',
	    array(
	        'default' => esc_html__( 'Read More', 'words-blog' ),
	        'sanitize_callback' => 'sanitize_text_field'
	    )
	);
	$wp_customize->add_control(
	    'ed_top_notiece_bar_link_label',
	    array(
	        'label' => esc_html__('Link Label','words-blog'),
	        'type' => 'text',
	        'section' => 'top_bar_section'
	    )
	);

	$wp_customize->add_setting(
	    'ed_top_notiece_bar_link',
	    array(
	        'default' => esc_html__( 'Read More', 'words-blog' ),
	        'sanitize_callback' => 'esc_url_raw'
	    )
	);
	$wp_customize->add_control(
	    'ed_top_notiece_bar_link',
	    array(
	        'label' => esc_html__('Link','words-blog'),
	        'type' => 'text',
	        'section' => 'top_bar_section'
	    )
	);

}
add_action( 'customize_register', 'words_blog_customize_register' );