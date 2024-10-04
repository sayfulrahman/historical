<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'historical_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category Historical
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/CMB2/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
 * @param  CMB2 $cmb CMB2 object.
 *
 * @return bool      True if metabox should show
 */
function historical_show_if_front_page( $cmb ) {
	// Don't show this metabox if it's not the front page template.
	if ( get_option( 'page_on_front' ) !== $cmb->object_id ) {
		return false;
	}
	return true;
}

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field $field Field object.
 *
 * @return bool              True if metabox should show
 */
function historical_hide_if_no_cats( $field ) {
	// Don't show this field if not in the cats category.
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}
	return true;
}

/**
 * Manually render a field.
 *
 * @param  array      $field_args Array of field arguments.
 * @param  CMB2_Field $field      The field object.
 */
function historical_render_row_cb( $field_args, $field ) {
	$classes     = $field->row_classes();
	$id          = $field->args( 'id' );
	$label       = $field->args( 'name' );
	$name        = $field->args( '_name' );
	$value       = $field->escaped_value();
	$description = $field->args( 'description' );
	?>
	<div class="custom-field-row <?php echo esc_attr( $classes ); ?>">
		<p><label for="<?php echo esc_attr( $id ); ?>"><?php echo esc_html( $label ); ?></label></p>
		<p><input id="<?php echo esc_attr( $id ); ?>" type="text" name="<?php echo esc_attr( $name ); ?>" value="<?php echo $value; ?>"/></p>
		<p class="description"><?php echo esc_html( $description ); ?></p>
	</div>
	<?php
}

/**
 * Manually render a field column display.
 *
 * @param  array      $field_args Array of field arguments.
 * @param  CMB2_Field $field      The field object.
 */
function historical_display_text_small_column( $field_args, $field ) {
	?>
	<div class="custom-column-display <?php echo esc_attr( $field->row_classes() ); ?>">
		<p><?php echo $field->escaped_value(); ?></p>
		<p class="description"><?php echo esc_html( $field->args( 'description' ) ); ?></p>
	</div>
	<?php
}

/**
 * Conditionally displays a message if the $post_id is 2
 *
 * @param  array      $field_args Array of field parameters.
 * @param  CMB2_Field $field      Field object.
 */
function historical_before_row_if_2( $field_args, $field ) {
	if ( 2 == $field->object_id ) {
		echo '<p>Testing <b>"before_row"</b> parameter (on $post_id 2)</p>';
	} else {
		echo '<p>Testing <b>"before_row"</b> parameter (<b>NOT</b> on $post_id 2)</p>';
	}
}

add_action( 'cmb2_admin_init', 'historical_register_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function historical_register_metabox() {
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_home_page = new_cmb2_box( array(
		'id'            => 'historical_metabox',
		'title'         => esc_html__( 'Home Metabox', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on'       => array(
            'key'   => 'page-template',
            'value' => array( 'template-home.php' ), // Add your template file names here
        ),
	) );

	$cmb_home_page->add_field( array(
		'name'    => esc_html__( 'Home 1st Part', 'cmb2' ),
		'desc'    => esc_html__( '', 'cmb2' ),
		'id'      => 'home_page_content_1st',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 3,
		),
	) );

	$cmb_home_page->add_field( array(
		'name'    => esc_html__( 'Home 2nd Part', 'cmb2' ),
		'desc'    => esc_html__( '', 'cmb2' ),
		'id'      => 'home_page_content_2nd',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 3,
		),
	) );

	$cmb_home_page->add_field( array(
		'name'    => esc_html__( 'Home 3rd Part', 'cmb2' ),
		'desc'    => esc_html__( '', 'cmb2' ),
		'id'      => 'home_page_content_3rd',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 3,
		),
	) );

	$cmb_home_page->add_field( array(
		'name'    => esc_html__( 'Home 4th Part', 'cmb2' ),
		'desc'    => esc_html__( '', 'cmb2' ),
		'id'      => 'home_page_content_4th',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 3,
		),
	) );

	$cmb_home_page->add_field( array(
		'name' => esc_html__( 'Home 5th Part', 'cmb2' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => 'home_page_content_5th',
		'type' => 'file',
	) );

	$cmb_home_page->add_field( array(
		'name'    => esc_html__( 'Home 6th Part', 'cmb2' ),
		'desc'    => esc_html__( '', 'cmb2' ),
		'id'      => 'home_page_content_6th',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 3,
		),
	) );

}

