<?php
get_header();
?>

<section class="blog">
    <section class="blog__polaroid">

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'posts_per_page' => get_option('posts_per_page'),
            'paged' => $paged
        );
        armoniamatutina_get_posts($args);
        ?>
    </section>
    <?php
        the_posts_pagination();
        ?>
</section>
<?php
get_footer();
?>