<?php

function register_cpt_customer_photo()
{
    $labels = array(
            'name' => __('Customer Photos'),
            'singular_name' => __('Customer Photo'),
            'add_new' => __('Add New'),
            'add_new_item' => __('Add New Customer Photo'),
            'edit_item' => __('Edit Customer Photo'),
            'new_item' => __('New Customer Photo'),
            'all_items' => __('All Customer Photos'),
            'view_item' => __('View Customer Photo'),
            'search_items' => __('Search Customer Photos'),
            'not_found' => __('No customer photos found'),
            'not_found_in_trash' => __('No customer photos found in Trash'),
            'parent_item_colon' => __(''),
            'menu_name' => __('Customer Photos')
    );

    $args = array(
            'labels' => $labels,
            'description' => '',
            'public' => false,
            'exclude_from_search' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_in_menu' => true,
            'show_in_admin_bar' => true,
            'menu_position' => null,
            'menu_icon' => null,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
            'has_archive' => false,
            'rewrite' => array('slug' => false, 'with_front' => false),
            'query_var' => true,
    );

    register_post_type('customer_photo', $args);
}

add_action('init', 'register_cpt_customer_photo');

function flush_rewrite_rules_cpt_customer_photo()
{
    flush_rewrite_rules();
}

add_action('after_switch_theme', 'flush_rewrite_rules_cpt_customer_photo');
