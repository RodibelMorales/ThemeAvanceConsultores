<?php 
	$NameCategoria = single_cat_title("", false);
?>


<?php
query_posts('category_name='.$NameCategoria.';posts_per_page=3');
if ( have_posts() )
while ( have_posts() )
the_post();
the_title();
the_excerpt();
endwhile;
?>