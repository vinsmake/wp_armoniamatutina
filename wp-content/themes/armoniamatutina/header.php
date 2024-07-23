<!-- ADVANCED CUSTOM FIELDS IMPORT GLOBAL DATA -->
<?php
/* HERO DATA */
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
                    /* Social media */
                    function display_social_link($social, $svg_filename)
                    {
                        if ($social && $social['mostrar']) {
                            $link = esc_url($social['link']);
                            $svg_path = get_template_directory() . '/svg/' . $svg_filename;

                            if (file_exists($svg_path)) {
                                $svg = file_get_contents($svg_path);
                                echo '<a href="' . $link . '" target="_blank">' . $svg . '</a>';
                            }
                        }
                    }

                    // Discord
                    display_social_link($discord, 'discord.svg');

                    // Facebook
                    display_social_link($facebook, 'facebook.svg');

                    // Instagram
                    display_social_link($instagram, 'instagram.svg');

                    // LinkedIn
                    display_social_link($linkedin, 'linkedin.svg');

                    // Telegram
                    display_social_link($telegram, 'telegram.svg');

                    // TikTok
                    display_social_link($tiktok, 'tiktok.svg');

                    // WhatsApp
                    display_social_link($whatsapp, 'whatsapp.svg');

                    // X
                    display_social_link($x, 'x.svg');

                    // YouTube
                    display_social_link($youtube, 'youtube.svg');
                    ?>

                </div>
            </div>
        </section>
    </header>