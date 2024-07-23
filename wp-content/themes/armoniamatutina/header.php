<!-- ADVANCED CUSTOM FIELDS IMPORT GLOBAL DATA -->
<?php
$leyenda = get_option('custom_leyenda');
$titulo = get_option('custom_titulo');
$facebook = get_option('custom_facebook');
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
                <?php
                    if ($facebook) {
                        if ($facebook['mostrar_facebook']) {
                            echo esc_url($facebook['link_de_facebook']);
                        } else {
                            echo '';
                        }
                    } else {
                        echo '';
                    }
                    ?>
            </div>
        </section>
    </header>