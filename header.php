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
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<!-- #BeginTemplate "master.dwt" -->

<LINK REL="http://2ndarmoredhellonwheels.com/favicon.ico">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <!-- #BeginEditable "doctitle" -->
    <?php wp_head(); ?>
    <!-- #EndEditable -->
</head>

<body <?php body_class(); ?>>
    <!-- Begin Container -->
    <div id="container">
        <!-- Begin Header -->
        <div>
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/2AD_top_site_graphic.gif" alt="2AD_top_site_graphic"></a>
        </div>
        <!-- Begin Masthead -->
        <div id="masthead">
            <h1>
                <font face="Verdana">A World War 2 Historical Site</font>
            </h1>
        </div>
        <!-- End Masthead -->