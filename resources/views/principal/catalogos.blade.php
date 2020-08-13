@extends('welcome')
@section('contenido')

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Grid Catalogue</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,700,800%7COswald:300,400,500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-logo"><img src="images/logo-default-225x55.png" alt="" width="225" height="55" srcset="images/logo-default-260x64.png 2x"/>
      </div>
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                  <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.html"><img src="images/logo-default-225x55.png" alt="" width="225" height="55" srcset="images/logo-default-260x64.png 2x"/></a>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Home</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Features</a>
                        <!-- RD Navbar Megamenu-->
                        <ul class="rd-menu rd-navbar-megamenu">
                          <li class="rd-megamenu-item">
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="buttons.html">Buttons</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="forms.html">Forms</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="progress-bars.html">Progress bars</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tabs.html">Tabs</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="tables.html">Tables</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="accordions.html">Accordions</a></li>
                            </ul>
                          </li>
                          <li class="rd-megamenu-item">
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="typography.html">Typography</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="small-features.html">Small Features</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="team.html">Team</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="testimonials.html">Testimonials</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="large-features.html">Large Features</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="services.html">Services</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-service.html">Single Service</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Blog</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-blog.html">Grid Blog</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="sidebar-blog.html">Sidebar Blog</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-blog-post.html">Single Blog Post</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="#">Catalogue</a>
                        <!-- RD Navbar Dropdown-->
                        <ul class="rd-menu rd-navbar-dropdown">
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-catalogue.html">Grid Catalogue</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="masonry-catalogue.html">Masonry Catalogue</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="modern-catalogue.html">Modern Catalogue</a></li>
                          <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-house.html">Single House</a></li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>
                        <!-- RD Navbar Megamenu-->
                        <ul class="rd-menu rd-navbar-megamenu">
                          <li class="rd-megamenu-item">
                            <div class="banner" style="background-image: url(images/megamenu-banner-1-570x368.jpg);"><a class='button button-sm button-primary button-winona' href='#'>Buy Theme</a>
                            </div>
                          </li>
                          <li class="rd-megamenu-item">
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="404-page.html">404 Page</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="503-page.html">503 Page</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="coming-soon.html">Coming Soon</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="under-construction.html">Under Construction</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="about-us.html">About Us</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="about-me.html">About Me</a></li>
                            </ul>
                          </li>
                          <li class="rd-megamenu-item">
                            <ul class="rd-megamenu-list">
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="careers.html">Careers</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="search-results.html">Search results</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="services.html">Services</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="single-job.html">Single Job</a></li>
                              <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="privacy-policy.html">Privacy policy</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a>
                      </li>
                    </ul>
                  </div>
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search" id="rd-navbar-search-1">
                    <button class="rd-navbar-search-toggle rd-navbar-fixed-element-2" data-rd-navbar-toggle="#rd-navbar-search-1"><span></span></button>
                    <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live-1" method="GET">
                      <div class="form-wrap">
                        <label class="form-label" for="rd-navbar-search-form-input-1">Search...</label>
                        <input class="form-input rd-navbar-search-form-input" id="rd-navbar-search-form-input-1" type="text" name="s" autocomplete="off">
                        <div class="rd-search-results-live" id="rd-search-results-live-1"></div>
                      </div>
                      <button class="rd-search-form-submit fa-search" type="submit"></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/breadcrumbs-image-1.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">Catalogue</h6>
              <h1 class="breadcrumbs-custom-title">Grid Catalogue</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">Catalogue</a></li>
              <li class="active">Grid Catalogue</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section section-lg oh">
        <div class="container">
          <!-- Isotope Filters-->
          <div class="isotope-filters isotope-filters-modern">
            <button class="isotope-filters-toggle button button-sm button-primary" data-custom-toggle="#isotope-filters" data-custom-toggle-disable-on-blur="true">Filter<span class="caret"></span></button>
            <ul class="isotope-filters-list" id="isotope-filters">
              <li><a class="active" data-isotope-filter="*" data-isotope-group="portfolio" href="#">All Types</a></li>
              <li><a data-isotope-filter="Houses" data-isotope-group="portfolio" href="#">Houses</a></li>
              <li><a data-isotope-filter="Apartments" data-isotope-group="portfolio" href="#">Apartments</a></li>
              <li><a data-isotope-filter="Other" data-isotope-group="portfolio" href="#">Other</a></li>
            </ul>
          </div>
          <div class="isotope isotope-responsive row" data-isotope-layout="fitRows" data-isotope-group="portfolio">
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Other">
              <!-- Thumbnail Modern-->
              <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="images/grid-layout-1-370x256.jpg" alt="" width="370" height="256"/>
                <div class="thumbnail-modern-caption">
                  <h4 class="thumbnail-modern-title"><a href="single-house.html">923 Folsom St, New York</a></h4>
                  <p class="text-primary font-weight-bold">$450.00/month</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Apartments">
              <!-- Thumbnail Modern-->
              <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="images/grid-layout-2-370x256.jpg" alt="" width="370" height="256"/>
                <div class="thumbnail-modern-caption">
                  <h4 class="thumbnail-modern-title"><a href="single-house.html">275 Lake Ave, Chicago</a></h4>
                  <p class="text-primary font-weight-bold">$750.00/month</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Houses">
              <!-- Thumbnail Modern-->
              <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="images/grid-layout-3-370x256.jpg" alt="" width="370" height="256"/>
                <div class="thumbnail-modern-caption">
                  <h4 class="thumbnail-modern-title"><a href="single-house.html">623 Willow Rd, Dallas</a></h4>
                  <p class="text-primary font-weight-bold">$650.00/month</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Apartments">
              <!-- Thumbnail Modern-->
              <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="images/grid-layout-4-370x256.jpg" alt="" width="370" height="256"/>
                <div class="thumbnail-modern-caption">
                  <h4 class="thumbnail-modern-title"><a href="single-house.html">9021 Oak Ln, San Diego</a></h4>
                  <p class="text-primary font-weight-bold">$340.00/month</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Other">
              <!-- Thumbnail Modern-->
              <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="images/grid-layout-5-370x256.jpg" alt="" width="370" height="256"/>
                <div class="thumbnail-modern-caption">
                  <h4 class="thumbnail-modern-title"><a href="single-house.html">401 Biscayne Blvd, Miami</a></h4>
                  <p class="text-primary font-weight-bold">$430.00/month</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Houses">
              <!-- Thumbnail Modern-->
              <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="images/grid-layout-6-370x256.jpg" alt="" width="370" height="256"/>
                <div class="thumbnail-modern-caption">
                  <h4 class="thumbnail-modern-title"><a href="single-house.html">3782 Broadway St, Atlanta</a></h4>
                  <p class="text-primary font-weight-bold">$250.00/month</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Other">
              <!-- Thumbnail Modern-->
              <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="images/grid-layout-7-370x256.jpg" alt="" width="370" height="256"/>
                <div class="thumbnail-modern-caption">
                  <h4 class="thumbnail-modern-title"><a href="single-house.html">585 W. Halifax Dr., Seattle</a></h4>
                  <p class="text-primary font-weight-bold">$310.00/month</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Houses">
              <!-- Thumbnail Modern-->
              <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="images/grid-layout-8-370x256.jpg" alt="" width="370" height="256"/>
                <div class="thumbnail-modern-caption">
                  <h4 class="thumbnail-modern-title"><a href="single-house.html">7565 Ashley St., Memphis</a></h4>
                  <p class="text-primary font-weight-bold">$490.00/month</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Apartments">
              <!-- Thumbnail Modern-->
              <div class="thumbnail-modern"><img class="thumbnail-modern-image" src="images/grid-layout-9-370x256.jpg" alt="" width="370" height="256"/>
                <div class="thumbnail-modern-caption">
                  <h4 class="thumbnail-modern-title"><a href="single-house.html">585 W. Halifax Dr., Seattle</a></h4>
                  <p class="text-primary font-weight-bold">$280.00/month</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
            <footer class="section footer-standard bg-gray-800">
              <div class="footer-standard-main">
                <div class="container">
                  <div class="row row-50">
                    <div class="col-lg-4">
                      <div class="inset-right-1">
                        <h4>About Jack Smith</h4>
                        <p>Jack Smith is one of the leading real estate agents who is always ready to help you pick the right property. Whether you want a quaint vacation home in town or an exceptional luxury residence on the water, Jack knows everything about value, pricing, property types, and locations.</p>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-4">
                      <div class="box-1">
                        <h4>Contact Information</h4>
                        <ul class="list-sm">
                          <li class="object-inline"><span class="icon icon-md mdi mdi-map-marker text-secondary-2"></span><a class="link-white-50" href="#">2130 Fulton Street <br> San Diego, CA 94117-1080 USA</a></li>
                          <li class="object-inline"><span class="icon icon-md mdi mdi-phone text-secondary-2"></span><a class="link-white-50" href="tel:#">1-800-1234-678</a></li>
                          <li class="object-inline"><span class="icon icon-md mdi mdi-email text-secondary-2"></span><a class="link-white-50" href="mailto:#">info@demolink.org</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7 col-lg-4">
                      <h4>Newsletter</h4>
                      <p>Sign up to our newsletter and be the first to know about latest news, special offers, events, and discounts.</p>
                      <!-- RD Mailform-->
                      <form class="rd-form rd-mailform form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap">
                          <input class="form-input" id="subscribe-form-2-email" type="email" name="email" data-constraints="@Email @Required">
                          <label class="form-label" for="subscribe-form-2-email">E-mail</label>
                        </div>
                        <div class="form-button">
                          <button class="button button-primary button-icon button-icon-only button-winona" type="submit" aria-label="submit"><span class="icon mdi mdi-email-outline"></span></button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="footer-standard-aside"><a class="brand" href="index.html"><img src="images/logo-light-225x55.png" alt="" width="225" height="55" srcset="images/logo-light-261x64.png 2x"/></a>
                  <!-- Rights-->
                  <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><br class="d-sm-none"/><a href="#">Terms of Use</a><span> and</span><span>&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
                </div>
              </div>
            </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
@stop