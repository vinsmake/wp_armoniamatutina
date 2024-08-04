<?php
function get_first_h2($data) {
    if (preg_match('/<h2.*?>(.*?)<\/h2>/', $data, $h2)) {
        return $h2[0];
    }
    return '';
}

function get_first_em($data) {
    if (preg_match('/<em.*?>(.*?)<\/em>/', $data, $em)) {
        return $em[0];
    }
    return '';
}

function armoniamatutina_get_posts($args) {

    
    // Ejecuta una nueva query con los argumentos proporcionados
    $custom_query = new WP_query($args);
    
    if ($custom_query->have_posts()) {
        echo '<ul class="polaroid__list">';
        while ($custom_query->have_posts()) : $custom_query->the_post();
            $data = get_the_content();
            $first_h2 = get_first_h2($data);
            $first_em_after_h2 = get_first_em($data);
            ?>

            <li class="polaroid__card">
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
                <div class="polaroid__card__meta">
                    <?php the_category(); ?>
                    <span><?php the_time(get_option('date_format')); ?></span>
                </div>
            </li>

            <?php
        endwhile;
        echo '</ul>';
        // Restaura el objeto de la query global
        wp_reset_postdata();

        // Paginación personalizada
        $big = 999999999; // Necesario para paginación
        $pagination = paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $custom_query->max_num_pages,
            'prev_text' => __('&laquo; Previous'),
            'next_text' => __('Next &raquo;'),
            'type' => 'list', // Usa una lista no ordenada para la paginación
        ));

        if ($pagination) {
            echo '<nav class="pagination">' . $pagination . '</nav>';
        }
    } else {
        echo '<p>No posts found.</p>';
    }
}
?>
