<?php
get_header();
?>

<section class="page">
    <section class="banner__list">
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
<?php
get_footer();
?>