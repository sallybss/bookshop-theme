<?php 
function bookshop_load_resources(){
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("stylesheet", get_template_directory_uri() . "/style.css");
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/56a699bfcb.js');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), null, true);
}

add_action("wp_enqueue_scripts", "bookshop_load_resources");

add_theme_support( 'post-thumbnails' );

function bookshop_remove_gutenberg(){
    remove_post_type_support("page", "editor");
}
add_action("init", "bookshop_remove_gutenberg");


// Register a navigation menu
function avrtikl_register_menus() {
    register_nav_menus( array(
        'primary-menu' => __( 'Primary Menu', 'avrtikl' ),
    ));
}
add_action( 'after_setup_theme', 'avrtikl_register_menus' );

function shop_enable_woocommerce() {
    add_theme_support("woocommerce");
}

add_action ("after_setup_theme", "shop_enable_woocommerce");
