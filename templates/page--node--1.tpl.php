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
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<!--====== UNIVERSITY HEADER ======-->
<div class="uofr-header">
  <div class="container">
    <!-- UofR Container -->
    <div class="left-logo-container">
      <a href="http://www.rochester.edu/">
        <img class="navbar-brand-rcl-logo" alt="River Campus Libraries" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/rcl_logo.png" />
      </a>
      <a href="http://www.rochester.edu/">
        <img class="navbar-brand-dp-logo" alt="Digital Projects" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/dp_logo.png" />
    </a>
    </div>
    <!-- Right Container -->
    <div class="right-logo-container">
        <img class="navbar-brand-uofr-logo" alt="University of Rochester" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/uofr_logo.png" />
    </div>
  </div>
</div>
<div class="inside-nav">
    <!--====== MAY BRAGDON HEADER ======-->
    <header id="navbar" role="banner" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <!-- May Bragdon  Logo -->
          <a class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img class="mayb-logo" alt="May Bragdon" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/mayb-logo.png" />
          </a>
          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Nav links -->
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <ul class="nav navbar-nav navbar-right">
                   <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Diaries <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A524">February 27-December 31, 1893</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A1047">April 6, 1895-February 26, 1896</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A4673">February 29, 1896-February 24, 1897</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A3356">February 25, 1897-November 11, 1898</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A6104">November 12, 1898-January 18, 1902</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A7854">January 19, 1902-February 4, 1904</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A9149">February 26, 1904-June 8, 1905</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A12692">June 9, 1905-October 17, 1907</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A14209">October 18, 1907-December 31, 1909</a></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora/object/maybragdon%3A16177">January 1, 1910-December 31, 1914</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="https://maybragdon.lib.rochester.edu/islandora">All Diaries</a></li>
                   </li>
                   </ul>
                   <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inclusions<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="/maybragdon/islandora/search/mods_genre_mt%3A%28clippings%29">Clippings</a></li>
                      <li><a href="/maybragdon/islandora/search/mods_genre_mt%3A%28correspondence%29">Correspondence</a></li>
                      <li><a href="/maybragdon/islandora/search/mods_genre_mt%3A%28ephemera%29">Ephemera</a></li>
                      <li><a href="/maybragdon/islandora/search/mods_genre_mt%3A%28leaflets%29">Leaflets</a></li>
                      <li><a href="/maybragdon/islandora/search/mods_genre_mt%3A%28photographs%29">Photographs</a></li>
                      <li><a href="/maybragdon/islandora/search/mods_genre_mt%3A%28playbills%29">Playbills</a></li>
                      <li><a href="/maybragdon/islandora/search/mods_genre_mt%3A%28textiles%29">Textiles</a></li>
                   </li>
                  </ul>
            <li><a href="<?php print base_path() ?>about">About</a></li>
            <!-- Nav Search box -->
            <li>
              <div class="header-search">
                <?php
                  $search_form = drupal_get_form('may_bragdon_simple_search_form');
                  print drupal_render($search_form);
                ?>
                <button type="submit" aria-label="search" form="may-bragdon-simple-search-form" class="btn btn-default form-submit" name="op" value="search" id="edit-submit"><span class="glyphicon glyphicon-search nav-search-icon" aria-hidden="true"></span></button>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </header>
    </div>
<div class="spacer"></div>
<!-- /Header/ -->



<!--======= /HEADER  ========-->
<div class="about-first-sec">
    <div id="section-intro" class="about-top-img-container">
        <img class="about-top-img" src="https://maybragdondev.lib.rochester.edu/sites/all/themes/may_bragdon_theme/images/about.jpg">
    <div class="about-text-container">
        <div class="container">
            <div class="about-text">
                <span>May Bragdon (1865-1947) created diaries that resemble scrapbooks: she layered her manuscripts with original photographs, fabric swatches, theatre programs, correspondence, and other ephemera. </span>
            </div>
        </div>
        <div class="about-text-sub">
            <div class="container">
                <p>The ten diaries spanning 1893-1914 present an illustrated view of the life of a single working woman set free by the bicycle and enlivened by friendships, the ‘Kodak,’ the theatre, and a connection with the natural world. The constellation of people in which she, her family, her co-workers, and her friends orbited included the well-known and the obscure.</p>
                <p>The May Bragdon Diaries Project presents TEI encoded full text transcriptions and facsimiles of these ten diaries on a searchable website. Alongside its transcription, each diary page is seen in its original “as created” form (i.e. with any inclusions in place), and/or in a manuscript only view, as well as individual images of all inclusions from that page.</p>
                <p>The impetus for this Project was a researcher’s discovery that her ancestors were among May Bragdon’s closest friends and were brought to life in the diaries’ words and images. Recognizing the diaries’ significance in the wider study of women’s history, we have worked to not only provide increased access to them through annotated transcriptions, but to represent their materiality in a digital environment.</p>
            </div>
        </div>
    </div>
</div>
</div>

<div class="main-container container">
    <!--===== ALERTS  =====-->
    <?php if (!empty($messages)): ?>
      <div class="alert-messages-container">
          <?php print render($messages); ?>
      </div>
    <?php endif; ?>

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead">Site slogan</p>
    <?php endif; ?>
    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">
    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>







      <?php print render($title_suffix); ?>




      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

      <div class="content-h-c">
      <?php print render($page['content']); ?>
    </div>


    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>


<!--====== FOOTER ======-->
<div class="footer">
    <div class="container">
      <!-- Right Side of Footer -->
        <div class="footer-right">
          <div class="address">
            <p>
              Rare Books, Special Collections and Preservation <br>
              Rush Rhees Library <br>
              Second Floor, Room 225 <br>
              755 Library Road <br>
              University of Rochester	<br>
              Rochester, NY 14627-0055 <br>
            </p>
            <p>
              Phone: (585) 275-4477 <br>
              Fax: (585) 273-1032 <br>
              <a href="mailto:rarebks@library.rochester.edu">rarebks@library.rochester.edu</a>
            </p>
          </div>
        </div>
      <!-- Left Side of Footer -->
      <div class="footer-left">
        <!-- Copyright  -->
        <div class="copyright">Copyright © 1998-2015. All Rights Reserved.<br>
          University of Rochester | River Campus Libraries <br>
          Rare Books, Special Collections and Preservation
          <a href="http://www.rochester.edu/">
            <img class="footer-uofr-logo" alt="University of Rochester" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/uofr_logo.png" />
          </a>

        </div>
      </div>
    </div>
</div>
<!-- End of Footer -->


<!--====== Navigation Scroll JS ======-->
<script src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme') . '/js/nav.js'; ?>"></script>
