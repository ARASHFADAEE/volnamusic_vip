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



function get_category_name() {
    $categories = get_the_category(); // بازگرداندن آرایه اطلاعات دسته بندی‌های پست
    if ( ! empty( $categories ) ) { // چک کردن آیا آرایه خالی نیست
        return $categories[0]->name; // برگرداندن نام اولین دسته بندی
    }
    return false; // اگر دسته بندی وجود نداشته باشد، برگرداندن false
}