		<footer class="site-footer">
			<nav class="site-nav">
				<?php wp_nav_menu(array("theme_location"=>"secondmenu")); ?>
			</nav>

			<p>
				<?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?>
			</p>
		</footer>
		<?php wp_footer(); ?>
	</div> <!-- container -->
</body>
</html>