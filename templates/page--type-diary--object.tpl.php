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
<link rel="stylesheet" href="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme') . '/css/diary-view-html.css'; ?>">



<!--======  HEADER ======-->
<div class="diary-page-class">
<header id="navbar" role="banner" class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <!-- LHP Logo -->
      <a class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img class="lhp-logo" alt="May Bragdon" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/mayb-logo.png" />
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
           <li><a href="https://rclinddev.lib.rochester.edu/maybragdon/islandora/object/maybragdon%3A1">February 27-December 31, 1893</a></li>
           <!-- <li><a href="#">April 6, 1895-February 26, 1896</a></li>
           <li><a href="#">February 29, 1896-February 24, 1897</a></li> -->
           <li><a href="https://rclinddev.lib.rochester.edu/maybragdon/islandora/object/maybragdon%3A576">February 25, 1897-November 11, 1898</a></li>
           <!-- <li><a href="#">November 12, 1898-January 18, 1902</a></li>
           <li><a href="#">January 19, 1902-February 4, 1904</a></li>
           <li><a href="#">February 26, 1904-June 8, 1905</a></li>
           <li><a href="#">June 9, 1905-October 17, 1907</a></li>
           <li><a href="#">October 18, 1907-December 31, 1909</a></li>
           <li><a href="#">January 1, 1910-December 31, 1914</a></li> -->

           <!-- <li role="separator" class="divider"></li>
           <li><a href="#">Separated link</a></li> -->
        </li>
        </ul>
        <li><a href="http://livinghistory.lib.rochester.edu">About</a></li>
        <!-- Nav Search box -->
        <li>
          <div class="header-search">
            <form class="navbar-form navbar-left" name="sitesearch" action="http://www.library.rochester.edu/site-search" method="get">
                <div class="form-group">
                  <input class="form-control navbar-search-grow" type="text" name="search"  placeholder="Search" title="Seach the Library website">
                </div>
              </form>
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search nav-search-icon" aria-hidden="true"></span></button>
            </form>
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






<div class="">
  <!-- <div class="main-container container"> -->

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
      <div class="diary-page-class">
        <div class="tab-container-edit-screens">
          <?php print render($tabs); ?>
        </div>
      </div>
    <?php endif; ?>


<!-- Page title  -->
<!-- Removed for now -->

      <?php print render($title_suffix); ?>
      <?php print $messages; ?>

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


<!--====== FOOTER ======-->

<!--====== Navigation Scroll JS ======-->
<script src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme') . '/js/nav.js'; ?>"></script>
