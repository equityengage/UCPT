<?php
/*
Plugin Name: UCPT Manager Module
Plugin URI: https://equityengage.com
Description: This plug-in is a UCPT module supporting UCPT driver plug-ins with additional variables
Version: 1.1
Requires at least: 3.3
Tested up to: 4.8.1
License: GPL v3
Author: UCPT
Author URI: https://equityengage.com
*/
//////////////////// Currently under development - install now to receive plug-in functionality upon completion.

//////////////////// WP Codex - BP Active Check

register_activation_hook( __FILE__, 'child_plugin_activate' );
function child_plugin_activate(){

    // Require parent plugin
    if ( ! is_plugin_active( 'buddypress/bp-loader.php' ) and current_user_can( 'activate_plugins' ) ) {
        // Stop activation redirect and show error
        wp_die('Sorry, but this plugin requires BuddyPress to be installed and active. <br><a href="' . admin_url( 'plugins.php' ) . '">&laquo; Return to Plugins</a>');
    }
}

//////////////////// WordPress Options API: http://wpsettingsapi.jeroensormani.com/

add_action( 'admin_menu', 'ucpt_manage_add_admin_menu' );
add_action( 'admin_init', 'ucpt_manage_settings_init' );


function ucpt_manage_add_admin_menu(  ) { 

	add_menu_page( 'UCPT Manager', 'UCPT Manager', 'manage_options', 'ucpt_manager_module', 'ucpt_manage_options_page' );

}


function ucpt_manage_settings_init(  ) { 

	register_setting( 'pluginPage', 'ucpt_manage_settings' );

	add_settings_section(
		'ucpt_manage_pluginPage_section', 
		__( 'UCPT Configuration', 'ucpt_manage' ), 
		'ucpt_manage_settings_section_callback', 
		'pluginPage'
	);

	add_settings_field( 
		'ucpt_manage_priority_1', 
		__( 'Priority Focus Area #1', 'ucpt_manage' ), 
		'ucpt_manage_priority_1_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);

	add_settings_field( 
		'ucpt_manage_priority_2', 
		__( 'Priority Focus Area #2', 'ucpt_manage' ), 
		'ucpt_manage_priority_2_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);

	add_settings_field( 
		'ucpt_manage_priority_3', 
		__( 'Priority Focus Area #3', 'ucpt_manage' ), 
		'ucpt_manage_priority_3_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);

	add_settings_field( 
		'ucpt_manage_priority_4', 
		__( 'Priority Focus Area #4', 'ucpt_manage' ), 
		'ucpt_manage_priority_4_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);

	add_settings_field( 
		'ucpt_manage_priority_5', 
		__( 'Priority Focus Area #5', 'ucpt_manage' ), 
		'ucpt_manage_priority_5_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);


}


function ucpt_manage_priority_1_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_priority_1]' value='<?php echo $options['ucpt_manage_priority_1']; ?>'>
	<?php

}


function ucpt_manage_priority_2_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_priority_2]' value='<?php echo $options['ucpt_manage_priority_2']; ?>'>
	<?php

}


function ucpt_manage_priority_3_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_priority_3]' value='<?php echo $options['ucpt_manage_priority_3']; ?>'>
	<?php

}


function ucpt_manage_priority_4_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_priority_4]' value='<?php echo $options['ucpt_manage_priority_4']; ?>'>
	<?php

}


function ucpt_manage_priority_5_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_priority_5]' value='<?php echo $options['ucpt_manage_priority_5']; ?>'>
	<?php

}


function ucpt_manage_settings_section_callback(  ) { 

	echo __( 'Additional settings are planned for the future - stay tuned!', 'ucpt_manage' );

}


function ucpt_manage_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<h2>UCPT Manager Module</h2>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}

?>
