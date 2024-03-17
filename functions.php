<?php



function volnamusic_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    // add_image_size('article',313,181,true);

    // register_nav_menus(
    //     array(
    //         'main-menu' => __( 'جایگاه فهرست اصلی ' ),
    //         'top-menu' => __( 'جایگاه فهرست بالای سایت' )
    //     )
    // );
}
add_action('after_setup_theme','volnamusic_setup_theme');