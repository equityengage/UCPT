<?php
/*
Plugin Name: UCPT Raw Data Module for 2020 Goals
Plugin URI: https://equityengage.com
Description: This plug-in is a UCPT module supporting the addition of raw data reporting to BuddyPress groups.
Version: 8.01
Requires at least: 3.3
Tested up to: 4.9.6
License: GPL v3
Author: UCPT
Author URI: https://equityengage.com
*/

// https://wordpress.stackexchange.com/questions/127818/how-to-make-a-plugin-require-another-plugin?utm_medium=organic&utm_source=google_rich_qa&utm_campaign=google_rich_qa

register_activation_hook( __FILE__, 'ucpt_modules' );
function ucpt_modules(){

    // Require parent plugin
    if ( ! is_plugin_active( 'ucpt-manager-module/upct-manager-module.php' ) && current_user_can( 'activate_plugins' ) ) {
        // Stop activation redirect and show error
        wp_die('Whoops! This plug-in requires the UCPT Manager Module to be installed and active. Please activate the UCPT Manager Module, and then reactivate this plug-in. If you have activated both plug-ins at the same time and are seeing this error, please try activating the UCPT Manager Module first, and then activate any selected modules. <br><a href="' . admin_url( 'plugins.php' ) . '">&laquo; Return to Plugins</a>');
    }
}

