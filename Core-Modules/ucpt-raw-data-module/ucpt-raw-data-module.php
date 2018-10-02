<?php
/*
Plugin Name: UCPT Strategy Card
Plugin URI: https://equityengage.com
Description: This plug-in is a UCPT module supporting the addition of strategy cards to BuddyPress groups.
Version: 10.1
Requires at least: 4.9
Tested up to: 4.9.6
License: GPL v3
Author: UCPT
Author URI: https://equityengage.com
*/

// UCPT Active?

register_activation_hook( __FILE__, 'ucpt_modules_strategy' );
function ucpt_modules_strategy(){

    // Require parent plugin
    if ( ! is_plugin_active( 'ucpt-manager-module/ucpt-manager-module.php' ) && current_user_can( 'activate_plugins' ) ) {
        // Stop activation redirect and show error
        wp_die('Whoops! This plug-in requires the UCPT Manager Module to be installed and active. Please activate the UCPT Manager Module, and then reactivate this plug-in. If you have activated both plug-ins at the same time and are seeing this error, please try activating the UCPT Manager Module first, and then activate any selected modules. <br><a href="' . admin_url( 'plugins.php' ) . '">&laquo; Return to Plugins</a>');
    }
}

function custom_field_strategy_card($meta_key='') {

//get current group id and load meta_key value if passed. If not pass it blank
return groups_get_groupmeta( bp_get_group_id(), $meta_key) ;
}

