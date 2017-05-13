<?php 
get_header();
?>
<div class="warn">
Attention: this is from page-about.php
</div>

<?php

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