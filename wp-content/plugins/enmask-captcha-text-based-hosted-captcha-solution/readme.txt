=== Plugin Name ===

Contributors: enmasksteve

Donate link: http://

Tags: comments, spam protection, captcha, lost password, user login, register

Requires at least: 3.0

Tested up to: 3.2.1

Stable tag: 1.1

Regular text based and hosted Captcha, better Captcha experience.

== Description ==

**EnMask Captcha** is based on encrypted text and paired with matching web fonts so user will see clearly the challenge text while the spam programs see the underlying encrypted text. Users will have much better Captcha experience then trying to guess the difficult twisted image based Captcha solution. It's fun and helps improving user accuracy rate when the answer characters showing the same font.

You can apply CSS to EnMask Captcha, especially the challenge text, so it will be seamlessly integrated your web pages.

It is also ideal for iPhone and Android phones.

EnMask Captcha is a free cloud base service (Service as a Service, SaaS), You only need to install once, the Captcha fonts and styles changes real time to make it difficult for spam programs.

With this plugin you will be able to show enmask captcha in wordpress forms. 

Forms in wordpress in which you can implement wordpress captcha are:

* Comment forms
* Registration forms
* Logged in users
* Lost password
* Login form

*Features of the plugin*

1.	Configure from Admin panel
2.	Setting to hide the CAPTCHA from logged in users and or admins
3.	Setting to show the CAPTCHA on the forms for comments, registration, lost password, login, or all
4.	Valid HTML
5.	Allows Trackback and Pingback
6.	I18n language translation support

*Translations included in zip file*

1.	Spanish
2.	French
3.	Chinese simplified
4.	Chinese traditional
5.	Russian
6.	Japanese
7.	German

All the translations have been carried out using *Google translator*. If you find any translation error(s) please [let us know](mailto:support@enmask.com) your suggestions

Please register in www.enmask.com, so we can provide you better service

If you have any suggestions regarding the plugin please email us at [support@enmask.com](mailto:support@enmask.com)

== Installation ==

STEPS:

1. Download the plugin by clicking the "Download" in this page.

2. Extract the zip file so that you will get "wp_enmask" folder.

3. Upload the folder to the '/wp-content/plugin/' directory

4. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Can I use this plugin in my website? =

Yes, you can use this plugin in your website and this plugin is totally free. If you find any bug(s)/issue(s) in this plugin please email us at [support@enmask.com](mailto:support@enmask.com)

= Is enmask captcha services free? =

Yes, Enmask captcha service is free. We try our best to make it free.

= How does EnMask captcha work? =

EnMask Captcha is based on encrypted text with matching encrypted fonts. User can see the regular text without any problem. The answer text font is the same so user can easily see the matching characters. The Captcha font and style changes real time, so making it difficult for spammers.

Please go to [http://www.enmask.com](http://www.enmask.com) for more detail and content protection features.

= Does EnMask captcha work in mobile devices? =

EnMask use regular text so it is resolution independent, you can scale it as much as you like and the text will remain sharp. EnMask is great for mobile phones and other mobile devices.


= Can we style the EnMask captcha? =
Yes EnMask captcha provides the flexibility to change the styling of the CAPTCHA the way you like. You can use CSS style to change the colors and other attributes.

The EnMask.com CAPTCHA can be modified, see these classes are highlighted in bold below. Every aspect of the CAPTCHA can be changed including the font size, background colors, foreground colors, borders etc. by changing the EnMask CAPTCHA CSS Classes.

(Note: the font family of the CAPTCHA challenge, and the CAPTCHA response should not be changed)

*Sample markup with Enmask classes* 

The CSS class names shown below are actual EnMask Captcha CSS class, you can add CSS style to these CSS classes 

<code>
<div class="enmask-captcha-widget-container">
  <div class="enmask_captcha_widget"> <!-- This is CAPTCHA challenge text that user sees. -->
    <div class="enmask_captcha_text">{CAPTCHA text}</div>
    <!-- The refresh button--> <span class="refresh_icon"></span> <!-- The Slider -->
    <div class="enmask_font_slider_container"> <span class="enmask_resize_A enmask_small_A">A</span>
      <div class="dragdealer">
        <div class="red-bar handle" style="left: 0px;"> </div>
        <span class="clear"></span> </div>
      <span class="enmask_resize_A enmask_big_A">A</span> </div>
    <span class="clear"></span>
    <div class="enmask_response_container">
      <label class="enmask_label">{Enmask label text}</label>
      <span class="clear"></span>
      <input type="hidden" />
      <!-- This is the text box where user enters their response.-->
      <input type="text" class="enmask_response_textbox" autocomplete="off" />
    </div>
    <!-- The Enmask.com link -->
    <div class="enmask_link_container1">
      <div class="enmask_link_container"> <a target="BLANK" rel="external" href="http://enmask.com/">enmask.com</a> </div>
    </div>
    <span class="clear"></span> </div>
</div>
</code>

== Screenshots ==

1. Generic Enmask CAPTCHA
2. User login page
3. User registration page
4. Lost passsword page
5. Commenting Section
6. Admin Configuration
7. Enmask CAPTCHA in IPHONE


== Changelog ==

= 1.1 =

1. Added *Portuguese* language support.
2. Added FAQ about *styling Captcha*.
3. Updated *usage guide* (docx file in the package).
4. Fixed bug related to the comment section 2 button issue.

= 1.0 =
First version of the plugin.

== Upgrade Notice ==

= 1.1 =
Updated version of plugin with a bug in commenting section fixed.

= 1.0 =
First version of the plugin