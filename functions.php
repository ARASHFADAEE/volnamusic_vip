<?php

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

function volnamusic_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
	add_theme_support('category-thumbnails');

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



function no_index_404(){
	if(is_404()){
		echo '<meta name="robots" content="noindex, nofollow" />';
	}
	
}

add_action('wp_head','no_index_404');



add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function custom_loginlogo_url($url) {
    return 'https://volnamusic.ir';
}

function custom_login_img() {
   echo '<style>#login h1 a {background-image:url(https://volnamusic.ir/wp-content/uploads/2024/05/cropped-logoghhh.png</style>';
 }
add_filter('login_head', 'custom_login_img', 999);
function add_login_stylesheet() {
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/wp-login-dashboard.css" />';
}
add_action('login_head', 'add_login_stylesheet');

function add_admin_stylesheet() {
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/wp-login-dashboard.css" />';
}
add_action('admin_head', 'add_admin_stylesheet');

function mwp_remove_footer_admin () {
    echo '<span id="footer-thankyou">Developed by <a href="#" target="_blank">M.ArashFadaee</a></span>';
}
add_filter( 'admin_footer_text', 'mwp_remove_footer_admin' );

// /remove menu wordpress dashbord/
// function remove_wp_logo_admin_bar() {
//     global $wp_admin_bar;
//     $wp_admin_bar->remove_menu('wp-logo');
// }
// add_action('wp_before_admin_bar_render', 'remove_wp_logo_admin_bar', 0);
// 
// 
// 
/*remove menu wordpress dashbord*/
function remove_wp_logo_admin_bar() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'remove_wp_logo_admin_bar', 0);

function remove_wps_hide_login_menu() {
    remove_submenu_page('options-general.php', 'whl_settings');
}
add_action('admin_menu', 'remove_wps_hide_login_menu');

/*remove tollbar menu*/
function remove_admin_bar_menus() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('customize');
    $wp_admin_bar->remove_menu('search');
    $wp_admin_bar->remove_menu('rank-math');

}
add_action('wp_before_admin_bar_render', 'remove_admin_bar_menus', 999);



/*remove xml-rpc*/
add_filter('xmlrpc_enabled', '__return_false');

/*remove wordpress version*/
function wp_version_remove_version() {
return '';
}
add_filter('the_generator', 'wp_version_remove_version');




/*	Disable REST API*/
remove_action('template_redirect', 'rest_output_link_header', 11);

/*
	Disable REST API links in HTML <head>
	<link rel='https://api.w.org/' href='https://example.com/wp-json/' />
*/
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');

/*
	Disable REST API
*/
if (version_compare(get_bloginfo('version'), '4.7', '>=')) {
	
	add_filter('rest_authentication_errors', 'disable_wp_rest_api');
	
} else {
	
	disable_wp_rest_api_legacy();
	
}

function disable_wp_rest_api($access) {
	
	if (!is_user_logged_in() && !disable_wp_rest_api_allow_access()) {
		
		$message = apply_filters('disable_wp_rest_api_error', __('REST API restricted to authenticated users.', 'disable-wp-rest-api'));
		
		return new WP_Error('rest_login_required', $message, array('status' => rest_authorization_required_code()));
		
	}
	
	return $access;
	
}

function disable_wp_rest_api_allow_access() {
	
	$post_var = apply_filters('disable_wp_rest_api_post_var', false);
	
	if (!empty($post_var)) {
		
		if (isset($_POST[$post_var]) && !empty($_POST[$post_var])) return true;
		
	}
	
	return false;
	
}

function disable_wp_rest_api_legacy() {
	
    // REST API 1.x
    add_filter('json_enabled', '__return_false');
    add_filter('json_jsonp_enabled', '__return_false');
	
    // REST API 2.x
    add_filter('rest_enabled', '__return_false');
    add_filter('rest_jsonp_enabled', '__return_false');
	
}

function disable_wp_rest_api_plugin_links($links, $file) {
	
	if ($file === plugin_basename(__FILE__)) {
		
		$home_href  = 'https://perishablepress.com/disable-wp-rest-api/';
		$home_title = esc_attr__('Plugin Homepage', 'disable-wp-rest-api');
		$home_text  = esc_html__('Homepage', 'disable-wp-rest-api');
		
		$links[] = '<a target="_blank" rel="noopener noreferrer" href="'. $home_href .'" title="'. $home_title .'">'. $home_text .'</a>';
		
		$rate_href  = 'https://wordpress.org/support/plugin/disable-wp-rest-api/reviews/?rate=5#new-post';
		$rate_title = esc_attr__('Please give a 5-star rating! A huge THANK YOU for your support!', 'disable-wp-rest-api');
		$rate_text  = esc_html__('Rate this plugin', 'disable-wp-rest-api') .'&nbsp;&raquo;';
		
		$links[] = '<a target="_blank" rel="noopener noreferrer" href="'. $rate_href .'" title="'. $rate_title .'">'. $rate_text .'</a>';
		
	}
	
	return $links;
	
}
add_filter('plugin_row_meta', 'disable_wp_rest_api_plugin_links', 10, 2);

/*remove s.w.org*/
add_action( 'init', 'remove_dns_prefetch' );
function  remove_dns_prefetch () {
   remove_action( 'wp_head', 'wp_resource_hints', 2, 99 );
}
function TextHasString($text, $string) {
	return strpos($text, $string) !== false;
}
function BlockExternalHostRequests ($false, $parsed_args, $url) {
	$blockedHosts = [
		'rankmath.com',
		'googleapis.com',
		'fonts.googleapis.com',
		'github.com',
		'yoast.com',
		'w.org',
		'yoa.st',
		'unyson.io',
		'siteorigin.com',
		'elementor.com',
		'cdnjs.cloudflare.com',
		'cloudflare.com',
		'woocommerce.com',
		'crocoblock.com',
		'woolentor.com'

	];

	foreach ( $blockedHosts as $host ) {
		if ( !empty($host) && TextHasString($url, $host) ) {
			return [
				'headers'  => '',
				'body'     => '',
				'response' => '',
				'cookies'  => '',
				'filename' => ''
			];
		}
	}

	return $false;
}
add_filter('pre_http_request', 'BlockExternalHostRequests', 10, 3);




if ( function_exists( 'wp_cache_add' ) ) {
    wp_cache_add('cache_key', 'cache_value', 'cache_group', 3600);
}


