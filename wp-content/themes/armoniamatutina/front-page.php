<!-- ADVANCED CUSTOM FIELDS EXPORT GLOBAL DATA -->
<?php
$leyenda = get_field('leyenda');
if ($leyenda) {
    update_option('custom_leyenda', $leyenda);
}
?>
<?php
$titulo = get_field('titulo');
if ($titulo) {
    update_option('custom_titulo', $titulo);
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