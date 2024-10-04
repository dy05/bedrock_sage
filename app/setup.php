<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    bundle('app')->enqueue();
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    bundle('editor')->enqueue();
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     *
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
    ]);

    /**
     * Disable the default block patterns.
     *
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     *
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer',
    ] + $config);
});

add_action('wp_loaded', function() {
    app('session')->isStarted() || app('session')->start();
});

add_action('init', function () {
    if (env('WP_ENV') !== 'development') :
        return;
    endif;

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
    header('Access-Control-Allow-Credentials: true');
}, 1);

add_action('init', function () {
    add_filter('inrage/mail-content', function ($layout, $args) {
        return view($layout, $args)->render();
    }, 10, 2);
});

rest_api_init('rest_api_init',  function () {
    remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );
});

add_filter( 'wp_mail_content_type', function () { return "text/html"; } );

//
//use Illuminate\Support\Facades\Log;
//
//add_action('wp_mail_failed', function ($wp_error) {
//    $error_data = print_r($wp_error->get_error_data(), true);
//    $error_message = $wp_error->get_error_message();
//    Log::debug("Mail failed to send. Error: $error_message, Data: $error_data");
//});
//
//
//add_filter('phpmailer_init', function ($mail) {
//    $mail->isSMTP();
//
//    $mail->SMTPAuth = true;
//    $mail->Host = env('WP_ENV') === 'development' ? 'localhost' : env('WP_SMTP_HOST');
//    $mail->Port = env('WP_ENV') === 'development' ? 1025 : 587;
//    $mail->Username = env('WP_SMTP_USERNAME');
//    $mail->Password = env('WP_SMTP_PASSWORD');
//    $mail->Timeout = 10;
//
//    $mail->setFrom(
//        env('WP_SMTP_FORCEFROM'),
//        env('WP_SMTP_FORCEFROMNAME')
//    );
//});
//
//function use_smtp_for_email_delivery( $phpmailer ) {
//    $phpmailer->isSMTP();
//    $phpmailer->Host = 'localhost';
//    $phpmailer->SMTPAuth = false;
//    $phpmailer->Port = 1025;
//    $phpmailer->Username = '';
//    $phpmailer->Password = '';
//    $phpmailer->SMTPSecure = 'tls';
//    $phpmailer->From = 'dyos@gmail.com';
//    $phpmailer->FromName = 'SMTP_NAME';
//}
//
//add_action('phpmailer_init', 'use_smtp_for_email_delivery');
////add_action('phpmailer_init', 'use_smtp_for_email_delivery');
//
////function use_smtp_for_email_delivery($phpmailer) {
////    $phpmailer->isSMTP();
////    $phpmailer->Host = 'localhost';
////    $phpmailer->Port = 1025;
////    $phpmailer->SMTPAuth = false;
////    $phpmailer->Username = null;
////    $phpmailer->Password = null;
////    echo 'loll';
////}
//
