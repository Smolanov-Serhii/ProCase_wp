<?php
/**
 * ProCase functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ProCase
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'procase_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function procase_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ProCase, use a find and replace
		 * to change 'procase' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'procase', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-info' => esc_html__( 'Меню информации', 'procase' ),
				'menu-page' => esc_html__( 'Меню страниц', 'procase' ),
				'menu-footer' => esc_html__( 'Меню подвал', 'procase' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'procase_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'procase_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function procase_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'procase_content_width', 640 );
}
add_action( 'after_setup_theme', 'procase_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function procase_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'procase' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'procase' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'procase_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function procase_scripts() {
    wp_enqueue_style( 'procase-style', get_template_directory_uri() . '/dist/css/style.css', array(), _S_VERSION );
	wp_style_add_data( 'procase-style', 'rtl', 'replace' );
//    wp_enqueue_script('newscript', get_template_directory_uri() . '/dist/js/common.js');
//	wp_enqueue_script( 'procase-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'procase_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_action( 'init', 'register_post_types' );
function register_post_types(){

    register_post_type( 'uses', [
        'label'  => null,
        'labels' => [
            'name'               => 'Применение', // основное название для типа записи
            'singular_name'      => 'Применение', // название для одной записи этого типа
            'add_new'            => 'Добавить применение', // для добавления новой записи
            'add_new_item'       => 'Добавление применения', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование применения', // для редактирования типа записи
            'new_item'           => 'Новое применение', // текст новой записи
            'view_item'          => 'Смотреть применение', // для просмотра записи этого типа.
            'search_items'       => 'Искать применение', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Применение', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor','thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
    register_post_type( 'photogalery', [
        'label'  => null,
        'labels' => [
            'name'               => 'Фотогалерея', // основное название для типа записи
            'singular_name'      => 'Фотогалерея', // название для одной записи этого типа
            'add_new'            => 'Добавить фотографию', // для добавления новой записи
            'add_new_item'       => 'Добавление фотографии', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование фотографии', // для редактирования типа записи
            'new_item'           => 'Новая фотография', // текст новой записи
            'view_item'          => 'Смотреть фотографию', // для просмотра записи этого типа.
            'search_items'       => 'Искать фотографию', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Фотогалерея', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
    register_post_type( 'FAQ', [
        'label'  => null,
        'labels' => [
            'name'               => 'FAQ', // основное название для типа записи
            'singular_name'      => 'FAQ', // название для одной записи этого типа
            'add_new'            => 'Добавить вопрос', // для добавления новой записи
            'add_new_item'       => 'Добавление вопроса', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование вопроса', // для редактирования типа записи
            'new_item'           => 'Новый вопрос', // текст новой записи
            'view_item'          => 'Смотреть вопрос', // для просмотра записи этого типа.
            'search_items'       => 'Искать вопрос', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'FAQ', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
    register_post_type( 'history', [
        'label'  => null,
        'labels' => [
            'name'               => 'История', // основное название для типа записи
            'singular_name'      => 'История', // название для одной записи этого типа
            'add_new'            => 'Добавить запись', // для добавления новой записи
            'add_new_item'       => 'Добавление записи', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование записи', // для редактирования типа записи
            'new_item'           => 'Новая запись', // текст новой записи
            'view_item'          => 'Смотреть запись', // для просмотра записи этого типа.
            'search_items'       => 'Искать запись', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'История', // название меню
        ],
        'description'         => '',
        'public'              => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-businessman',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor','thumbnail','excerpt'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
}

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Параметры',
        'menu_title'	=> 'Параметры темы',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Параметры Header',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Параметры Footer',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Параметры общие',
        'menu_title'	=> 'Общие',
        'parent_slug'	=> 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Параметры Контакты',
        'menu_title'	=> 'Контакты',
        'parent_slug'	=> 'theme-general-settings',
    ));

}

function mytheme_add_woocommerce_support(){
    add_theme_support('woocommerce');
}
add_action('after_setup_theme','mytheme_add_woocommerce_support');

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
add_action( 'woocommerce_after_main_content', 'woocommerce_get_sidebar', 1 );

add_action( 'woocommerce_before_shop_loop', 'addcontainerproducts', 35 );
function addcontainerproducts(){
    echo '<div class="product-page__content">';
}
//
//function remove_jq_migrate( $scripts ) {
//    if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
//        $script = $scripts->registered['jquery'];
//        if ( $script->deps ) {
//            $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
//        }
//    }
//}
//add_action( 'wp_default_scripts', 'remove_jq_migrate' );

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] );
    return $tabs;
}

add_filter( 'woocommerce_cart_ready_to_calc_shipping', 'disable_shipping_calc_on_cart', 99 );

// Отключаем ненужные поля ввода при заказе
add_filter('woocommerce_checkout_fields','remove_checkout_fields');
function remove_checkout_fields($fields){
    //unset($fields['billing']['billing_first_name']);
    //unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']); // Отключено
    //unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']); // Отключено
//    unset($fields['billing']['billing_city']); // Отключено
    unset($fields['billing']['billing_postcode']); // Отключено
    unset($fields['billing']['billing_country']); // Отключено
    unset($fields['billing']['billing_state']); // Отключено
    //unset($fields['billing']['billing_phone']);
    //unset($fields['order']['order_comments']);
    //unset($fields['billing']['billing_email']);
    unset($fields['account']['account_username']); // Отключено
    unset($fields['account']['account_password']); // Отключено
    unset($fields['account']['account_password-2']); // Отключено
    return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_country']); // Отключаем страны оплаты
    unset($fields['shipping']['shipping_country']);// Отключаем страны доставки
    return $fields;
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );


add_action( 'wp_ajax_feedback_action', 'ajax_action_callback' );
add_action( 'wp_ajax_nopriv_feedback_action', 'ajax_action_callback' );
/**
 * Обработка скрипта
 *
 * @see https://wpruse.ru/?p=3224
 */
