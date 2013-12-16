<?php 
/* Add Theme Settings Form Sections
*******************************************************************************************/
add_settings_section('wp_distinctionpp_settings_header_graphics', 'Header Graphics', 'wp_distinctionpp_settings_header_graphics_section_text', 'wp_distinctionpp');
add_settings_section('wp_distinctionpp_settings_site_fonts', 'Custom Fonts', 'wp_distinctionpp_settings_site_fonts_section_text', 'wp_distinctionpp');
	
/* Add Form Fields to Header Graphics Section
*******************************************************************************************/	
add_settings_field('wp_distinctionpp_setting_display_header_flames', 'Header Graphics:', 'wp_distinctionpp_setting_display_header_flames', 'wp_distinctionpp', 'wp_distinctionpp_settings_header_graphics');

/* Add Form Fields to Custom Fonts Section
*******************************************************************************************/	
add_settings_field('wp_distinctionpp_setting_webfonts', 'Webfonts:', 'wp_distinctionpp_setting_webfonts', 'wp_distinctionpp', 'wp_distinctionpp_settings_site_fonts');


/*****************************************************************************************
* Add Section Text for Each Form Section
*******************************************************************************************/

// Header Settings Section
function wp_distinctionpp_settings_header_graphics_section_text() { ?>
	<?php _e( '', 'wp_distinctionpp' ); ?>
<?php }

function wp_distinctionpp_settings_site_fonts_section_text() { ?>
	<p><?php _e( 'Select the perfect font for your distinctionpp Theme. This will change the font for all the headers within your site. Refer to the contextual help screen for descriptions and help regarding each theme option.', 'wp_distinctionpp' ); ?></p>
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

function wp_distinctionpp_setting_webfonts() {
	$wp_distinctionpp_options = get_option( 'theme_wp_distinctionpp_options' );
    $wpni_distinction_webfonts = wp_distinctionpp_get_valid_webfonts(); ?>
    <?php foreach ( $wpni_distinction_webfonts as $webfonts ) { ?>
            <div class="font-container"><input class="<?php echo $webfonts['slug']; ?>" type="radio" name="theme_wp_distinctionpp_options[webfonts]" <?php checked( $webfonts['slug'] == $wp_distinctionpp_options['webfonts'] ); ?> value="<?php echo $webfonts['slug']; ?>" /><span class="fonts-n-such description <?php echo $webfonts['slug']; ?>"><?php echo $webfonts['name']; ?></span></div>
	<?php } ?><br /><br />
<?php }