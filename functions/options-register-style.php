<?php
/* Add Theme Settings Form Sections
*******************************************************************************************/
add_settings_section('wp_distinctionpp_settings_header_graphics', 'Header Graphics', 'wp_distinctionpp_settings_header_graphics_section_text', 'wp_distinctionpp');

/* Add Form Fields to Header Graphics Section
*******************************************************************************************/
add_settings_field('wp_distinctionpp_setting_display_header_flames', 'Header Graphics:', 'wp_distinctionpp_setting_display_header_flames', 'wp_distinctionpp', 'wp_distinctionpp_settings_header_graphics');


/*****************************************************************************************
* Add Section Text for Each Form Section
*******************************************************************************************/

// Header Settings Section
function wp_distinctionpp_settings_header_graphics_section_text() { ?>
	<?php _e( '', 'wp_distinctionpp' ); ?>
<?php }

/*****************************************************************************************
* Add Form Field Markup for Each Theme Option
*******************************************************************************************/

// Display Header Graphics Setting
function wp_distinctionpp_setting_display_header_flames() {
	$wp_distinctionpp_options = get_option( 'theme_wp_distinctionpp_options' ); ?>
	<select name="theme_wp_distinctionpp_options[display_header_flames]">
		<option <?php selected( true == $wp_distinctionpp_options['display_header_flames'] ); ?> value="true">Display</option>
        <option <?php selected( false == $wp_distinctionpp_options['display_header_flames'] ); ?> value="false">Do Not Display</option>
	</select>
	<span class="description">Display flame images in the header? This option is enabled by default.</span>
<?php }
