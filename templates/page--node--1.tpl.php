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
      <a href="http://www.library.rochester.edu/">
        <img class="navbar-brand-rcl-logo" alt="River Campus Libraries" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/rcl_logo.png" />
      </a>
        <img class="navbar-brand-dp-logo" alt="Digital Projects" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/dp_logo.png" />
    </div>
    <!-- Right Container -->
    <div class="right-logo-container">
     <a href="http://www.rochester.edu/">
        <img class="navbar-brand-uofr-logo" alt="University of Rochester" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/uofr_logo.png" />
    </a>
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
        <!-- <img class="about-top-img" src="https://maybragdondev.lib.rochester.edu/sites/all/themes/may_bragdon_theme/images/about.jpg"> -->
        <img class="about-top-img" alt="About" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/about.jpg" />
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
<div id="section-about-mayb" class="about-mayb-container">
            <img class="about-mayb-img" alt="About" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/about-may.jpg" />
            <div class="about-mayb-text">
                <div class="container">
                    <div class="about-sec-title">About May Bragdon</div>
                    <p>The daughter of abolitionists Katherine Elmina Shipherd and George Chandler Bragdon and the sister of architect, artist, and theatre designer Claude Bragdon, May Bragdon was born May 16, 1865 in Adams, N.Y. She and her family moved repeatedly before settling in Rochester, N.Y. in 1884. In 1889, after four years with H. H. Warner's Safe Cure Company, May began working for the Cutler Manufacturing Company (later known as the Cutler Mail Chute Co.). She quickly became executive secretary to its principals, architect and inventor James G. Cutler and his brother J. Warren Cutler. In 1910, she left Cutler's to work as office manager for her brother’s architectural practice and his Manas Press. In 1918, economic pressures led Claude Bragdon to reduce his office staff, and May went on to work with the Employment Office of the Combined Metal Trades (1918-1919), the Clothiers' Exchange (1919-1923) during its landmark negotiations with Amalgamated Clothing Workers and, in 1924, the Gannett Publishing Company, where she remained until her retirement in 1938. May Bragdon died March 21, 1947.</p>

                    <p>The ten diaries reproduced here are but a selection from the broad record May Bragdon left to us.  She was an inveterate record keeper and cataloger:  The <a href="http://rbscp.lib.rochester.edu/803">Bragdon Family Papers</a> and the <a href="http://rbscp.lib.rochester.edu/801">Bragdon Family Papers Addition</a> contain her correspondence, other diaries (1880-1884; 1943-47), autograph books, photo albums, scrapbooks 1881-1912, phenological notebooks, records of books read, family histories, indexes to her brother’s correspondence, and etc.  These ten diaries were chosen for the Project because of the rich photographic and ephemeral content that augments the manuscript and because of the transformational period they capture.</p>
                </div>
            </div>
</div>


<div id="section-about-diaries" class="about-diaries-container">
            <div class="about-diaries-text">
                <div class="container">
                    <div class="about-sec-title">The Physical Diaries</div>
                    <p>Each of the ten diaries was created in a commercially-produced book whose structure was not intended to accommodate additional content:  May Bragdon added some 3,200 items across the 10 volumes.  Although these ‘inclusions’ amplified the diaries’ content, they also obscured the manuscript and, therefore, created an impediment to use.  For a majority of pages, it was not possible to read the manuscript without manipulating the inclusions.  This manipulation of brittle paper substrates, compounded by uneven applications of adhesive and complex layering, led to mechanical damage.  Particularly during the last decade as use of the diaries increased, more and more ‘inclusions’ had come free of their adhesive—sometimes tearing at the point of attachment, sometimes not.  Once these items became disassociated from the page upon which May Bragdon had placed them, their meaning was diminished, if not lost entirely.</p>

                    <strong>During the first phase of the Project, we:</strong>
                    <ul>
                        <li>Imaged the diaries as May Bragdon created them, generating master tiffs, derivative jpgs and also preservation microfilm</li>
                        <li>Captioned each of the 3,200 inclusions to record which diary, which page, and in what order on the page it appeared</li>
                        <li>Safely removed the inclusions</li>
                        <li>Imaged the unobscured manuscript pages and each of their associated inclusions.  Again, digital masters and derivatives as well as microfilm were created.</li>
                        <li>Created transcription guidelines which would accurately capture May’s captioning system and correctly map it to the inclusions</li>
                        <li>Transcribed the diaries</li>
                        <li>Developed a structure for TEI documents which would accurately place the captions and inclusion files</li>
                        <li>Established a basic TEI encoding schema focused on annotating the people, places and things most prominent in May Bragdon’s life.  Although we tagged most person names and places to aid in future development of the site, the initial phase of the project provides annotation for 514 frequently mentioned entities.</li>
                    </ul>

                    <p>At around this point in our project, the River Campus Libraries chose Islandora as its digital asset management system.  Islandora uses drupal modules to ingest and manage content in an underlying Fedora Repository. Digital assets are stored as objects- images, videos, books, and compound objects. We originally thought we would ingest the diaries as books. The book module, however, did not allow for the number of different digital assets that represented a single diary page: An image of the page as it was originally created with all inclusions, an image of the page with inclusions removed, a TEI transcription, and images of each of the inclusions. We decided on a compound object model, ingesting each page as a compound object with all of its attendant digital surrogates.  Library staff created MODs metadata records for each page and each diary programmatically, scraping information from the TEI documents.</p>
                </div>
            </div>
