<?php
get_header();
?>

<section class="page">
    <section class="page__front">

<h2>
    <?php echo get_queried_object()->name; ?>
</h2>


<section class="polaroid__list">
<?php 
        $args = array(
            'category_name' => get_queried_object()->name,
            'paged' => $paged = (get_query_var('paged')) ? get_query_var('paged') : 1,
            'posts_per_page' => get_option('posts_per_page'),
        );

        armoniamatutina_get_category($args);
?>
</section>



    </section>
</section>
<?php
get_footer();
?>