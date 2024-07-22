<?php 

/* setup */
function armoniamatutina_setup(){
    //Titulos para SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'armoniamatutina_setup');


/* css and js */
function armoniamatutina_scripts_styles() {
    /* css */
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');

    /* js */
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'armoniamatutina_scripts_styles');


/* menus */
function armoniamatutina_menus() {
    register_nav_menus(array(
        'navbar' => __('Navbar', 'armoniamatutina')
    ));
}

add_action('init', 'armoniamatutina_menus');

/* css variable */
function armoniamatutina_hero()
{
    /* Obntiene ID de pagina principal, mediante el acceso a configuracion */
    $front_id = get_option('page_on_front');

    /* Obtiene imagen mediante ACF */
    $id_img = get_field('portada', $front_id);
    /* Obtiene ruta de imagen */
    $src = wp_get_attachment_image_src($id_img, 'fill')[0];
    /* Crea css */
    wp_register_style('custom', false);
    wp_enqueue_style('custom');
    $imagen_header_css = "
    .header__hero {
    background-image: url($src);   
    }
    ";
    /* Inyecta css */
    wp_add_inline_style('custom', $imagen_header_css);
}
add_action('init', 'armoniamatutina_hero');

?>