</div>


<div id="section-about-trans" class="about-trans-container">
    <div class="about-trans-text">
        <div class="container">
            <div class="about-sec-title">Notes on Transcriptions</div>
                <p>Our aim was to transcribe each page exactly as it appears. All punctuation, capitalization, spelling (and misspelling), idiosyncratic grammar, word repetitions, abbreviations, underlining, strikethroughs, etc. have been preserved in the transcription. </p>
                <p>Line breaks are rendered as they appear in the original, with the exception of entry dates, which are seen in bold on their own line.  This decision was made to aid the search function.  is this true? The marginalia seen in the ‘manuscript view’ may be May Bragdon’s caption for an inclusion, or a general note of hers related to the day.  Transcriptions of inclusion captions are visible once the reader selects an individual inclusion.  May’s general notes are displayed in gray (not black) italicized text, at the head of the entry to which they refer. No matter how skilled a transcriber, errors may be made and/or interpretations of handwriting may change: we will continue to work to correct our transcriptions. </p>
        </div>
    </div>
</div>

<div id="section-about-editorial" class="about-editorial-container">
    <div class="about-editorial-text">
        <div class="container">
            <div class="about-sec-title">Editorial Practice</div>
            <p>The Project’s guiding editorial practice has been to let May Bragdon’s voice be heard with as little interference as possible.  We have taken care to keep editorial notes and comment distinct from May Bragdon’s own writing.  At this point, editorial notes have been added to shine a bit more light on the primary people and places from this period of May’s life.  We hope to add more annotations, ideally as part of student projects.  The major editorial component of this Project has been the selection of people and places to provide additional information about: these are seen in the transcriptions as underlined in blue.  When clicked upon, a pop up window appears with biographical or other information.  Although there are 500+ such précis, there is much more work to be done. </p>
            <p>The other major editorial function has been disambiguating one “Charlotte” or “Edith” or “Henry” from another.  For example, a single page might invoke 2 distinct people each named “Charlotte,” one of whom is in a physical location called Charlotte.  Deciding which of these words “Charlotte” refers to Charlotte Davis, or Charlotte Wilkinson or Charlotte, N.Y. could only be done by a human being.  Any text which is not directly transcribed from the diaries is accompanied by “Editorial note.”  These notes may include:</p>
            <ul>
                <li>Surname presumed/unknown.  If the editor assigned a surname with 50- 75% certainty, an editorial note “Surname presumed” will appear.  If the editor could not reasonably assign an identity, “Surname unknown” will appear.</li>
                <li>Contextualizing information.</li>
                <li>A surname to aid the reader in disambiguation</li>
                <li>Identities of people seen in a photograph who are not named by May Bragdon.  Many of the photographs in the Project have captions whose meaning is diminished outside the context of the larger entry.  May Bragdon recognized the people in her photographs, she did not need to list them out.  In the interest of making these resources available as quickly as possible, we decided to add editorial notes with additional data in later phases of the project.</li>
            </ul>
        </div>
    </div>
</div>

<div id="section-about-team" class="about-team-container">
    <div class="about-team-text">
        <div class="container">
            <div class="about-sec-title">Project Team Members</div>
            <ul>
                <li>Nora Dimmock</li>
                <li>Joe Easterly</li>
                <li>Elica Krasteva</li>
                <li>Jim Kuhn</li>
                <li>Harish Nayak</li>
                <li>Andrea G. Reithmayr</li>
                <li>Joshua Romphf</li>
                <li>Adam Traub</li>
            </ul>
            <p>The Project received support in many forms from many quarters.  In addition to our  colleagues in the River Campus Libraries, we are indebted to our gracious donor, our intrepid researcher, Peter Bragdon and the Bragdon family. </p>
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

    

    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>

<!--===== TABS =====-->
    <?php if (!empty($tabs)): ?>
      <div class="tab-container-edit-screens container">
      <?php print render($tabs); ?>
    </div>
    <?php endif; ?>



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
