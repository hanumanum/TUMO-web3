<?php 
get_header();
?>
<div class="warn">
Attention: this is from page.php
</div>

<?php

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