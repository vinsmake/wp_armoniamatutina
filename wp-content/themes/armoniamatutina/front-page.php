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
$facebook = get_field('facebook');
if ($facebook) {
    update_option('custom_facebook', $facebook);
}
$instagram = get_field('instagram');
if ($instagram) {
    update_option('custom_instagram', $instagram);
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