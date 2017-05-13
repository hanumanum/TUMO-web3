<?php 
get_header();

if( have_posts() ){
	while( have_posts() ){
		the_post();
		?>
		<article class="post pagespec">
			<h2>	
				<a href="<?php the_permalink();?>">
					<?php the_title();?>		
				</a>
			</h2>

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