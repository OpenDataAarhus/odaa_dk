<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<div id="page" class="page <?php print $classes; ?>">
  <header class="site-header">
    <section class="header-wrapper">
      <div class="header-inner">
        <a href="/" class="logo"><img alt="" src="/sites/odaa.dk/themes/odaa/logo.png"></a>
        <div class="search-form">
          <form action="/dataset" method="get">
            <input type="text" name="q" placeholder="<?php print t('Search for dataset'); ?>..." class="search-form-text" />
            <input type="submit" value="Søg" class="button" />
          </form>
        </div>
        <?php print render($page['navigation']); ?>        
      </div>
    </section>
  </header>
  <div class="content-wrapper">
    <div class="content-inner">
      <div class="primary-content">
        <?php if (!empty($page['content'])): ?>
          <?php print render($page['content']); ?>
        <?php endif ?>
        <div class="search-spotbox">
          <div class="search-spotbox--inner">
            <h3 class="search-spotbox--header">Søg efter data</h3>
            <div class="search-spotbox--dataset-amount-wrapper">
              <div class="search-spotbox--dataset-amount">1587</div>
              <div class="search-spotbox--dataset-amount-text">datasæt</div>
            </div>
            <div class="search-spotbox--wrapper">
              <form action="/dataset" method="get">
                <input type="text" name="q" placeholder="<?php print t('Search for dataset'); ?>..." class="search-form-text" />
                <input type="submit" value="Søg" class="button" />
              </form>
            </div>
          </div>
        </div>
        <div class="spotbox">
          <div class="spotbox--inner">
            <div class="spotbox--content-wrapper">
              <h2 class="spotbox--header"><a href="#"><i class="icon-comments-alt"></i>Seneste kommentarer</a></h2>
              <ul class="spotbox--list">
                <li class="spotbox--list-item first">
                  <div class="spotbox--list-image"><a href="#comment1"><img src="//gravatar.com/avatar/f9879d71855b5ff21e4963273a886bfc?s=30&amp;d=identicon" /></a></div>
                  <span class="spotbox--list-link"><a href="#comment1">Morbi leo risus</a></span>
                  <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="spotbox">
          <div class="spotbox--inner">
            <div class="spotbox--content-wrapper">
              <h2 class="spotbox--header"><a href="#"><i class="icon-sitemap"></i>Seneste datasæt</a></h2>
              <ul class="spotbox--list">
                <li class="spotbox--list-item first">
                  <div class="spotbox--list-image"><a href="#comment1"><img src="//gravatar.com/avatar/f9879d71855b5ff21e4963273a886bfc?s=30&amp;d=identicon" /></a></div>
                  <span class="spotbox--list-link"><a href="#comment1">Morbi leo risus</a></span>
                  <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="secondary-content">
        <div class="spotbox">
          <div class="spotbox--inner">
            <h3 class="spotbox--header">Velkommen til ODAA</h3>
            <div class="spotbox--image"><a href="#"><img src="http://www.odaa.dk/media/your_rainbow_1_small.jpg" /></a></div>
            <p>ODAA er en open data platform, hvor åbne data bliver gjort frit tilgængelige, så de er nemme for dig at finde.</p>
            <p>Vi håber, at du vil forvandle de åbne data til nye og innovative services og fortælle om det her på platformen.</p>
            <p>Du kan læse mere <a href="#">Om ODAA her</a>.</p>
          </div>
        </div>
        <div class="spotbox--featured-dataset">
          <div class="spotbox--featured-dataset-inner">
            <h3 class="spotbox--featured-dataset-header"><i class="icon-star-empty"></i>Featured datasæt</h3>
            <h4><a href="#">3D Bygninger - Bymodel</a></h4>
            <div>3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du downloader datasættet i Chrome eller Firefox.</div>
          </div>
        </div>
      </div>
      <div class="tertiary-content">
        <div class="spotbox">
          <div class="spotbox--inner">
            <div class="spotbox--content-wrapper">
              <h2 class="spotbox--header"><a href="#"><i class="icon-lightbulb"></i>Something else</a></h2>
              <ul class="spotbox--list">
                <li class="spotbox--list-item first">
                  <div class="spotbox--list-image"><a href="#comment1"><img src="//gravatar.com/avatar/f9879d71855b5ff21e4963273a886bfc?s=30&amp;d=identicon" /></a></div>
                  <span class="spotbox--list-link"><a href="#comment1">Morbi leo risus</a></span>
                  <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                </li>                 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="site-footer">
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
  </footer>
</div>