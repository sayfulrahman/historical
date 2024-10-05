<?php
/**
 * Template Name: Home Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package historical
 */

get_header();
?>
<?php
$post_id = get_the_ID(); // Get current post ID
$content_1st = get_post_meta( $post_id, 'home_page_content_1st', true );
$content_2nd = get_post_meta( $post_id, 'home_page_content_2nd', true );
$content_3rd = get_post_meta( $post_id, 'home_page_content_3rd', true );
$content_4th = get_post_meta( $post_id, 'home_page_content_4th', true );
$content_5th = get_post_meta( $post_id, 'home_page_content_5th', true );
$content_6th = get_post_meta( $post_id, 'home_page_content_6th', true );
?>
<!-- Begin Content -->
<div class="content">
    <!-- #BeginEditable "content" -->
    <div class="hiscal-cont1 center">
        <a href="memorials/swonger">
            <img src="<?php echo get_template_directory_uri(); ?>/images/loving_memory.jpg" width="588" height="69">
        </a>
    </div>
    <div class="hiscal-cont2 center">
        <a href="http://2ndarmoreddivision.org/">Join the 2nd Armored Division Association Today!</a>
    </div>
    <hr>
    <hr class="hiscal-cont3">
    <h2 class="center">A World War 2 Historical Site</h2>
    <h3 class="center"><a href="http://members.home.nl/mjbtje/index.html" target="_blank">Feature</a></h3>
    <?php if ( ! empty( $content_1st ) ) { ?>
    <div class="basefont center">
        <?php echo wpautop($content_1st); ?>
    </div>
    <hr>
    <?php }; ?>
    <h3 class="center"><a href="http://www.motherofnormandy.com/" target="_blank">Feature</a></h3>
    <?php if ( ! empty( $content_2nd ) ) { ?>
    <div class="basefont">
        <?php echo wpautop($content_2nd); ?>
    </div>
    <?php }; ?>
    <hr>
    <h3 class="center"><a href="re-enactments/back-to-bocage-2006">Back to the Bocage&quot;</a></h3>
    <?php if ( ! empty( $content_3rd ) ) { ?>
    <div class="center">
        <?php echo wpautop($content_3rd); ?>
    </div>
    <?php }; ?>
    <hr>
    <h3 class="center">Campaign for the National Museum of the United States Army</h3>
    <?php if ( ! empty( $content_4th ) ) { ?>
    <div class="basefont">
        <?php echo wpautop($content_4th); ?>
    </div>
    <?php }; ?>
    <?php if ( ! empty( $content_5th ) ) { ?>
    <div class="media center">
        <img src="<?php echo $content_5th; ?>" alt="Berlin 1945" hspace="5" vspace="5" width="122" height="81"><br>
    </div>
    <?php }; ?>
    <?php if ( ! empty( $content_6th ) ) { ?>
    <p class="center"><span style="background-color: #FFFF00"><?php echo $content_6th; ?></span></p>
    <?php }; ?>
    <hr>
    <table cellpadding="0" cellspacing="0" width="100%" class="table-3col">
        <tr>
            <td class="center">
                <p><a href="units"><strong>Units of the 2nd Armored Division</strong></a></p>
            </td>
            <td class="media center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tank40.gif" alt="Tank Circa 1940"
                    hspace="5" vspace="5" width="128" height="76">
            </td>
            <td class="center">
                <p><a href="units/july44"><strong>&quot;Hell on Wheels&quot; Circa '44</strong></a></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" valign="middle">
                <hr>
            </td>
        </tr>
        <tr>
            <td class="center">
                <p>
                    <a href="news-and-interest"><strong>News and Information of Interest</strong></a>
                </p>
            </td>
            <td class="media center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bookpile1.gif"
                    alt="armored forces bookstore" hspace="5" vspace="5" width="45" height="57">
            </td>
            <td class="center">
                <p><a href="war-stories"><strong>War Stories</strong></a>
            </td>
        </tr>
        <tr>
            <td colspan="3" valign="middle">
                <hr>
            </td>
        </tr>
        <tr>
            <td class="center">
                <p><a href="units/82ndrecon"><strong>82nd Reconnaissance Battalion</strong></a></p>
            </td>
            <td class="media center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/scoutcar45.gif" alt="Siwulich &amp; friend"
                    hspace="5" vspace="5" width="122" height="76">
            </td>
            <td class="center">
                <p><a href="war-stories/quotes"><strong>Memorable Combat Quotes</strong></a></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" valign="middle">
                <hr>
            </td>
        </tr>
        <tr>
            <td class="center">
                <p><a href="memorials"><strong>Belgium, France, Holland, WWII Memorials</strong></a></p>
            </td>
            <td class="media center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tatom2.gif" alt="1st into Belgium"
                    hspace="5" vspace="5" width="104" height="77">
            </td>
            <td class="center">
                <p><a href="don-r-marsh-diary"><strong>Don R. Marsh Diary</strong></a></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" valign="middle">
                <hr>
            </td>
        </tr>
        <tr>
            <td class="center">
                <p><a href="war-stories/messhall"><strong>The Mess Hall</strong></a></p>
            </td>
            <td class="media center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/motorcycle.gif" alt="motorcycle" hspace="5"
                    vspace="5" width="99" height="75">
            </td>
            <td class="center">
                <p><a href="war-stories/its-a-fact"><strong>It's a Fact!</strong></a></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" valign="middle">
                <hr>
            </td>
        </tr>
        <tr>
            <td class="center">
                <p><a href="memorials/obits"><strong>2nd AD Soldiers Never Die!</strong></a></p>
            </td>
            <td class="media center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/flag.gif" alt="guidon" hspace="5"
                    vspace="5" width="70" height="60">
            </td>
            <td class="center">
                <p><a href="memorials/taps"><strong>Taps Memorial Page</strong></a></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" valign="middle">
                <hr>
            </td>
        </tr>
        <tr>
            <td class="center">
                <p>
                    <a href="motor-pool"><strong>Pictorial Motor Pool</strong></a><br>
                    <a href="war-stories/weapons-of-war"><strong>Weapons of WW2</strong></a>
                </p>
            </td>
            <td class="media center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/jeep.gif" alt="Soldier with Jeep"
                    hspace="5" width="149" height="120">
            </td>
            <td class="center">
                <p><a href="http://2ndarmoreddivision.org/"><strong>The 2nd AD Association</strong></a></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" valign="middle">
                <hr>
            </td>
        </tr>
        <tr>
            <td class="center">
                <p><a href="about"><strong>About This Site</strong></a></p>
            </td>
            <td class="media center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/younghs.gif" hspace="5" width="76"
                    height="120">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cirelli.gif" width="80" height="120">
            </td>
            <td class="center">
                <p><a href="war-stories/hobo-jungle"><strong>The Hobo Page</strong></a></p>
                <p><strong>(My dad was a hobo...)</strong></p>
            </td>
        </tr>
    </table>
    <!-- #EndEditable "content" -->
</div>
<!-- End Content -->
<?php
get_footer();