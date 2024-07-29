<?php

/* setup */
function armoniamatutina_setup()
{
    //Titulos para SEO
    add_theme_support('title-tag');

    //Imagenes destacadas
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'armoniamatutina_setup');


/* css and js */
function armoniamatutina_scripts_styles()
{
    /* css */
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');

    /* js */
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'armoniamatutina_scripts_styles');


/* menus */
function armoniamatutina_menus()
{
    register_nav_menus(array(
        'navbar' => __('Navbar', 'armoniamatutina')
    ));
}

add_action('init', 'armoniamatutina_menus');


/* css variable */
function armoniamatutina_header()
{
    /* Obntiene ID de pagina principal, mediante el acceso a configuracion */
    $front_id = get_option('page_on_front');

    /* HERO DATA */
    $leyenda = get_field('leyenda', $front_id);
    if ($leyenda) {
        update_option('custom_leyenda', $leyenda);
    }
    $titulo = get_field('titulo', $front_id);
    if ($titulo) {
        update_option('custom_titulo', $titulo);
    }

    /* HERO IMG */
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

    /* BOTON EXTERNO */
    $boton = get_field('boton', $front_id);
    if ($boton) {
        update_option('custom_boton', $boton);
    }

    /* SOCIAL MEDIA LINKS AND ICONS */
    /* Obtiene el campo */
    $discord = get_field('discord', $front_id);
    /* Convierte en campo en variable global */
    if ($discord) {
        update_option('custom_discord', $discord);
    }

    $facebook = get_field('facebook', $front_id);
    if ($facebook) {
        update_option('custom_facebook', $facebook);
    }

    $instagram = get_field('instagram', $front_id);
    if ($instagram) {
        update_option('custom_instagram', $instagram);
    }

    $linkedin = get_field('linkedin', $front_id);
    if ($linkedin) {
        update_option('custom_linkedin', $linkedin);
    }

    $telegram = get_field('telegram', $front_id);
    if ($telegram) {
        update_option('custom_telegram', $telegram);
    }

    $tiktok = get_field('tiktok', $front_id);
    if ($tiktok) {
        update_option('custom_tiktok', $tiktok);
    }

    $whatsapp = get_field('whatsapp', $front_id);
    if ($whatsapp) {
        update_option('custom_whatsapp', $whatsapp);
    }

    $x = get_field('x', $front_id);
    if ($x) {
        update_option('custom_x', $x);
    }

    $youtube = get_field('youtube', $front_id);
    if ($youtube) {
        update_option('custom_youtube', $youtube);
    }
}
add_action('init', 'armoniamatutina_header');

/* patterns */
function armoniamatutina_register_block_patterns() {
    register_block_pattern(
        'armoniamatutina/pattern-blog',
        array(
            'title'       => __('Blog Grid', 'armoniamatutina'),
            'description' => _x('A custom grid layout for blog posts', 'Block pattern description', 'armoniamatutina'),
            'categories'  => array('text'),
            'content'     => file_get_contents(get_template_directory() . '/patterns/pattern-blog.php'),
        )
    );
}
add_action('init', 'armoniamatutina_register_block_patterns');


/* POST */
function armoniamatutina_default_title($title) {
    return 'Aquí va un título breve enfocado en aportar algo al lector';
}
add_filter('default_title', 'armoniamatutina_default_title');

function armoniamatutina_default_content($content) {
    $default_content = '
    <h2 class="wp-block-heading">Aquí va una leyenda corta sobre el objetivo del post</h2>
    <em>Aquí va una introducción que captará la atención del lector y dando una idea de lo que tratará el post. Empieza destacando una situación de tus lectores con la que puedan identificarse, luego, ofrece una visión de cómo tu post abordará ese problema, proporcionando una solución o consejo. (Máximo 3 renglones).</em>
    ';
    return $default_content . $content;
}
add_filter('default_content', 'armoniamatutina_default_content');
