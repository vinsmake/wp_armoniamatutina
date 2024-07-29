<?php
get_header();
?>

<section class="blog">
    <section class="blog__polaroid">


<?php

function get_first_h2($content)
{
    if (preg_match('/<h2.*?>(.*?)<\/h2>/', $content, $matches)) {
        return $matches[0]; // Cambiado a $matches[0] para incluir la etiqueta <h2> completa
    }
    return '';
}

function get_first_em_after_h2($content)
{
    // Buscar el primer <h2> y luego buscar el primer <em> después de eso
    if (preg_match('/<h2.*?>.*?<\/h2>.*?<em.*?>(.*?)<\/em>/s', $content, $matches)) {
        return $matches[1];
    }
    return '';
}

while (have_posts()) : the_post();
    $content = get_the_content();
    $first_h2 = get_first_h2($content);
    $first_em_after_h2 = get_first_em_after_h2($content);
?>

    <li class="blog__polaroid__card">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium_large') ?>
            <h3><?php the_title(); ?></h3>
            <?php if (!empty($first_h2)) : ?>
                <h2>
                    <?php echo $first_h2; ?>
                </h2>
                    <?php if (!empty($first_em_after_h2)) : ?>
                        <em><?php echo $first_em_after_h2; ?></em>
                    <?php endif; ?>
            <?php endif; ?>
        </a>
        <div class="blog__polaroid__card__meta">
            <?php the_category(); ?>
            <span>Fecha: <?php the_time(get_option('date_format')); ?></span>
        </div>
    </li>

<?php
endwhile;
?>


    </section>
</section>
<?php
get_footer();
?>