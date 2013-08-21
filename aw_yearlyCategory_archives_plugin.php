<?php
/*
Plugin Name: AW WordPress Yearly Category Archives
Plugin URI: http://wordpress.org/plugins/aw-yearly-category-archives/
Description: This plugin will allow for yearly archives of specific categories from all post types and "Posts".
Version: 1.0.1
Author: Andy Warren
Author URI: http://coded.andy-warren.net

License:

	Copyright 2013  Andy Warren  (email : andy@andy-warren.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
    
Or:

        DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE 
      Version 2, December 2004 - http://www.wtfpl.net/ 

 Copyright (C) 2013 Andy Warren <andy@andy-warren.net> 

 Everyone is permitted to copy and distribute verbatim or modified 
 copies of this license document, and changing it is allowed as long 
 as the name is changed. 

            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE 
   TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION 

  0. You just DO WHAT THE FUCK YOU WANT TO.


*******************************  
Whichever license you prefer ;-)
*******************************

*/

// Add the menu page for the plugin
function aw_yca_add_menu_page(){
    add_menu_page( 'Yearly Category Archives', 'Yearly Category Archives', 'activate_plugins', 'aw-yearly-category-archives/aw_yearlyCategory_menu_page.php', '', plugins_url( 'aw-yearly-category-archives/img/read.png' ), 100 );
}
add_action( 'admin_menu', 'aw_yca_add_menu_page');

// Add the plugin's admin page CSS file
function aw_enqueue_yearly_category_css() {
	wp_register_style('aw_yearly_category_css', plugins_url('/css/aw_yearly_category.css', __FILE__));
	wp_enqueue_style('aw_yearly_category_css');
}
add_action( 'admin_init', 'aw_enqueue_yearly_category_css' );

// Add the plugin's frontend CSS file
function aw_enqueue_frontend_css() {
	wp_register_style('aw_frontend_css', plugins_url('/css/aw_frontend.css', __FILE__));
	wp_enqueue_style('aw_frontend_css');
}
add_action( 'wp_enqueue_scripts', 'aw_enqueue_frontend_css');

// Create the year links to display on the site
function aw_create_year_links($atts) { 
	extract(shortcode_atts( array(
		'cat' => '1',
		'postslug' => '',
	), $atts, 'aw_year_links' ));
				
	$dateArray = array();
	$postTypes = get_post_types( '', 'names' ); 
	$myposts = get_posts(array('posts_per_page' => -1, 'post_type' => $postTypes, 'category' => $cat, 'post_status' => 'publish', 'orderby' => 'post_date'));
	foreach ($myposts as $post) { 
		$postdate = mysql2date('Y', $post->post_date);
		$dateArray[] = $postdate;				
	}
	
	if ($post) {	
		$earliestPostDate = min($dateArray);
		$latestPostDate = max($dateArray);		
		echo '<ul class="awDatesUL">';		
		while ($earliestPostDate <= $latestPostDate) {
			$pieces = explode(" ", $earliestPostDate++);
			foreach ($pieces as $piece) {
				$currentYear = date('Y');
				if ($piece <= $currentYear) {
					$piece = '<li class="awDatesLI"><a href="' . site_url() . '/' . $postslug .  '/?' . $piece . '">' . $piece . '</a></li>';
					echo $piece;
				}				
			}
		}						
		echo '</ul>';		
	} else {
		echo '<p>The are no posts in this category click <a href="' . home_url() .  '">here</a> to return to the home page.</p>';
	}
	
} // end aw_create_year_links()

// Add shortcode [aw_year_links] to display yearly links
add_shortcode( 'aw_year_links', 'aw_create_year_links' );

// Show post archives by year and category
function aw_show_posts_by_year_and_cat($atts) {
	extract(shortcode_atts(array(
		'cat' => '1',
		'readmore' => 'Read More',
		'publishedon' => 'M jS, Y',
	), $atts, 'aw_show_posts' ));
	
	$postTypes = get_post_types( '', 'names' ); 
	$myposts = get_posts(array('posts_per_page' => -1, 'post_type' => $postTypes, 'category' => $cat, 'post_status' => 'publish', 'orderby' => 'post_date', 'order' => 'DESC'));
	foreach ($myposts as $post) { 
		$postdate = mysql2date('Y', $post->post_date);
		$postPublishDate = mysql2date($publishedon, $post->post_date);
		$postTitle = $post->post_title;
		$postURL = $post->guid;
		//$postContent = apply_filters('the_content', $post->post_content);
		$postContent = $post->post_content;
		$contentPieces = explode(" ", $postContent);
        $first_25_excerpt = implode(" ", array_splice($contentPieces, 0, 25));
			
		if ($_SERVER["QUERY_STRING"] == $postdate) {
			echo '<h2 class="awPostTitle">' .  $postTitle . '</h2>';
			echo '<p class="awPublishedOnDate">Published on ' . $postPublishDate . '</p>';
			echo '<p class="awPostExcerpt">' . $first_25_excerpt . '...<a class="awReadMore" href="' . $postURL . '">' . $readmore . '</a></p>';
			echo '<hr class="awPostDivider"/>'; 
		}
	}
	
} // end aw_show_posts_by_year_and_cat()

// Add shortcode [aw_show_posts] to display yearly links
add_shortcode( 'aw_show_posts', 'aw_show_posts_by_year_and_cat' );		
?>