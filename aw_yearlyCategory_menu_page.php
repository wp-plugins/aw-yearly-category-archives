<div class="wrap">

<h1 class="awMenuPageHeader">AW WordPress Yearly Category Archives Instructions</h1>

<p>This plugin will allow for yearly archives of specific categories.  See below for full instructions on its usage.</p>

<br/>

<p><strong>AW WordPress Yearly Category Archives</strong> has two (2) shortcodes available, <span class="form-invalid">both of which are required</span> for the plugin to function properly.</p>

<hr class="awHalfWidthFloatLeft"/><br/>

<p>
	The first shortcode is <code>[aw_year_links cat="X" postslug="slug-to-post-or-page"]</code>, which is used to build and display the year links.
	<br/>
	The following list explains this shortcode's usage and requirements.
</p>
	<ul class="awAdminUL">
		<li><span class="form-invalid">This shortcode has two (2) attibutes, and both attributes are required.</span></li>
		<li>The <code>cat="X"</code> attribute is the category ID you wish to display yearly links from. Replace the <code>X</code> with the numerical ID of the category you wish to query.</li>
		<li>The <code>postslug="slug-to-post-or-page"</code> attribute is the slug to the page that will display your yearly archived posts.  This is also the slug of the page you will include the second shortcode on.</li>
		<li>Place this shortcode where you would like to display the year links to the specified category.</li>
	</ul>


<br/><hr class="awHalfWidthFloatLeft"/><br/>

<p>
	The second shortcode is <code>[aw_show_posts cat="X" readmore="Continue Reading" publishedon="n/j/Y"]</code>, which is used to display the post content after click a year link.
	<br/>
	The following list explains this shortcode's usage and requirements.
</p>
	<ul class="awAdminUL">
		<li>This shortcode has three (3) attributes.  One (1) is required, and two (2) are optional.</li>
		<li>The <code>cat="X"</code> attribute is the category ID you wish to display yearly archived posts from.  <span class="form-invalid">This attribute is required.</span>  Replace the <code>X</code> with the numerical ID of the category you wish to query.</li>
		<li>The <code>readmore="Continue Reading"</code> attribute is the text you wish to display for the "Read More" link.  This attribute is optional and will default to "Read More" if left out.</li>
		<li>The <code>publishedon="n/j/Y"</code> attribute is the PHP date format the published on date will appear in the archived posts.  This attribute is optional and will default to "M jS, Y" if left out.  Refer <a target="_blank" title="PHP Date Format Reference" href="http://php.net/manual/en/function.date.php">here</a> for further info on the PHP date format.</li>
		<li>Place this shortcode where you would like to display your archived posts.</li>
	</ul>


<br/><hr class="awHalfWidthFloatLeft"/><br/>

<h3>Additional Notes</h3>

	<ul class="awAdminUL">
		<li>The shortcodes can be used multiple times throughout the site <span class="form-invalid">as long as they are always used in pairs with each pair having the same <code>cat="X"</code> attribute</span>.  This is handy for displaying separate yearly category archives.</li>
		<li>The plugin will query all custom post types as well as the main "Posts".</li>
		<li>Currently the plugin will display Four (4) elements for each post, unless the admin chooses to write their own post structure on the <a href="<?php echo site_url(); ?>/wp-admin/admin.php?page=aw_wp_yearly_category_archives_1.5/aw_yearlyCategory_settings_page.php">settings page</a>.  They are as follows and in order:
			<ol>
				<li><code>&lt;h2 class="awPostTitle"&gt;The Post's Title&lt;/h2&gt;</code></li>
				<li><code>&lt;p class="awPublishedOnDate"&gt;Published on Aug 13th, 2013&lt;/p&gt;</code></li>
				<li><code>&lt;p class="awPostExcerpt"&gt;The Post's First 25 Words...&lt;a href="http://yoursite.com/the-post-slug"&gt;Read More&lt;/a&gt;&lt;/p&gt;</code></li>
				<li><code>&lt;hr class="awPostDivider"/&gt;</code></li>
			</ol>
		</li>
		<li>The actual post elements have classes; however they do not have styles.  This is to allow you to style them how you choose.  The only frontend style included is for the post divider <code>&lt;hr class="awPostDivider"/&gt;</code> rule.  This can be overriden if you so choose to.</li>
		<li>Currently there is also no pagination built into the display of yearly archived posts.  I do have plans for this in the future if time allows.</li>
		<li>Currently I will only be able to offer limited support for this plugin.  This could change in the future, also if time allows.</li>
		<li>If you do not know how to find your category IDs, I recommend <a target="_blank" href="http://wordpress.org/plugins/reveal-ids-for-wp-admin-25/">Reveal IDs</a>.</li>
	</ul>
	
	<p>
		Find me on Twitter at <a target="_blank" href="https://twitter.com/iAmAndyWarren">https://twitter.com/iAmAndyWarren</a> or follow me now by clicking <a href="https://twitter.com/iAmAndyWarren" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @twitterapi</a>.
		<br/>
		You can also find me at <a target="_blank" href="http://www.andy-warren.net">andy-warren.net</a> or check <a target="_blank" href="http://coded.andy-warren.net">Coded</a> for additional WordPress, jQuery, and other fun stuff.
	</p>

	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	
	
</div>