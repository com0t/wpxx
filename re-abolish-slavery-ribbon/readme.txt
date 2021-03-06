=== Re-Abolish Slavery Ribbon ===
Contributors: iandunn
Donate link: http://www.notforsalecampaign.org
Tags: Not For Sale, slavery, human trafficking, abolition, social justice, ribbon, badge, banner
Requires at least: 2.8
Tested up to: 4.6
Stable tag: 1.0.6
License: GPLv2 or Later

Adds a "re-abolish slavery" ribbon to the top left or top right corner of your site, which links to the Not For Sale campaign.


== Description ==
Millions of people are living in slavery around the world today, even though most of us think it was abolished in the 1800s. Slavery has always existed to some degree, but over the last few decades it has grown to become a $5 billion a year industry, making it the most lucrative criminal enterprise in the world behind drug trafficking.

In the United States and every other country in the world, young girls and boys are forced and coerced into child prostitution, and people of all ages are forced to perform various kinds of labor for little or no pay. This is commonly referred to as "[human trafficking](http://www.polarisproject.org/human-trafficking/overview)," and it amounts to modern-day slavery. Traffickers use lies, manipulation, contrived debts, threats, drugs, violence, rape and murder to control victims.

You can help raise awareness by installing this plugin, which will add a ribbon to your website that links to [the Not For Sale campaign](http://www.notforsalecampaign.org). You can view the [screenshots](http://wordpress.org/extend/plugins/re-abolish-slavery-ribbon/screenshots/) for examples of how it will look.

*(Disclaimer: This plugin was created independently and isn't officially affiliated with the Not For Sale campaign. Using it on your site doesn't imply endorsement of the site by NFS.)*


== Installation ==

For help installing this (or any other) WordPress plugin, please read the [Managing Plugins](http://codex.wordpress.org/Managing_Plugins) article on the Codex.

Once the plugin is installed and activated, the ribbon should automatically show up in the upper-right hand corner of your site. You can visit the Settings page to change where it's positioned and other settings.


== Frequently Asked Questions ==

= What should I do if the ribbon isn't showing up? =
Make sure your theme's footer.php calls [wp_footer()](http://codex.wordpress.org/Function_Reference/wp_footer) just before the closing `</body>` tag. If it is, start a post in the support forums (see below for details).

= Will the link open in a new window? =
There is an option to control whether it does or not, but be aware that forcing links to open in a new window [violates web standards](http://uxdesign.smashingmagazine.com/2008/07/01/should-links-open-in-new-windows/). Please consider leaving it off.

= How do I prevent the ribbon from overlapping my header on smartphones or other small screens? =
You can go to the General Settings page and check the 'Move to Bottom on Small Screens' box. That will move the ribbon to the bottom of the page for smartphones and other devices with small screens.

Note that this won't work in Internet Explorer 8 or below, because they don't support modern web standards.

= Can I make a donation to support the plugin? =
I don't want to take any donations for myself, but if you'd like to give something please consider making a donation to [the Not For Sale campaign](http://www.notforsalecampaign.org) directly, or [buying something from their store](http://www.notforsalestore.com).

= How can I get help when I'm having a problem? =
2. Read the answers on this page.
3. Check [the support forum](http://wordpress.org/tags/re-abolish-slavery-ribbon?forum_id=10), because your problem may already have been answered there, and if not, the answer you get will help others in the future.

If you still need help, then first follow these instructions:

1. Disable all other plugins and switch to the default theme, then check if the problem is still happening. 
2. If it isn't, then the problem may actually be with your theme or other plugins you have installed. 
3. If the problem is still happening, then start a new thread in the forum with a **detailed description** of your problem and **the URL to your site**.
4. Tag the post with `re-abolish-slavery-ribbon` so that I get an e-mail notification. If you use the link above it'll automatically tag it for you.
5. Check the 'Notify me of follow-up posts via e-mail' box so you won't miss any replies.

I monitor the forums and will respond as my schedule permits.

= How can I send feedback that isn't of a support nature? =
You can send me feedback/comments/suggestions using the [contact form](http://iandunn.name/contact) on my website, and I'll respond as my schedule permits. *Please **don't** use this if you're having trouble using the plugin;* use the support forums instead (see above question for details).

= Can I use this plugin to promote a different cause? =
Yes, there are filters for changing the image and URL that it links to. Here's an example:

`add_filter( 'rasr_image_location', 'rasr_replace_image' );
function rasr_replace_image( $image_location ) {
	// Example 1: Using an image from the Media Library. 28 is the ID of the attachment. Use wp_get_attachment_image_src to specific a thumbnail size.
	$image_location = wp_get_attachment_url( 28 );

	// Example 2: Using a direct URL, which can link to either a local or remote image. Keep in mind hotlinking to remote images is considered a bad practice.
	// $image_location = 'http://example.org/image.png';

	return $image_location;
}

add_filter( 'rasr_image_link_url', 'rasr_replace_image_link' );
function rasr_replace_image_link( $image_link_url ) {
	return 'http://example.org';
}`

Add that code to a [functionality plugin](http://www.doitwithwp.com/create-functions-plugin/) and modify it to fit your needs.


== Screenshots ==
1. An example of how the ribbon looks in the Twenty Eleven theme.
1. It can also be placed in the upper-left hand corner.


== Changelog ==

= 1.0.6 (2016-07-16) =
* Updated the link to point to [http://notforsalecampaign.org/](http://notforsalecampaign.org/) home page because http://notforsalecampaign.org/human-trafficking/ is no longer active.

= 1.0.5 (2014-09-22) =
* Updated the link to point to [http://notforsalecampaign.org/human-trafficking/](http://notforsalecampaign.org/human-trafficking/) because http://www.notforsalecampaign.org/about/slavery/ is no longer active.

= 1.0.4 (2013-12-14) =
* [UPDATE] Remove unnecessary activation logic
* [UPDATE] Moved multiple inline HTML callbacks to single external controller/view
* [UPDATE] Minor code cleanup
* [UPDATE] Moved screenshots to assets directory
* [UPDATE] Organized files into directories

= 1.0.3 =
* Added output sanitization for security
* Added filters around ribbon image and link for customization
* Updated the URL to the Not For Sale page

= 1.0.2 =
* Updated ribbon link URL

= 1.0.1 =
* Increased ribbon's z-index to make it appear above Twenty Eleven's branding top border in WordPress 3.3
* Added new window target to 'Add this plugin...' button when the setting is enabled

= 1.0 =
* Added option to position ribbon in top-left corner.
* Added the 'Add this to your site' button.
* Moved settings to its own page.

= 0.1 =
* Initial release


== Upgrade Notice ==

= 1.0.5 =
Version 1.0.6 updates the link to the NSF campaign to point to their home page.

= 1.0.5 =
Version 1.0.5 updates the link to the NSF campaign to point to their current page about human trafficking.

= 1.0.4 =
Version 1.0.4 has some minor code cleanup and has been tested with WordPress 3.8

= 1.0.3 =
Version 1.0.3 adds a few filters for customization and output sanitization for security.

= 1.0.2 =
Version 1.0.2 is a small but significant update, because it updates the ribbon URL to match the new Slavery page on NFS's website

= 1.0.1 =
Version 1.0.1 fixes a small layout conflict with the Twenty Eleven theme in WordPress 3.3

= 1.0 =
Version 1.0 adds the choice to position the ribbon in the top-left corner.

= 0.1 =
Initial release.