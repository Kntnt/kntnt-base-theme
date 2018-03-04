<?php

add_action( 'after_setup_theme', function() {
	add_theme_support( 'fl-theme-builder-headers' );
	add_theme_support( 'fl-theme-builder-footers' );
	add_theme_support( 'fl-theme-builder-parts' );
});

add_filter( 'fl_theme_builder_part_hooks', function() {	
	return array(
		array(
			'label' => 'Page',
			'hooks' => array(
				'kntnt_base_before_page' => 'Before Header',
				'kntnt_base_after_page'  => 'After Header',
			)
		),
		array(
			'label' => 'Header',
			'hooks' => array(
				'kntnt_base_before_header' => 'Before Header',
				'kntnt_base_after_header'  => 'After Header',
			)
		),
		array(
			'label' => 'Content',
			'hooks' => array(
				'kntnt_base_before_content' => 'Before Content',
				'kntnt_base_after_content'  => 'After Content',
			)
		),
		array(
			'label' => 'Footer',
			'hooks' => array(
				'kntnt_base_before_footer' => 'Before Footer',
				'kntnt_base_after_footer'  => 'After Footer',
			)
		)
	);
});
