<?php 
get_header();
?>
<div class="warn">
Attention: this is from front-page.php
</div>
<div class="site-content clearfix">
	<div class="main-column">
		<div class="welcome">
			<h1>Ողջույն</h1>
			<p>Սա իմ կայքն է, այստեղ կտեսնեք ․․․․․</p>
		</div>
		<?php
			$query = array(
				'cat'=>1,
				'posts_per_page'=>5,
				'orderby'=>'title',
				'order'=>'ASC'
				);

			$myposts = new WP_Query($query);

			if($myposts->have_posts()):
				while($myposts->have_posts()): $myposts->the_post(); ?>
					<h2>
						<?php the_title(); ?>
					</h2>
					
					<?php the_excerpt(); ?>

		<?php endwhile;
			endif;	
			wp_reset_postdata();
		?>
		
	</div>
	<?php get_sidebar(); ?>
</div>

<?php
get_footer();
?>