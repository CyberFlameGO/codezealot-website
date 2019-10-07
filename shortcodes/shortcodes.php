<?php

//page structure
function subsection_shortcode( $atts , $content = null ) {
	return ' <div class="subsection">'.do_shortcode($content).'</div>';
}
add_shortcode( 'subsection', 'subsection_shortcode' );


//general
function list_item_shortcode( $atts , $content = null ) {
	return ' <li>'.do_shortcode($content).'</li>';

}
add_shortcode( 'list_item', 'list_item_shortcode' );

function list_item_link__shortcode( $atts , $content = null ) {
	$atts = shortcode_atts(
        array(
            'url' => 'URL Goes Here'
        ), $atts
    );

    extract($atts);//convert indexed values from array into variables

	return ' <li><a href="'.$url.'">'.do_shortcode($content).'</a></li>';
}
add_shortcode( 'list_item_link_', 'list_item_link_shortcode' );




//typography
function section_heading_shortcode( $atts , $content = null ) {
	return ' <h2 class="section-heading"><span>'.do_shortcode($content).'</span></h2>';

}
add_shortcode( 'section_heading', 'section_heading_shortcode' );


function drop_caps_paragraph_shortcode( $atts , $content = null ) {
	return '<p class="drop-sc">'.do_shortcode($content).'</p>';

}
add_shortcode( 'drop_caps_paragraph', 'drop_caps_paragraph_shortcode' );



//buttons
function custom_button_shortcode($atts, $content){
    $atts = shortcode_atts(
        array(
            'text' => 'button text goes here',
            'url' => 'URL Goes Here',
        ), $atts
    );

    extract($atts);//convert indexed values from array into variables

    return '<a class="button smallcaps" href="'.$url.'">'.$text.'</a>';
}
add_shortcode('custom_button', 'custom_button_shortcode');


function social_button_grid_shortcode($atts, $content){
    $atts = shortcode_atts(
        array(
            'facebook_url' => 'URL Goes Here',
            'instagram_url' => 'URL Goes Here',
            'twitter_url' => 'URL Goes Here',
            'reddit_url' => 'URL Goes Here'
        ), $atts
    );

    extract($atts);//convert indexed values from array into variables

    return '
    	<h2 class="section-heading"><span>Follow Us</span></h2>
    	<div class="social-buttons grid">
	      <div class="facebook grid-1-4">
	        <a href="'.$facebook_url.'"><button class="fa fa-facebook"></button></a>
	      </div>

	      <div class="instagram grid-1-4">
	        <a href="'.$instagram_url.'"><button class="fa fa-instagram"></button></a>
	      </div>
	      <div class="twitter grid-1-4">
	        <a href="'.$twitter_url.'"><button class="fa fa-twitter"></button></a>
	      </div>

	      <div class="reddit grid-1-4">
	        <a href="'.$reddit_url.'"><button class="fa fa-reddit-square"></button></a>
	      </div>
	    </div>
	  ';
}
add_shortcode('social_button_grid', 'social_button_grid_shortcode');

    




//dividers
function text_block_shortcode($atts, $content){
    return '
    	<div class="section-divider">
  			<div class="text-wrap clear">
    			<p class="quote">'.do_shortcode($content).'</p>
  			</div>
			</div>
		';
}
add_shortcode('text_block', 'text_block_shortcode');


function quote_block_shortcode($atts, $content){
    $atts = shortcode_atts(
        array(
            'quote' => 'quote text goes here',
            'citation' => 'citation goes here',
        ), $atts
    );

    extract($atts);//convert indexed values from array into variables

    return '
    	<div class="section-divider">
  			<div class="text-wrap clear">
    			<p class="quote">'.$quote.'</p>
    			<p class="citation">- '.$citation.'</p>
  			</div>
			</div>
		';
}
add_shortcode('quote_block', 'quote_block_shortcode');




//image
function image_widget_1_shortcode($atts, $content){
    $atts = shortcode_atts(
        array(
            'list_title' => 'list title goes here'
        ), $atts
    );

    extract($atts);//convert indexed values from array into variables

    return '
        <div class="service-times-bg">
      	<div class="service-times">
      	<h3>'.$list_title.'</h3>
      	'.do_shortcode($content).'
      	</div>
      </div>
		';
}
add_shortcode('image_widget_1', 'image_widget_1_shortcode');



function image_widget_2_shortcode($atts, $content){
    $atts = shortcode_atts(
        array(
            'list_title' => 'list title goes here',
            'caption' => 'caption goes here',
            'img_url' => 'img url goes here'
        ), $atts
    );

    extract($atts);//convert indexed values from array into variables

    return '
    	<div class="img-widget-2">
          <div class="wrapper">
            <img src="'.$img_url.'">
            <span id="caption" class="italic">'.$caption.'</span>
	        <ul class="devotions">
	          <h3 class="smallcaps">'.$list_title.'</h3>
	          '.do_shortcode($content).'
	        </ul>
          </div>
	    </div>
		';
}
add_shortcode('image_widget_2', 'image_widget_2_shortcode');

function image_widget_3_shortcode($atts, $content){
    $atts = shortcode_atts(
        array(
            'title' => 'list title goes here',
            'caption' => 'caption goes here',
        ), $atts
    );

    extract($atts);//convert indexed values from array into variables

    return '
    	<div class="service-times-bg">
      <div class="service-times">
        <h3><?php the_title(); ?></h3>

      	</div>
    	</div>
		';
}
add_shortcode('image_widget_3', 'image_widget_3_shortcode');


//home page
function worship_with_us_hero_widget_shortcode( $atts , $content = null ) {
	$atts = shortcode_atts(
        array(
            'location_url' => 'google maps location url goes here',
            'address' => 'address goes here',
        ), $atts
    );

    extract($atts);//convert indexed values from array into variables
	return '
	<div class="info-box">
      <h2>Come & Worship With Us:</h2>
      <address><a href="'.$location_url.'">'.$address.'</a></address>
    </div>
    ';
}
add_shortcode( 'worship_with_us_hero_widget', 'worship_with_us_hero_widget_shortcode' );



//announcements
function announcements_list_shortcode($atts, $content){
    
    return '
    	<div id="home-page-announcements">
			  <button id="close" onclick="document.getElementById(\'home-page-announcements\').style.display=\'none\'">x</button>
			  <h2 class="double-line-heading"><span>Announcements</span></h2>
			  '.do_shortcode($content).'
			  <div class="double-line-flourish"></div>
			</div>
		';
}
add_shortcode('announcements_list', 'announcements_list_shortcode');

?>