//////////////////// BuddyPress Group Meta Management: https://codex.buddypress.org/plugindev/how-to-edit-group-meta-tutorial/
function bp_group_meta_init_data() {
function custom_field_data($meta_key='') {

//get current group id and load meta_key value if passed. If not pass it blank
return groups_get_groupmeta( bp_get_group_id(), $meta_key) ;
}

// This function is our custom field's form that is called in create a group and when editing group details
function group_header_fields_markup_data() {
global $bp, $wpdb;
//////////////////// End BuddyPress Group Meta Management

//////////////////// Front-End Output
$editor_settings = array( 'media_buttons' => false );
?>
		<style>
				.sticky {
					position: absolute;
					width: 250px;
					background-color: #f1f1f1;
					z-index: 99999;
				}
				table {
					table-layout: fixed; 
				}
				th {
					width: 150px;
				}
				</style>
	<div style="background-color:#009150; padding: 20px; margin-top: 10px; margin-bottom: 20px;">
	<span style="color: #fff !important;"><b style="font-size: 150%;">Data Planning Worksheet</b>
	<p>The purpose of this planning tool is to collect community data for comparison, tracking, and overall community health improvement. Data plays a critical role in ensuring that our strategies are effective, and can be correlated to specific actions within the community. Data must be numerical to allow for cross comparison of variables.</p></span>
	<br />
	<div style="overflow-x:auto; background-color:#fff; padding:10px;">
	<table border="1" bordercolor="#ededed" width="100%" cellpadding="5" class="table table-striped">
			<tr>
				<th class="sticky">Measurements</th>
				<th style="width: 250px;"></th>
				<th>Target Goal</th>
				<th>Status</th>
				<th>Desired Trend</th>
				<th>Contributor</th>
				<?php
				$ucpt_data_time_reporting = get_option( 'ucpt_manage_settings' );
				$ucpt_start_date_raw = $ucpt_data_time_reporting['ucpt_manage_start_date'];

				$ucpt_start_date = date('Y', strtotime($ucpt_start_date_raw));
				?>
					<th>January <?php echo $ucpt_start_date; ?></th>
					<th>February <?php echo $ucpt_start_date; ?></th>
					<th>March <?php echo $ucpt_start_date; ?></th>
					<th>April <?php echo $ucpt_start_date; ?></th>
					<th>May <?php echo $ucpt_start_date; ?></th>
					<th>June <?php echo $ucpt_start_date; ?></th>
					<th>July <?php echo $ucpt_start_date; ?></th>
					<th>August <?php echo $ucpt_start_date; ?></th>
					<th>September <?php echo $ucpt_start_date; ?></th>
					<th>October <?php echo $ucpt_start_date; ?></th>
					<th>November <?php echo $ucpt_start_date; ?></th>
					<th>December <?php echo $ucpt_start_date; ?></th>
					<th>January <?php echo $ucpt_start_date + 1; ?></th>
					<th>February <?php echo $ucpt_start_date + 1; ?></th>
					<th>March <?php echo $ucpt_start_date + 1; ?></th>
					<th>April <?php echo $ucpt_start_date + 1; ?></th>
					<th>May <?php echo $ucpt_start_date + 1; ?></th>
					<th>June <?php echo $ucpt_start_date + 1; ?></th>
					<th>July <?php echo $ucpt_start_date + 1; ?></th>
					<th>August <?php echo $ucpt_start_date + 1; ?></th>
					<th>September <?php echo $ucpt_start_date + 1; ?></th>
					<th>October <?php echo $ucpt_start_date + 1; ?></th>
					<th>November <?php echo $ucpt_start_date + 1; ?></th>
					<th>December <?php echo $ucpt_start_date + 1; ?></th>
					<th>January <?php echo $ucpt_start_date + 2; ?></th>
					<th>February <?php echo $ucpt_start_date + 2; ?></th>
					<th>March <?php echo $ucpt_start_date + 2; ?></th>
					<th>April <?php echo $ucpt_start_date + 2; ?></th>
					<th>May <?php echo $ucpt_start_date + 2; ?></th>
					<th>June <?php echo $ucpt_start_date + 2; ?></th>
					<th>July <?php echo $ucpt_start_date + 2; ?></th>
					<th>August <?php echo $ucpt_start_date + 2; ?></th>
					<th>September <?php echo $ucpt_start_date + 2; ?></th>
					<th>October <?php echo $ucpt_start_date + 2; ?></th>
					<th>November <?php echo $ucpt_start_date + 2; ?></th>
					<th>December <?php echo $ucpt_start_date + 2; ?></th>
					<th>January <?php echo $ucpt_start_date + 3; ?></th>
					<th>February <?php echo $ucpt_start_date + 3; ?></th>
					<th>March <?php echo $ucpt_start_date + 3; ?></th>
					<th>April <?php echo $ucpt_start_date + 3; ?></th>
					<th>May <?php echo $ucpt_start_date + 3; ?></th>
					<th>June <?php echo $ucpt_start_date + 3; ?></th>
					<th>July <?php echo $ucpt_start_date + 3; ?></th>
					<th>August <?php echo $ucpt_start_date + 3; ?></th>
					<th>September <?php echo $ucpt_start_date + 3; ?></th>
					<th>October <?php echo $ucpt_start_date + 3; ?></th>
					<th>November <?php echo $ucpt_start_date + 3; ?></th>
					<th>December <?php echo $ucpt_start_date + 3; ?></th>
			</tr>
				<?php
					$ucpt_measures_options = get_option( 'ucpt_manage_settings' );
					$max_measures = $ucpt_measures_options['ucpt_manage_measure_number'];
					$measure_count = 1;
					while ($measure_count <= $max_measures) {
				?>
			<tr>
				<td class="sticky">
					<input id="ucpt_measure_<?php echo $measure_count; ?>" type="text" name="ucpt_measure_<?php echo $measure_count; ?>" placeholder="Measure <?php echo $measure_count; ?>" value="<?php echo custom_field_data(ucpt_measure_ . $measure_count ); ?>" style="width: 250px"/>
				</td>
				<td></td>
				<td>
					<input id="ucpt_measure_<?php echo $measure_count; ?>_goal" type="number" name="ucpt_measure_<?php echo $measure_count; ?>_goal" placeholder="Target Goal" value="<?php echo custom_field_data(ucpt_measure_ . $measure_count ._goal); ?>" style="width: 250px"/>
				</td>
				<td>
				<select name="ucpt_measure_<?php echo $measure_count; ?>_status">
					<option value="<?php echo custom_field(ucpt_measure_ . $measure_count . _status); ?>"><?php echo custom_field(ucpt_measure_ . $measure_count . _status); ?></option>
					<option value="Active">Active</option>
					<option value="Archived">Archived</option>
				</select>
				</td>
				<td>
				<select name="ucpt_measure_<?php echo $measure_count; ?>_trend">
					<option value="<?php echo custom_field(ucpt_measure_ . $measure_count . _trend); ?>"><?php echo custom_field(ucpt_measure_ . $measure_count . _trend); ?></option>
					<option value="Increase">Increase</option>
					<option value="Decrease">Decrease</option>
				</select>
				</td>
				<td>
					<input id="ucpt_measure_<?php echo $measure_count; ?>_contributor" type="text" name="ucpt_measure_<?php echo $measure_count; ?>_contributor" placeholder="Person, agency, etc..." value="<?php echo custom_field_data(ucpt_measure_ . $measure_count ._contributor); ?>" />
				</td>				
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y1_m1" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y1_m1" placeholder="Baseline" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y1_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y1_m2" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y1_m2" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y1_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y1_m3" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y1_m3" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y1_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y1_m4" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y1_m4" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y1_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y1_m5" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y1_m5" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y1_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y1_m6" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y1_m6" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y1_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y1_m7" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y1_m7" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y1_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y1_m8" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y1_m8" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y1_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y1_m9" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y1_m9" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y1_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y1_m10" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y1_m10" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y1_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y1_m11" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y1_m11" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y1_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y1_m12" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y1_m12" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y1_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y2_m1" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y2_m1" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y2_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y2_m2" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y2_m2" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y2_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y2_m3" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y2_m3" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y2_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y2_m4" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y2_m4" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y2_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y2_m5" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y2_m5" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y2_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y2_m6" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y2_m6" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y2_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y2_m7" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y2_m7" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y2_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y2_m8" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y2_m8" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y2_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y2_m9" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y2_m9" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y2_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y2_m10" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y2_m10" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y2_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y2_m11" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y2_m11" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y2_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y2_m12" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y2_m12" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y2_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y3_m1" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y3_m1" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y3_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y3_m2" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y3_m2" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y3_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y3_m3" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y3_m3" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y3_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y3_m4" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y3_m4" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y3_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y3_m5" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y3_m5" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y3_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y3_m6" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y3_m6" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y3_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y3_m7" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y3_m7" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y3_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y3_m8" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y3_m8" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y3_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y3_m9" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y3_m9" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y3_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y3_m10" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y3_m10" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y3_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y3_m11" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y3_m11" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y3_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y3_m12" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y3_m12" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y3_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y4_m1" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y4_m1" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y4_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y4_m2" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y4_m2" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y4_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y4_m3" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y4_m3" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y4_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y4_m4" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y4_m4" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y4_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y4_m5" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y4_m5" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y4_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y4_m6" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y4_m6" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y4_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y4_m7" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y4_m7" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y4_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y4_m8" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y4_m8" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y4_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y4_m9" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y4_m9" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y4_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y4_m10" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y4_m10" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y4_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y4_m11" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y4_m11" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y4_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_<?php echo $measure_count; ?>_y4_m12" type="number" name="ucpt_m_<?php echo $measure_count; ?>_y4_m12" value="<?php echo custom_field_data(ucpt_m_ . $measure_count . _y4_m12); ?>" />
				</td>
			</tr>
			<?php 
				$measure_count++;
				}
			?>
		</table>
		<p>
	<h3>Data Narrative</h3>
	</p>
	<p>
		<?php wp_editor( custom_field_data('ucpt_data_narrative'), 'ucpt_data_narrative', $editor_settings ); ?> 
	</p>
	<?php 
	$editor_record = bp_core_get_user_displayname( bp_loggedin_user_id() );
	?>
	<p>
	<h3>Last Modification</h3>
	</p>
	<p>
		<input id="ucpt_data_edit" type="text" name="ucpt_data_edit" readonly="readonly" value="<?php echo $editor_record; ?> edited this group on <?php echo date("F d, Y"); ?>." />
		<input id="ucpt_data_edit_log" type="hidden" name="ucpt_data_edit_log" readonly="readonly" value="<?php echo custom_field_data(ucpt_data_edit_log); ?>" />
	</p>
	</div>
	<br />
</div>
<?php
//////////////////// End Front-End Output

//////////////////// Insert Group Meta
// This saves the custom group meta â€“ props to Boone for the function
// Where $plain_fields = array.. you may add additional fields, eg
//  $plain_fields = array(
//      'field-one',
//      'field-two'
//  );
}
function group_header_fields_save_data( $group_id ) {
	global $bp, $wpdb;
	
	$ucpt_measures_options = get_option( 'ucpt_manage_settings' );
	$max_measures = $ucpt_measures_options['ucpt_manage_measure_number'];
	$measure_count = 1;
	while ($measure_count <= $max_measures) {
		
		$plain_fields = array(
			'ucpt_measure_' . $measure_count . '',
			'ucpt_measure_' . $measure_count . '_goal',
			'ucpt_measure_' . $measure_count . '_status',
			'ucpt_measure_' . $measure_count . '_trend',
			'ucpt_measure_' . $measure_count . '_contributor',
			'ucpt_m_' . $measure_count . '_y1_m1',
			'ucpt_m_' . $measure_count . '_y1_m2',
			'ucpt_m_' . $measure_count . '_y1_m3',
			'ucpt_m_' . $measure_count . '_y1_m4',
			'ucpt_m_' . $measure_count . '_y1_m5',
			'ucpt_m_' . $measure_count . '_y1_m6',
			'ucpt_m_' . $measure_count . '_y1_m7',
			'ucpt_m_' . $measure_count . '_y1_m8',
			'ucpt_m_' . $measure_count . '_y1_m9',
			'ucpt_m_' . $measure_count . '_y1_m10',
			'ucpt_m_' . $measure_count . '_y1_m11',
			'ucpt_m_' . $measure_count . '_y1_m12',
			'ucpt_m_' . $measure_count . '_y2_m1',
			'ucpt_m_' . $measure_count . '_y2_m2',
			'ucpt_m_' . $measure_count . '_y2_m3',
			'ucpt_m_' . $measure_count . '_y2_m4',
			'ucpt_m_' . $measure_count . '_y2_m5',
			'ucpt_m_' . $measure_count . '_y2_m6',
			'ucpt_m_' . $measure_count . '_y2_m7',
			'ucpt_m_' . $measure_count . '_y2_m8',
			'ucpt_m_' . $measure_count . '_y2_m9',
			'ucpt_m_' . $measure_count . '_y2_m10',
			'ucpt_m_' . $measure_count . '_y2_m11',
			'ucpt_m_' . $measure_count . '_y2_m12',
			'ucpt_m_' . $measure_count . '_y3_m1',
			'ucpt_m_' . $measure_count . '_y3_m2',
			'ucpt_m_' . $measure_count . '_y3_m3',
			'ucpt_m_' . $measure_count . '_y3_m4',
			'ucpt_m_' . $measure_count . '_y3_m5',
			'ucpt_m_' . $measure_count . '_y3_m6',
			'ucpt_m_' . $measure_count . '_y3_m7',
			'ucpt_m_' . $measure_count . '_y3_m8',
			'ucpt_m_' . $measure_count . '_y3_m9',
			'ucpt_m_' . $measure_count . '_y3_m10',
			'ucpt_m_' . $measure_count . '_y3_m11',
			'ucpt_m_' . $measure_count . '_y3_m12',
			'ucpt_m_' . $measure_count . '_y4_m1',
			'ucpt_m_' . $measure_count . '_y4_m2',
			'ucpt_m_' . $measure_count . '_y4_m3',
			'ucpt_m_' . $measure_count . '_y4_m4',
			'ucpt_m_' . $measure_count . '_y4_m5',
			'ucpt_m_' . $measure_count . '_y4_m6',
			'ucpt_m_' . $measure_count . '_y4_m7',
			'ucpt_m_' . $measure_count . '_y4_m8',
			'ucpt_m_' . $measure_count . '_y4_m9',
			'ucpt_m_' . $measure_count . '_y4_m10',
			'ucpt_m_' . $measure_count . '_y4_m11',
			'ucpt_m_' . $measure_count . '_y4_m12'
		);
		
		foreach( $plain_fields as $field ) {
			$key = $field;
			if ( isset( $_POST[$key] ) ) {
				$value = strip_tags($_POST[$key]);
				groups_update_groupmeta( $group_id, $field, $value );
			}

		}
	$measure_count++;
	}
	
	if ( isset( $_POST["ucpt_data_narrative"] ) ) {
			$value = $_POST["ucpt_data_narrative"];
			groups_update_groupmeta( $group_id, "ucpt_data_narrative", $value );
	}
	
	if ( isset( $_POST["ucpt_data_edit"] ) ) {
			$temp = $_POST["ucpt_data_edit"];
			$current = $_POST["ucpt_data_edit_log"];
			$value = $temp . "<br />" . $current;
			groups_update_groupmeta( $group_id, "ucpt_data_edit_log", $value );
	}
		
}
	
add_filter( 'groups_custom_group_fields_editable', 'group_header_fields_markup_data' );
add_action( 'groups_group_details_edited', 'group_header_fields_save_data' );
add_action( 'groups_created_group',  'group_header_fields_save_data' );
//////////////////// Insert Group Meta

}

