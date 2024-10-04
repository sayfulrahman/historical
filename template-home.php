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
<style type="text/css">
.auto-style3 {
    vertical-align: middle;
}

.auto-style4 {
    font-size: medium;
}
</style>
<style type="text/css">
.auto-style1 {
    text-align: center;
}

.auto-style2 {
    color: #AA6600;
    text-decoration: underline;
}

.auto-style3 {
    margin-left: 6px;
}
</style>
<!-- Begin Content -->
<div id="content" class="auto-style3" style="width: 664px">
    <!-- #BeginEditable "content" -->
    <p align="center"><a href="memorials/swonger">
            <font face="Verdana">
                <img border="2" src="<?php echo get_template_directory_uri(); ?>/images/loving_memory.jpg"
                    class="auto-style3" width="588" height="69">
            </font>
        </a>
    </p>
    <font COLOR="#ff0000">
        <p align="center"><b><a href="http://2ndarmoreddivision.org/">
                    <font face="Verdana">Join the 2nd
                        Armored Division Association Today!</font>
                </a></b></p>
        <hr>
    </font>
    <div>
        <hr color="#808000" SIZE="10">
    </div>
    <h2 align="center">
        <font face="Verdana">A World War 2 Historical Site</font>
    </h2>
    <h3 align="center">
        <font face="Verdana"><a href="http://members.home.nl/mjbtje/index.html" target="_blank">Feature</a></font>
    </h3>
    <?php if ( ! empty( $content_1st ) ) { ?>
    <div align="center" class="auto-style4" style="font-family: verdana;">
        <?php echo $content_1st; ?>
    </div>
    <hr>
    <?php }; ?>
    <h3 align="center"><a href="http://www.motherofnormandy.com/" target="_blank">
            <font face="Verdana">Feature</font>
        </a></h3>
    <?php if ( ! empty( $content_2nd ) ) { ?>
    <div class="auto-style4" style="font-family: verdana;">
        <?php echo $content_2nd; ?>
    </div>
    <?php }; ?>
    <font COLOR="#ff0000">
        <hr>
    </font>
    <h3 align="center"><a href="re-enactments/back-to-bocage-2006">
            <font face="Verdana">&quot;Back to
                the Bocage&quot;</font>
        </a></h3>
    <?php if ( ! empty( $content_3rd ) ) { ?>
    <div align="center" style="font-family: verdana;">
        <?php echo $content_3rd; ?>
    </div>
    <?php }; ?>
    <font COLOR="#ff0000">
        <hr>
    </font>
    <h3 align="center">
        <font face="Verdana">Campaign for the <st1:place w:st="on">
                <st1:PlaceName w:st="on">
                    National</st1:PlaceName>
                <st1:PlaceType w:st="on">
                    Museum</st1:PlaceType>
            </st1:place>
            of the United States Army</font>
    </h3>
    <?php if ( ! empty( $content_4th ) ) { ?>
        <div align="center" style="font-family: verdana; font-size: 16px;">
            <?php echo $content_4th; ?>
        </div>
    <?php }; ?>
    <?php if ( ! empty( $content_5th ) ) { ?>
        <div align="center">
            <img src="<?php echo $content_5th; ?>"
        alt="Berlin 1945" align="top" hspace="5" vspace="5" width="122" height="81"><br>
        </div>
    <?php }; ?>
    <?php if ( ! empty( $content_6th ) ) { ?>
        <p align="center" style="background-color: #FFFF00;">
        <?php echo $content_6th; ?>
        </p>
    <?php }; ?>
    <font COLOR="#ff0000">
        <hr>
    </font>
    <div align="center">
        <center>
            <table border="0" width="100%" height="998">
                <tr>
                    <td align="center" height="88" style="width: 33%">
                        <p align="center"><a href="units"><strong>
                                    <font face="Verdana">Units
                                        of the 2nd Armored Division</font>
                                </strong></a></p>
                    </td>
                    <td align="center" valign="middle" height="88">
                        <p align="center">
                            <font face="Verdana"><img
                                    src="<?php echo get_template_directory_uri(); ?>/images/tank40.gif"
                                    alt="Tank Circa 1940" align="top" hspace="5" vspace="5" width="128" height="76">
                            </font>
                        </p>
                    </td>
                    <td align="center" height="88" style="width: 33%">
                        <p align="center">
                            <font face="Verdana"><strong><a href="units/july44">&quot;</a></strong><a
                                    href="units/july44"><strong>Hell
                                        on Wheels&quot; Circa '44</strong></a></font>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center" valign="middle" height="12">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" height="69">
                        <p align="center">
                            <font face="Verdana"><strong>&nbsp;</strong><a href="news-and-interest"><strong>News
                                        and Information of Interest</strong></a></font>
                        </p>
                    </td>
                    <td align="center" valign="middle" height="69">
                        <p align="center"><b><u>
                                    <font face="Verdana"><img
                                            src="<?php echo get_template_directory_uri(); ?>/images/bookpile1.gif"
                                            alt="armored forces bookstore" align="top" hspace="5" vspace="5" width="45"
                                            height="57"></font>
                                </u></b></p>
                    </td>
                    <td align="center" valign="middle" height="69">
                        <p align="center"><a href="war-stories"><strong>
                                    <font face="Verdana">War
                                        Stories</font>
                                </strong></a>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center" valign="middle" height="12">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" height="88">
                        <p align="center"><a href="units/82ndrecon"><strong>
                                    <font face="Verdana">82nd
                                        Reconnaissance Battalion</font>
                                </strong></a></p>
                    </td>
                    <td align="center" valign="middle" height="88">
                        <p align="center">
                            <font face="Verdana"><img
                                    src="<?php echo get_template_directory_uri(); ?>/images/scoutcar45.gif"
                                    alt="Siwulich &amp; friend" align="top" hspace="5" vspace="5" width="122"
                                    height="76"></font>
                        </p>
                    </td>
                    <td align="center" valign="middle" height="88">
                        <p align="center"><a href="war-stories/quotes"><strong>
                                    <font face="Verdana">Memorable
                                        Combat Quotes</font>
                                </strong></a></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center" valign="middle" height="12">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" height="89">
                        <p align="center"><a href="memorials"><strong>
                                    <font face="Verdana">Belgium,
                                        France, Holland, WWII Memorials</font>
                                </strong></a></p>
                    </td>
                    <td align="center" valign="middle" height="89">
                        <p align="center">
                            <font face="Verdana"><img
                                    src="<?php echo get_template_directory_uri(); ?>/images/tatom2.gif"
                                    alt="1st into Belgium" align="top" hspace="5" vspace="5" width="104" height="77">
                            </font>
                        </p>
                    </td>
                    <td align="center" valign="middle" height="89">
                        <font COLOR="#ff0000">
                            <p align="center" class="auto-style1"><a href="don-r-marsh-diary">
                                    <strong>Don R. Marsh Diary</strong></a></p>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center" valign="middle" height="12">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" height="87"><a href="war-stories/messhall"><strong>
                                <font face="Verdana">The
                                    Mess Hall</font>
                            </strong></a></td>
                    <td align="center" valign="middle" height="87">
                        <p align="center">
                            <font face="Verdana"><img
                                    src="<?php echo get_template_directory_uri(); ?>/images/motorcycle.gif"
                                    alt="motorcycle" align="top" hspace="5" vspace="5" width="99" height="75">
                            </font>
                        </p>
                    </td>
                    <td align="center" valign="middle" height="87">
                        <p align="center">
                            <font face="Verdana"><a href="war-stories/its-a-fact"><strong>It's a
                                        Fact!</strong></a><strong><br>
                                </strong></font>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center" valign="middle" height="12">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" height="72">
                        <p align="center"><strong><a href="memorials/obits">
                                    <font face="Verdana">2nd
                                        AD Soldiers Never Die!</font>
                                </a></strong></p>
                    </td>
                    <td align="center" valign="middle" height="72">
                        <p align="center">
                            <font face="Verdana"><img src="<?php echo get_template_directory_uri(); ?>/images/flag.gif"
                                    alt="guidon" align="top" hspace="5" vspace="5" width="70" height="60"></font>
                        </p>
                    </td>
                    <td align="center" valign="middle" height="72">
                        <p align="center"><a href="memorials/taps"><strong>
                                    <font face="Verdana">Taps
                                        Memorial Page</font>
                                </strong></a></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center" valign="middle" height="12">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" height="122">
                        <p align="center">
                            <font face="Verdana"><a href="motor-pool"><strong>Pictorial
                                        Motor Pool</strong></a><br>
                                <strong><a href="war-stories/weapons-of-war">Weapons of WW2</a></strong>
                            </font>
                        </p>
                    </td>
                    <td align="center" valign="middle" height="122">
                        <p align="center">
                            <font face="Verdana"><img src="<?php echo get_template_directory_uri(); ?>/images/jeep.gif"
                                    alt="Soldier with Jeep" hspace="5" width="149" height="120"></font>
                        </p>
                    </td>
                    <td align="center" valign="middle" height="122">
                        <p align="center"><a href="http://2ndarmoreddivision.org/"><b>
                                    <font face="Verdana">The 2nd
                                        AD Association</font>
                                </b></a></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center" valign="middle" height="12">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td align="center" valign="middle" height="59">
                        <p align="center"><a href="about"><strong>
                                    <font face="Verdana">About
                                        This Site</font>
                                </strong></a></p>
                    </td>
                    <td align="center" valign="middle" height="122">
                        <p align="center">
                            <font face="Verdana"><img
                                    src="<?php echo get_template_directory_uri(); ?>/images/younghs.gif" hspace="5"
                                    width="76" height="120"><img
                                    src="<?php echo get_template_directory_uri(); ?>/images/cirelli.gif" width="80"
                                    height="120"></font>
                        </p>
                    </td>
                    <td align="center" valign="middle" height="59">
                        <p align="center"><a href="war-stories/hobo-jungle"><b>
                                    <font face="Verdana">The Hobo
                                        Page</font>
                                </b></a>
                        <p align="center"><b>
                                <font face="Verdana">(My dad was a hobo...)</font>
                            </b>
                    </td>
                </tr>
            </table>
        </center>
    </div>
    <hr>

    <!-- #EndEditable "content" -->
</div>
<!-- End Content -->
<?php
get_footer();