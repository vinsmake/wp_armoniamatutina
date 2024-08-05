<?php
get_header();
?>

<section class="page">

    <section class="polaroid__list">

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'posts_per_page' => get_option('posts_per_page'),
            'paged' => $paged
        );
        armoniamatutina_get_category($args);
        ?>

    </section>
</section>
<?php
get_footer();
?>