function ajax_action_callback() {

    // Массив ошибок
    $err_message = array();

    // Проверяем nonce. Если проверкане прошла, то блокируем отправку
    if ( ! wp_verify_nonce( $_POST['nonce'], 'feedback-nonce' ) ) {
        wp_die( 'Данные отправлены с левого адреса' );
    }

    // Проверяем на спам. Если скрытое поле заполнено или снят чек, то блокируем отправку
    if ( false === $_POST['art_anticheck'] || ! empty( $_POST['art_submitted'] ) ) {
        wp_die( 'Пошел нахрен, мальчик!(c)' );
    }

    // Проверяем полей имени, если пустое, то пишем сообщение в массив ошибок
    if ( empty( $_POST['art_name'] ) || ! isset( $_POST['art_name'] ) ) {
        $err_message['name'] = 'Пожалуйста, введите ваше имя.';
    } else {
        $art_name = sanitize_text_field( $_POST['art_name'] );
    }

    // Проверяем полей емайла, если пустое, то пишем сообщение в массив ошибок
    if ( empty( $_POST['art_email'] ) || ! isset( $_POST['art_email'] ) ) {
        $err_message['email'] = 'Пожалуйста, введите адрес вашей электронной почты.';
    } elseif ( ! preg_match( '/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i', $_POST['art_email'] ) ) {
        $err_message['email'] = 'Адрес электронной почты некорректный.';
    } else {
        $art_email = sanitize_email( $_POST['art_email'] );

    }
    // Проверяем полей темы письма, если пустое, то пишем сообщение по умолчанию
    if ( empty( $_POST['art_subject'] ) || ! isset( $_POST['art_subject'] ) ) {
        $art_subject = 'Сообщение с сайта';
    } else {
        $art_subject = sanitize_text_field( $_POST['art_subject'] );
    }

    // Проверяем полей сообщения, если пустое, то пишем сообщение в массив ошибок
    if ( empty( $_POST['art_comments'] ) || ! isset( $_POST['art_comments'] ) ) {
        $err_message['comments'] = 'Пожалуйста, введите ваше сообщение.';
    } else {
        $art_comments = sanitize_textarea_field( $_POST['art_comments'] );
    }

    // Проверяем массив ошибок, если не пустой, то передаем сообщение. Иначе отправляем письмо
    if ( $err_message ) {

        wp_send_json_error( $err_message );

    } else {

        // Указываем адресата
        $email_to = '';

        // Если адресат не указан, то берем данные из настроек сайта
        if ( ! $email_to ) {
            $email_to = get_option( 'admin_email' );
        }

        $body    = "Имя: $art_name \nEmail: $art_email \n\nСообщение: $art_comments";
        $headers = 'From: ' . $art_name . ' <' . $email_to . '>' . "\r\n" . 'Reply-To: ' . $email_to;

        // Отправляем письмо
        wp_mail( $email_to, $art_subject, $body, $headers );

        // Отправляем сообщение об успешной отправке
        $message_success = 'Собщение отправлено. В ближайшее время я свяжусь с вами.';
        wp_send_json_success( $message_success );
    }

    // На всякий случай убиваем еще раз процесс ajax
    wp_die();

}

remove_action('load-update-core.php', 'wp_update_plugins');
add_filter('pre_site_transient_update_plugins', create_function('$a', "return null;") );
wp_clear_scheduled_hook('wp_update_plugins');

// add core markup to woocommerce pages
add_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper',10);

// overwrite existing output content wrapper function
function woocommerce_output_content_wrapper()
{
    echo '<div class="page-product-category procase-container">';
}

add_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper_cont',12);

// overwrite existing output content wrapper function
function woocommerce_output_content_wrapper_cont()
{
    echo '<div class="page-product-category_cont">';
}

add_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end',10);

function woocommerce_output_content_wrapper_end()
{
    echo '</div><!-- Close Main -->';
}

add_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end_cont',12);

function woocommerce_output_content_wrapper_end_cont()
{
    echo '</div><!-- Close Main -->';
}

add_action('woocommerce_before_checkout_form', 'woocommerce_output_content_wrapper');
add_action('woocommerce_after_checkout_form', 'woocommerce_output_content_wrapper_end');



//remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
//add_action('woocommerce_after_main_content', 'woocommerce_get_sidebar', 11);

add_action('woocommerce_before_shop_loop', 'sidebar_container_before_loop', 5);
function sidebar_container_before_loop(){
    echo '<div class="sidebar_container_before_loop">';
    echo '<div class="sidebar_container_before_loop_cont">';
}

add_action('woocommerce_after_shop_loop', 'sidebar_container_after_loop', 5);
function sidebar_container_after_loop(){
    echo '</div>';
}

add_action('woocommerce_after_shop_loop', 'sidebar_container_after_loop_end', 8);
function sidebar_container_after_loop_end(){
    echo '</div>';
}
