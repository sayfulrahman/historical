<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Historical
 */

?>
<!-- Begin Footer -->
<footer class="hiscal-footer">
    <?php
    /**
     * Bottom Footer Menu
     * wp_nav_menu
     *
     * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
     */
    if ( has_nav_menu( 'menu-3' ) ) {
        wp_nav_menu(
            array(
                'menu'            => 'Footer Menu',
                'menu_class'      => 'footer-menu',
                'menu_id'         => '',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'fallback_cb'     => '',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'echo'            => true,
                'depth'           => 0,
                'walker'          => '',
                'theme_location'  => 'menu-3',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'item_spacing'    => '',
            )
        );
    };
    ?>
</footer>
<!-- End Footer -->
<div class="hiscal-siteinfo">Copyright (c) 1998-2019 <a href="about">2ndarmoredhellonwheels.com</a> - All rights reserved.</div>
</div>
<!-- End Container -->
<?php wp_footer(); ?>
</body>

</html>