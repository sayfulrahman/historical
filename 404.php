<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Historical
 */

get_header();
?>
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
<section class="error-404 not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'historical' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'historical' ); ?></p>
		<div class="search-down">
			<?php
			get_search_form();
			?>
		</div>
	</div><!-- .page-content -->
</section><!-- .error-404 -->
<?php
get_footer();
