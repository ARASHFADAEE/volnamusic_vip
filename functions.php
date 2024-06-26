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



function get_short_text($text){

    if(strlen($text) >= 15) {
        $text_short = substr($text, 0, 15) . "...";
        echo $text_short;
    }else{
        echo $text;
    }

}
add_action( 'init', 'get_short_text' );


//add views music count

function wpb_track_post_views($post_id) {
    if (!is_single()) return;
    if (empty($post_id)) {
        global $post;
        $post_id = $post->ID;
    }
    $views_key = 'wpb_post_views_count';
    $views = get_post_meta($post_id, $views_key, true);
    $views = ($views == '') ? 0 : $views;
    $views++;
    update_post_meta($post_id, $views_key, $views);
}
add_action('wp_head', 'wpb_track_post_views');

function wpb_get_post_views($post_id = ''){
    if (empty($post_id)) {
        global $post;
        $post_id = $post->ID;
    }
    $views_key = 'wpb_post_views_count';
    $views = get_post_meta($post_id, $views_key, true);
    $views = ($views == '') ? 0 : $views;
    return $views;
}

//short code for get view count music

function wpb_post_views_shortcode($atts){
    ob_start();
    $views = wpb_get_post_views();
    echo $views ;
    return ob_get_clean();
}
add_shortcode('post_views', 'wpb_post_views_shortcode');




