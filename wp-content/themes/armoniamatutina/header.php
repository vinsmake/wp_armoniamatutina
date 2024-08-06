<?php
/* ADVANCED CUSTOM FIELDS IMPORT GLOBAL DATA */
/* HERO DATA */
$leyenda = get_option('custom_leyenda');
$titulo = get_option('custom_titulo');
$boton = get_option('custom_boton');

?>




<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body class="body">

    <header class="header">
        <div class="header__title">
            <a href="<?php echo site_url('/') ?>">
                <h1><?php if ($titulo) {
                        echo esc_html($titulo);
                    }; ?></h1>
            </a>
        </div>



        <section class="header__navbar--desktop">
            <?php
            $args = array(
                'theme_location' => 'navbar',
                'container' => 'nav',
                'container_class' => 'header__navbar'
            );
            wp_nav_menu($args);
            ?>
        </section>

        <section class="header__navbar--mobile">
            <div class="header__navbar__stick">
                <div class="header__navbar__stick__title"><?php if ($titulo) {
                        echo esc_html($titulo);
                    }; ?></div>
            
            <?php
            $svg_path = get_template_directory() . '/svg/' . 'hamburger.svg';
            $svg = file_get_contents($svg_path);
            echo '<div class="hamburger">' . $svg . '</div>'
            ?>
            </div>
            <?php
            $args = array(
                'theme_location' => 'navbar',
                'container' => 'nav',
                'container_class' => 'header__navbar'
            );
            wp_nav_menu($args);
            ?>
        </section>

        <section class="header__hero">
            <div class="header__hero__contenido">
                <h2>
                    <?php
                    if ($leyenda) {
                        echo esc_html($leyenda);
                    };
                    ?>

                </h2>
                <!-- Boton externo -->
                <div class="header__hero__contenido__boton">
                    <?php

                    if ($boton) {
                        if ($boton['mostrar']) {
                            $link = esc_url($boton['link']);
                            $texto = ($boton['texto']);

                            echo '<a href="' . $link . '" target="_blank">' . $texto . '</a>';
                        } else {
                            echo '';
                        }
                    } else {
                        echo '';
                    }


                    ?>
                </div>
                <p class="header__hero__contenido__social">

                    <?php get_template_part('template-parts/template-social'); ?>

                </p>
            </div>
        </section>
    </header>
    <main>