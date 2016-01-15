
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



<!--====== UNIVERSITY HEADER ======-->
<div class="uofr-header">
  <div class="container">
    <!-- UofR Container -->
    <div class="uofr-logo-container">
      <a href="http://www.rochester.edu/">
        <img class="navbar-brand-uofr-logo" alt="University of Rochester" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/logo-uofr-rcl.png" />
      </a>
    </div>
    <!-- Ever Better Container -->
    <div class="everbetter-container">
        <img class="navbar-brand-everbetter" alt="University of Rochester" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/logo-dp.png" />
    </div>
  </div>
</div>

<div style="background-color: black;">

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
        <li><a href="http://livinghistory.lib.rochester.edu">Home</a></li>
        <li><a href="http://livinghistory.lib.rochester.edu/about">About Project</a></li>
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

<div class="spacer"></div>

<!-- Cover Image -->

<!-- <div id="large-bg-image">
<div class="move">
  <span class="marker-title">Test marker</span>
  <span class="marker-caption">May Bragdon</span>
  </div>
<div class="move2">
  <span class="marker-title">Diary Page</span>
  <span class="marker-caption">Feburary 1887</span>
</div>
</div> -->

<div id="carousel-example-generic" class="carousel slide no-mobile" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/slide-001.jpg" />
      <div class="carousel-caption">
        <a href="#"><span class="">February 25, 1897</span></a>
        <!-- <span class="">An nostrum</span> -->
      </div>
    </div>
    <div class="item">
      <img src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/slide-002.jpg" />
      <div class="carousel-caption">
        <a href="#"><span class="">February 25, 1897</span></a>
        <!-- <span class="">An nostrum</span> -->
      </div>
    </div>
    <div class="item">
      <img src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/slide-003.jpg" />
      <div class="carousel-caption">
        <a href="#"><span class="">February 25, 1897</span></a>
        <!-- <span class="">An nostrum</span> -->
      </div>
    </div>
  </div>

  <!-- Controls -->
  <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>
<!-- / -->


<div class="mobile-cover">
  <img src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/mobile-cover.jpg" />
</div>

<div class="scroll-hint">


<!-- Search Box -->
<div class="hp-search-big">
  <form class="" name="sitesearch" action="http://www.library.rochester.edu/site-search" method="get">
      <div class="form-group">
        <input class="form-control" type="text" name="search"  placeholder="Search..." title="Seach the May Bragdon Project">
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search nav-search-icon" aria-hidden="true"></span></button>
    </form>
  </div>
</div>

<div class="tagline-hint">
    An nostrum dissentiunt usu, eu sit odio natum. Clita equidem legendos eos eu. An deleniti singulis sensibus pri, verear philosophia id eum, fabellas menandri te ius.


</div>
<div class="scroll-hint-text"><a href="#begin">Timeline</a></div>
<a href="#begin"><i class="fa fa-chevron-down"></i></a>
</div>
</div>


<!-- <div class="main-boxes-heading">Timeline</div> -->


<!-- 4 Boxes  -->
<div class="box box-odd">
  <a href="#">
    <img class="box-images" alt="Living HistoryProject" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1893.jpg" />
    <div class="box-text">
      <!-- <div class="box-headline">1897-1898</div> -->
      <div class="box-tagline"><span class="box-date">February 25, 1897-November 11, 1898</span> fierent perpetua interesset eum ad, vim nemore scripserit disputando ne. Eripuit signiferumque pro cu</div>
    </div>
  </a>
</div>

<div class="box box-even">
  <a href="#">
    <img class="box-images" alt="Performances" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1896.jpg" />
    <div class="box-text">
      <!-- <div class="box-headline">1897-1898</div> -->
      <div class="box-tagline"><span class="box-date">February 25, 1897-November 11, 1898</span> fierent perpetua interesset eum ad, vim nemore scripserit disputando ne. Eripuit signiferumque pro cu</div>
    </div>
  </a>
</div>

<div class="box box-odd">
  <a href="#">
    <img class="box-images" alt="Events" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1895-96.jpg" />
    <div class="box-text">
      <!-- <div class="box-headline">1897-1898</div> -->
      <div class="box-tagline"><span class="box-date">February 25, 1897-November 11, 1898</span> fierent perpetua interesset eum ad, vim nemore scripserit disputando ne. Eripuit signiferumque pro cu</div>
    </div>
  </a>
</div>

