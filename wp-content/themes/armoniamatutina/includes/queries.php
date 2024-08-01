<?php 
function get_first_h2($content) {
    if (preg_match('/<h2.*?>(.*?)<\/h2>/', $content, $h2)) {
        return $h2[0];
    }
    return '';
}

function get_first_em($content) {
    if (preg_match('/<em.*?>(.*?)<\/em>/', $content, $em)) {
        return $em[0];
    }
    return '';
}

function armoniamatutina_get_posts($args) {
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) : $query->the_post();
            $content = get_the_content();
            $first_h2 = get_first_h2($content);
            $first_em_after_h2 = get_first_em($content);
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
                    <span><?php the_time(get_option('date_format')); ?></span>
                </div>
            </li>

        <?php endwhile;
        wp_reset_postdata();
    } else {
        echo '<p>No posts found.</p>';
    }
}
?>
