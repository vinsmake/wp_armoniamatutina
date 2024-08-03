<section class="page">
    <section class="page__contenedor">

        <?php
        while (have_posts()) : the_post();

            echo '<h1>';
            the_title();
            echo '</h1>';

            the_content();

        endwhile;
        ?>
    </section>
</section>

<section class="blog">
    <section class="blog__polaroid">


        <?php
        /* obtiene el slug para usarlo como categoria */
        $page_slug = get_queried_object()->post_name;
        $category_name = $page_slug;

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'category_name' => $category_name, // Utiliza el slug de la página como nombre de la categoría
            'paged' => $paged,
            'posts_per_page' => get_option('posts_per_page'),
        );

        // Llama a tu función personalizada para obtener los posts
        armoniamatutina_get_posts($args);


        ?>





    </section>
    <?php
    the_posts_pagination();
    ?>


</section>