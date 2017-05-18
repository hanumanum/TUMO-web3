<?php 
get_header();
?>
<div class="warn">
Attention: this is from single.php
</div>

<?php
if( have_posts() ){
	while( have_posts() ){
		the_post();
		?>
		<article class="post">
			<h2>	
				<a href="<?php the_permalink();?>">
					<?php the_title();?>
				</a>
			</h2>
			
			<div class="single-text">
			<?php the_content(); ?>
			<?php the_category(); ?>
			<?php theAuthorLastTreePost(); ?>
			</div>
		</article>

		<?php
	}
}
else{
	echo "No content found";
}

get_footer();
?>