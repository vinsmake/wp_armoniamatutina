<h1>Armonía Matutina</h1>
<h2>Un poco de lectura para equilibrar tu mañana
</h2>
<h2>desde page</h2>
<?php 
    get_header();
?>
<?php

while( have_posts() ) : the_post();

    the_title();

    the_content();

endwhile;

?>

<?php 
    get_footer();
?>