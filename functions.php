<?php

/**カスタム投稿タイプの追加 */
function cpt_register_works() {
    $labels = [
        'singular_name' => 'works',
        'edit_item' => 'works',
    ];
    $args = [
        'label' => '制作実績',
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'show_in_rest' => true,
        'rest_base' => '',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'has_archive' => true,
        'delete_with_user' => false,
        'exclude_from_search' => false,
        'map_meta_cap' => true,
        'hierarchical' => true,
        'rewrite' => [ 'slug' => 'works', 'with_front' => true ],
        'query_var' => true,
        'menu_position' => 5,
        'supports' => [ 'thumbnail' , 'title' , 'editor' , 'link'],
    ];

    register_post_type('works',$args);
}
add_action('init', 'cpt_register_works');

/**カスタム投稿タイプの追加 */
function cpt_register_blog() {
    $labels = [
        'singular_name' => 'blog',
        'edit_item' => 'blog',
    ];
    $args = [
        'label' => 'ブログ',
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'show_in_rest' => true,
        'rest_base' => '',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'has_archive' => true,
        'delete_with_user' => false,
        'exclude_from_search' => false,
        'map_meta_cap' => true,
        'hierarchical' => true,
        'rewrite' => [ 'slug' => 'blog', 'with_front' => true ],
        'query_var' => true,
        'menu_position' => 5,
        'supports' => [ 'title' , 'editor' , 'revisions'],
    ];

    register_post_type('blog',$args);
}
add_action('init', 'cpt_register_blog');

// カスタムタクソノミーの追加
function add_custom_taxonomy(){
    // 制作実績(カテゴリー)
    register_taxonomy(
        'category', // 1.タクソノミーの名前
        'blog',          // 2.利用する投稿タイプ
        array(            // 3.オプション
            'label' => 'カテゴリー', // タクソノミーの表示名
            'hierarchical' => true, // 階層を持たせるかどうか
            'public' => true, // 利用する場合はtrueにする
        )
    );
    // 制作実績(タグ)
    register_taxonomy(
        'tag', // 1.タクソノミーの名前
        'blog',     // 2.利用する投稿タイプ
        array(       // 3.オプション
            'label' => 'タグ', // タクソノミーの表示名
            'hierarchical' => false, // 階層を持たせるかどうか
            'public' => true, // 利用する場合はtrueにする
        )
    );
}
add_action('init', 'add_custom_taxonomy');
