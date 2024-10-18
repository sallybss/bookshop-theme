<?php 
function bookshop_load_resources(){
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css");
    wp_enqueue_style("stylesheet", get_template_directory_uri() . "/style.css");
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/56a699bfcb.js');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100..900&family=Paytone+One&family=Rowdies:wght@300;400;700&display=swap');    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), null, true);
}

add_action("wp_enqueue_scripts", "bookshop_load_resources");


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

function theme_enqueue_scripts() {
    wp_enqueue_style('your-style', get_template_directory_uri() . '/css/your-style.css');
    wp_enqueue_script('your-script', get_template_directory_uri() . '/js/your-script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
