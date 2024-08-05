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

<section class="page">
    <section class="page__front">
        <section class="polaroid__list">
            <?php

            $args = array(
                'category_name' => get_queried_object()->post_name, // Utiliza el slug de la página como nombre de la categoría
                'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
                'posts_per_page' => get_option('posts_per_page'),
            );

            // Llama a tu función personalizada para obtener los posts
            armoniamatutina_get_category($args);
            ?>
        </section>
    </section>
</section>