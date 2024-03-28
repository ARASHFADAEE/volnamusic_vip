<?php



function volnamusic_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme','volnamusic_setup_theme');



function get_category_name() {
    $categories = get_the_category(); // بازگرداندن آرایه اطلاعات دسته بندی‌های پست
    if ( ! empty( $categories ) ) { // چک کردن آیا آرایه خالی نیست
        return $categories[0]->name; // برگرداندن نام اولین دسته بندی
    }
    return false; // اگر دسته بندی وجود نداشته باشد، برگرداندن false
}


function get_tag_name() {
    $tags = get_the_tags(); // بازگرداندن آرایه اطلاعات برچسب‌های پست
    if ( ! empty( $tags ) ) { // چک کردن آیا آرایه خالی نیست
        $first_tag = reset( $tags ); // بازگرداندن اولین برچسب از آرایه
        return $first_tag[0]->name; // برگرداندن نام اولین برچسب
    }
    return false; // اگر برچسب وجود نداشته باشد، برگرداندن false
}



function add_theme_scripts(){
    wp_enqueue_style('owl' , get_template_directory_uri() . '/css/owl.carousel.min.css' , array() , false , 'all');
    wp_enqueue_style('magnific' , get_template_directory_uri() . '/css/magnific-popup.css' , array() , false , 'all');
    wp_enqueue_style('select2' , get_template_directory_uri() . '/css/select2.min.css' , array() , false , 'all');
    wp_enqueue_style('paymentfont' , get_template_directory_uri() . '/css/paymentfont.min.css' , array() , false , 'all');
    wp_enqueue_style('slider' , get_template_directory_uri() . '/css/slider-radio.css' , array() , false , 'all');
    wp_enqueue_style('plyr' , get_template_directory_uri() . '/css/plyr.css' , array() , false , 'all');
    wp_enqueue_style('main' , get_template_directory_uri() . '/css/main.css' , array() , false , 'all');

    //اضافه کردن فایل جاوااسکریپت
    wp_enqueue_script('owl' , get_template_directory_uri() . '/js/owl.carousel.min.js' , array() , false , true);
    wp_enqueue_script('popup' , get_template_directory_uri() . '/js/jquery.magnific-popup.min.js' , array() , false , true);
    wp_enqueue_script('smooth' , get_template_directory_uri() . '/js/smooth-scrollbar.js' , array() , false , true);
    wp_enqueue_script('select2' , get_template_directory_uri() . '/js/select2.min.js' , array() , false , true);
    wp_enqueue_script('slider-radio' , get_template_directory_uri() . '/js/slider-radio.js' , array() , false , true);
    wp_enqueue_script('inputmask' , get_template_directory_uri() . '/js/jquery.inputmask.min.js' , array() , false , true);
    wp_enqueue_script('plyr' , get_template_directory_uri() . '/js/plyr.min.js' , array() , false , true);
    wp_enqueue_script('main' , get_template_directory_uri() . '/js/main.js' , array() , false , true);




}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

