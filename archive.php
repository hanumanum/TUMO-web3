<?php 
get_header();
?>
<div class="warn">
Attention: this is from archive.php
</div>


<h2>
	<?php 
		if(is_category()){
			echo "Category: ";
			echo single_cat_title();
		}
		elseif(is_tag()){
			echo "Tag: ";
			echo single_tag_title();
		}
		elseif(is_author()){
			the_post();
			echo "Author: ".get_the_author();
			rewind_posts();
		}
		elseif(is_day()){
			echo "Dayli Archive: ".get_the_date(); 
		}
		elseif(is_month()){
			echo "Dayli Archive: ".get_the_date("F Y"); 
		}
		elseif(is_month()){
			echo "Yearly Archive: ".get_the_date("Y"); 
		}
		else{
			echo "Archive";
		}

	?>


</h2>


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