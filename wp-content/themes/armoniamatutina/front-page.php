<!-- ADVANCED CUSTOM FIELDS EXPORT GLOBAL DATA -->
<?php

/* HERO */
$leyenda = get_field('leyenda');
if ($leyenda) {
    update_option('custom_leyenda', $leyenda);
}
$titulo = get_field('titulo');
if ($titulo) {
    update_option('custom_titulo', $titulo);
}

/* SOCIALS */
$discord = get_field('discord');
if ($discord) {
    update_option('custom_discord', $discord);
}

$facebook = get_field('facebook');
if ($facebook) {
    update_option('custom_facebook', $facebook);
}

$instagram = get_field('instagram');
if ($instagram) {
    update_option('custom_instagram', $instagram);
}

$linkedin = get_field('linkedin');
if ($linkedin) {
    update_option('custom_linkedin', $linkedin);
}

$telegram = get_field('telegram');
if ($telegram) {
    update_option('custom_telegram', $telegram);
}

$tiktok = get_field('tiktok');
if ($tiktok) {
    update_option('custom_tiktok', $tiktok);
}

$whatsapp = get_field('whatsapp');
if ($whatsapp) {
    update_option('custom_whatsapp', $whatsapp);
}

$x = get_field('x');
if ($x) {
    update_option('custom_x', $x);
}

$youtube = get_field('youtube');
if ($youtube) {
    update_option('custom_youtube', $youtube);
}



?>


<?php
get_header();
?>

<?php

while (have_posts()) : the_post();

    the_title();

    the_content();

endwhile;

?>

<?php
get_footer();
?>