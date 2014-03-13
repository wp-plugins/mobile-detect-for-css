=== Mobile Detect For CSS ===
Contributors: svincoll4
Tags: php, mobile, detect, ios, android, css
Requires at least: 2.8
Tested up to: 3.8

This plugin add the CSS class to BODY tag. It is using the Mobile_Detect library from http://mobiledetect.net/


== Description ==

The library is from http://mobiledetect.net/<br/>
The BODY tag needs to use the body_class() function.<br/>
The values:<br/>
- mobile<br/>
- tablet<br/>

Ex: &lt;body &lt;?php body_class(); ?&gt;&gt;
Result:
&lt;body class="home page page-id-420 page-template-default logged-in mobile"&gt;
OR
&lt;body class="home page page-id-420 page-template-default logged-in tablet"&gt;

== Installation ==

1. Download the widget and upload it to your server through `WP Admin -> Plugins -> Add New -> Upload`
2. After the upload is complete activate the plugin.

== Frequently Asked Questions ==

= Any questions? =

== Screenshots ==

1. On mobile
2. On tablet
