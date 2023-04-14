<?php
/**
 * Understrap property types
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {

/* Регистрируем новый тип записей - Недвижимость и рубрики к ним
-----------------------------------------------*/

add_theme_support( 'post-thumbnails' );

add_action('init', 'property_type');
    function property_type() {
    $labels = array(
        'name' => 'Недвижимость',
        'singular_name' => 'Недвижимость',
        'add_new' => 'Добавить Объект',
        'add_new_item' => 'Добавить новый Объект',
        'edit_item' => 'Редактировать Объект',
        'new_item' => 'Новый Объект',
        'view_item' => 'Посмотреть Объект',    
        'search_items' => 'Найти Объект',
        'not_found' =>  'Объектов не найдено', 
        'parent_item_colon' => '',
        'menu_name' => 'Недвижимость',
        'parent_item_colon'  => 'Все объекты',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'icon_url' => 'dashicons-portfolio',
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => 2,
        'supports' => array('title','editor','thumbnail'),
        'taxonomies' => array('category') 
    );

    register_taxonomy( 'category', [ 'property_type' ], [
            'label'                 => '', // определяется параметром $labels->name
            'labels'                => [
                'name'              => 'Типы недвижимости',
                'singular_name'     => 'Тип недвижимости',
                'search_items'      => 'Найти тип недвижимости',
                'all_items'         => 'Все типы недвижимости',
                'view_item '        => 'Показать категорию',
                'parent_item'       => 'Родительская категория',
                'parent_item_colon' => 'Родительская категория:',
                'edit_item'         => 'Редактировать категорию',
                'update_item'       => 'Обновить категорию',
                'add_new_item'      => 'Добавить новую категорию',
                'new_item_name'     => 'Название категории',
                'menu_name'         => 'Тип недвижимости',
                'back_to_items'     => '← Вернуться к рубрике',
            ],
            'description'           => '', // описание таксономии
            'public'                => true,
            'publicly_queryable'    => null, // равен аргументу public
            'show_in_nav_menus'     => true, // равен аргументу public
            'show_ui'               => true, // равен аргументу public
            'show_in_menu'          => true, // равен аргументу show_ui
            'show_tagcloud'         => true, // равен аргументу show_ui
            'show_in_quick_edit'    => null, // равен аргументу show_ui
            'hierarchical'          => true,
        'show_admin_column'     => true,

            'rewrite'               => true,
            //'query_var'             => $taxonomy, // название параметра запроса
            'capabilities'          => array(),
            'meta_box_cb'           => 'post_categories_meta_box', // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
            'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
            'show_in_rest'          => true, // добавить в REST API
            'rest_base'             => null, // $taxonomy
            // '_builtin'              => false,
            //'update_count_callback' => '_update_post_term_count',
        ] );
    register_post_type('property_type',$args);  
    }
}


/* Регистрируем новый тип записей - Города
-----------------------------------------------*/

add_action('init', 'cities');

function cities() {
    $labels = array(
        'name' => 'Города',
        'singular_name' => 'Город',
        'add_new' => 'Добавить город',
        'add_new_item' => 'Добавить новый город',
        'edit_item' => 'Редактировать город',
        'new_item' => 'Новый город',
        'view_item' => 'Посмотреть город',    
        'search_items' => 'Найти город',
        'not_found' =>  'городов не найдено', 
        'parent_item_colon' => '',
        'menu_name' => 'Города'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'icon_url' => 'dashicons-portfolio',
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => 2,
        'supports' => array('title','editor','thumbnail'),        
    );

    register_post_type('cities',$args);  
}
