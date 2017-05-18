<?php 
get_header();

?>
<div class="site-content clearfix">
	<div class="main-column">

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
					<p class="post-info">
						<?php the_time("F j, D Y g:i a"); ?>
						|
						<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
						<?php the_author(); ?>
						</a>
						|
						<?php 
							$cats = get_the_category(); 
							
							foreach ($cats as $c) {
								$link = get_category_link($c->term_id);
								echo "<a href='$link'>";
								echo $c->name;
								echo "</a>,";
							}
						?>
					</p>
					
					<?php the_post_thumbnail("xlarge"); ?>
					<?php the_excerpt(); ?>
					<a class="read-more" href="<?php the_permalink(); ?>">
					Read more ->
					</a>
				</article>

				<?php
			}
		}
		else{
			echo "No content found";
		}
		?>
		</div>
		<?php get_sidebar(); ?>
</div>

<?php
get_footer();
?>