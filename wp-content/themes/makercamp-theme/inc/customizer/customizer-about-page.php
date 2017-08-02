<?php
function makercamp_about_customizer( $wp_customize ) {
	global $makercamp_defaults_customizer_values;

	/**
	 * Section in customizer for Get Started page
	 */

	$wp_customize->add_section(
		'makercamp__about_hero',
		array(
			'title'       => 'Getting Started, Hero',
			'priority'    => 209,
		)
	);

	$wp_customize->add_section(
		'makercamp_first_section_about',
		array(
			'title'       => 'Getting Started, 1st Panel',
			'priority'    => 209,
		)
	);

	$wp_customize->add_section(
		'makercamp_second_section_about_page',
		array(
			'title'       => 'Getting Started, 2nd Panel',
			'priority'    => 209,
		)
	);


	/**
	 * Hero
	 */
	$wp_customize->add_setting(   // Hero
		'about_hero_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'about_hero_title' ],
		)
	);
	$wp_customize->add_control(
		'about_hero_title',
		array(
			'label'   => 'Hero title',
			'section' => 'makercamp__about_hero',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // Hero text
		'about_hero_text',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'about_hero_text' ],
		)
	);
	$wp_customize->add_control(
		'about_hero_text',
		array(
			'label'   => 'Hero paragraph',
			'section' => 'makercamp__about_hero',
			'type'    => 'textarea',
		)
	);

	/**
	 * 1st panel
	 */
	$wp_customize->add_setting(   // Title
		'section_first_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'section_first_title' ],
		)
	);
	$wp_customize->add_control(
		'section_first_title',
		array(
			'label'   => 'Title',
			'section' => 'makercamp_first_section_about',
			'type'    => 'text',
		)
	);
	$wp_customize->add_setting(   // 1st paragraph
		'section_first_text_first',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'section_first_text_first' ],
		)
	);
	$wp_customize->add_control(
		'section_first_text_first',
		array(
			'label'   => '1st paragraph',
			'section' => 'makercamp_first_section_about',
			'type'    => 'textarea',
		)
	);
	$wp_customize->add_setting(   // 2nd paragraph
		'section_first_text_second',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'section_first_text_second' ],
		)
	);
	$wp_customize->add_control(
		'section_first_text_second',
		array(
			'label'   => '2nd paragraph',
			'section' => 'makercamp_first_section_about',
			'type'    => 'textarea',
		)
	);
	$wp_customize->add_setting(   // 3rd paragraph
		'section_first_text_third',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'section_first_text_third' ],
		)
	);
	$wp_customize->add_control(
		'section_first_text_third',
		array(
			'label'   => '3rd paragraph',
			'section' => 'makercamp_first_section_about',
			'type'    => 'textarea',
		)
	);

	$wp_customize->add_setting(   // 4th paragraph
		'section_first_text_fourth',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'section_first_text_fourth' ],
		)
	);
	$wp_customize->add_control(
		'section_first_text_fourth',
		array(
			'label'   => '4th paragraph',
			'section' => 'makercamp_first_section_about',
			'type'    => 'textarea',
		)
	);


	/**
	 * 2nd panel of Getting Started
	 */
	$wp_customize->add_setting(   // Title
		'second_section_title',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_title' ],
		)
	);
	$wp_customize->add_control(
		'second_section_title',
		array(
			'label'   => 'Title',
			'section' => 'makercamp_second_section_about_page',
			'type'    => 'text',
		)
	);

	$wp_customize->add_setting(   // paragraph
		'second_section_subtitle',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_subtitle' ],
		)
	);
	$wp_customize->add_control(
		'second_section_subtitle',
		array(
			'label'   => 'Paragraph',
			'section' => 'makercamp_second_section_about_page',
			'type'    => 'textarea',
		)
	);


	$wp_customize->add_setting(   // picture
		'second_section_picture',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_picture' ],
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'second_section_picture',
			array(
				'label'    => 'Image',
				'section'  => 'makercamp_second_section_about_page',
				'settings' => 'second_section_picture'
			)
		)
	);

	$wp_customize->add_setting(   // link
		'second_section_link',
		array(
			'default' => $makercamp_defaults_customizer_values[ 'second_section_link' ],
		)
	);
	$wp_customize->add_control(
		'second_section_link',
		array(
			'label'   => 'URL',
			'section' => 'makercamp_second_section_about_page',
			'type'    => 'text',
		)
	);
}

add_action( 'customize_register', 'makercamp_about_customizer' );