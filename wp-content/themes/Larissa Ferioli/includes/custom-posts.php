<?php

/* BANNERS ***********************************/

add_action('init', 'type_post_banners');
function type_post_banners() { 
    $labels = array(
        'name' => _x('Banners', 'post type general name'),
        'singular_name' => _x('Banner', 'post type singular name'),
        'add_new' => _x('Adicionar Banner', 'Novo Banner'),
        'add_new_item' => __('Novo Banner'),
        'edit_item' => __('Editar Banner'),
        'new_item' => __('Novo Banner'),
        'view_item' => __('Ver Banner'),
        'search_items' => __('Procurar Banners'),
        'not_found' =>  __('Nenhum banner encontrado'),
        'not_found_in_trash' => __('Nenhum banner encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Banners'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,			
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 7,	
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title','thumbnail')
      );

    register_post_type( 'banners' , $args );
    flush_rewrite_rules();
}

/* Depoimentos ***********************************/

add_action('init', 'type_post_depoimentos');
function type_post_depoimentos() { 
    $labels = array(
        'name' => _x('Depoimentos', 'post type general name'),
        'singular_name' => _x('Depoimentos', 'post type singular name'),
        'add_new' => _x('Adicionar Depoimento', 'Novo Depoimentos'),
        'add_new_item' => __('Novo Depoimento'),
        'edit_item' => __('Editar Depoimento'),
        'new_item' => __('Novo Depoimento'),
        'view_item' => __('Ver Depoimento'),
        'search_items' => __('Procurar Depoimento'),
        'not_found' =>  __('Nenhum depoimento encontrado'),
        'not_found_in_trash' => __('Nenhum depoimento encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Depoimentos'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,			
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 7,	
        'menu_icon' => 'dashicons-megaphone',
        'supports' => array('title','thumbnail')
      );

    register_post_type( 'depoimentos' , $args );
    flush_rewrite_rules();
}

?>