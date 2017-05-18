<form method="get" id="searchForm" action="<?php echo home_url('/'); ?>">
	<div>
		<input type="text" value="<?php get_search_query() ?>" name="s" id="s">
		<input type="submit" value="Search"  id="searchSubmit">
	</div>
</form>