<!-- ADVANCED CUSTOM FIELDS IMPORT GLOBAL DATA -->
<?php
$leyenda = get_option('custom_leyenda');
$titulo = get_option('custom_titulo');
/* SOCIALS */
$facebook = get_option('custom_facebook');
$instagram = get_option('custom_instagram');
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
        <div>
            <h1 class="header__title"><?php if ($titulo) {
                                            echo esc_html($titulo);
                                        }; ?></h1>
        </div>



        <?php
        $args = array(
            'theme_location' => 'navbar',
            'container' => 'nav',
            'container_class' => 'header__navbar'
        );
        wp_nav_menu($args);
        ?>

        <section class="header__hero">
            <div class="header__hero__contenido">
                <h2>
                    <?php
                    if ($leyenda) {
                        echo esc_html($leyenda);
                    };
                    ?>

                </h2>
                <!-- Social media -->
                 <div>
                <?php
                /* Facebook */
                if ($facebook) {
                    if ($facebook['mostrar']) {
                        $link = esc_url($facebook['link']);
                        $svg_path = get_template_directory() . '/svg/facebook.svg';

                        if (file_exists($svg_path)) {
                            $svg = file_get_contents($svg_path);
                            echo '<a href="' . $link . '">' . $svg . '</a>';
                        } else {
                            echo '';
                        }
                    } else {
                        echo '';
                    }
                } else {
                    echo '';
                }
                /* Instagram */
                if ($instagram) {
                    if ($instagram['mostrar']) {
                        $link = esc_url($instagram['link']);
                        $svg_path = get_template_directory() . '/svg/instagram.svg';

                        if (file_exists($svg_path)) {
                            $svg = file_get_contents($svg_path);
                            echo '<a href="' . $link . '">' . $svg . '</a>';
                        } else {
                            echo '';
                        }
                    } else {
                        echo '';
                    }
                } else {
                    echo '';
                }
                ?>
                </div>
            </div>
        </section>
    </header>