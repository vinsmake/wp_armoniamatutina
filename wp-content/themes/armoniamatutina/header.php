<!-- ADVANCED CUSTOM FIELDS IMPORT GLOBAL DATA -->
<?php
$leyenda = get_option('custom_leyenda');
$titulo = get_option('custom_titulo');
/* SOCIALS */
$discord = get_option('custom_discord');
$facebook = get_option('custom_facebook');
$instagram = get_option('custom_instagram');
$linkedin = get_option('custom_linkedin');
$telegram = get_option('custom_telegram');
$tiktok = get_option('custom_tiktok');
$whatsapp = get_option('custom_whatsapp');
$x = get_option('custom_x');
$youtube = get_option('custom_youtube');

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
                <div class="header__hero__contenido__social">
                    <?php
                    /* Discord */
                    if ($discord) {
                        if ($discord['mostrar']) {
                            $link = esc_url($discord['link']);
                            $svg_path = get_template_directory() . '/svg/discord.svg';

                            if (file_exists($svg_path)) {
                                $svg = file_get_contents($svg_path);
                                echo '<a href="' . $link . '" target="_blank">' . $svg . '</a>';
                            } else {
                                echo '';
                            }
                        } else {
                            echo '';
                        }
                    } else {
                        echo '';
                    }
                    /* Facebook */
                    if ($facebook) {
                        if ($facebook['mostrar']) {
                            $link = esc_url($facebook['link']);
                            $svg_path = get_template_directory() . '/svg/facebook.svg';

                            if (file_exists($svg_path)) {
                                $svg = file_get_contents($svg_path);
                                echo '<a href="' . $link . '" target="_blank">' . $svg . '</a>';
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
                                echo '<a href="' . $link . '" target="_blank">' . $svg . '</a>';
                            } else {
                                echo '';
                            }
                        } else {
                            echo '';
                        }
                    } else {
                        echo '';
                    }

                    /* LinkedIn */
                    if ($linkedin) {
                        if ($linkedin['mostrar']) {
                            $link = esc_url($linkedin['link']);
                            $svg_path = get_template_directory() . '/svg/linkedin.svg';

                            if (file_exists($svg_path)) {
                                $svg = file_get_contents($svg_path);
                                echo '<a href="' . $link . '" target="_blank">' . $svg . '</a>';
                            } else {
                                echo '';
                            }
                        } else {
                            echo '';
                        }
                    } else {
                        echo '';
                    }

                    /* Telegram */
                    if ($telegram) {
                        if ($telegram['mostrar']) {
                            $link = esc_url($telegram['link']);
                            $svg_path = get_template_directory() . '/svg/telegram.svg';

                            if (file_exists($svg_path)) {
                                $svg = file_get_contents($svg_path);
                                echo '<a href="' . $link . '" target="_blank">' . $svg . '</a>';
                            } else {
                                echo '';
                            }
                        } else {
                            echo '';
                        }
                    } else {
                        echo '';
                    }

                    /* TikTok */
                    if ($tiktok) {
                        if ($tiktok['mostrar']) {
                            $link = esc_url($tiktok['link']);
                            $svg_path = get_template_directory() . '/svg/tiktok.svg';

                            if (file_exists($svg_path)) {
                                $svg = file_get_contents($svg_path);
                                echo '<a href="' . $link . '" target="_blank">' . $svg . '</a>';
                            } else {
                                echo '';
                            }
                        } else {
                            echo '';
                        }
                    } else {
                        echo '';
                    }

                    /* WhatsApp */
                    if ($whatsapp) {
                        if ($whatsapp['mostrar']) {
                            $link = esc_url($whatsapp['link']);
                            $svg_path = get_template_directory() . '/svg/whatsapp.svg';

                            if (file_exists($svg_path)) {
                                $svg = file_get_contents($svg_path);
                                echo '<a href="' . $link . '" target="_blank">' . $svg . '</a>';
                            } else {
                                echo '';
                            }
                        } else {
                            echo '';
                        }
                    } else {
                        echo '';
                    }

                    /* X */
                    if ($x) {
                        if ($x['mostrar']) {
                            $link = esc_url($x['link']);
                            $svg_path = get_template_directory() . '/svg/x.svg';

                            if (file_exists($svg_path)) {
                                $svg = file_get_contents($svg_path);
                                echo '<a href="' . $link . '" target="_blank">' . $svg . '</a>';
                            } else {
                                echo '';
                            }
                        } else {
                            echo '';
                        }
                    } else {
                        echo '';
                    }

                    /* YouTube */
                    if ($youtube) {
                        if ($youtube['mostrar']) {
                            $link = esc_url($youtube['link']);
                            $svg_path = get_template_directory() . '/svg/youtube.svg';

                            if (file_exists($svg_path)) {
                                $svg = file_get_contents($svg_path);
                                echo '<a href="' . $link . '" target="_blank">' . $svg . '</a>';
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