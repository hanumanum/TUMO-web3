<?php 
get_header();

if( have_posts() ){
	while( have_posts() ){
		the_post();
		?>
		<article class="post pagespec1">
			<h2><?php the_title();?></h2>
			
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