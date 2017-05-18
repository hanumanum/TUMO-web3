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

function custom_theme_setup(){
	add_theme_support('post-thumbnails');	
	add_image_size("xlarge",800,200,array('left','top'));
	
}

add_action("after_setup_theme","custom_theme_setup");



function widgetsInit(){
	register_sidebar(array("id"=>"firstsidebar"
						  	,"name"=>"Կողմնամաս 1"
						  	,"before_widget"=>"<div class='widget-item'>"
						  	,"after_widget"=>"</div>"
						  	,"before_title"=>"<h1 class='my_class_name'>"
						  	,"after_title"=>"</h1>"));
	register_sidebar(array("id"=>"secondsidebar","name"=>"Կողմնամաս 2"));

}
add_action("widgets_init","widgetsInit");

?>