<?php 
/*
	Template Name: Առանց վերնագիր
*/

get_header();

if( have_posts() ){
	while( have_posts() ){
		the_post();
		?>
		<article class="post pagespec">
			<?php the_content(); ?>
		</article>

		<?php
	}
}
else{
	echo "No content found";
}

get_footer();
?>