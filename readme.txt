=== Bcc Rest Test ===
Contributors: Brian Payne, Carl Forde
Donate link: https://www.paypal.me/CarlForde
Tags: BCcampus, REST, Test, 
Requires at least: 4.7.2
Tested up to: 4.7.2
Stable tag: 0.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add REST API support for the custom post types 'event', 'location', 'recurring-event'.

== Description ==

Based on the original plugin from https://github.com/bccampus/bcc-rest-test

Provides descriptive responses to the following requests
	GET /wp-json/wp/v2/event
	GET /wp-json/wp/v2/location
	GET /wp-json/wp/v2/recurring-event



== Installation ==

Create a zip archive of the bcc_rest_test directory.

On the Plugins page of the Admin interface, 
- Click 'Add New'
- on the Add Plugins page
    - Click 'Upload Plugin'
	- Click the 'Browse...' button 
	    - Navigate to the location of the bcc_rest_test.zip file
		- Select the bcc_rest_test.zip file
		- Click 'Open'
	- Click 'Install Now'
	- Click 'Activate Plugin' button



== Frequently Asked Questions ==

= Is this your first time writing a WordPress Plugin? =

Yes, it sure is.

= How did it go? =

I've learned enough to fulfill the assignment, but clearly there is much more to learn. 

= What was the biggest stumbling block? =

Thinking I had to integrate this new plugin with the Events Manager plugin. I 
was making the project much larger than it needed to be since the assignment 
didn't ask for that. Though clearly that is the intention. I spent too much 
time digging into the Event Manager before I needed to. 

== Screenshots ==

None

== Changelog ==

= 0.1.0 =
* initial release establishing the overall framework 


