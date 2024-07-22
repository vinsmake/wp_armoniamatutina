<!-- ADVANCED CUSTOM FIELDS EXPORT GLOBAL DATA -->
<?php
$portada = get_field('portada');
if ($portada) {
    update_option('custom_portada', $portada);
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