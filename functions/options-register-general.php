<?php 
/* Add Theme Settings Form Sections
*******************************************************************************************/
	
// Add a form section for the Header settings
add_settings_section('wp_distinctionpp_settings_general_thanks', 'Thank you for choosing distinctionpp.', 'wp_distinctionpp_settings_general_thanks_section_text', 'wp_distinctionpp');
// Add a form section for the Google Analytics settings
add_settings_section('wp_distinctionpp_settings_general_analytics', 'Google Analytics', 'wp_distinctionpp_settings_general_analytics_section_text', 'wp_distinctionpp');
// Add a form section for the Credits settings
add_settings_section('wp_distinctionpp_settings_general_footer', 'Theme Credit', 'wp_distinctionpp_settings_general_footer_section_text', 'wp_distinctionpp');



/* Add Form Fields to Google Analytics Settings Section
*******************************************************************************************/	

// Add Footer Credit Link setting to the Footer section
add_settings_field('wp_distinctionpp_setting_analytics_code', 'Google Analytics Code:', 'wp_distinctionpp_setting_analytics_code', 'wp_distinctionpp', 'wp_distinctionpp_settings_general_analytics');

/* Add Form Fields to Footer Settings Section
*******************************************************************************************/	

// Add Footer Credit Link setting to the Footer section
add_settings_field('wp_distinctionpp_setting_display_footer_credit', 'Footer Credit Link:', 'wp_distinctionpp_setting_display_footer_credit', 'wp_distinctionpp', 'wp_distinctionpp_settings_general_footer');

/* Add Section Text for Each Form Section
*******************************************************************************************/

// Header Settings Section
function wp_distinctionpp_settings_general_thanks_section_text() { ?>
	<p><?php _e( 'To get the most out of this theme make sure you are using the most recent version of WordPress and experiment with adding a post format when creating new posts.', 'wp_distinctionpp' ); ?></p>
	<p><?php _e( 'For additional ideas on how to best utilize distinctionpp for your website check out <a href="https://git.oschina.net/owent/distinctionpp">https://git.oschina.net/owent/distinctionpp</a> or refer to the contextual help screen for descriptions and help regarding each theme option.', 'wp_distinctionpp' ); ?></p>
	<p><?php _e( 'If you ever have any issues with this theme you can always submit a support ticket at <a href="http://www.owent.net">http://www.owent.net</a> and someone will try to assist you right away.', 'wp_distinctionpp' ); ?></p>
	<p><?php _e( 'We hope you enjoy the theme and may it serve you well for a very long time.', 'wp_distinctionpp' ); ?></p>
<?php }

// Social Network Profile Settings Section
function wp_distinctionpp_settings_general_analytics_section_text() { ?>
	<p><?php _e( 'Add Google Analytics Code to the distinctionpp Theme. Refer to the contextual help screen for descriptions and help regarding each theme option.', 'wp_distinctionpp' ); ?></p>
<?php }

// Footer Settings Section
function wp_distinctionpp_settings_general_footer_section_text() { ?>
	<p><?php _e( 'Manage Footer options for the distinctionpp Theme. Refer to the contextual help screen for descriptions and help regarding each theme option.', 'wp_distinctionpp' ); ?></p>
<?php }

/* Add Form Field Markup for Each Theme Option
*******************************************************************************************/
// Display Google Analytics Setting
function wp_distinctionpp_setting_analytics_code() {
	$wp_distinctionpp_options = get_option( 'theme_wp_distinctionpp_options' ); ?>
	<textarea cols="40" rows="7" name="theme_wp_distinctionpp_options[analytics_code]"><?php echo $wp_distinctionpp_options['analytics_code']; ?></textarea>
	<br /><span class="description">Add Google Analytics code to you site.</span>
<?php }

// Display Footer Credit Setting
function wp_distinctionpp_setting_display_footer_credit() {
	$wp_distinctionpp_options = get_option( 'theme_wp_distinctionpp_options' ); ?>
	<select name="theme_wp_distinctionpp_options[display_footer_credit]">
		<option <?php selected( true == $wp_distinctionpp_options['display_footer_credit'] ); ?> value="true">Display</option>
        <option <?php selected( false == $wp_distinctionpp_options['display_footer_credit'] ); ?> value="false">Do Not Display</option>
	</select>
	<span class="description">Display a credit link in the footer? This option is enabled by default, but you are under no obligation whatsoever to leave it enabled. However, if you like the theme, it won't hurt my feelings if you leave it posted. :)</span>
    <br /><br />
<?php }
?>