function ucpt_strategy_page() {
	if ( class_exists( 'BP_Group_Extension' ) ) :
		class UCPT_Pages extends BP_Group_Extension {
			var $enable_create_step = true;
			var $enable_nav_item = true;
			var $enable_edit_item = true;
			function __construct() {
				$args = array(
					'slug' => 'strategy',
					'name' => 'Strategy',
					'nav_item_position' => 40,
					'screens' => array(
						'create' => array(
							'position' => 10,
						),
					)
				);
				parent::init( $args );
			}
			function admin_screen( $group_id = null ) {
            //Helper Text
			echo "<p>These settings are configured via the front-end of your planning tool.</p>";
			}
			function admin_screen_save( $group_id = null ) {
			}			
			function settings_screen( $group_id = null ) {
			$editor_settings = array( 'media_buttons' => false );
			?>
			<div style="background-color:#0c71c3; color: #fff; padding: 20px; margin-top: 10px; margin-bottom: 20px;">
				<b style="font-size: 150%;">Strategy Planning Worksheet</b>
				<p>An innovative feature, unique to the planning tool, is the ability to dynamically track strategy progress over time. This workspace is designed for multiple stakeholders to collaborate on one specific strategy.  Please explain the specific strategy you will be measuring in the space below. <b>Expert Tip:</b> If the strategy can not be measured please consider alternative actions that can be assessed.</p>

					<label for="ucpt_goal"><b style="font-size: 110%;">Goal</b></label>
						<input id="ucpt_goal" type="text" name="ucpt_goal" value="<?php echo custom_field_strategy_card('ucpt_goal'); ?>" />

					<label for="ucpt_desc"><b style="font-size: 110%;">Strategy Description</b></label>
						<?php wp_editor( custom_field_strategy_card('ucpt_desc'), 'ucpt_desc', $editor_settings ); ?> 

					<label for="ucpt_level"><b style="font-size: 110%;">Level of Change</b></label>
						<select name="ucpt_level">
							<option value="<?php echo custom_field_strategy_card('ucpt_level'); ?>"><?php echo custom_field_strategy_card('ucpt_level'); ?></option>
							<option value="Policy">Policy</option>
							<option value="Systems">Systems</option>
							<option value="Programs">Program</option>
						</select>

					<?php
					$ucpt_strategy_options = get_option( 'ucpt_manage_settings' );
					?>
					
					<label for="ucpt_focus">Primary Focus Area</label>
						<select name="ucpt_focus" style="max-width:90%;">
							<option value="<?php echo custom_field_strategy_card('ucpt_focus'); ?>"><?php echo custom_field_strategy_card('ucpt_focus'); ?></option>
							<?php
							if ($ucpt_strategy_options['ucpt_manage_priority_1'] != "") {
							?>
							<option value="<?php echo $ucpt_strategy_options['ucpt_manage_priority_1']; ?>"><?php echo $ucpt_strategy_options['ucpt_manage_priority_1']; ?></option>
							<option value="<?php echo $ucpt_strategy_options['ucpt_manage_priority_2']; ?>"><?php echo $ucpt_strategy_options['ucpt_manage_priority_2']; ?></option>
							<option value="<?php echo $ucpt_strategy_options['ucpt_manage_priority_3']; ?>"><?php echo $ucpt_strategy_options['ucpt_manage_priority_3']; ?></option>
							<option value="<?php echo $ucpt_strategy_options['ucpt_manage_priority_4']; ?>"><?php echo $ucpt_strategy_options['ucpt_manage_priority_4']; ?></option>
							<option value="<?php echo $ucpt_strategy_options['ucpt_manage_priority_5']; ?>"><?php echo $ucpt_strategy_options['ucpt_manage_priority_5']; ?></option>
							<option value="<?php echo $ucpt_strategy_options['ucpt_manage_priority_6']; ?>"><?php echo $ucpt_strategy_options['ucpt_manage_priority_6']; ?></option>
							<option value="<?php echo $ucpt_strategy_options['ucpt_manage_priority_7']; ?>"><?php echo $ucpt_strategy_options['ucpt_manage_priority_7']; ?></option>
							<option value="<?php echo $ucpt_strategy_options['ucpt_manage_priority_8']; ?>"><?php echo $ucpt_strategy_options['ucpt_manage_priority_8']; ?></option>
							<option value="<?php echo $ucpt_strategy_options['ucpt_manage_priority_9']; ?>"><?php echo $ucpt_strategy_options['ucpt_manage_priority_9']; ?></option>
							<option value="<?php echo $ucpt_strategy_options['ucpt_manage_priority_10']; ?>"><?php echo $ucpt_strategy_options['ucpt_manage_priority_10']; ?></option>
							<?php
							}
							else {
							?>
							<option value="Behavioral Health: including Substance Abuse and Mental Health">Behavioral Health: including Substance Abuse and Mental Health</option>
							<option value="Maternal, Child, and Adolescent Health">Maternal, Child, and Adolescent Health</option>
							<option value="Chronic Diseases and their common risk factors: lack of physical activity, poor nutrition, and tobacco use">Chronic Diseases and their common risk factors: lack of physical activity, poor nutrition, and tobacco use</option>
							<option value="Access to Care and Linkages to Community Resources">Access to Care and Linkages to Community Resources</option>
							<?php
							}
							?>
						</select>
					
					<?php
							if ($ucpt_strategy_options['ucpt_manage_custom_categories_1'] != "") {	
					?>
					<label style="color: #fff;" for="ucpt_category">Data Category Tag</label>
						<select name="ucpt_category" style="max-width:90%;">
							<option value="<?php echo custom_field_strategy_card('ucpt_category'); ?>"><?php echo custom_field_strategy_card('ucpt_category'); ?></option>
							<?php
							$category = 1;
							$max_categories = 15;
							while ($category <= $max_categories) {
								if ($ucpt_strategy_options['ucpt_manage_custom_categories_' . $category] != "") {
							?>
							<option value="<?php echo $ucpt_strategy_options['ucpt_manage_custom_categories_' . $category]; ?>"><?php echo $ucpt_strategy_options['ucpt_manage_custom_categories_' . $category]; ?></option>
							<?php
								}
							$category++;
							}
							?>
							<option value="">Reset the Data Category Tag to blank.</option>
						</select>
					<?php
						}
					?>

					<label for="ucpt_date_start"><b style="font-size: 110%;">Estimated Implementation Date</b></label>
						<input id="ucpt_date_start" type="date" name="ucpt_date_start" value="<?php echo custom_field_strategy_card('ucpt_date_start'); ?>" />

					<label for="ucpt_date_end"><b style="font-size: 110%;">Estimated Completion Date</b></label>
						<input id="ucpt_date_end" type="date" name="ucpt_date_end" value="<?php echo custom_field_strategy_card('ucpt_date_end'); ?>" />

					<label for="ucpt_cis_ease"><b style="font-size: 110%;">Estimated Ease of Implementation</b></label>
						<select name="ucpt_cis_ease">
							<option value="<?php echo custom_field_strategy_card('ucpt_cis_ease'); ?>"><?php echo custom_field_strategy_card('ucpt_cis_ease'); ?></option>
							<option value="Very Easy">Very Easy</option>
							<option value="Easy">Easy</option>
							<option value="Moderate">Moderate</option>
							<option value="Hard">Hard</option>
							<option value="Very Hard">Very Hard</option>
						</select>

					<label for="ucpt_cis_cost"><b style="font-size: 110%;">Estimated Cost of Implementation</b></label>
						<select name="ucpt_cis_cost">
							<option value="<?php echo custom_field_strategy_card('ucpt_cis_cost'); ?>"><?php echo custom_field_strategy_card('ucpt_cis_cost'); ?></option>
							<option value="Very Low">Very Low</option>
							<option value="Low">Low</option>
							<option value="Moderate">Moderate</option>
							<option value="High">High</option>
							<option value="Very High">Very High</option>
						</select>

					<label for="ucpt_cis_benefit"><b style="font-size: 110%;">Estimated Potential Community Benefit</b></label>
						<select name="ucpt_cis_benefit">
							<option value="<?php echo custom_field_strategy_card('ucpt_cis_benefit'); ?>"><?php echo custom_field_strategy_card('ucpt_cis_benefit'); ?></option>
							<option value="Very High">Very High</option>
							<option value="High">High</option>
							<option value="Moderate">Moderate</option>
							<option value="Low">Low</option>
							<option value="Very Low">Very Low</option>
						</select>

					<label for="ucpt_research"><b style="font-size: 110%;">Research</b></label>
						<?php wp_editor( custom_field_strategy_card('ucpt_research'), 'ucpt_research', $editor_settings ); ?> 
				<br />
			</div>
			<?php
			}    
			function settings_screen_save( $group_id = NULL ) {
				$plain_fields = array(
					'ucpt_goal',
					'ucpt_desc',
					'ucpt_level',
					'ucpt_focus',
					'ucpt_category',
					'ucpt_date_start',
					'ucpt_date_end',
					'ucpt_cis_ease',
					'ucpt_cis_cost',
					'ucpt_cis_benefit',
					'ucpt_research'
				);
				foreach( $plain_fields as $field ) {
					$key = $field;
					if ( isset( $_POST[$key] ) ) {
						$value = strip_tags($_POST[$key]);
						groups_update_groupmeta( $group_id, $field, $value );
					}

				}
				$editor_record = bp_core_get_user_displayname( bp_loggedin_user_id() );
				$activity_update = "Strategy card settings were updated by " . $editor_record . ".";
				groups_post_update(array('content' => $activity_update, 'group_id' => $group_id));
			}  
			function display( $group_id = null ) {
				/* Use this function to display the actual content of your group extension when the nav item is selected */
				global $bp;
				$group_cover_image_url = bp_attachments_get_attachment('url', array(
					  'object_dir' => 'groups',
					  'item_id' => bp_get_group_id(),
					));
					$ucpt_cover = $group_cover_image_url;
					$ucpt_group_name = bp_get_group_name();
					$ucpt_perma = bp_get_group_permalink( $bp->groups->current_group );
					if (groups_is_user_admin( get_current_user_id(), bp_get_group_id())) {
					?>
					<p><form method="get" action="<?php echo $ucpt_perma; ?>admin/strategy"><button type="submit" align="right">Edit Strategy Card</button></form></p>
					<?php
					}
					echo "<div style='background: linear-gradient(rgba(10, 118, 211, 0.85), rgba(8, 94, 168, 0.85)), url(" . $ucpt_cover . "); background-size:100%; width=100%; min-height: 150px; padding: 30px;'><div style='font-size: 32px; color: #fff;'>Health Improvement Strategy</div><br /><div style='font-size: 18px; color: #efefef;'>" . $ucpt_group_name . "</div><br/><div style='font-size: 10px; color: #efefef;'>" . $ucpt_perma ."</div></div>";
					echo "<div style='background-color: #f1f1f1; margin: 15px 30px 15px 30px; padding: 5px 20px 5px 20px;'>";
					echo "<p><b>Goal:</b> " . custom_field_strategy_card('ucpt_goal') . "</p>";
					echo "</div>";
					echo "<div style='background-color: #f1f1f1; margin: 15px 30px 15px 30px; padding: 5px 20px 5px 20px;'>";
					echo "<p><b>Strategy Description:</b> " . custom_field_strategy_card('ucpt_desc') . "</p>";
					echo "</div>";
					echo "<div style='background-color: #f1f1f1; margin: 15px 30px 15px 30px; padding: 5px 20px 5px 20px;'>";
					echo "<p><b>Level of Change:</b> " . custom_field_strategy_card('ucpt_level') . "</p>";
					echo "</div>";
					echo "<div style='background-color: #f1f1f1; margin: 15px 30px 15px 30px; padding: 5px 20px 5px 20px;'>";
					echo "<p><b>Primary Focus Area:</b> " . custom_field_strategy_card('ucpt_focus') . "</p>";
					echo "</div>";
					echo "<div style='background-color: #f1f1f1; margin: 15px 30px 15px 30px; padding: 5px 20px 5px 20px;'>";
					echo "<p><b>Data Category Tag:</b> " . custom_field_strategy_card('ucpt_category') . "</p>";
					echo "</div>";
					echo "<div style='background-color: #f1f1f1; margin: 15px 30px 15px 30px; padding: 5px 20px 5px 20px;'>";
					echo "<p><b>Estimated Implementation Date:</b> " . custom_field_strategy_card('ucpt_date_start') . "</p>";
					echo "</div>";
					echo "<div style='background-color: #f1f1f1; margin: 15px 30px 15px 30px; padding: 5px 20px 5px 20px;'>";
					echo "<p><b>Estimated Completion Date:</b> " . custom_field_strategy_card('ucpt_date_end') . "</p>";
					echo "</div>";
					echo "<div style='background-color: #f1f1f1; margin: 15px 30px 15px 30px; padding: 5px 20px 5px 20px;'>";
					echo "<p><b>Estimated Ease of Implementation:</b> " . custom_field_strategy_card('ucpt_cis_ease') . "</p>";
					echo "</div>";
					echo "<div style='background-color: #f1f1f1; margin: 15px 30px 15px 30px; padding: 5px 20px 5px 20px;'>";
					echo "<p><b>Estimated Cost of Implementation:</b> " . custom_field_strategy_card('ucpt_cis_cost') . "</p>";
					echo "</div>";
					echo "<div style='background-color: #f1f1f1; margin: 15px 30px 15px 30px; padding: 5px 20px 5px 20px;'>";
					echo "<p><b>Potential Community Benefit:</b> " . custom_field_strategy_card('ucpt_cis_benefit') . "</p>";
					echo "</div>";
					echo "<div style='background-color: #f1f1f1; margin: 15px 30px 15px 30px; padding: 5px 20px 5px 20px;'>";
					echo "<p><b>Research:</b> " . custom_field_strategy_card('ucpt_research') . "</p>";
					echo "</div>";
					echo "<div style='background-color: #f1f1f1; margin: 15px 30px 15px 30px; padding: 5px 20px 5px 20px;'>";
					echo "<p><b>Planning Tool Info:</b></p>";
					?>
					<p>
						<a href="https://equityengage.com">Open source health equity platform</a> powered by the <a href="https://equityengage.com/universal-community-planning-tool/">Universal Community Planning Tool</a> (UCPT), <a href="https://buddypress.org/">BuddyPress</a>, and <a href="https://wordpress.org/">WordPress</a>. 
						<br />
						Built with ❤️ in <a href="https://garretthealth.org">Garrett County, Maryland</a>. 
						<br />
						Expanded development and open source release of this plug-in was sponsored by the <a href="https://phnci.org">Public Health National Center for Innovations</a> (PHNCI), a division of the <a href="http://www.phaboard.org/">Public Health Accreditation Board (PHAB)</a>, and the <a href="https://www.rwjf.org/">Robert Wood Johnson Foundation (RWJF)</a>.
						<br />
						Related: assessments, informatics, population health, hyper local data, measurement, open data, open source, community engagement, health equity, community solutions, data dashboard
					</p>
					<?php
					echo "</div>";
			} 
		} // end of class
		bp_register_group_extension( 'UCPT_Pages' );
		 
		endif;
	}
			
add_action( 'bp_include', 'ucpt_strategy_page' );

?>
