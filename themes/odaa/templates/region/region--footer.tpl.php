<?php

/**
 * @file
 * Default theme implementation to display a region.
 *
 * Available variables:
 * - $content: The content for this region, typically blocks.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - region: The current template type, i.e., "theming hook".
 *   - region-[name]: The name of the region with underscores replaced with
 *     dashes. For example, the page_top region would have a region-page-top class.
 * - $region: The name of the region variable as defined in the theme's .info file.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 *
 * @see template_preprocess()
 * @see template_preprocess_region()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<section class="footer-wrapper">
  <div class="footer-inner">
    <div class="newsletter-signup">
      <form action="http://odaa.us5.list-manage1.com/subscribe/post?u=78ef4b94a7d1865894df78e68&amp;id=28f6dabe60" method="post" name="mc-embedded-subscribe-form" class="newsletter-form validate" target="_blank" novalidate="">
        <h2>Tilmeld dig vores nyhedsbrev</h2>
        <div class="newsletter-field-group">
          <input type="email" value="" name="EMAIL" class="email newsletter-field required" placeholder="Email adresse" />
          <input type="submit" value="Tilmeld" name="subscribe" class="button submit-button newsletter-button" />
        </div>
      </form>
    </div>
    <div class="awards">
      <a href="http://www.itaward.dk/default.asp?Id=320&cpc=1"><img class="footer-logo first" src="/sites/odaa.dk/themes/odaa/images/it-award-midtjylland-logo.png" alt="IT-Award Midtjylland logo" title="IT-Award Midtjylland" /></a>
      <a href="http://www.smartaarhus.dk/"><img class="footer-logo last" src="/sites/odaa.dk/themes/odaa/images/made-with-aarhus-logo.png" alt="Made with Aarhus logo" title="Made with Aarhus" /></a>
    </div>
    <div class="powered-by">
      <p><strong>Powered by</strong></p>
      <a href="http://ckan.org" title="ckan The open source data portal software"><img class="footer-logo first" src="/sites/odaa.dk/themes/odaa/images/ckan-footer-logo.png" alt="ckan logo" title="Powered by ckan" /></a>
      <a href="http://drupal.org" title="An open source content management platform powering millions of websites and applications"><img class="footer-logo last" src="/sites/odaa.dk/themes/odaa/images/drupal-footer-logo.png" alt="Drupal logo" title="Powered by Drupal" /></a>
    </div>
  </div>
</section>