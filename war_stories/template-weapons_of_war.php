<?php
/**
 * Template Name: Weapons-of-war Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package historical
 */

get_header();
?>
<!-- Begin Content -->
<div class="content">
    <!-- #BeginEditable "content" -->
    <?php the_content(); ?>
    <p class="center">If you care to submit pictures of weapons used in WW2 to be place on this page email them to us.</p>
    <table width="100%">
        <tr>
            <td width="50%">
                <h3>&quot;Nebelwerfer&quot; (Screaming Meemies)</h3>
                <p>Submitted by: Dave Howard of Ludington, MI</p>
            </td>
            <td width="50%">
                <div class="media center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/nebelwerfer.gif" alt="nebelwerfer" width="240" height="216">
                </div>
            </td>
        </tr>
        <tr>
            <td width="50%">
                <h3>&quot;Panzerfaust&quot;</h3>
                <p>Submitted by: Dave Howard of Ludington, MI</p>
            </td>
            <td width="50%">
                <div class="media center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/panzerfaust.gif" alt="panzerfaust"
                        width="240" height="159">
                </div>
            </td>
        </tr>
        <tr>
            <td width="50%">
                <h3>ME262 Jet Aircraft</h3>
                <p>One of 1st German Jet's</p>
            </td>
            <td width="50%">
                <div class="media center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/me262.gif" alt="ME262 Jet Aircraft" width="240" height="195">
                </div>
            </td>
        </tr>
    </table>
    <!-- #EndEditable "content" -->
</div>
<!-- End Content -->
<?php
get_footer();