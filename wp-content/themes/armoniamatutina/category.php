<?php
get_header();
?>

<section class="blog">
<h2>
    <?php echo get_queried_object()->name; ?>
</h2>
    <section class="blog__polaroid">


<?php 
        $args = array(
            'category_name' => get_queried_object()->name,
            'posts_per_page' => -1, // -1 para obtener todas las publicaciones
        );

        armoniamatutina_get_posts($args);
?>




    </section>
</section>
<?php
get_footer();
?>