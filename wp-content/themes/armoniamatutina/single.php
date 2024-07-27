<?php
get_header();
?>


<section class="post">
    <section class="post__bookmarks">
        <div class="post__bookmark">
            <div>Cultura</div>
        </div>
        <div class="post__bookmark">
            <div>Arte</div>
        </div>
    </section>


    <div class="post__contenedor">

        <section class="post__categorias">Estas leyendo sobre: <?php the_category(); ?></section>

        <?php
        while (have_posts()) : the_post();

            /* title */
            echo '<section class="post__titulo">';
            the_title('<h1>', '</h1>');

            /* Content */
            ob_start();
            the_content();
            $content = ob_get_clean();

            /* Mover de lugar el primer h2, agregado mediante default_content */
            // Extraer el primer <h2> del contenido
            preg_match('/<h2.*?>.*?<\/h2>/i', $content, $matches);
            $first_h2 = isset($matches[0]) ? $matches[0] : '';

            // Eliminar el primer <h2> del contenido
            $content = preg_replace('/<h2.*?>.*?<\/h2>/i', '', $content, 1);

            // Imprimir el primer <h2> después del título
            echo $first_h2;
            echo '</section>';

            /* cover img */
            echo '<section class="post__cover">';
            if (has_post_thumbnail()) {
                the_post_thumbnail('medium_large');
            }

            /* cover copyright */
            $field = get_field('cover');
            echo '<p>' . $field['descripcion'] . ' (<a href="' . $field['link'] . '">' . $field['autor'] . '</a>)</p>';
            echo '</section>';

            /* Remaining Content */
            echo '<section class="post__content">';
            echo $content;
            echo '</section>';

        endwhile;
        ?>
    </div>

    <!-- Publisher data -->
    <?php echo '<footer class="post__content__footer">'; ?>
    <span>Publicado por
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
            <?php echo get_the_author_meta('display_name') ?>
        </a>
    </span>

    <span>&nbsp;el dia
        <?php the_time(get_option('date_format')); ?>
    </span>




    <?php echo '</footer>'; ?>

</section>

<?php
get_footer();
?>