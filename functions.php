<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

add_theme_support('post-thumbnails');

register_nav_menus([
    'TM'=>'Primary',
    'FM'=>'Footer'
]);

register_sidebar([
    'name'=>'Main Banner',
    'id'=>'mainbanner',
    'before_widget'=>'',
    'after_widget'=>''
]);
register_sidebar([
    'name'=>'Side Image',
    'id'=>'sideimg',
    'before_widget'=>'<div class="s_img">',
    'after_widget'=>'</div>'
]);
register_sidebar([
    'name'=>'Side Video',
    'id'=>'sidevideo',
    'before_widget'=>'',
    'after_widget'=>''
]);
register_sidebar([
    'name'=>'Hero List',
    'id'=>'list',
    'before_widget'=>'',
    'after_widget'=>''
]);