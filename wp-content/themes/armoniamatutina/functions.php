<?php 

/* setup */
function armoniamatutina_setup(){
    //Titulos para SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'armoniamatutina_setup');

/* menus */
function armoniamatutina_menus() {
    register_nav_menus(array(
        'navbar' => __('Navbar', 'armoniamatutina')
    ));
}

add_action('init', 'armoniamatutina_menus');

?>