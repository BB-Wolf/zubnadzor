<?
define('THEMES_PATH', get_template_directory_uri());

//Отключение не нужных компонентов
require_once "helper/cleaner.php";

//для админ части сайта
require_once "helper/admin_pages.php";

    if (function_exists('add_theme_support')) {
        add_theme_support('menus');
        add_theme_support('post-thumbnails');
    }

    register_nav_menus(array(
        'top'    => 'Главное меню',
        'bottom'    => 'Нижнее меню',
        'service'    => 'Меню услуг',
    ));

require_once('func/generat_menu.php');
require_once('func/breadcrump.php');

add_action( 'after_setup_theme', 'true_add_image_size' );
 
function true_add_image_size() {
    add_image_size( 'doposle', 318, 410, true );
}

add_filter( 'image_size_names_choose', 'my_custom_sizes' );
function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'category-thumb' => 'До и после',
    ) );
}
//Style Sheet
add_action( 'wp_enqueue_scripts', 'add_styles' );
    function add_styles(){
        wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
        wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/css/swiper-bundle.min.css');
        wp_enqueue_style('chosen.min', get_template_directory_uri() . '/css/chosen.min.css');
        wp_enqueue_style('twentytwenty', get_template_directory_uri() . '/css/twentytwenty.css');
        wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
        wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    }

add_action( 'wp_enqueue_scripts', 'add_scripts' );
    function add_scripts(){
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js');
        wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js');
        wp_enqueue_script('maskedinputer', get_template_directory_uri() . '/js/maskedinput.min.js');
        wp_enqueue_script('chosen', get_template_directory_uri() . '/js/chosen.jquery.min.js');
        wp_enqueue_script('event.move', get_template_directory_uri() . '/js/jquery.event.move.js');
        wp_enqueue_script('twentytwenty', get_template_directory_uri() . '/js/jquery.twentytwenty.js');
        wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js');
        wp_enqueue_script('my_script', get_template_directory_uri() . '/js/script.js', array('jquery'));
    }


// Верхнее меню:
function show_menu($theme_location, $depth = 1) {
    // main navigation menu
    $args = array(
        'theme_location'    => $theme_location,
        'depth'             => $depth
    );

    // print menu
    wp_nav_menu( $args );
}

add_filter( 'upload_mimes', 'svg_upload_allow' );

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );


add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}
# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

    // WP 5.1 +
    if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
        $dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
    }
    else {
        $dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
    }

    // mime тип был обнулен, поправим его
    // а также проверим право пользователя
    if( $dosvg ){

        // разрешим
        if( current_user_can('manage_options') ){

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        }
        // запретим
        else {
            $data['ext']  = false;
            $data['type'] = false;
        }

    }

    return $data;
}

add_filter('post_gallery', 'my_post_gallery', 10, 2);
function my_post_gallery($output, $attr) {
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';

    // Here your actual output, you may customize it to your need
    $output = "";

    // Now you loop through each attachment
    foreach ($attachments as $id => $attachment) {
        // Fetch the thumbnail (or full image, it up to you)
//      $img = wp_get_attachment_image_src($id, 'medium');
//      $img = wp_get_attachment_image_src($id, 'my-custom-image-size');
        $img = wp_get_attachment_image_src($id, 'full');

        $output .= "<li class=\"worker-docs__item\">\n";
        $output .= "<a href=\"{$img[0]}\" data-fancybox=\"galery\"><span class=\"worker-docs__bg\">Увеличить</span>";
        $output .= "<img src=\"{$img[0]}\" width=\"{$img[1]}\" height=\"{$img[2]}\" alt=\"\" />\n";
        $output .= "</a>";
        $output .= "</li>\n";
    }

    $output .= "";

    return $output;
}

 