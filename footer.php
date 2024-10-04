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
<div id="footer">
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
</div>
<!-- End Footer -->
</div>
<!-- End Container -->

<p class="auto-style1">Copyright (c) 1998-2019
    <a href="about">
        <span class="auto-style2">2ndarmoredhellonwheels.com </span></a>- All rights
    reserved.
</p>
<?php wp_footer(); ?>
</body>

<!-- #EndTemplate -->

</html>