<div class="box box-even">
  <a href="#">
    <img class="box-images" alt="Spoken Word" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1897-98.jpg" />
    <div class="box-text">
      <!-- <div class="box-headline">1897-1898</div> -->
      <div class="box-tagline"><span class="box-date">February 25, 1897-November 11, 1898</span> fierent perpetua interesset eum ad, vim nemore scripserit disputando ne. Eripuit signiferumque pro cu</div>
    </div>
  </a>
</div>

<div class="box box-odd">
  <a href="#">
    <img class="box-images" alt="Spoken Word" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1898-02.jpg" />
    <div class="box-text">
      <!-- <div class="box-headline">1897-1898</div> -->
      <div class="box-tagline"><span class="box-date">November 12, 1898-January 18, 1902</span> fierent perpetua interesset eum ad, vim nemore scripserit disputando ne. Eripuit signiferumque pro cu</div>
    </div>
  </a>
</div>

<div class="box box-even">
  <a href="#">
    <img class="box-images" alt="Spoken Word" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1902-04.jpg" />
    <div class="box-text">
      <!-- <div class="box-headline">1897-1898</div> -->
      <div class="box-tagline"><span class="box-date">January 19, 1902-February 4, 1904</span> fierent perpetua interesset eum ad, vim nemore scripserit disputando ne. Eripuit signiferumque pro cu</div>
    </div>
  </a>
</div>

<div class="box box-odd">
  <a href="#">
    <img class="box-images" alt="Spoken Word" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1904-05.jpg" />
    <div class="box-text">
      <!-- <div class="box-headline">1897-1898</div> -->
      <div class="box-tagline"><span class="box-date">February 26, 1904-June 8, 1905</span> fierent perpetua interesset eum ad, vim nemore scripserit disputando ne. Eripuit signiferumque pro cu</div>
    </div>
  </a>
</div>

<div class="box box-even">
  <a href="#">
    <img class="box-images" alt="Spoken Word" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1905-07.jpg" />
    <div class="box-text">
      <!-- <div class="box-headline">1897-1898</div> -->
      <div class="box-tagline"><span class="box-date">June 9, 1905-October 17, 1907</span> fierent perpetua interesset eum ad, vim nemore scripserit disputando ne. Eripuit signiferumque pro cu</div>
    </div>
  </a>
</div>

<div class="box box-odd">
  <a href="#">
    <img class="box-images" alt="Spoken Word" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1907-09.jpg" />
    <div class="box-text">
      <!-- <div class="box-headline">1897-1898</div> -->
      <div class="box-tagline"><span class="box-date">June 9, 1905-October 17, 1907</span> fierent perpetua interesset eum ad, vim nemore scripserit disputando ne. Eripuit signiferumque pro cu</div>
    </div>
  </a>
</div>

<div class="box box-even">
  <a href="#">
    <img class="box-images" alt="Spoken Word" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/1910-14.jpg" />
    <div class="box-text">
      <!-- <div class="box-headline">1897-1898</div> -->
      <div class="box-tagline"><span class="box-date">January 1, 1910-December 31, 1914</span> fierent perpetua interesset eum ad, vim nemore scripserit disputando ne. Eripuit signiferumque pro cu</div>
    </div>
  </a>
</div>
<!--/-->

<!--====== FOOTER ======-->
<div class="footer">
    <div class="container">
      <!-- Right Side of Footer -->
        <div class="footer-right">
          <div class="address">
            <p>
              Rare Books Special Collections Preservation <br>
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
        <!-- <div class="social-icons">
          <a href="https://www.facebook.com/rivercampuslibraries"><i class="fa fa-facebook-square"></i></a>
          <a href="https://twitter.com/rclibraries"><i class="fa fa-twitter-square"></i></a>
          <a href="https://www.youtube.com/user/RCLibraries"><i class="fa fa-youtube-square"></i></a>
          <a href="https://www-flickr-com.pc181.lib.rochester.edu/photos/carlsonlibrary/"><i class="fa fa-flickr"></i></a>
        </div> -->
        <ul class="">
          <li><a href="#">Advanced Search</a></li>
          <li></li>
          <li></li>
        </ul>

        <!-- Copyright  -->
        <div class="copyright">Copyright © 1998-2015. All Rights Reserved.<br>
          University of Rochester | River Campus Libraries <br>
          Rare Books, Special Collections and Preservation
          <a href="http://www.rochester.edu/">
            <img class="footer-uofr-logo" alt="University of Rochester" src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme');?>/images/logo-uofr.png" />
          </a>
        </div>

      </div>




</div>


<!--====== Navigation Scroll JS ======-->
<script src="<?php print base_path() . drupal_get_path('theme', 'may_bragdon_theme') . '/js/nav.js'; ?>"></script>
