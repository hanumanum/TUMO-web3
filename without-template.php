<?php 
/*
	Template Name: Առանց վերնագիր
*/

get_header();
?>
<div class="warn">
Attention: this is from without-template.php
</div>

<?php

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