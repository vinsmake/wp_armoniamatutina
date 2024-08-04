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

        $args = array(
            'category_name' => get_queried_object()->post_name, // Utiliza el slug de la página como nombre de la categoría
            'posts_per_page' => get_option('posts_per_page'),
        );

        // Llama a tu función personalizada para obtener los posts
        armoniamatutina_get_posts($args);


        ?>

    </section>
</section>