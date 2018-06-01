<?php
/*
Plugin Name: UCPT Manager Module
Plugin URI: https://equityengage.com
Description: This plug-in is a UCPT module supporting UCPT driver plug-ins with additional variables.
Version: 8.01
Requires at least: 3.3
Tested up to: 4.9.6
License: GPL v3
Author: UCPT
Author URI: https://equityengage.com
*/

// WP Codex - BP Active Check

register_activation_hook( __FILE__, 'child_plugin_activate' );
function child_plugin_activate(){

    // Require parent plugin
    if ( ! is_plugin_active( 'buddypress/bp-loader.php' ) and current_user_can( 'activate_plugins' ) ) {
        // Stop activation redirect and show error
        wp_die('Sorry, but this plugin requires BuddyPress to be installed and active. <br><a href="' . admin_url( 'plugins.php' ) . '">&laquo; Return to Plugins</a>');
    }
}

// WordPress Options API: http://wpsettingsapi.jeroensormani.com/

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
	
	add_settings_field( 
		'ucpt_manage_start_date', 
		__( 'UCPT Data Start Date', 'ucpt_manage' ), 
		'ucpt_manage_start_date_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);
	
	add_settings_field( 
		'ucpt_manage_measure_number', 
		__( 'UCPT Measure Number', 'ucpt_manage' ), 
		'ucpt_manage_measure_number_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);

	add_settings_field( 
		'ucpt_manage_custom_categories_1', 
		__( 'Custom Data Category #1', 'ucpt_manage' ), 
		'ucpt_manage_custom_categories_1_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);
	
	add_settings_field( 
		'ucpt_manage_custom_categories_2', 
		__( 'Custom Data Category #2', 'ucpt_manage' ), 
		'ucpt_manage_custom_categories_2_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);
	
	add_settings_field( 
		'ucpt_manage_custom_categories_3', 
		__( 'Custom Data Category #3', 'ucpt_manage' ), 
		'ucpt_manage_custom_categories_3_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);
	
	add_settings_field( 
		'ucpt_manage_custom_categories_4', 
		__( 'Custom Data Category #4', 'ucpt_manage' ), 
		'ucpt_manage_custom_categories_4_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);
	
	add_settings_field( 
		'ucpt_manage_custom_categories_5', 
		__( 'Custom Data Category #5', 'ucpt_manage' ), 
		'ucpt_manage_custom_categories_5_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);
	
	add_settings_field( 
		'ucpt_manage_custom_categories_6', 
		__( 'Custom Data Category #6', 'ucpt_manage' ), 
		'ucpt_manage_custom_categories_6_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);
	
	add_settings_field( 
		'ucpt_manage_custom_categories_7', 
		__( 'Custom Data Category #7', 'ucpt_manage' ), 
		'ucpt_manage_custom_categories_7_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);
	
	add_settings_field( 
		'ucpt_manage_custom_categories_8', 
		__( 'Custom Data Category #8', 'ucpt_manage' ), 
		'ucpt_manage_custom_categories_8_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);
	
	add_settings_field( 
		'ucpt_manage_custom_categories_9', 
		__( 'Custom Data Category #9', 'ucpt_manage' ), 
		'ucpt_manage_custom_categories_9_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);
	
	add_settings_field( 
		'ucpt_manage_custom_categories_10', 
		__( 'Custom Data Category #10', 'ucpt_manage' ), 
		'ucpt_manage_custom_categories_10_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);
	
	add_settings_field( 
		'ucpt_manage_custom_categories_11', 
		__( 'Custom Data Category #11', 'ucpt_manage' ), 
		'ucpt_manage_custom_categories_11_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);
	
	add_settings_field( 
		'ucpt_manage_custom_categories_12', 
		__( 'Custom Data Category #12', 'ucpt_manage' ), 
		'ucpt_manage_custom_categories_12_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);
	
	add_settings_field( 
		'ucpt_manage_custom_categories_13', 
		__( 'Custom Data Category #13', 'ucpt_manage' ), 
		'ucpt_manage_custom_categories_13_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);
	
	add_settings_field( 
		'ucpt_manage_custom_categories_14', 
		__( 'Custom Data Category #14', 'ucpt_manage' ), 
		'ucpt_manage_custom_categories_14_render', 
		'pluginPage', 
		'ucpt_manage_pluginPage_section' 
	);
	
	add_settings_field( 
		'ucpt_manage_custom_categories_15', 
		__( 'Custom Data Category #15', 'ucpt_manage' ), 
		'ucpt_manage_custom_categories_15_render', 
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

function ucpt_manage_start_date_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='date' name='ucpt_manage_settings[ucpt_manage_start_date]' value='<?php echo $options['ucpt_manage_start_date']; ?>'>
	<?php

}

function ucpt_manage_measure_number_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='number' name='ucpt_manage_settings[ucpt_manage_measure_number]' max='15' value='<?php echo $options['ucpt_manage_measure_number']; ?>'>
	<?php

}

function ucpt_manage_custom_categories_1_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_custom_categories_1]' value='<?php echo $options['ucpt_manage_custom_categories_1']; ?>'>
	<?php

}

function ucpt_manage_custom_categories_2_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_custom_categories_2]' value='<?php echo $options['ucpt_manage_custom_categories_2']; ?>'>
	<?php

}

function ucpt_manage_custom_categories_3_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_custom_categories_3]' value='<?php echo $options['ucpt_manage_custom_categories_3']; ?>'>
	<?php

}

function ucpt_manage_custom_categories_4_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_custom_categories_4]' value='<?php echo $options['ucpt_manage_custom_categories_4']; ?>'>
	<?php

}

function ucpt_manage_custom_categories_5_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_custom_categories_5]' value='<?php echo $options['ucpt_manage_custom_categories_5']; ?>'>
	<?php

}

function ucpt_manage_custom_categories_6_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_custom_categories_6]' value='<?php echo $options['ucpt_manage_custom_categories_6']; ?>'>
	<?php

}

function ucpt_manage_custom_categories_7_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_custom_categories_7]' value='<?php echo $options['ucpt_manage_custom_categories_7']; ?>'>
	<?php

}

