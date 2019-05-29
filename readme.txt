=== Hide WP Engine Legacy Staging ===
Contributors: mattrad
Tags: wpengine
Requires at least: 5.0
Tested up to: 5.2
Requires PHP: 5.2.4
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Hide WP Engine's Legacy Staging links, to avoid confusion with the newer production, staging and development environments.

== Description ==

** This is not an official WP Engine plugin **

Remove confusion about _staging_ on WP Engine.

Some WP Engine accounts have access to both Legacy Staging and the newer production, staging, and development environments. This can be confusing as each production, staging, and development environment can also have a Legacy Staging environment.

This plugin will only affect WP Engine accounts with access to Legacy Staging. It will remove the menu links to these Legacy Staging environments. It will not affect any Legacy Staging environments themselves.

== Installation ==

1. Install through the WordPress plugin repository.

Or:

1. Upload `hide-wp-engine-legacy-staging.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

There are no configurable settings.

== Frequently Asked Questions ==

= How will this affect any existing legacy staging environments I have? =

It won't. They will still be accessible.

= Help! I can't access my legacy staging environments! =

Please deactivate the plugin. Your Legacy Staging links will become visible again.

= I activated the plugin but nothing happened =

If you've activated the plugin anywhere but on a WP Engine WordPress install with access to Legacy Staging, nothing will happen. Go about your day.

== Changelog ==

= 1.1.0 =
* Add icon.

= 1.0.4 =
* Multisite compatability.

= 1.0.3 =
* Fix typo. Update FAQ.

= 1.0.2 =
* Fix plugin slug.

= 1.0.1 =
* Fix plugin URI.

= 1.0.0 =
* Initial release.
