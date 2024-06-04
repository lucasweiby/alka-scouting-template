<?php 
    add_theme_support( 'custom-background' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus(
        array(
            'main_menu' => 'Main Menu'
        )
    );

     /** * Usar extensão GD ao invés da Imagick
     */
    function cb_child_use_gd_editor($array) {
        return array( 'WP_Image_Editor_GD' );
    }
    add_filter( 'wp_image_editors', 'cb_child_use_gd_editor' ); 

    function my_custom_image_sizes() {
        add_image_size('custom-size', 800, 0, false); // 800 pixels de largura, 600 pixels de altura, crop verdadeiro
    }
    add_action('after_setup_theme', 'my_custom_image_sizes');

?>