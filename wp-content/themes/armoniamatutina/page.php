<?php 
    get_header();
?>
<h1>Page</h1>

<?php

while( have_posts() ) : the_post();

    the_title();

    the_content();


endwhile;

?>

<?php 
    get_footer();
?>