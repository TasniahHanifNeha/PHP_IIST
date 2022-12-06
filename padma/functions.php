<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );


register_sidebar( array(
    'name'=>'Top Right Logo',
    'id'=>'bdlogo',
    'before_widget'  => '',
	'after_widget'   => " ",
) );

register_sidebar( array(
    'name'=>'Hero Top',
    'id'=>'herotop',
    'before_widget'  => '',
	'after_widget'   => " ",
) );

register_sidebar( array(
    'name'=>'Hero Bottom Image',
    'id'=>'herobottom',
    'before_widget'  => '<div id="%1$s" class="widget %2$s hbimg1',
	'after_widget'   => "</div>\n",
) );

register_sidebar( array(
    'name'=>'Hero Body',
    'id'=>'herobody',
    'before_widget'  => '',
	'after_widget'   => "",
) );

register_nav_menus(
    array(
        'TM' => 'Primary',
    )
);




?>
