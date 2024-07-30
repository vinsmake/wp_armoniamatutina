<footer class="footer">

    <h1 class="footer__title"><a href="<?php echo site_url('/') ?>"><?php echo get_bloginfo('name') ?></a></h1>

    <?php
    $args = array(
        'theme_location' => 'navbar',
        'container' => 'nav',
        'container_class' => 'footer__navbar'
    );
    wp_nav_menu($args);
    ?>
    <p class="footer__copyright">Todos los derechos reservados. &copy; <?php echo date('Y') ?>, <a href="armoniamatutina@gmail.com">armoniamatutina@gmail.com</a></p>
</footer>

<?php
wp_footer();
?>
</main>
</body>

</html>