<?php
get_header();
?>

<section class="blog">
    <section class="blog__polaroid">

        <?php
        $args = array(
            'posts_per_page' => -1, // -1 para obtener todas las publicaciones
        );

        armoniamatutina_get_posts($args);

        ?>

    </section>
</section>
<?php
get_footer();
?>