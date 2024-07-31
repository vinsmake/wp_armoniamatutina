<?php
get_header();
?>

<section class="post">
    <div class="post__contenedor">

        <?php

        while (have_posts()) : the_post();

            echo '<section class="post__titulo">';
            the_title('<h1>', '</h1>');

            the_content();

            echo '</section>';




        endwhile;

        ?>

    </div>
</section>

<?php
get_footer();
?>