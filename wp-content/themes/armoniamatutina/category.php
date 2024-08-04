<?php
get_header();
?>

<section class="blog">
<h2>
    <?php echo get_queried_object()->name; ?>
</h2>
    <section class="blog__polaroid">


<?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'category_name' => get_queried_object()->name,
            'paged' => $paged,
            'posts_per_page' => get_option('posts_per_page'),
        );

        armoniamatutina_get_posts($args);
?>




    </section>
</section>
<?php
get_footer();
?>