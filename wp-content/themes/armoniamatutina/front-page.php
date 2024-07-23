<!-- ADVANCED CUSTOM FIELDS EXPORT GLOBAL DATA -->
<?php

$leyenda = get_field('leyenda');
if ($leyenda) {
    update_option('custom_leyenda', $leyenda);
}

$titulo = get_field('titulo');
if ($titulo) {
    update_option('custom_titulo', $titulo);
}

$facebook = get_field('facebook');
if ($facebook) {
    update_option('custom_facebook', $facebook);
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

/* echo "<pre>";
var_dump($facebook);
echo "</pre>"; */


?>

<?php
get_footer();
?>