function ucpt_manage_custom_categories_8_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_custom_categories_8]' value='<?php echo $options['ucpt_manage_custom_categories_8']; ?>'>
	<?php

}

function ucpt_manage_custom_categories_9_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_custom_categories_9]' value='<?php echo $options['ucpt_manage_custom_categories_9']; ?>'>
	<?php

}

function ucpt_manage_custom_categories_10_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_custom_categories_10]' value='<?php echo $options['ucpt_manage_custom_categories_10']; ?>'>
	<?php

}

function ucpt_manage_custom_categories_11_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_custom_categories_11]' value='<?php echo $options['ucpt_manage_custom_categories_11']; ?>'>
	<?php

}

function ucpt_manage_custom_categories_12_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_custom_categories_12]' value='<?php echo $options['ucpt_manage_custom_categories_12']; ?>'>
	<?php

}

function ucpt_manage_custom_categories_13_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_custom_categories_13]' value='<?php echo $options['ucpt_manage_custom_categories_13']; ?>'>
	<?php

}

function ucpt_manage_custom_categories_14_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_custom_categories_14]' value='<?php echo $options['ucpt_manage_custom_categories_14']; ?>'>
	<?php

}

function ucpt_manage_custom_categories_15_render(  ) { 

	$options = get_option( 'ucpt_manage_settings' );
	?>
	<input type='text' name='ucpt_manage_settings[ucpt_manage_custom_categories_15]' value='<?php echo $options['ucpt_manage_custom_categories_15']; ?>'>
	<?php

}


function ucpt_manage_settings_section_callback(  ) { 

	echo __( 'Use these settings to customize your Universal Community Planning Tool plug-ins.', 'ucpt_manage' );

}


function ucpt_manage_options_page(  ) { 

	?>
	<form action='options.php' method='post'>

		<?php
		settings_fields( 'pluginPage' );
		do_settings_sections( 'pluginPage' );
		submit_button();
		?>

	</form>
	<?php

}

?>
