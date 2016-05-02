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
<link rel="stylesheet" href="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme') . '/css/inclusion-view-html.css'; ?>">


<!-- Back button arrow -->
<div class="inclusion-page-class">
  <i class="fa fa-angle-left"></i>
</div>
<!-- // -->

<!--======  MAY BRAGDON HEADER ======-->
<div class="inclusion-page-class" id="inclusion-page">
<header id="navbar" role="banner" class="navbar navbar-default">
  <div class="">
    <div class="navbar-header">
      <!-- May Bragdon Logo -->
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
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Diaries <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="https://rclind2.lib.rochester.edu/maybragdon/islandora/object/maybragdon%3A524">February 27-December 31, 1893</a></li>
                <li><a href="https://rclind2.lib.rochester.edu/maybragdon/islandora/object/maybragdon%3A1047">April 6, 1895-February 26, 1896</a></li>
                <li><a href="https://rclind2.lib.rochester.edu/maybragdon/islandora/object/maybragdon%3A4673">February 29, 1896-February 24, 1897</a></li>
                <li><a href="https://rclind2.lib.rochester.edu/maybragdon/islandora/object/maybragdon%3A3356">February 25, 1897-November 11, 1898</a></li>
                <li><a href="https://rclind2.lib.rochester.edu/maybragdon/islandora/object/maybragdon%3A6104">November 12, 1898-January 18, 1902</a></li>
                <li><a href="https://rclind2.lib.rochester.edu/maybragdon/islandora/object/maybragdon%3A7854">January 19, 1902-February 4, 1904</a></li>
                <li><a href="https://rclind2.lib.rochester.edu/maybragdon/islandora/object/maybragdon%3A9149">February 26, 1904-June 8, 1905</a></li>
                <li><a href="https://rclind2.lib.rochester.edu/maybragdon/islandora/object/maybragdon%3A12692">June 9, 1905-October 17, 1907</a></li>
                <li><a href="https://rclind2.lib.rochester.edu/maybragdon/islandora/object/maybragdon%3A14209">October 18, 1907-December 31, 1909</a></li>
                <li><a href="https://rclind2.lib.rochester.edu/maybragdon/islandora/object/maybragdon%3A16177">January 1, 1910-December 31, 1914</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="https://rclind2.lib.rochester.edu/maybragdon/islandora">All Diaries</a></li>
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
<!--======= /HEADER  ========-->




<div class="diary-page-class inclusion-page-class">
<!--======= // ========-->

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead">Site slogan</p>
    <?php endif; ?>
    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="">
    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>

<!--===== TABS =====-->
    <?php if (!empty($tabs)): ?>
      <div class="inlusion-page-tabs">
        <div class="tab-container-edit-screens">
          <?php print render($tabs); ?>
        </div>
      </div>
    <?php endif; ?>


<!-- Page title  -->
<!-- Removed for now -->

      <?php print render($title_suffix); ?>
      
      <!--===== ALERTS  =====-->
      <?php if (!empty($messages)): ?>
        <div class="alert-messages-container">
            <?php print render($messages); ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>

      <div class="diary-page-class">
      <?php print render($page['content']); ?>
    </div>



    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="inclusion-sidebar" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>



<!--====== Navigation Scroll JS ======-->
<script src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme') . '/js/nav.js'; ?>"></script>
