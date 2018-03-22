<?php
/*
Plugin Name: UCPT Strategy Card
Plugin URI: https://equityengage.com
Description: This plug-in is a UCPT module supporting the addition of strategy cards to BuddyPress groups.
Version: 1.1
Requires at least: 3.3
Tested up to: 4.8.1
License: GPL v3
Author: UCPT
Author URI: https://equityengage.com
*/
//////////////////// BuddyPress Group Meta Management: https://codex.buddypress.org/plugindev/how-to-edit-group-meta-tutorial/
function bp_group_meta_init() {
function custom_field($meta_key='') {
//get current group id and load meta_key value if passed. If not pass it blank
return groups_get_groupmeta( bp_get_group_id(), $meta_key) ;
}
// This function is our custom field's form that is called in create a group and when editing group details
function group_header_fields_markup() {
global $bp, $wpdb;
//////////////////// End BuddyPress Group Meta Management
//////////////////// Front-End Output

//////////////////// Note: TinyMCE Cloud is Recommended for Rich Text Editing: https://go.tinymce.com/cloud/
?>
<div style="background-color:#0c71c3; color: #fff; padding: 20px; margin-top: 10px; margin-bottom: 20px;">
	<b style="font-size: 150%;">Strategy Planning Worksheet</b>
	<p>An innovative feature, unique to GarrettPlan.org, is the ability to dynamically track strategy progress over time. If your workspace is designed to collaborate on a specific strategy, please fill out the following fields with a blue background.  If your group is not collaborating on a specific strategy, leave these fields blank. In order to ensure that strategies can be accurately measured, please only measure one strategy per group.</p>

		<label style="color: #fff;" for="ucpt_goal">Goal</label>
			<input id="ucpt_goal" type="text" name="ucpt_goal" value="<?php echo custom_field('ucpt_goal'); ?>" />

		<label style="color: #fff;" for="ucpt_desc">Strategy Description</label>
			<textarea id="ucpt_desc" name="ucpt_desc"><?php echo custom_field('ucpt_desc'); ?></textarea>

		<label style="color: #fff;" for="ucpt_level">Level of Change</label>
			<select name="ucpt_level">
				<option value="<?php echo custom_field('ucpt_level'); ?>"><?php echo custom_field('ucpt_level'); ?></option>
				<option value="Policy">Policy</option>
				<option value="Systems">Systems</option>
				<option value="Programs">Program</option>
			</select>
		<?php
		$options = get_option( 'ucpt_manage_settings' );
		?>
		<label style="color: #fff;" for="ucpt_focus">Primary Focus Area</label>
			<select name="ucpt_focus" style="max-width:90%;">
				<option value="<?php echo custom_field('ucpt_focus'); ?>"><?php echo custom_field('ucpt_focus'); ?></option>
				<?php
				if ($options['ucpt_manage_priority_1'] != "") {
				?>
				<option value="<?php echo $options['ucpt_manage_priority_1']; ?>"><?php echo $options['ucpt_manage_priority_1']; ?></option>
				<?php
				}
				if ($options['ucpt_manage_priority_2'] != "") {
				?>
				<option value="<?php echo $options['ucpt_manage_priority_2']; ?>"><?php echo $options['ucpt_manage_priority_2']; ?></option>
				<?php
				}
				if ($options['ucpt_manage_priority_3'] != "") {
				?>
				<option value="<?php echo $options['ucpt_manage_priority_3']; ?>"><?php echo $options['ucpt_manage_priority_3']; ?></option>
				<?php
				}
				if ($options['ucpt_manage_priority_4'] != "") {
				?>
				<option value="<?php echo $options['ucpt_manage_priority_4']; ?>"><?php echo $options['ucpt_manage_priority_4']; ?></option>
				<?php
				}
				if ($options['ucpt_manage_priority_5'] != "") {
				?>
				<option value="<?php echo $options['ucpt_manage_priority_5']; ?>"><?php echo $options['ucpt_manage_priority_5']; ?></option>
				<?php
				}
				if ($options['ucpt_manage_priority_1'] == "") {
				?>
				<option value="Behavioral Health: including Substance Abuse and Mental Health">Behavioral Health: including Substance Abuse and Mental Health</option>
				<option value="Maternal, Child, and Adolescent Health">Maternal, Child, and Adolescent Health</option>
				<option value="Chronic Diseases and their common risk factors: lack of physical activity, poor nutrition, and tobacco use">Chronic Diseases and their common risk factors: lack of physical activity, poor nutrition, and tobacco use</option>
				<option value="Access to Care and Linkages to Community Resources">Access to Care and Linkages to Community Resources</option>
				<?php
				}
				?>
			</select>

		<label style="color: #fff;" for="ucpt_date_start">Estimated Implementation Date</label>
			<input id="ucpt_date_start" type="date" name="ucpt_date_start" value="<?php echo custom_field('ucpt_date_start'); ?>" />

		<label style="color: #fff;" for="ucpt_date_end">Estimated Completion Date</label>
			<input id="ucpt_date_end" type="date" name="ucpt_date_end" value="<?php echo custom_field('ucpt_date_end'); ?>" />

		<label style="color: #fff;" for="ucpt_cis_ease">Estimated Ease of Implementation</label>
			<select name="ucpt_cis_ease">
				<option value="<?php echo custom_field(ucpt_cis_ease); ?>"><?php echo custom_field(ucpt_cis_ease); ?></option>
				<option value="Very Easy">Very Easy</option>
				<option value="Easy">Easy</option>
				<option value="Moderate">Moderate</option>
				<option value="Hard">Hard</option>
				<option value="Very Hard">Very Hard</option>
			</select>

		<label style="color: #fff;" for="ucpt_cis_cost">Estimated Cost of Implementation</label>
			<select name="ucpt_cis_cost">
				<option value="<?php echo custom_field(ucpt_cis_cost); ?>"><?php echo custom_field(ucpt_cis_cost); ?></option>
				<option value="Very Low">Very Low</option>
				<option value="Low">Low</option>
				<option value="Moderate">Moderate</option>
				<option value="High">High</option>
				<option value="Very High">Very High</option>
			</select>

		<label style="color: #fff;" for="ucpt_cis_benefit">Estimated Potential Community Benefit</label>
			<select name="ucpt_cis_benefit">
				<option value="<?php echo custom_field(ucpt_cis_benefit); ?>"><?php echo custom_field(ucpt_cis_benefit); ?></option>
				<option value="Very High">Very High</option>
				<option value="High">High</option>
				<option value="Moderate">Moderate</option>
				<option value="Low">Low</option>
				<option value="Very Low">Very Low</option>
			</select>

		<label style="color: #fff;" for="ucpt_research">Research</label>
			<textarea id="ucpt_research" name="ucpt_research"><?php echo custom_field('ucpt_research'); ?></textarea>
	<br />
</div>
<?php
//////////////////// End Front-End Output
//////////////////// Insert Group Meta
// This saves the custom group meta – props to Boone for the function
// Where $plain_fields = array.. you may add additional fields, eg
//  $plain_fields = array(
//      'field-one',
//      'field-two'
//  );
}
function group_header_fields_save( $group_id ) {
	global $bp, $wpdb;
	$plain_fields = array(
		'ucpt_goal',
		'ucpt_desc',
		'ucpt_level',
		'ucpt_focus',
		'ucpt_date_start',
		'ucpt_date_end',
		'ucpt_cis_ease',
		'ucpt_cis_cost',
		'ucpt_cis_benefit',
		'ucpt_measure_1',
		'ucpt_measure_2',
		'ucpt_measure_3',
		'ucpt_research'
	);
	foreach( $plain_fields as $field ) {
		$key = $field;
		if ( isset( $_POST[$key] ) ) {
			$value = $_POST[$key];
			groups_update_groupmeta( $group_id, $field, $value );
		}
	}
}
add_filter( 'groups_custom_group_fields_editable', 'group_header_fields_markup' );
add_action( 'groups_group_details_edited', 'group_header_fields_save' );
add_action( 'groups_created_group',  'group_header_fields_save' );
//////////////////// Insert Group Meta
//////////////////// Begin Header Output
// Show the custom field in the group header
function show_field_in_header( ) {
	if (custom_field('ucpt_goal') != "") {
		echo "<p><b>Goal: " . custom_field('ucpt_goal') . "</b></p>";
	}
	if (custom_field('ucpt_focus') != "") {
		echo "<p>Primary Focus Area: " . custom_field('ucpt_focus') . "</p>";
	}
	if (custom_field('ucpt_measure_1') != "") {
		echo "<p>Primary Measure: " . custom_field('ucpt_measure_1') . "</p>";
	}
	if (custom_field('ucpt_measure_2') != "") {
		echo "<p>Secondary Measure: " . custom_field('ucpt_measure_2') . "</p>";
	}
	if (custom_field('ucpt_measure_3') != "") {
		echo "<p>Tertiary Measure: " . custom_field('ucpt_measure_3') . "</p>";
	}	
}
add_action('bp_group_header_meta' , 'show_field_in_header') ;
}
add_action( 'bp_include', 'bp_group_meta_init' );
function add_page_to_group() {
	if ( class_exists( 'BP_Group_Extension' ) ) :
		class UCPT_Pages extends BP_Group_Extension {
			function __construct() {
				$args = array(
					'slug' => 'strategy',
					'name' => 'Strategy',
					'create_step_position' => 21
				);
				parent::init( $args );
			}
			function settings_screen( $group_id = null ) {
				// don't remove this function
				echo "Additional settings are planned for the future. Stay tuned!";
			}    
			function display( $group_id = null ) {
				/* Use this function to display the actual content of your group extension when the nav item is selected */
				global $bp;
				if (custom_field('ucpt_goal') == "") {
					echo "This group is not currently working on a strategy, or has not yet filled out their goal.";
				}
				if (custom_field('ucpt_goal') != "") {
					echo "<p><b>Goal: " . custom_field('ucpt_goal') . "</b></p>";
					echo "<p>Strategy Description: " . custom_field('ucpt_desc') . "</p>";
					echo "<p>Level of Change: " . custom_field('ucpt_level') . "</p>";
					echo "<p>Primary Focus Area: " . custom_field('ucpt_focus') . "</p>";
					echo "<p>Estimated Implementation Date: " . custom_field('ucpt_date_start') . "</p>";
					echo "<p>Estimated Completion Date: " . custom_field('ucpt_date_end') . "</p>";
					echo "<p>Estimated Ease of Implementation: " . custom_field('ucpt_cis_ease') . "</p>";
					echo "<p>Estimated Cost of Implementation: " . custom_field('ucpt_cis_cost') . "</p>";
					echo "<p>Potential Community Benefit: " . custom_field('ucpt_cis_benefit') . "</p>";
					echo "<p>Research: " . custom_field('ucpt_research') . "</p>";
				}
			}
		} // end of class
		bp_register_group_extension( 'UCPT_Pages' );
		 
		endif;
}
	
add_filter('bp_groups_default_extension', 'add_page_to_group' );
	
?>
