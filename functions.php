<?php


// правильный способ подключить стили и скрипты темы
add_action('wp_enqueue_scripts', 'theme_add_scripts');

// добавляет возможность выбрать кастомныи лого из админки
add_theme_support('custom-logo');

// добавляет возможность выбрать кастомныи лого из админки
add_theme_support('custom-logo');

// подключение и настройка меню через админку
add_action('after_setup_theme', 'add_menu');

// добавляет возможность выбрать img у записи(post) из админки
add_theme_support('post-thumbnails', array('post'));


function theme_add_scripts()
{
    // подключаем файл baguetteBox.css
    wp_enqueue_style('baguetteBox-css', get_template_directory_uri() . '/css/baguetteBox.min.css');

    // подключаем файл animate.css
    // wp_enqueue_style('animate-css', get_template_directory_uri() . '/css/animate.min.css');

    // подключаем основной файл стилей темы
    wp_enqueue_style('style', get_stylesheet_uri());

    //---------------------------------------------------------------------------------------------------------------------------------------------

    // подключаем js файл baguetteBox
    wp_enqueue_script('baguetteBox', get_template_directory_uri() .
        '/js/baguettebox.js', false, null, 'footer');

    // подключаем js файл swiper-bundle.min.js
    wp_enqueue_script('swiper', get_template_directory_uri() .
        '/js/swiper-bundle.min.js', false, null, 'footer');
}

function add_menu()
{
    register_nav_menu('main', 'главное меню сайта');
    register_nav_menu('main-footer', 'главное меню сайта в подвале');
    register_nav_menu('services', 'навигация Услуги');
}

// Добавляет вкладку "Продукция" для меню админки Wordpress"
add_action('init', 'create_post_type');
function create_post_type()
{
    register_post_type(
        'testimonial',
        array(
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'labels' => array(
                'name' => 'Продукция',
                'singular_name' => 'Продукция',
                'menu_name' => 'Продукция',
                'all_items' => 'Вся продукция',
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
            'taxonomies' => array('category'),
        )
    );
}

// Добавляет вкладку "Специалисты" для меню админки Wordpress"
add_action('init', 'create_post_type_spec');
function create_post_type_spec()
{
    register_post_type(
        'testimonial2',
        array(
            'public' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'labels' => array(
                'name' => 'Специалисты',
                'singular_name' => 'Специалисты',
                'menu_name' => 'Специалисты',
                'all_items' => 'Все специалисты',
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
            'taxonomies' => array('category'),
        )
    );
}


require_once (get_template_directory() . '/util-functions/reviews.php');

