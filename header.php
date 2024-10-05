<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Historical
 */

?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:image:alt" content="">

  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" href="/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="icon.png">

  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">
    <!-- #BeginEditable "doctitle" -->
    <?php wp_head(); ?>
    <!-- #EndEditable -->
</head>

<body <?php body_class(); ?>>
    <!-- Begin Container -->
    <div class="container">
        <!-- Begin Header -->
        <header class="hiscal-header center">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/2AD_top_site_graphic.gif" alt="2AD_top_site_graphic"></a>
        </header>
        <!-- Begin Masthead -->
        <div class="hiscal-banner center">
            <h1>A World War 2 Historical Site</h1>
        </div>
        <!-- End Masthead -->