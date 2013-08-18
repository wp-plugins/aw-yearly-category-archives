=== AW WordPress Yearly Category Archives ===
Contributors: awarren 
Tags: Yearly Category Archives, Archives, Post Archives
Requires at least: 3.5.2
Tested up to: 3.5.2
Stable tag: trunk

This plugin will allow for WordPress yearly category archives. 

== Description ==

WordPress Yearly Category Archives has two (2) shortcodes available, both of which are required for the plugin to function properly.  
  
The first shortcode is `[aw_year_links cat="X" postslug="slug-to-post-or-page"]`, which is used to build and display the year links.  
  
  
The following list explains this shortcode's usage and requirements.  
  
This shortcode has two (2) attibutes, and both attributes are required.  
The cat=\"X\" attribute is the category ID you wish to display yearly links from. Replace the X with the numerical ID of the category you wish to query.  
The postslug=\"slug-to-post-or-page\" attribute is the slug to the page that will display your yearly archived posts. This is also the slug of the page you will include the second shortcode on.  
Place this shortcode where you would like to display the year links to the specified category.  
  
The second shortcode is `[aw_show_posts cat="X" readmore="Continue Reading" publishedon="n/j/Y"]`, which is used to display the post content after click a year link.  
  
  
The following list explains this shortcode's usage and requirements.  
  
* This shortcode has three (3) attributes. One (1) is required, and two (2) are optional.  
* The `cat="X"` attribute is the category ID you wish to display yearly archived posts from. This attribute is required. Replace the X with the numerical ID of the category you wish to query.  
* The `readmore="Continue Reading"` attribute is the text you wish to display for the ÒRead MoreÓ link. This attribute is optional and will default to ÒRead MoreÓ if left out.  
* The `publishedon="n/j/Y"` attribute is the PHP date format the published on date will appear in the archived posts. This attribute is optional and will default to ÒM jS, YÓ if left out. Refer [here](http://php.net/manual/en/function.date.php) for further info on the PHP date format.  
* Place this shortcode where you would like to display your archived posts.  
  
Additional Notes  
  
* The shortcodes can be used multiple times throughout the site as long as they are always used in pairs with each pair having the same cat=\"X\" attribute. This is handy for displaying separate yearly category archives.  
* The plugin will query all custom post types as well as the main ÒPostsÓ.  
* Currently the plugin only supports displaying Four (4) elements for each post. They are as follows and in order:  
  > * <h2> class=\"awPostTitle\">The Post\'s Title</h2>  
  > * <p> class=\"awPublishedOnDate\">Published on Aug 13th, 2013</p>  
  > * <p> class=\"awPostExcerpt\">The Post\'s First 25 Words...<a href=\"http://yoursite.com/the-post-slug\">Read More</a></p>  
  > * <hr class=\"awPostDivider\"/>  
* The actual post elements have classes; however they do not have styles. This is to allow you to style them how you choose. The only frontend style included is for the post divider `<hr class="awPostDivider"/>` rule. This can be overriden if you so choose to.  
* Currently there is also no pagination built into the display of yearly archived posts. I do have plans for this in the future if time allows.  
* Currently I will only be able to offer limited support for this plugin. This could change in the future, also if time allows.  
* If you do not know how to find your category IDs, I recommend Reveal IDs.

== Installation ==

To install the plugin follow these instructions:  
  
1. Download the plugin and unzip it.  
2. Upload the folder aw\_wp\_yearly\_category\_archives to your /wp-content/plugins/ folder.  
3. Activate the plugin from your WordPress admin panel.  
4. Installation finished.