add_action( 'bp_include', 'bp_group_meta_init_data' );

function add_page_to_group_data() {
	if ( class_exists( 'BP_Group_Extension' ) ) :
		class UCPT_Data_Pages extends BP_Group_Extension {
			function __construct() {
				$args = array(
					'slug' => 'raw-data',
					'name' => 'Raw Data +',
					'create_step_position' => 20
				);
				parent::init( $args );
			}
			function settings_screen( $group_id ) {
				// don't remove this function
				echo "Additional settings are planned for the future. Stay tuned!";
			}    
			function display( $group_id = null ) {
				/* Use this function to display the actual content of your group extension when the nav item is selected */
				global $bp;
				if (custom_field_data('ucpt_measure_1') == "") {
					echo "This group has not yet set measures.";
				}
				if (custom_field_data('ucpt_measure_1') != "") {
				
				$group_cover_image_url = bp_attachments_get_attachment('url', array(
					  'object_dir' => 'groups',
					  'item_id' => bp_get_group_id(),
					));
					$ucpt_cover = $group_cover_image_url;
					$ucpt_group_name = bp_get_group_name();
					$ucpt_perma = bp_get_group_permalink( $bp->groups->current_group );
					echo "<div style='background: linear-gradient(rgba(10, 118, 211, 0.85), rgba(8, 94, 168, 0.85)), url(" . $ucpt_cover . "); background-size:100%; width=100%; min-height: 150px; padding: 30px;'><div style='font-size: 32px; color: #fff;'>Raw Data +</div><br /><div style='font-size: 18px; color: #efefef;'>" . $ucpt_group_name . "</div><br/><div style='font-size: 10px; color: #efefef;'>" . $ucpt_perma ."</div></div>";
				
				?>
				<style>
				.sticky {
					position: absolute;
					width: 250px;
					background-color: #f1f1f1;
				}
				table {
					table-layout: fixed; 
				}
				th {
					width: 150px;
				}
				</style>
				<div style="background-color:#009150; padding: 20px; margin-top: 10px; margin-bottom: 20px;">
				<div style="overflow-x:auto; background-color:#fff; padding:10px;">
					<table border="1" bordercolor="#ededed" width="100%" cellpadding="5" class="table table-striped">
							<tr>
								<th class="sticky">Measurements</th>
								<th style="width: 250px;"></th>
								<th>Target Goal</th>
								<th>Status</th>
								<th>Desired Trend</th>
								<th>Contributor</th>
								<?php
								$ucpt_data_time_reporting = get_option( 'ucpt_manage_settings' );
								$ucpt_start_date_raw = $ucpt_data_time_reporting['ucpt_manage_start_date'];

								$ucpt_start_date = date('Y', strtotime($ucpt_start_date_raw));
								?>
									<th>January <?php echo $ucpt_start_date; ?></th>
									<th>February <?php echo $ucpt_start_date; ?></th>
									<th>March <?php echo $ucpt_start_date; ?></th>
									<th>April <?php echo $ucpt_start_date; ?></th>
									<th>May <?php echo $ucpt_start_date; ?></th>
									<th>June <?php echo $ucpt_start_date; ?></th>
									<th>July <?php echo $ucpt_start_date; ?></th>
									<th>August <?php echo $ucpt_start_date; ?></th>
									<th>September <?php echo $ucpt_start_date; ?></th>
									<th>October <?php echo $ucpt_start_date; ?></th>
									<th>November <?php echo $ucpt_start_date; ?></th>
									<th>December <?php echo $ucpt_start_date; ?></th>
									<th>January <?php echo $ucpt_start_date + 1; ?></th>
									<th>February <?php echo $ucpt_start_date + 1; ?></th>
									<th>March <?php echo $ucpt_start_date + 1; ?></th>
									<th>April <?php echo $ucpt_start_date + 1; ?></th>
									<th>May <?php echo $ucpt_start_date + 1; ?></th>
									<th>June <?php echo $ucpt_start_date + 1; ?></th>
									<th>July <?php echo $ucpt_start_date + 1; ?></th>
									<th>August <?php echo $ucpt_start_date + 1; ?></th>
									<th>September <?php echo $ucpt_start_date + 1; ?></th>
									<th>October <?php echo $ucpt_start_date + 1; ?></th>
									<th>November <?php echo $ucpt_start_date + 1; ?></th>
									<th>December <?php echo $ucpt_start_date + 1; ?></th>
									<th>January <?php echo $ucpt_start_date + 2; ?></th>
									<th>February <?php echo $ucpt_start_date + 2; ?></th>
									<th>March <?php echo $ucpt_start_date + 2; ?></th>
									<th>April <?php echo $ucpt_start_date + 2; ?></th>
									<th>May <?php echo $ucpt_start_date + 2; ?></th>
									<th>June <?php echo $ucpt_start_date + 2; ?></th>
									<th>July <?php echo $ucpt_start_date + 2; ?></th>
									<th>August <?php echo $ucpt_start_date + 2; ?></th>
									<th>September <?php echo $ucpt_start_date + 2; ?></th>
									<th>October <?php echo $ucpt_start_date + 2; ?></th>
									<th>November <?php echo $ucpt_start_date + 2; ?></th>
									<th>December <?php echo $ucpt_start_date + 2; ?></th>
									<th>January <?php echo $ucpt_start_date + 3; ?></th>
									<th>February <?php echo $ucpt_start_date + 3; ?></th>
									<th>March <?php echo $ucpt_start_date + 3; ?></th>
									<th>April <?php echo $ucpt_start_date + 3; ?></th>
									<th>May <?php echo $ucpt_start_date + 3; ?></th>
									<th>June <?php echo $ucpt_start_date + 3; ?></th>
									<th>July <?php echo $ucpt_start_date + 3; ?></th>
									<th>August <?php echo $ucpt_start_date + 3; ?></th>
									<th>September <?php echo $ucpt_start_date + 3; ?></th>
									<th>October <?php echo $ucpt_start_date + 3; ?></th>
									<th>November <?php echo $ucpt_start_date + 3; ?></th>
									<th>December <?php echo $ucpt_start_date + 3; ?></th>
						</tr>
						<?php
						$ucpt_measures_options = get_option( 'ucpt_manage_settings' );
						$max_measures = $ucpt_measures_options['ucpt_manage_measure_number'];
						$measure_count = 1;
						while ($measure_count <= $max_measures) {
							if (custom_field_data('ucpt_measure_' . $measure_count . '') != "") {
						?>
						<tr>
							<td class="sticky">
								<?php echo custom_field_data('ucpt_measure_' . $measure_count . ''); ?>
							</td>
							<td style="width: 250px;"></td>
							<td>
								<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>
							</td>
							<td>
								<?php if (custom_field_data('ucpt_measure_' . $measure_count . '_status') == "Archived") { ?>
								<span style="background-color: #d71616; color: #fff; padding: 3px; ">Archived</span>
								<?php } else { ?>
								<span style="background-color: #129f49; color: #fff; padding: 3px; ">Active</span>
								<?php } ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_trend'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_contributor'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m1'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m2'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m3'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m4'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m5'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m6'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m7'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m8'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m9'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m10'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m11'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m12'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m1'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m2'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m3'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m4'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m5'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m6'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m7'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m8'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m9'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m10'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m11'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m12'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m1'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m2'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m3'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m4'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m5'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m6'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m7'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m8'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m9'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m10'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m11'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m12'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m1'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m2'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m3'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m4'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m5'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m6'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m7'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m8'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m9'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m10'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m11'); ?>
							</td>
							<td>
								<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m12'); ?>
							</td>
						</tr>
						<?php 
							}
							$measure_count++;
						}
						?>
					</table>
				</div>
				</div>
				<?php 
					if (custom_field_data('ucpt_data_narrative') != "") {
				?>
				<p>
				<h3>Data Narrative</h3>
				</p>
				<p>
					<?php echo custom_field_data('ucpt_data_narrative'); ?>
				</p>
				<?php
					}
					
				$chart_id = substr(md5(rand()), 0, 6);
				?>
					
				<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
				<canvas id="<?php echo $chart_id; ?>"></canvas>
				<script>
				 var ctx = document.getElementById('<?php echo $chart_id; ?>').getContext('2d');
					var data = {
				  "labels": [
					"1/<?php echo $ucpt_start_date; ?>",
					"2/<?php echo $ucpt_start_date; ?>",
					"3/<?php echo $ucpt_start_date; ?>",
					"4/<?php echo $ucpt_start_date; ?>",
					"5/<?php echo $ucpt_start_date; ?>",
					"6/<?php echo $ucpt_start_date; ?>",
					"7/<?php echo $ucpt_start_date; ?>",
					"8/<?php echo $ucpt_start_date; ?>",
					"9/<?php echo $ucpt_start_date; ?>",
					"10/<?php echo $ucpt_start_date; ?>",
					"11/<?php echo $ucpt_start_date; ?>",
					"12/<?php echo $ucpt_start_date; ?>",
					"1/<?php echo $ucpt_start_date + 1; ?>",
					"2/<?php echo $ucpt_start_date + 1; ?>",
					"3/<?php echo $ucpt_start_date + 1; ?>",
					"4/<?php echo $ucpt_start_date + 1; ?>",
					"5/<?php echo $ucpt_start_date + 1; ?>",
					"6/<?php echo $ucpt_start_date + 1; ?>",
					"7/<?php echo $ucpt_start_date + 1; ?>",
					"8/<?php echo $ucpt_start_date + 1; ?>",
					"9/<?php echo $ucpt_start_date + 1; ?>",
					"10/<?php echo $ucpt_start_date + 1; ?>",
					"11/<?php echo $ucpt_start_date + 1; ?>",
					"12/<?php echo $ucpt_start_date + 1; ?>",
					"1/<?php echo $ucpt_start_date + 2; ?>",
					"2/<?php echo $ucpt_start_date + 2; ?>",
					"3/<?php echo $ucpt_start_date + 2; ?>",
					"4/<?php echo $ucpt_start_date + 2; ?>",
					"5/<?php echo $ucpt_start_date + 2; ?>",
					"6/<?php echo $ucpt_start_date + 2; ?>",
					"7/<?php echo $ucpt_start_date + 2; ?>",
					"8/<?php echo $ucpt_start_date + 2; ?>",
					"9/<?php echo $ucpt_start_date + 2; ?>",
					"10/<?php echo $ucpt_start_date + 2; ?>",
					"11/<?php echo $ucpt_start_date + 2; ?>",
					"12/<?php echo $ucpt_start_date + 2; ?>",
					"1/<?php echo $ucpt_start_date + 3; ?>",
					"2/<?php echo $ucpt_start_date + 3; ?>",
					"3/<?php echo $ucpt_start_date + 3; ?>",
					"4/<?php echo $ucpt_start_date + 3; ?>",
					"5/<?php echo $ucpt_start_date + 3; ?>",
					"6/<?php echo $ucpt_start_date + 3; ?>",
					"7/<?php echo $ucpt_start_date + 3; ?>",
					"8/<?php echo $ucpt_start_date + 3; ?>",
					"9/<?php echo $ucpt_start_date + 3; ?>",
					"10/<?php echo $ucpt_start_date + 3; ?>",
					"11/<?php echo $ucpt_start_date + 3; ?>",
					"12/<?php echo $ucpt_start_date + 3; ?>"
				  ],
				  "datasets": [
					<?php
						$ucpt_measures_options = get_option( 'ucpt_manage_settings' );
						$max_measures = $ucpt_measures_options['ucpt_manage_measure_number'];
						$measure_count = 1;
						while ($measure_count <= $max_measures) {
						if (custom_field_data('ucpt_measure_' . $measure_count . '') != "") {
					?>
					{
					  "label": "<?php echo custom_field_data('ucpt_measure_' . $measure_count ); ?>",
					  "backgroundColor": "<?php $chart_color = substr(md5(rand()), 0, 6); echo "#" . $chart_color; ?>",
					  "fill": false,
					  "data": [
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m1'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m2'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m3'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m4'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m5'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m6'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m7'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m8'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m9'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m10'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m11'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y1_m12'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m1'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m2'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m3'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m4'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m5'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m6'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m7'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m8'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m9'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m10'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m11'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y2_m12'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m1'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m2'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m3'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m4'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m5'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m6'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m7'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m8'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m9'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m10'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m11'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y3_m12'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m1'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m2'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m3'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m4'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m5'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m6'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m7'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m8'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m9'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m10'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m11'); ?>",
						"<?php echo custom_field_data('ucpt_m_' . $measure_count . '_y4_m12'); ?>"
					  ],
					  "borderColor": "<?php echo "#" . $chart_color; ?>"
					},
					{
					  "label": "<?php echo custom_field_data('ucpt_measure_' . $measure_count ); ?> Target Goal",
					  "backgroundColor": "<?php echo "#" . $chart_color; ?>",
					  "hidden": true,
					  "fill": false,
					  "data": [
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>",
						"<?php echo custom_field_data('ucpt_measure_' . $measure_count . '_goal'); ?>"
					  ],
					  "borderColor": "<?php echo "#" . $chart_color; ?>"
					},
					<?php
						}
					$measure_count++;
					}
					?>
				  ]
				};
					var options = {
				  "title": {
					"display": true,
					"text": "Group Measures",
					"position": "bottom",
					"fontStyle": "bold",
					"fullWidth": true
				  },
				  "legend": {
					"display": true,
					"position": "bottom",
					"fullWidth": true
				  },
				  "scales": {
					"yAxes": [
					  {
						"ticks": {
						  "beginAtZero": true
						},
						"gridLines": {
						  "display": true,
						  "lineWidth": 1,
						  "drawOnChartArea": true,
						  "color": "#000000",
						  "zeroLineColor": "#000000",
						  "zeroLineWidth": 1,
						  "drawTicks": true
						}
					  }
					],
					"xAxes": {
					  "0": {
						"gridLines": {
						  "drawOnChartArea": false,
						  "offsetGridLines": false,
						  "zeroLineColor": "#000000",
						  "display": true,
						  "lineWidth": 2,
						  "drawTicks": true,
						  "zeroLineWidth": 2,
						  "color": "#000000"
						},
						"ticks": {
						  "display": true,
						  "beginAtZero": true
						}
					  }
					}
				  },
				  "elements": {
					"line": {
					  "borderColor": "#000000",
					  "lineTension": 0
					}
				  }
				};

					var myChart = new Chart(ctx, {
						type: 'line',
						data: data,
						options: options
					});
					

				</script>
				
				<p>
				<h3>Last Modification</h3>
				</p>
				<p>
					<?php echo custom_field_data('ucpt_data_edit_log'); ?>
				</p>
				<?php
				}
			}
		} // end of class

		bp_register_group_extension( 'UCPT_Data_Pages' );
		 
		endif;
}
	
add_filter('bp_groups_default_extension', 'add_page_to_group_data' );
	
?>
