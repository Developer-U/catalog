<?php
/**
 * UnderStrap functions and definitions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/post-types.php',                      // Initialize post types
	'/post-2-post.php',                      // Initialize post types
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}


/**
 * Создадим возможность дублирования записей
 * 
 */
// Функция создает дубликат поста в виде черновика и редиректит на его страницу редактирования
function true_duplicate_post_as_draft(){
 
	if( empty( $_GET[ 'post' ] ) ) {
		wp_die( 'Нечего дублировать!' );
	}
 
	// проверка одноразовых чисел, куда без неё
	if ( ! isset( $_GET[ 'true_duplicate_nonce' ] ) || ! wp_verify_nonce( $_GET[ 'true_duplicate_nonce' ], basename( __FILE__ ) ) ) {
		return;
	}
 
	// получаем ID оригинального поста
	$post_id = absint( $_GET[ 'post' ] );
 
	// затем получили объект поста
	$post = get_post( $post_id );
 
	/*
	 * если вы не хотите, чтобы текущий автор был автором нового поста
	 * тогда замените следующие две строчки на: $new_post_author = $post->post_author;
	 * при замене этих строк автор будет копироваться из оригинального поста
	 */
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;
 
	/*
	 * если пост существует, создаем его дубликат
	 */
	if ( $post ) {
 
		// массив данных нового поста
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_parent'    => $post->post_parent,
			'post_name'      => $post->post_name,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft', // черновик, если хотите сразу публиковать - замените на publish
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);
 
		// создаем пост при помощи функции wp_insert_post()
		$new_post_id = wp_insert_post( $args );
 
		// присваиваем новому посту все элементы таксономий (рубрики, метки и т.д.) старого
		$taxonomies = get_object_taxonomies( $post->post_type ); // возвращает массив названий таксономий, используемых для указанного типа поста, например array("category", "post_tag");
		foreach ( $taxonomies as $taxonomy ) {
			$post_terms = wp_get_object_terms( $post_id, $taxonomy, array( 'fields' => 'slugs' ) );
			wp_set_object_terms( $new_post_id, $post_terms, $taxonomy, false );
		}
 
		// дублируем все произвольные поля
		$post_meta = get_post_meta( $post_id );
		if( $post_meta ) {
			foreach ( $post_meta as $meta_key => $meta_values ) {
				if( '_wp_old_slug' == $meta_key ) { // это лучше не трогать
					continue;
				}
				foreach ( $meta_values as $meta_value ) {
					add_post_meta( $new_post_id, $meta_key, $meta_value );
				}
			}
		}
 
		// и наконец, перенаправляем пользователя на страницу редактирования нового поста
		wp_safe_redirect( add_query_arg( array( 'action' => 'edit', 'post' => $new_post_id ), admin_url( 'post.php' ) ) );
		exit;
	} else {
		wp_die( 'Ошибка создания поста, не могу найти оригинальный пост с ID=: ' . $post_id );
	}
}
 
add_action( 'admin_action_true_duplicate_post_as_draft', 'true_duplicate_post_as_draft' );
 
// Добавляем ссылку дублирования поста для post_row_actions
add_filter( 'post_row_actions', 'true_duplicate_post_link', 10, 2 );
function true_duplicate_post_link( $actions, $post ) {
	if ( current_user_can( 'edit_posts' ) ) {
		$actions[ 'duplicate' ] = '<a href="' . wp_nonce_url( add_query_arg( array( 'action' => 'true_duplicate_post_as_draft', 'post' => $post->ID ), 'admin.php' ), basename(__FILE__), 'true_duplicate_nonce' ) . '">Дублировать</a>';
	}
	return $actions;
}


add_filter( 'cities_row_actions', 'true_duplicate_post_link', 10, 2);

add_filter( 'property_type_row_actions', 'true_duplicate_post_link', 10, 2);

add_filter('redirect_canonical','custom_disable_redirect_canonical');
function custom_disable_redirect_canonical($redirect_url) {
    if (is_paged() && is_singular()) $redirect_url = false;
    return $redirect_url;
}


// Изменим длину текста в кратком описании 

function astra_excerpt_length( $length ){
	return 16;
}
 
add_filter( 'excerpt_length', 'astra_excerpt_length', 10, 1);
