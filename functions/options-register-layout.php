<?php 
/* Add Theme Settings Form Sections
*******************************************************************************************/
add_settings_section('wp_distinctionpp_settings_header_options', 'Header Options', 'wp_distinctionpp_settings_header_options_section_text', 'wp_distinctionpp');
add_settings_section('wp_distinctionpp_settings_sidebar_options', 'Sidebar Options', 'wp_distinctionpp_settings_sidebar_options_section_text', 'wp_distinctionpp');
	
	
/* Add Form Fields to Header Options Section
*******************************************************************************************/
add_settings_field('wp_distinctionpp_setting_header_menu_position', 'Header Menu Position:', 'wp_distinctionpp_setting_header_menu_position', 'wp_distinctionpp', 'wp_distinctionpp_settings_header_options');	
add_settings_field('wp_distinctionpp_setting_header_menu_depth', 'Header Menu Depth:', 'wp_distinctionpp_setting_header_menu_depth', 'wp_distinctionpp', 'wp_distinctionpp_settings_header_options');
add_settings_field('wp_distinctionpp_setting_display_site_description', 'Site Description:', 'wp_distinctionpp_setting_display_site_description', 'wp_distinctionpp', 'wp_distinctionpp_settings_header_options');
add_settings_field('wp_distinctionpp_setting_display_menu_search_form', 'Search Form:', 'wp_distinctionpp_setting_display_menu_search_form', 'wp_distinctionpp', 'wp_distinctionpp_settings_header_options');

/* Add Form Fields to Sidebar Options Section
*******************************************************************************************/
add_settings_field('wp_distinctionpp_setting_sidebar_position', 'Header Menu Position:', 'wp_distinctionpp_setting_sidebar_position', 'wp_distinctionpp', 'wp_distinctionpp_settings_sidebar_options');	


/*****************************************************************************************
* Add Section Text for Each Form Section
*******************************************************************************************/

// Header Settings Section
function wp_distinctionpp_settings_header_options_section_text() { ?>
	<p><?php _e( 'Manage Header options for the distinctionpp Theme. Refer to the contextual help screen for descriptions and help regarding each theme option.', 'wp_distinctionpp' ); ?></p>
<?php }

function wp_distinctionpp_settings_sidebar_options_section_text() { ?>
	<p><?php _e( 'Manage Sidebar options for the distinctionpp Theme. Refer to the contextual help screen for descriptions and help regarding each theme option.', 'wp_distinctionpp' ); ?></p>
<?php }

/*****************************************************************************************
* Add Form Field Markup for Each Theme Option
*******************************************************************************************/

// Navigation Menu Position Setting
function wp_distinctionpp_setting_header_menu_position() {
	$wp_distinctionpp_options = get_option( 'theme_wp_distinctionpp_options' ); ?>
	<select name="theme_wp_distinctionpp_options[header_menu_position]">
		<option <?php selected( 'above' == $wp_distinctionpp_options['header_menu_position'] ); ?> value="above">Above</option>
		<option <?php selected( 'below' == $wp_distinctionpp_options['header_menu_position'] ); ?> value="below">Below</option>
	</select>
	<span class="description">Display header navigation menu above or below the site title/description?</span>
<?php }

// Navigation Menu Depth Setting
function wp_distinctionpp_setting_header_menu_depth() {
	$wp_distinctionpp_options = get_option( 'theme_wp_distinctionpp_options' ); ?>	
	<select name="theme_wp_distinctionpp_options[header_menu_depth]">
		<option <?php selected( 1 == $wp_distinctionpp_options['header_menu_depth'] ); ?> value="1">One</option>
		<option <?php selected( 2 == $wp_distinctionpp_options['header_menu_depth'] ); ?> value="2">Two</option>
		<option <?php selected( 3 == $wp_distinctionpp_options['header_menu_depth'] ); ?> value="3">Three</option>
	</select>
	<span class="description">How many levels of Page hierarchy should the Header Navigation Menu display?</span>
<?php }

// Display Site Description Setting
function wp_distinctionpp_setting_display_site_description() {
	$wp_distinctionpp_options = get_option( 'theme_wp_distinctionpp_options' ); ?>
	<select name="theme_wp_distinctionpp_options[display_site_description]">
		<option <?php selected( true == $wp_distinctionpp_options['display_site_description'] ); ?> value="true">Display</option>
        <option <?php selected( false == $wp_distinctionpp_options['display_site_description'] ); ?> value="false">Do Not Display</option>
	</select>
	<span class="description">Display your site description in the header? This option is enabled by default.</span>
<?php }

// Display Search Form Setting
function wp_distinctionpp_setting_display_menu_search_form() {
	$wp_distinctionpp_options = get_option( 'theme_wp_distinctionpp_options' ); ?>
	<select name="theme_wp_distinctionpp_options[display_menu_search_form]">
		<option <?php selected( true == $wp_distinctionpp_options['display_menu_search_form'] ); ?> value="true">Display</option>
        <option <?php selected( false == $wp_distinctionpp_options['display_menu_search_form'] ); ?> value="false">Do Not Display</option>
	</select>
	<span class="description">Display the search form with your main header menu? This option is enabled by default.</span>
<?php }

// Sidebar Position Setting
function wp_distinctionpp_setting_sidebar_position() {
	$wp_distinctionpp_options = get_option( 'theme_wp_distinctionpp_options' ); ?>
	<select name="theme_wp_distinctionpp_options[sidebar_position]">
		<option <?php selected( 'right' == $wp_distinctionpp_options['sidebar_position'] ); ?> value="right">Right Sidebar</option>
		<option <?php selected( 'left' == $wp_distinctionpp_options['sidebar_position'] ); ?> value="left">Left Sidebar</option>
	</select>
	<span class="description">Display sidebar on the right or left side of the page?</span>
    <br /><br />
<?php }
?>