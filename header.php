<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.lionode.com/moonstore/ms01/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Dec 2020 05:18:23 GMT -->
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="<?php echo get_template_directory_uri(); ?>/image/favicon.png" rel="icon" type="<?php echo get_template_directory_uri(); ?>/image/png" >
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<link href="<?php echo get_template_directory_uri(); ?>/javascript/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/javascript/owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link href="<?php echo get_template_directory_uri(); ?>/javascript/owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/jquery-2.1.1.min.js" ></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/bootstrap/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/template_js/jstree.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/template_js/template.js" ></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/common.js" ></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/global.js" ></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/owl-carousel/owl.carousel.min.js" ></script>
<?php wp_head(); ?>
</head>
<body class="index">
<div class="preloader loader" style="display: block;"> <img src="<?php echo get_template_directory_uri(); ?>/image/loader.gif"  alt="#"/></div>
<header>
  <div class="header-top">

  
  <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="top-left pull-left">
            <div class="language">
              <form action="#" method="post" enctype="multipart/form-data" id="language">
                <div class="btn-group">
                  <button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> English <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Arabic</a></li>
                    <li><a href="#"> English</a></li>
                  </ul>
                </div>
              </form>
            </div>
            <div class="currency">
              <form action="#" method="post" enctype="multipart/form-data" id="currency">
                <div class="btn-group">
                  <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"> <strong>USD</strong> <span class="caret"></span> </button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Euro</a></li>
                    <li><a href="#">Pound</a></li>
                    <li><a href="#">USD</a></li>
                  </ul>
                </div>
              </form>
            </div>
            <div class="wel-come-msg"> Welcome to our online store! </div>
          </div>
          <div class="top-right pull-right">
            <div id="top-links" class="nav pull-right">
              <ul class="list-inline">
                <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span>My Account</span> <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="register.html">Register</a></li>
                    <li><a href="login.html">Login</a></li>
                  </ul>
                </li>
                <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart" aria-hidden="true"></i><span>Wish List</span><span> (0)</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="header-inner">
      <div class="col-sm-3 col-xs-3 header-left">
        <div id="logo"> <a href="index-2.html"><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a> </div>
      </div>
      <div class="col-sm-9 col-xs-9 header-right">
        <div id="search" class="input-group">
          <input type="text" name="search" value="" placeholder="Enter your keyword ..." class="form-control input-lg" />
          <span class="input-group-btn">
          <button type="button" class="btn btn-default btn-lg"><span>Search</span></button>
          </span> </div>
        <div id="cart" class="btn-group btn-block">
          <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"> <span id="cart-total"><span>Shopping Cart</span><br>
          3 item(s) - $254.00</span></button>
          <ul class="dropdown-menu pull-right cart-dropdown-menu">
            <li>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td class="text-center"><a href="#"><img class="img-thumbnail" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" src="<?php echo get_template_directory_uri(); ?>/image/product/7product56x72.jpg"></a></td>
                    <td class="text-left"><a href="#">lorem ippsum dolor dummy</a></td>
                    <td class="text-right">x 1</td>
                    <td class="text-right">$254.00</td>
                    <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button"><i class="fa fa-times"></i></button></td>
                  </tr>
                </tbody>
              </table>
            </li>
            <li>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td class="text-center"><a href="#"><img class="img-thumbnail" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" src="<?php echo get_template_directory_uri(); ?>/image/product/7product56x72.jpg"></a></td>
                    <td class="text-left"><a href="#">lorem ippsum dolor dummy</a></td>
                    <td class="text-right">x 1</td>
                    <td class="text-right">$254.00</td>
                    <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button"><i class="fa fa-times"></i></button></td>
                  </tr>
                </tbody>
              </table>
            </li>
            <li>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td class="text-center"><a href="#"><img class="img-thumbnail" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" src="<?php echo get_template_directory_uri(); ?>/image/product/7product56x72.jpg"></a></td>
                    <td class="text-left"><a href="#">lorem ippsum dolor dummy</a></td>
                    <td class="text-right">x 1</td>
                    <td class="text-right">$254.00</td>
                    <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button"><i class="fa fa-times"></i></button></td>
                  </tr>
                </tbody>
              </table>
            </li>
            <li>
              <div>
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td class="text-right"><strong>Sub-Total</strong></td>
                      <td class="text-right">$210.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                      <td class="text-right">$2.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>VAT (20%)</strong></td>
                      <td class="text-right">$42.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Total</strong></td>
                      <td class="text-right">$254.00</td>
                    </tr>
                  </tbody>
                </table>
                <p class="text-right"> <span class="btn-viewcart"><a href="cart.html"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a></span> <span class="btn-checkout"><a href="checkout.html"><strong><i class="fa fa-share"></i> Checkout</strong></a></span> </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>
<nav id="menu" class="navbar">
  <div class="nav-inner">
    <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
      <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
    </div>
    <div class="navbar-collapse">


<?php wp_nav_menu(array(
                'theme_location' => 'header-top',
                'menu_class' => 'main-navigation'   
        )); ?>

        <!-- <li><a href="index-2.html"   class="parent"  >Home</a> </li>
        <li><a href="category.html"   class="parent"  >Collection</a> </li>
        <li><a href="category.html"   class="parent"  >Women</a> </li>
        <li><a href="category.html"   class="parent"  >Men</a> </li>
        <li><a href="#" class="active parent">Page</a>
          <ul>
            <li><a href="category.html">Category Page</a></li>
            <li><a href="cart.html">Cart Page</a></li>
            <li><a href="checkout.html">Checkout Page</a></li>
            <li><a href="blog.html" >Blog Page</a></li>
            <li><a href="single-blog.html" >Singale Blog Page</a></li>
            <li><a href="register.html">Register Page</a></li>
            <li><a href="contact.html">Contact Page</a></li>
            <li><a href="affiliate.html">Affiliate</a></li>
            <li><a href="forgetpassword.html">Forget Password</a></li>
          </ul>
        </li>
        <li><a href="blog.html" class="parent"  >Blog</a></li>
        <li><a href="about-us.html" >About us</a></li>
        <li><a href="contact.html" >Contact Us</a> </li> -->
  
    </div>
  </div>
</nav>
