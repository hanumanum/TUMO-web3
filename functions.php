<?php  

function connect_resources(){
	wp_enqueue_style("style", get_stylesheet_uri() );
}

add_action("wp_enqueue_scripts", "connect_resources");



register_nav_menus(array("topmenu"=>"Գլխավոր մենյու"
						,"secondmenu"=>"Երկրորդական մենյու"));



function get_parent_id(){

	global $post;

	if($post->post_parent){
		return $post->post_parent;
	}
	else{
		return $post->ID;
	}

}
?>