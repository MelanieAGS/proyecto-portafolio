<?php


//para agregar menus perzonalizados
function register_menus(){
    register_nav_menus([
        'menu_principal' => __('Main menu'),
    ]);
}

add_action('init','register_menus');

//para agregar librerias
function my_libraries(){
    wp_enqueue_style('slicknav_styles','https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.0/slicknav.min.css',[],'1.0.0', true);
    wp_enqueue_script('slicknav_script','https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.0/jquery.slicknav.js',[],'1.0.0',true);
    wp_enqueue_script('scripts',get_stylesheet_directory_uri().'/assets/js/scripts.js',['jquery', 'slicknav_script'],'1.0.0',true);
}
add_action('wp_enqueue_scripts', 'my_libraries');









