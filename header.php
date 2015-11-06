<?php
/**
 * The Header template for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- end Bootstrap CSS -->

    <!-- Start WordPress Head Stuff -->
    <?php wp_head(); ?>
    <!-- End WordPress Head Stuff -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Bootstrap JS -->
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js">
      </script>
    <!-- end Bootstrap JS -->
 </head>
  <body <?php body_class(); ?>>
    <header id="site-header" class="container">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2">
          <img class="pull-left" id="site-logo" src="/wp-content/themes/ccai/images/header.jpg"/>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7">
          <?php dynamic_sidebar('above-header'); ?>
          <hgroup>
            <h1><a href="<?php echo get_option('home')?>/"><?php bloginfo('name')?></a></h1>
          </hgroup>
          <?php dynamic_sidebar('below-header'); ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3" style="text-align:center">
          <form role="search" method="get" id="searchform" class="searchform" action="/">
					     <label class="screen-reader-text" for="s">Search</label>
					     <input type="text" value="" name="s" id="s">
					     <input type="submit" id="searchsubmit" value="Go">
			    </form>
          <div id="logo-links">
            <div><a title="Support" href="http://smile.amazon.com/ch/20-1343468" target="_blank"><img width="50" src="/wp-content/themes/ccai/images/smile.jpg"/></a><br>Support</div>
            <div><a title="Donate" href="https://client.pointandpay.net/web/CapitalCityArtsInitiativeNV" target="_blank"><img width="50" src="/wp-content/themes/ccai/images/donate.jpg"/></a><br>Donate</div>
            <div><a title="Join" href="/home/about/join/"><img width="50" src="/wp-content/themes/ccai/images/join.jpg"/></a><br>Join</div>
            <div><a title="Follow" href="https://www.facebook.com/pages/Capital-City-Arts-Initiative/96391381287" target="_blank"><img width="50" src="/wp-content/themes/ccai/images/facebook.jpg"/></a><br>Follow</div>
          </div>
        </div>
      </div>
    <!-- Start WordPress Menu -->
    <?php
    if (has_nav_menu('top')) {
        wp_nav_menu(array(
        'container' => 'nav',
        'container_class' => 'navbar',
        'theme_location' => 'top',
        'menu_class' => 'nav navbar-nav',
        'walker' => new wp_bootstrap_navwalker(),
        ));
    }
    ?>
    <!-- End WordPress Menu -->
    </header>

    <!-- Start Site Content -->

    <div id="site-content" class="content container">
      <div class="row">

        <!-- Start Sidebar -->
        <?php
        $has_sidebar = false;
        $col_width = 'col-lg-12 col-md-12 col-sm-12';

        if (has_nav_menu('sidebar') or is_active_sidebar('sidebar')) {
            $has_sidebar = true;
            $col_width = 'col-lg-9 col-md-9 col-sm-9';
        }

        if ($has_sidebar) {
            echo '<ul class="sidebar col-lg-3 col-md-3 col-sm-3">';
        }

        if (has_nav_menu('sidebar')) {
            wp_nav_menu(array('theme_location' => 'sidebar', 'container' => 'nav'));
        }

        dynamic_sidebar('sidebar');

        if ($has_sidebar) {
            echo '</ul>';
        }
        ?>
        <!-- End Sidebar -->

        <div class="<?php echo $col_width ?>">
          <?php dynamic_sidebar('above-content'); ?>
