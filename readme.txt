/*
Plugin Name: AW WordPress Yearly Category Archives
Plugin URI: http://wordpress.org/plugins/aw-yearly-category-archives/
Description: This plugin will allow for yearly archives of specific categories.
Version: 1.1
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

This plugin will allow for WordPress yearly category archives. See below for full instructions on its usage. The plugin has been submitted to the WordPress plugin repository and will be available for download as soon as it is approved.

To install the plugin follow these instructions:

    Download the plugin and unzip it.
    Upload the folder aw_wp_yearly_category_archives to your /wp-content/plugins/ folder.
    Activate the plugin from your WordPress admin panel.
    Installation finished.

WordPress Yearly Category Archives has two (2) shortcodes available, both of which are required for the plugin to function properly.

The first shortcode is [aw_year_links cat="X" postslug="slug-to-post-or-page"], which is used to build and display the year links.


The following list explains this shortcode’s usage and requirements.

    This shortcode has two (2) attibutes, and both attributes are required.
    The cat="X" attribute is the category ID you wish to display yearly links from. Replace the X with the numerical ID of the category you wish to query.
    The postslug="slug-to-post-or-page" attribute is the slug to the page that will display your yearly archived posts. This is also the slug of the page you will include the second shortcode on.
    Place this shortcode where you would like to display the year links to the specified category.

The second shortcode is [aw_show_posts cat="X" readmore="Continue Reading" publishedon="n/j/Y"], which is used to display the post content after click a year link.


The following list explains this shortcode’s usage and requirements.

    This shortcode has three (3) attributes. One (1) is required, and two (2) are optional.
    The cat="X" attribute is the category ID you wish to display yearly archived posts from. This attribute is required. Replace the X with the numerical ID of the category you wish to query.
    The readmore="Continue Reading" attribute is the text you wish to display for the "Read More" link. This attribute is optional and will default to "Read More" if left out.
    The publishedon="n/j/Y" attribute is the PHP date format the published on date will appear in the archived posts. This attribute is optional and will default to "M jS, Y" if left out. Refer here for further info on the PHP date format.
    Place this shortcode where you would like to display your archived posts.

Additional Notes

    The shortcodes can be used multiple times throughout the site as long as they are always used in pairs with each pair having the same cat="X" attribute. This is handy for displaying separate yearly category archives.
    The plugin will query all custom post types as well as the main "Posts".
    Currently the plugin only supports displaying Four (4) elements for each post. They are as follows and in order:
        <h2 class="awPostTitle">The Post's Title</h2>
        <p class="awPublishedOnDate">Published on Aug 13th, 2013</p>
        <p class="awPostExcerpt">The Post's First 25 Words...<a href="http://yoursite.com/the-post-slug">Read More</a></p>
        <hr class="awPostDivider"/>
    The actual post elements have classes; however they do not have styles. This is to allow you to style them how you choose. The only frontend style included is for the post divider <hr class="awPostDivider"/> rule. This can be overriden if you so choose to.
    Currently there is also no pagination built into the display of yearly archived posts. I do have plans for this in the future if time allows.
    Currently I will only be able to offer limited support for this plugin. This could change in the future, also if time allows.
    If you do not know how to find your category IDs, I recommend Reveal IDs.
