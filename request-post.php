<?php
/*
** Обработчик для аякса для передачи данных из формы добавления объекта в админку
**
*/

require $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';

    var_dump($_POST); 

    if( isset($_POST['action']) && $_POST['action'] == 'request-ajax') { // Проверяем чтобы action соответствовал нашему аяксу
        $postID = wp_insert_post(  wp_slash( array(
            'post_title'    => 'Заявка на публикацию объекта',          
            'post_name'     => 'post_slug',
            'post_type'     => 'new_object',
            'post_status'   => 'draft',     
            'post_author'   => 1,
            'ping_status'   => get_option('default_ping_status'),
            'post_parent'   => 0,
            'menu_order'    => 0,
    ) ) );

    update_field('request_name', $_POST['request_name'], $postID); 
    update_field('request_phone', $_POST['request_phone'], $postID);
    update_field('request_price', $_POST['request_price'], $postID); 
    update_field('request_type', $_POST['request_type'], $postID);
    update_field('request_expertiza', $_POST['request_expertiza'], $postID); 
        
       
        
}