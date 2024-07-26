<?php
get_header();
?>

<section class="post">
    <div class="post__contenedor">
        <?php
        while (have_posts()) : the_post();

            /* title */
            echo '<section class="post__titulo">';
            the_title('<h1>', '</h1>');
            echo '<h2>';
            the_field('subtitulo');
            echo '</h2>';
            echo '</section>';


            /* cover */
            echo '<section class="post__cover">';
            if (has_post_thumbnail()) {
                the_post_thumbnail('medium_large');
            }

            $field = get_field('cover');
            echo '<p>' . $field['descripcion'] . ' (<a href="' . $field['link'] . '">' . $field['autor'] . '</a>)</p>';
            echo '</section>';

            /* Content */
            echo '<section class="post__content">';
            the_content();
            echo '</section>';

        endwhile;
        ?>




    </div>
</section>

<?php
get_footer();
?>