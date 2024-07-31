<?php
/* ADVANCED CUSTOM FIELDS IMPORT GLOBAL DATA */
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


if (!function_exists('display_social_link')) {
    function display_social_link($social, $svg_filename)
    {
        if ($social && $social['mostrar']) {
            $link = esc_url($social['link']);
            $svg_path = get_template_directory() . '/svg/' . $svg_filename;

            if (file_exists($svg_path)) {
                $svg = file_get_contents($svg_path);
                $class_name = substr($svg_filename, 0, -4);
                echo '<a class="' . $class_name . '" href="' . $link . '" target="_blank">' . $svg . '</a>';
            }
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