<?php
//REMOVE CUSTOME HEADER OPTIONS AS WE HAVE IT MANUALLY PLACED IN THE HEADER TO DECREASE LOAD TIMES
remove_theme_support( 'custom-header' );

// Add excerpts to Meteor Slides
add_post_type_support('slide', 'excerpt');

//Adjust readmore text
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
