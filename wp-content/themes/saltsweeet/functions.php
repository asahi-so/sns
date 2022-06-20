<?php
/*** 必要機能のみ書き出し***/
function origin_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' ); // tiltleタグの追加
    add_theme_support( 'post-thumbnails' ); //サムネイル機能の追加
    add_theme_support('menus'); // カスタムメニュー
    add_theme_support('widgets'); // ウィジェットの追加
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'status',
        'audio',
        'chat',
    ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'origin_setup' );

function origin_widget_tag_cloud_args( $args ) {
    $args['largest'] = 1;
    $args['smallest'] = 1;
    $args['unit'] = 'em';
    return $args;
}
add_filter( 'widget_tag_cloud_args', 'origin_widget_tag_cloud_args' );

/*********************  以下追加 ************************/

/*** wp_head()の自動挿入の削除 ***/
// フィード出力を削除
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
// スタイルシートを削除
remove_action('wp_head', 'wp_print_styles', 8);
// スクリプトを削除
// remove_action('wp_head', 'wp_print_head_scripts', 9);
// リンク情報「prev」「next」を削除
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
// リンク情報「shortlink」を削除
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
// リンク情報「canonical」を削除
remove_action('wp_head', 'rel_canonical');
// リンク情報「EditURI」を削除
remove_action('wp_head', 'rsd_link');
// リンク情報「wlwmanifest」を削除
remove_action('wp_head', 'wlwmanifest_link');
// WordPressのバージョン情報を削除
remove_action('wp_head', 'wp_generator');

// WordPress 4.4から追加された「Embed」機能に関する出力
// 必要ない場合に以下で出力を削除
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');

// WordPress4.6から追加になったdns-prefetch
remove_action('wp_head','wp_resource_hints',2);

// wpemojiSettings を削除
function disable_emoji() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_emoji' );

function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'remove_recent_comments_style' );
/*** wp_head()の自動挿入の削除 ここまで ***/

/* 自動更新のお知らせ停止 */
add_filter( 'auto_core_update_send_email', '__return_false' );
/* テーマファイルのアップデートを非通知にする */
remove_action( 'load-update-core.php', 'wp_update_themes' );
add_filter( 'pre_site_transient_update_themes', create_function( '$a', "return null;" ) );

// 不要なメニューの削除
function remove_menus () {
    global $menu;
    
    remove_menu_page('edit.php'); // 投稿
    remove_menu_page('edit-comments.php'); // コメント
}
add_action('admin_menu', 'remove_menus');


function my_admin_style(){
    wp_enqueue_style( 'my_admin_style', get_template_directory_uri().'/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'my_admin_style' );


// テンプレートURLを記事で使うショートコード
function shortcode_templateurl() {
    return get_bloginfo('template_url');
}
add_shortcode('template_url', 'shortcode_templateurl');


// サイトURLを記事で使うショートコード
function shortcode_siteurl() {
    return get_bloginfo('url');
}
add_shortcode('home_url', 'shortcode_siteurl');


// グローバル変数の設定
global $template_url; $template_url = get_template_directory_uri();
global $home_url; $home_url = home_url();


/*********************  以下適宜変更 ************************/
/*** 画像の生成を止める ***/
function disable_image_sizes( $new_sizes ) {
    unset($new_sizes['thumbnail']);
    unset($new_sizes['medium']);
    unset($new_sizes['large']);
    unset($new_sizes['medium_large']);
    unset($new_sizes['1536x1536']);
    unset($new_sizes['2048x2048']);
    return $new_sizes;
}
add_filter('intermediate_image_sizes_advanced', 'disable_image_sizes');
add_filter('wp_big_image_size_threshold', '__return_false');

add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('news')) {
        $query->set('posts_per_page', 10);
    }
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('calendar')) {
        $query->set('posts_per_page', 30);
    }
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('campaign')) {
        $query->set('posts_per_page', 30);
    }
};

// html { margin-top: 32px !important; }削除
add_filter( 'show_admin_bar', '__return_false' );

remove_action( 'wp_head', '_wp_render_title_tag', 1 );

// Contact Form 7の自動pタグ無効
define ('WPCF7_AUTOP', false);

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );