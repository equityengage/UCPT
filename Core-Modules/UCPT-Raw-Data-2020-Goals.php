<?php
/*
Plugin Name: UCPT Raw Data Module for 2020 Goals
Plugin URI: https://equityengage.com
Description: This plug-in is a UCPT module supporting the addition of raw data reporting to BuddyPress groups.
Version: 0.9.1
Requires at least: 3.3
Tested up to: 4.8.1
License: GPL v3
Author: UCPT
Author URI: https://equityengage.com
*/
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
?>
<div style="background-color:#009150; padding: 20px; margin-top: 10px; margin-bottom: 20px;">
	<span style="color: #fff !important;"><b style="font-size: 150%;">Data Planning Worksheet</b>
	<p><b>NEW!</b> - The purpose of this planning tool is to collect community data for comparison, tracking, and overall community health improvement. Data plays a critical role in ensuring that our strategies are effective, and can be correlated to specific actions within the community. Data must be numerical to allow for cross comparison of variables.</p></span>
	<br />
	<div style="overflow-x:auto; background-color:#fff; padding:10px;">
		<table>
			<tr>
				<th>Measurements</th>
				<th>January 2017</th>
				<th>February 2017</th>
				<th>March 2017</th>
				<th>April 2017</th>
				<th>May 2017</th>
				<th>June 2017</th>
				<th>July 2017</th>
				<th>August 2017</th>
				<th>September 2017</th>
				<th>October 2017</th>
				<th>November 2017</th>
				<th>December 2017</th>
				<th>January 2018</th>
				<th>February 2018</th>
				<th>March 2018</th>
				<th>April 2018</th>
				<th>May 2018</th>
				<th>June 2018</th>
				<th>July 2018</th>
				<th>August 2018</th>
				<th>September 2018</th>
				<th>October 2018</th>
				<th>November 2018</th>
				<th>December 2018</th>
				<th>January 2019</th>
				<th>February 2019</th>
				<th>March 2019</th>
				<th>April 2019</th>
				<th>May 2019</th>
				<th>June 2019</th>
				<th>July 2019</th>
				<th>August 2019</th>
				<th>September 2019</th>
				<th>October 2019</th>
				<th>November 2019</th>
				<th>December 2019</th>
				<th>January 2020</th>
				<th>February 2020</th>
				<th>March 2020</th>
				<th>April 2020</th>
				<th>May 2020</th>
				<th>June 2020</th>
				<th>July 2020</th>
				<th>August 2020</th>
				<th>September 2020</th>
				<th>October 2020</th>
				<th>November 2020</th>
				<th>December 2020</th>
			</tr>
			<tr>
				<td>
					<input id="ucpt_measure_1" type="text" name="ucpt_measure_1" placeholder="Measure 1" value="<?php echo custom_field(ucpt_measure_1); ?>" style="width: 250px"/>
				</td>
				<td>
					<input id="ucpt_m_1_y1_m1" type="number" name="ucpt_m_1_y1_m1" placeholder="Baseline" value="<?php echo custom_field(ucpt_m_1_y1_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y1_m2" type="number" name="ucpt_m_1_y1_m2" value="<?php echo custom_field(ucpt_m_1_y1_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y1_m3" type="number" name="ucpt_m_1_y1_m3" value="<?php echo custom_field(ucpt_m_1_y1_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y1_m4" type="number" name="ucpt_m_1_y1_m4" value="<?php echo custom_field(ucpt_m_1_y1_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y1_m5" type="number" name="ucpt_m_1_y1_m5" value="<?php echo custom_field(ucpt_m_1_y1_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y1_m6" type="number" name="ucpt_m_1_y1_m6" value="<?php echo custom_field(ucpt_m_1_y1_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y1_m7" type="number" name="ucpt_m_1_y1_m7" value="<?php echo custom_field(ucpt_m_1_y1_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y1_m8" type="number" name="ucpt_m_1_y1_m8" value="<?php echo custom_field(ucpt_m_1_y1_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y1_m9" type="number" name="ucpt_m_1_y1_m9" value="<?php echo custom_field(ucpt_m_1_y1_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y1_m10" type="number" name="ucpt_m_1_y1_m10" value="<?php echo custom_field(ucpt_m_1_y1_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y1_m11" type="number" name="ucpt_m_1_y1_m11" value="<?php echo custom_field(ucpt_m_1_y1_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y1_m12" type="number" name="ucpt_m_1_y1_m12" value="<?php echo custom_field(ucpt_m_1_y1_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y2_m1" type="number" name="ucpt_m_1_y2_m1" value="<?php echo custom_field(ucpt_m_1_y2_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y2_m2" type="number" name="ucpt_m_1_y2_m2" value="<?php echo custom_field(ucpt_m_1_y2_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y2_m3" type="number" name="ucpt_m_1_y2_m3" value="<?php echo custom_field(ucpt_m_1_y2_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y2_m4" type="number" name="ucpt_m_1_y2_m4" value="<?php echo custom_field(ucpt_m_1_y2_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y2_m5" type="number" name="ucpt_m_1_y2_m5" value="<?php echo custom_field(ucpt_m_1_y2_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y2_m6" type="number" name="ucpt_m_1_y2_m6" value="<?php echo custom_field(ucpt_m_1_y2_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y2_m7" type="number" name="ucpt_m_1_y2_m7" value="<?php echo custom_field(ucpt_m_1_y2_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y2_m8" type="number" name="ucpt_m_1_y2_m8" value="<?php echo custom_field(ucpt_m_1_y2_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y2_m9" type="number" name="ucpt_m_1_y2_m9" value="<?php echo custom_field(ucpt_m_1_y2_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y2_m10" type="number" name="ucpt_m_1_y2_m10" value="<?php echo custom_field(ucpt_m_1_y2_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y2_m11" type="number" name="ucpt_m_1_y2_m11" value="<?php echo custom_field(ucpt_m_1_y2_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y2_m12" type="number" name="ucpt_m_1_y2_m12" value="<?php echo custom_field(ucpt_m_1_y2_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y3_m1" type="number" name="ucpt_m_1_y3_m1" value="<?php echo custom_field(ucpt_m_1_y3_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y3_m2" type="number" name="ucpt_m_1_y3_m2" value="<?php echo custom_field(ucpt_m_1_y3_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y3_m3" type="number" name="ucpt_m_1_y3_m3" value="<?php echo custom_field(ucpt_m_1_y3_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y3_m4" type="number" name="ucpt_m_1_y3_m4" value="<?php echo custom_field(ucpt_m_1_y3_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y3_m5" type="number" name="ucpt_m_1_y3_m5" value="<?php echo custom_field(ucpt_m_1_y3_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y3_m6" type="number" name="ucpt_m_1_y3_m6" value="<?php echo custom_field(ucpt_m_1_y3_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y3_m7" type="number" name="ucpt_m_1_y3_m7" value="<?php echo custom_field(ucpt_m_1_y3_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y3_m8" type="number" name="ucpt_m_1_y3_m8" value="<?php echo custom_field(ucpt_m_1_y3_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y3_m9" type="number" name="ucpt_m_1_y3_m9" value="<?php echo custom_field(ucpt_m_1_y3_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y3_m10" type="number" name="ucpt_m_1_y3_m10" value="<?php echo custom_field(ucpt_m_1_y3_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y3_m11" type="number" name="ucpt_m_1_y3_m11" value="<?php echo custom_field(ucpt_m_1_y3_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y3_m12" type="number" name="ucpt_m_1_y3_m12" value="<?php echo custom_field(ucpt_m_1_y3_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y4_m1" type="number" name="ucpt_m_1_y4_m1" value="<?php echo custom_field(ucpt_m_1_y4_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y4_m2" type="number" name="ucpt_m_1_y4_m2" value="<?php echo custom_field(ucpt_m_1_y4_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y4_m3" type="number" name="ucpt_m_1_y4_m3" value="<?php echo custom_field(ucpt_m_1_y4_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y4_m4" type="number" name="ucpt_m_1_y4_m4" value="<?php echo custom_field(ucpt_m_1_y4_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y4_m5" type="number" name="ucpt_m_1_y4_m5" value="<?php echo custom_field(ucpt_m_1_y4_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y4_m6" type="number" name="ucpt_m_1_y4_m6" value="<?php echo custom_field(ucpt_m_1_y4_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y4_m7" type="number" name="ucpt_m_1_y4_m7" value="<?php echo custom_field(ucpt_m_1_y4_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y4_m8" type="number" name="ucpt_m_1_y4_m8" value="<?php echo custom_field(ucpt_m_1_y4_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y4_m9" type="number" name="ucpt_m_1_y4_m9" value="<?php echo custom_field(ucpt_m_1_y4_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y4_m10" type="number" name="ucpt_m_1_y4_m10" value="<?php echo custom_field(ucpt_m_1_y4_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y4_m11" type="number" name="ucpt_m_1_y4_m11" value="<?php echo custom_field(ucpt_m_1_y4_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_1_y4_m12" type="number" name="ucpt_m_1_y4_m12" value="<?php echo custom_field(ucpt_m_1_y4_m12); ?>" />
				</td>
			</tr>
			<tr>
				<td>
					<input id="ucpt_measure_2" type="text" name="ucpt_measure_2" value="<?php echo custom_field(ucpt_measure_2); ?>" style="width: 250px" />
				</td>
				<td>
					<input id="ucpt_m_2_y1_m1" type="number" name="ucpt_m_2_y1_m1" value="<?php echo custom_field(ucpt_m_2_y1_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y1_m2" type="number" name="ucpt_m_2_y1_m2" value="<?php echo custom_field(ucpt_m_2_y1_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y1_m3" type="number" name="ucpt_m_2_y1_m3" value="<?php echo custom_field(ucpt_m_2_y1_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y1_m4" type="number" name="ucpt_m_2_y1_m4" value="<?php echo custom_field(ucpt_m_2_y1_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y1_m5" type="number" name="ucpt_m_2_y1_m5" value="<?php echo custom_field(ucpt_m_2_y1_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y1_m6" type="number" name="ucpt_m_2_y1_m6" value="<?php echo custom_field(ucpt_m_2_y1_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y1_m7" type="number" name="ucpt_m_2_y1_m7" value="<?php echo custom_field(ucpt_m_2_y1_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y1_m8" type="number" name="ucpt_m_2_y1_m8" value="<?php echo custom_field(ucpt_m_2_y1_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y1_m9" type="number" name="ucpt_m_2_y1_m9" value="<?php echo custom_field(ucpt_m_2_y1_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y1_m10" type="number" name="ucpt_m_2_y1_m10" value="<?php echo custom_field(ucpt_m_2_y1_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y1_m11" type="number" name="ucpt_m_2_y1_m11" value="<?php echo custom_field(ucpt_m_2_y1_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y1_m12" type="number" name="ucpt_m_2_y1_m12" value="<?php echo custom_field(ucpt_m_2_y1_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y2_m1" type="number" name="ucpt_m_2_y2_m1" value="<?php echo custom_field(ucpt_m_2_y2_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y2_m2" type="number" name="ucpt_m_2_y2_m2" value="<?php echo custom_field(ucpt_m_2_y2_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y2_m3" type="number" name="ucpt_m_2_y2_m3" value="<?php echo custom_field(ucpt_m_2_y2_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y2_m4" type="number" name="ucpt_m_2_y2_m4" value="<?php echo custom_field(ucpt_m_2_y2_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y2_m5" type="number" name="ucpt_m_2_y2_m5" value="<?php echo custom_field(ucpt_m_2_y2_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y2_m6" type="number" name="ucpt_m_2_y2_m6" value="<?php echo custom_field(ucpt_m_2_y2_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y2_m7" type="number" name="ucpt_m_2_y2_m7" value="<?php echo custom_field(ucpt_m_2_y2_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y2_m8" type="number" name="ucpt_m_2_y2_m8" value="<?php echo custom_field(ucpt_m_2_y2_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y2_m9" type="number" name="ucpt_m_2_y2_m9" value="<?php echo custom_field(ucpt_m_2_y2_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y2_m10" type="number" name="ucpt_m_2_y2_m10" value="<?php echo custom_field(ucpt_m_2_y2_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y2_m11" type="number" name="ucpt_m_2_y2_m11" value="<?php echo custom_field(ucpt_m_2_y2_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y2_m12" type="number" name="ucpt_m_2_y2_m12" value="<?php echo custom_field(ucpt_m_2_y2_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y3_m1" type="number" name="ucpt_m_2_y3_m1" value="<?php echo custom_field(ucpt_m_2_y3_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y3_m2" type="number" name="ucpt_m_2_y3_m2" value="<?php echo custom_field(ucpt_m_2_y3_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y3_m3" type="number" name="ucpt_m_2_y3_m3" value="<?php echo custom_field(ucpt_m_2_y3_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y3_m4" type="number" name="ucpt_m_2_y3_m4" value="<?php echo custom_field(ucpt_m_2_y3_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y3_m5" type="number" name="ucpt_m_2_y3_m5" value="<?php echo custom_field(ucpt_m_2_y3_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y3_m6" type="number" name="ucpt_m_2_y3_m6" value="<?php echo custom_field(ucpt_m_2_y3_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y3_m7" type="number" name="ucpt_m_2_y3_m7" value="<?php echo custom_field(ucpt_m_2_y3_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y3_m8" type="number" name="ucpt_m_2_y3_m8" value="<?php echo custom_field(ucpt_m_2_y3_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y3_m9" type="number" name="ucpt_m_2_y3_m9" value="<?php echo custom_field(ucpt_m_2_y3_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y3_m10" type="number" name="ucpt_m_2_y3_m10" value="<?php echo custom_field(ucpt_m_2_y3_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y3_m11" type="number" name="ucpt_m_2_y3_m11" value="<?php echo custom_field(ucpt_m_2_y3_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y3_m12" type="number" name="ucpt_m_2_y3_m12" value="<?php echo custom_field(ucpt_m_2_y3_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y4_m1" type="number" name="ucpt_m_2_y4_m1" value="<?php echo custom_field(ucpt_m_2_y4_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y4_m2" type="number" name="ucpt_m_2_y4_m2" value="<?php echo custom_field(ucpt_m_2_y4_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y4_m3" type="number" name="ucpt_m_2_y4_m3" value="<?php echo custom_field(ucpt_m_2_y4_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y4_m4" type="number" name="ucpt_m_2_y4_m4" value="<?php echo custom_field(ucpt_m_2_y4_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y4_m5" type="number" name="ucpt_m_2_y4_m5" value="<?php echo custom_field(ucpt_m_2_y4_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y4_m6" type="number" name="ucpt_m_2_y4_m6" value="<?php echo custom_field(ucpt_m_2_y4_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y4_m7" type="number" name="ucpt_m_2_y4_m7" value="<?php echo custom_field(ucpt_m_2_y4_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y4_m8" type="number" name="ucpt_m_2_y4_m8" value="<?php echo custom_field(ucpt_m_2_y4_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y4_m9" type="number" name="ucpt_m_2_y4_m9" value="<?php echo custom_field(ucpt_m_2_y4_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y4_m10" type="number" name="ucpt_m_2_y4_m10" value="<?php echo custom_field(ucpt_m_2_y4_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y4_m11" type="number" name="ucpt_m_2_y4_m11" value="<?php echo custom_field(ucpt_m_2_y4_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_2_y4_m12" type="number" name="ucpt_m_2_y4_m12" value="<?php echo custom_field(ucpt_m_2_y4_m12); ?>" />
				</td>
			</tr>
			<tr>
				<td>
					<input id="ucpt_measure_3" type="text" name="ucpt_measure_3" value="<?php echo custom_field(ucpt_measure_3); ?>" style="width: 250px" />
				</td>
				<td>
					<input id="ucpt_m_3_y1_m1" type="number" name="ucpt_m_3_y1_m1" value="<?php echo custom_field(ucpt_m_3_y1_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y1_m2" type="number" name="ucpt_m_3_y1_m2" value="<?php echo custom_field(ucpt_m_3_y1_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y1_m3" type="number" name="ucpt_m_3_y1_m3" value="<?php echo custom_field(ucpt_m_3_y1_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y1_m4" type="number" name="ucpt_m_3_y1_m4" value="<?php echo custom_field(ucpt_m_3_y1_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y1_m5" type="number" name="ucpt_m_3_y1_m5" value="<?php echo custom_field(ucpt_m_3_y1_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y1_m6" type="number" name="ucpt_m_3_y1_m6" value="<?php echo custom_field(ucpt_m_3_y1_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y1_m7" type="number" name="ucpt_m_3_y1_m7" value="<?php echo custom_field(ucpt_m_3_y1_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y1_m8" type="number" name="ucpt_m_3_y1_m8" value="<?php echo custom_field(ucpt_m_3_y1_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y1_m9" type="number" name="ucpt_m_3_y1_m9" value="<?php echo custom_field(ucpt_m_3_y1_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y1_m10" type="number" name="ucpt_m_3_y1_m10" value="<?php echo custom_field(ucpt_m_3_y1_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y1_m11" type="number" name="ucpt_m_3_y1_m11" value="<?php echo custom_field(ucpt_m_3_y1_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y1_m12" type="number" name="ucpt_m_3_y1_m12" value="<?php echo custom_field(ucpt_m_3_y1_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y2_m1" type="number" name="ucpt_m_3_y2_m1" value="<?php echo custom_field(ucpt_m_3_y2_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y2_m2" type="number" name="ucpt_m_3_y2_m2" value="<?php echo custom_field(ucpt_m_3_y2_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y2_m3" type="number" name="ucpt_m_3_y2_m3" value="<?php echo custom_field(ucpt_m_3_y2_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y2_m4" type="number" name="ucpt_m_3_y2_m4" value="<?php echo custom_field(ucpt_m_3_y2_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y2_m5" type="number" name="ucpt_m_3_y2_m5" value="<?php echo custom_field(ucpt_m_3_y2_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y2_m6" type="number" name="ucpt_m_3_y2_m6" value="<?php echo custom_field(ucpt_m_3_y2_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y2_m7" type="number" name="ucpt_m_3_y2_m7" value="<?php echo custom_field(ucpt_m_3_y2_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y2_m8" type="number" name="ucpt_m_3_y2_m8" value="<?php echo custom_field(ucpt_m_3_y2_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y2_m9" type="number" name="ucpt_m_3_y2_m9" value="<?php echo custom_field(ucpt_m_3_y2_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y2_m10" type="number" name="ucpt_m_3_y2_m10" value="<?php echo custom_field(ucpt_m_3_y2_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y2_m11" type="number" name="ucpt_m_3_y2_m11" value="<?php echo custom_field(ucpt_m_3_y2_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y2_m12" type="number" name="ucpt_m_3_y2_m12" value="<?php echo custom_field(ucpt_m_3_y2_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y3_m1" type="number" name="ucpt_m_3_y3_m1" value="<?php echo custom_field(ucpt_m_3_y3_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y3_m2" type="number" name="ucpt_m_3_y3_m2" value="<?php echo custom_field(ucpt_m_3_y3_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y3_m3" type="number" name="ucpt_m_3_y3_m3" value="<?php echo custom_field(ucpt_m_3_y3_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y3_m4" type="number" name="ucpt_m_3_y3_m4" value="<?php echo custom_field(ucpt_m_3_y3_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y3_m5" type="number" name="ucpt_m_3_y3_m5" value="<?php echo custom_field(ucpt_m_3_y3_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y3_m6" type="number" name="ucpt_m_3_y3_m6" value="<?php echo custom_field(ucpt_m_3_y3_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y3_m7" type="number" name="ucpt_m_3_y3_m7" value="<?php echo custom_field(ucpt_m_3_y3_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y3_m8" type="number" name="ucpt_m_3_y3_m8" value="<?php echo custom_field(ucpt_m_3_y3_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y3_m9" type="number" name="ucpt_m_3_y3_m9" value="<?php echo custom_field(ucpt_m_3_y3_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y3_m10" type="number" name="ucpt_m_3_y3_m10" value="<?php echo custom_field(ucpt_m_3_y3_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y3_m11" type="number" name="ucpt_m_3_y3_m11" value="<?php echo custom_field(ucpt_m_3_y3_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y3_m12" type="number" name="ucpt_m_3_y3_m12" value="<?php echo custom_field(ucpt_m_3_y3_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y4_m1" type="number" name="ucpt_m_3_y4_m1" value="<?php echo custom_field(ucpt_m_3_y4_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y4_m2" type="number" name="ucpt_m_3_y4_m2" value="<?php echo custom_field(ucpt_m_3_y4_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y4_m3" type="number" name="ucpt_m_3_y4_m3" value="<?php echo custom_field(ucpt_m_3_y4_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y4_m4" type="number" name="ucpt_m_3_y4_m4" value="<?php echo custom_field(ucpt_m_3_y4_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y4_m5" type="number" name="ucpt_m_3_y4_m5" value="<?php echo custom_field(ucpt_m_3_y4_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y4_m6" type="number" name="ucpt_m_3_y4_m6" value="<?php echo custom_field(ucpt_m_3_y4_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y4_m7" type="number" name="ucpt_m_3_y4_m7" value="<?php echo custom_field(ucpt_m_3_y4_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y4_m8" type="number" name="ucpt_m_3_y4_m8" value="<?php echo custom_field(ucpt_m_3_y4_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y4_m9" type="number" name="ucpt_m_3_y4_m9" value="<?php echo custom_field(ucpt_m_3_y4_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y4_m10" type="number" name="ucpt_m_3_y4_m10" value="<?php echo custom_field(ucpt_m_3_y4_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y4_m11" type="number" name="ucpt_m_3_y4_m11" value="<?php echo custom_field(ucpt_m_3_y4_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_3_y4_m12" type="number" name="ucpt_m_3_y4_m12" value="<?php echo custom_field(ucpt_m_3_y4_m12); ?>" />
				</td>
			</tr>
			<tr>
				<td>
					<input id="ucpt_measure_4" type="text" name="ucpt_measure_4" value="<?php echo custom_field(ucpt_measure_4); ?>" style="width: 250px" />
				</td>
				<td>
					<input id="ucpt_m_4_y1_m1" type="number" name="ucpt_m_4_y1_m1" value="<?php echo custom_field(ucpt_m_4_y1_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y1_m2" type="number" name="ucpt_m_4_y1_m2" value="<?php echo custom_field(ucpt_m_4_y1_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y1_m3" type="number" name="ucpt_m_4_y1_m3" value="<?php echo custom_field(ucpt_m_4_y1_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y1_m4" type="number" name="ucpt_m_4_y1_m4" value="<?php echo custom_field(ucpt_m_4_y1_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y1_m5" type="number" name="ucpt_m_4_y1_m5" value="<?php echo custom_field(ucpt_m_4_y1_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y1_m6" type="number" name="ucpt_m_4_y1_m6" value="<?php echo custom_field(ucpt_m_4_y1_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y1_m7" type="number" name="ucpt_m_4_y1_m7" value="<?php echo custom_field(ucpt_m_4_y1_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y1_m8" type="number" name="ucpt_m_4_y1_m8" value="<?php echo custom_field(ucpt_m_4_y1_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y1_m9" type="number" name="ucpt_m_4_y1_m9" value="<?php echo custom_field(ucpt_m_4_y1_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y1_m10" type="number" name="ucpt_m_4_y1_m10" value="<?php echo custom_field(ucpt_m_4_y1_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y1_m11" type="number" name="ucpt_m_4_y1_m11" value="<?php echo custom_field(ucpt_m_4_y1_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y1_m12" type="number" name="ucpt_m_4_y1_m12" value="<?php echo custom_field(ucpt_m_4_y1_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y2_m1" type="number" name="ucpt_m_4_y2_m1" value="<?php echo custom_field(ucpt_m_4_y2_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y2_m2" type="number" name="ucpt_m_4_y2_m2" value="<?php echo custom_field(ucpt_m_4_y2_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y2_m3" type="number" name="ucpt_m_4_y2_m3" value="<?php echo custom_field(ucpt_m_4_y2_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y2_m4" type="number" name="ucpt_m_4_y2_m4" value="<?php echo custom_field(ucpt_m_4_y2_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y2_m5" type="number" name="ucpt_m_4_y2_m5" value="<?php echo custom_field(ucpt_m_4_y2_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y2_m6" type="number" name="ucpt_m_4_y2_m6" value="<?php echo custom_field(ucpt_m_4_y2_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y2_m7" type="number" name="ucpt_m_4_y2_m7" value="<?php echo custom_field(ucpt_m_4_y2_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y2_m8" type="number" name="ucpt_m_4_y2_m8" value="<?php echo custom_field(ucpt_m_4_y2_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y2_m9" type="number" name="ucpt_m_4_y2_m9" value="<?php echo custom_field(ucpt_m_4_y2_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y2_m10" type="number" name="ucpt_m_4_y2_m10" value="<?php echo custom_field(ucpt_m_4_y2_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y2_m11" type="number" name="ucpt_m_4_y2_m11" value="<?php echo custom_field(ucpt_m_4_y2_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y2_m12" type="number" name="ucpt_m_4_y2_m12" value="<?php echo custom_field(ucpt_m_4_y2_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y3_m1" type="number" name="ucpt_m_4_y3_m1" value="<?php echo custom_field(ucpt_m_4_y3_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y3_m2" type="number" name="ucpt_m_4_y3_m2" value="<?php echo custom_field(ucpt_m_4_y3_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y3_m3" type="number" name="ucpt_m_4_y3_m3" value="<?php echo custom_field(ucpt_m_4_y3_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y3_m4" type="number" name="ucpt_m_4_y3_m4" value="<?php echo custom_field(ucpt_m_4_y3_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y3_m5" type="number" name="ucpt_m_4_y3_m5" value="<?php echo custom_field(ucpt_m_4_y3_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y3_m6" type="number" name="ucpt_m_4_y3_m6" value="<?php echo custom_field(ucpt_m_4_y3_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y3_m7" type="number" name="ucpt_m_4_y3_m7" value="<?php echo custom_field(ucpt_m_4_y3_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y3_m8" type="number" name="ucpt_m_4_y3_m8" value="<?php echo custom_field(ucpt_m_4_y3_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y3_m9" type="number" name="ucpt_m_4_y3_m9" value="<?php echo custom_field(ucpt_m_4_y3_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y3_m10" type="number" name="ucpt_m_4_y3_m10" value="<?php echo custom_field(ucpt_m_4_y3_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y3_m11" type="number" name="ucpt_m_4_y3_m11" value="<?php echo custom_field(ucpt_m_4_y3_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y3_m12" type="number" name="ucpt_m_4_y3_m12" value="<?php echo custom_field(ucpt_m_4_y3_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y4_m1" type="number" name="ucpt_m_4_y4_m1" value="<?php echo custom_field(ucpt_m_4_y4_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y4_m2" type="number" name="ucpt_m_4_y4_m2" value="<?php echo custom_field(ucpt_m_4_y4_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y4_m3" type="number" name="ucpt_m_4_y4_m3" value="<?php echo custom_field(ucpt_m_4_y4_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y4_m4" type="number" name="ucpt_m_4_y4_m4" value="<?php echo custom_field(ucpt_m_4_y4_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y4_m5" type="number" name="ucpt_m_4_y4_m5" value="<?php echo custom_field(ucpt_m_4_y4_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y4_m6" type="number" name="ucpt_m_4_y4_m6" value="<?php echo custom_field(ucpt_m_4_y4_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y4_m7" type="number" name="ucpt_m_4_y4_m7" value="<?php echo custom_field(ucpt_m_4_y4_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y4_m8" type="number" name="ucpt_m_4_y4_m8" value="<?php echo custom_field(ucpt_m_4_y4_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y4_m9" type="number" name="ucpt_m_4_y4_m9" value="<?php echo custom_field(ucpt_m_4_y4_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y4_m10" type="number" name="ucpt_m_4_y4_m10" value="<?php echo custom_field(ucpt_m_4_y4_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y4_m11" type="number" name="ucpt_m_4_y4_m11" value="<?php echo custom_field(ucpt_m_4_y4_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_4_y4_m12" type="number" name="ucpt_m_4_y4_m12" value="<?php echo custom_field(ucpt_m_4_y4_m12); ?>" />
				</td>
			</tr>
			<tr>
				<td>
					<input id="ucpt_measure_5" type="text" name="ucpt_measure_5" value="<?php echo custom_field(ucpt_measure_5); ?>" style="width: 250px" />
				</td>
				<td>
					<input id="ucpt_m_5_y1_m1" type="number" name="ucpt_m_5_y1_m1" value="<?php echo custom_field(ucpt_m_5_y1_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y1_m2" type="number" name="ucpt_m_5_y1_m2" value="<?php echo custom_field(ucpt_m_5_y1_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y1_m3" type="number" name="ucpt_m_5_y1_m3" value="<?php echo custom_field(ucpt_m_5_y1_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y1_m4" type="number" name="ucpt_m_5_y1_m4" value="<?php echo custom_field(ucpt_m_5_y1_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y1_m5" type="number" name="ucpt_m_5_y1_m5" value="<?php echo custom_field(ucpt_m_5_y1_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y1_m6" type="number" name="ucpt_m_5_y1_m6" value="<?php echo custom_field(ucpt_m_5_y1_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y1_m7" type="number" name="ucpt_m_5_y1_m7" value="<?php echo custom_field(ucpt_m_5_y1_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y1_m8" type="number" name="ucpt_m_5_y1_m8" value="<?php echo custom_field(ucpt_m_5_y1_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y1_m9" type="number" name="ucpt_m_5_y1_m9" value="<?php echo custom_field(ucpt_m_5_y1_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y1_m10" type="number" name="ucpt_m_5_y1_m10" value="<?php echo custom_field(ucpt_m_5_y1_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y1_m11" type="number" name="ucpt_m_5_y1_m11" value="<?php echo custom_field(ucpt_m_5_y1_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y1_m12" type="number" name="ucpt_m_5_y1_m12" value="<?php echo custom_field(ucpt_m_5_y1_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y2_m1" type="number" name="ucpt_m_5_y2_m1" value="<?php echo custom_field(ucpt_m_5_y2_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y2_m2" type="number" name="ucpt_m_5_y2_m2" value="<?php echo custom_field(ucpt_m_5_y2_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y2_m3" type="number" name="ucpt_m_5_y2_m3" value="<?php echo custom_field(ucpt_m_5_y2_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y2_m4" type="number" name="ucpt_m_5_y2_m4" value="<?php echo custom_field(ucpt_m_5_y2_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y2_m5" type="number" name="ucpt_m_5_y2_m5" value="<?php echo custom_field(ucpt_m_5_y2_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y2_m6" type="number" name="ucpt_m_5_y2_m6" value="<?php echo custom_field(ucpt_m_5_y2_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y2_m7" type="number" name="ucpt_m_5_y2_m7" value="<?php echo custom_field(ucpt_m_5_y2_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y2_m8" type="number" name="ucpt_m_5_y2_m8" value="<?php echo custom_field(ucpt_m_5_y2_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y2_m9" type="number" name="ucpt_m_5_y2_m9" value="<?php echo custom_field(ucpt_m_5_y2_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y2_m10" type="number" name="ucpt_m_5_y2_m10" value="<?php echo custom_field(ucpt_m_5_y2_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y2_m11" type="number" name="ucpt_m_5_y2_m11" value="<?php echo custom_field(ucpt_m_5_y2_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y2_m12" type="number" name="ucpt_m_5_y2_m12" value="<?php echo custom_field(ucpt_m_5_y2_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y3_m1" type="number" name="ucpt_m_5_y3_m1" value="<?php echo custom_field(ucpt_m_5_y3_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y3_m2" type="number" name="ucpt_m_5_y3_m2" value="<?php echo custom_field(ucpt_m_5_y3_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y3_m3" type="number" name="ucpt_m_5_y3_m3" value="<?php echo custom_field(ucpt_m_5_y3_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y3_m4" type="number" name="ucpt_m_5_y3_m4" value="<?php echo custom_field(ucpt_m_5_y3_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y3_m5" type="number" name="ucpt_m_5_y3_m5" value="<?php echo custom_field(ucpt_m_5_y3_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y3_m6" type="number" name="ucpt_m_5_y3_m6" value="<?php echo custom_field(ucpt_m_5_y3_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y3_m7" type="number" name="ucpt_m_5_y3_m7" value="<?php echo custom_field(ucpt_m_5_y3_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y3_m8" type="number" name="ucpt_m_5_y3_m8" value="<?php echo custom_field(ucpt_m_5_y3_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y3_m9" type="number" name="ucpt_m_5_y3_m9" value="<?php echo custom_field(ucpt_m_5_y3_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y3_m10" type="number" name="ucpt_m_5_y3_m10" value="<?php echo custom_field(ucpt_m_5_y3_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y3_m11" type="number" name="ucpt_m_5_y3_m11" value="<?php echo custom_field(ucpt_m_5_y3_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y3_m12" type="number" name="ucpt_m_5_y3_m12" value="<?php echo custom_field(ucpt_m_5_y3_m12); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y4_m1" type="number" name="ucpt_m_5_y4_m1" value="<?php echo custom_field(ucpt_m_5_y4_m1); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y4_m2" type="number" name="ucpt_m_5_y4_m2" value="<?php echo custom_field(ucpt_m_5_y4_m2); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y4_m3" type="number" name="ucpt_m_5_y4_m3" value="<?php echo custom_field(ucpt_m_5_y4_m3); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y4_m4" type="number" name="ucpt_m_5_y4_m4" value="<?php echo custom_field(ucpt_m_5_y4_m4); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y4_m5" type="number" name="ucpt_m_5_y4_m5" value="<?php echo custom_field(ucpt_m_5_y4_m5); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y4_m6" type="number" name="ucpt_m_5_y4_m6" value="<?php echo custom_field(ucpt_m_5_y4_m6); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y4_m7" type="number" name="ucpt_m_5_y4_m7" value="<?php echo custom_field(ucpt_m_5_y4_m7); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y4_m8" type="number" name="ucpt_m_5_y4_m8" value="<?php echo custom_field(ucpt_m_5_y4_m8); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y4_m9" type="number" name="ucpt_m_5_y4_m9" value="<?php echo custom_field(ucpt_m_5_y4_m9); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y4_m10" type="number" name="ucpt_m_5_y4_m10" value="<?php echo custom_field(ucpt_m_5_y4_m10); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y4_m11" type="number" name="ucpt_m_5_y4_m11" value="<?php echo custom_field(ucpt_m_5_y4_m11); ?>" />
				</td>
				<td>
					<input id="ucpt_m_5_y4_m12" type="number" name="ucpt_m_5_y4_m12" value="<?php echo custom_field(ucpt_m_5_y4_m12); ?>" />
				</td>
			</tr>
		</table>
	</div>
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
function group_header_fields_save_data( $group_id ) {
	global $bp, $wpdb;
	$plain_fields = array(
		'ucpt_measure_1',
		'ucpt_m_1_y1_m1',
		'ucpt_m_1_y1_m2',
		'ucpt_m_1_y1_m3',
		'ucpt_m_1_y1_m4',
		'ucpt_m_1_y1_m5',
		'ucpt_m_1_y1_m6',
		'ucpt_m_1_y1_m7',
		'ucpt_m_1_y1_m8',
		'ucpt_m_1_y1_m9',
		'ucpt_m_1_y1_m10',
		'ucpt_m_1_y1_m11',
		'ucpt_m_1_y1_m12',
		'ucpt_m_1_y2_m1',
		'ucpt_m_1_y2_m2',
		'ucpt_m_1_y2_m3',
		'ucpt_m_1_y2_m4',
		'ucpt_m_1_y2_m5',
		'ucpt_m_1_y2_m6',
		'ucpt_m_1_y2_m7',
		'ucpt_m_1_y2_m8',
		'ucpt_m_1_y2_m9',
		'ucpt_m_1_y2_m10',
		'ucpt_m_1_y2_m11',
		'ucpt_m_1_y2_m12',
		'ucpt_m_1_y3_m1',
		'ucpt_m_1_y3_m2',
		'ucpt_m_1_y3_m3',
		'ucpt_m_1_y3_m4',
		'ucpt_m_1_y3_m5',
		'ucpt_m_1_y3_m6',
		'ucpt_m_1_y3_m7',
		'ucpt_m_1_y3_m8',
		'ucpt_m_1_y3_m9',
		'ucpt_m_1_y3_m10',
		'ucpt_m_1_y3_m11',
		'ucpt_m_1_y3_m12',
		'ucpt_m_1_y4_m1',
		'ucpt_m_1_y4_m2',
		'ucpt_m_1_y4_m3',
		'ucpt_m_1_y4_m4',
		'ucpt_m_1_y4_m5',
		'ucpt_m_1_y4_m6',
		'ucpt_m_1_y4_m7',
		'ucpt_m_1_y4_m8',
		'ucpt_m_1_y4_m9',
		'ucpt_m_1_y4_m10',
		'ucpt_m_1_y4_m11',
		'ucpt_m_1_y4_m12',
		'ucpt_measure_2',
		'ucpt_m_2_y1_m1',
		'ucpt_m_2_y1_m2',
		'ucpt_m_2_y1_m3',
		'ucpt_m_2_y1_m4',
		'ucpt_m_2_y1_m5',
		'ucpt_m_2_y1_m6',
		'ucpt_m_2_y1_m7',
		'ucpt_m_2_y1_m8',
		'ucpt_m_2_y1_m9',
		'ucpt_m_2_y1_m10',
		'ucpt_m_2_y1_m11',
		'ucpt_m_2_y1_m12',
		'ucpt_m_2_y2_m1',
		'ucpt_m_2_y2_m2',
		'ucpt_m_2_y2_m3',
		'ucpt_m_2_y2_m4',
		'ucpt_m_2_y2_m5',
		'ucpt_m_2_y2_m6',
		'ucpt_m_2_y2_m7',
		'ucpt_m_2_y2_m8',
		'ucpt_m_2_y2_m9',
		'ucpt_m_2_y2_m10',
		'ucpt_m_2_y2_m11',
		'ucpt_m_2_y2_m12',
		'ucpt_m_2_y3_m1',
		'ucpt_m_2_y3_m2',
		'ucpt_m_2_y3_m3',
		'ucpt_m_2_y3_m4',
		'ucpt_m_2_y3_m5',
		'ucpt_m_2_y3_m6',
		'ucpt_m_2_y3_m7',
		'ucpt_m_2_y3_m8',
		'ucpt_m_2_y3_m9',
		'ucpt_m_2_y3_m10',
		'ucpt_m_2_y3_m11',
		'ucpt_m_2_y3_m12',
		'ucpt_m_2_y4_m1',
		'ucpt_m_2_y4_m2',
		'ucpt_m_2_y4_m3',
		'ucpt_m_2_y4_m4',
		'ucpt_m_2_y4_m5',
		'ucpt_m_2_y4_m6',
		'ucpt_m_2_y4_m7',
		'ucpt_m_2_y4_m8',
		'ucpt_m_2_y4_m9',
		'ucpt_m_2_y4_m10',
		'ucpt_m_2_y4_m11',
		'ucpt_m_2_y4_m12',
		'ucpt_measure_3',
		'ucpt_m_3_y1_m1',
		'ucpt_m_3_y1_m2',
		'ucpt_m_3_y1_m3',
		'ucpt_m_3_y1_m4',
		'ucpt_m_3_y1_m5',
		'ucpt_m_3_y1_m6',
		'ucpt_m_3_y1_m7',
		'ucpt_m_3_y1_m8',
		'ucpt_m_3_y1_m9',
		'ucpt_m_3_y1_m10',
		'ucpt_m_3_y1_m11',
		'ucpt_m_3_y1_m12',
		'ucpt_m_3_y2_m1',
		'ucpt_m_3_y2_m2',
		'ucpt_m_3_y2_m3',
		'ucpt_m_3_y2_m4',
		'ucpt_m_3_y2_m5',
		'ucpt_m_3_y2_m6',
		'ucpt_m_3_y2_m7',
		'ucpt_m_3_y2_m8',
		'ucpt_m_3_y2_m9',
		'ucpt_m_3_y2_m10',
		'ucpt_m_3_y2_m11',
		'ucpt_m_3_y2_m12',
		'ucpt_m_3_y3_m1',
		'ucpt_m_3_y3_m2',
		'ucpt_m_3_y3_m3',
		'ucpt_m_3_y3_m4',
		'ucpt_m_3_y3_m5',
		'ucpt_m_3_y3_m6',
		'ucpt_m_3_y3_m7',
		'ucpt_m_3_y3_m8',
		'ucpt_m_3_y3_m9',
		'ucpt_m_3_y3_m10',
		'ucpt_m_3_y3_m11',
		'ucpt_m_3_y3_m12',
		'ucpt_m_3_y4_m1',
		'ucpt_m_3_y4_m2',
		'ucpt_m_3_y4_m3',
		'ucpt_m_3_y4_m4',
		'ucpt_m_3_y4_m5',
		'ucpt_m_3_y4_m6',
		'ucpt_m_3_y4_m7',
		'ucpt_m_3_y4_m8',
		'ucpt_m_3_y4_m9',
		'ucpt_m_3_y4_m10',
		'ucpt_m_3_y4_m11',
		'ucpt_m_3_y4_m12',
		'ucpt_measure_4',
		'ucpt_m_4_y1_m1',
		'ucpt_m_4_y1_m2',
		'ucpt_m_4_y1_m3',
		'ucpt_m_4_y1_m4',
		'ucpt_m_4_y1_m5',
		'ucpt_m_4_y1_m6',
		'ucpt_m_4_y1_m7',
		'ucpt_m_4_y1_m8',
		'ucpt_m_4_y1_m9',
		'ucpt_m_4_y1_m10',
		'ucpt_m_4_y1_m11',
		'ucpt_m_4_y1_m12',
		'ucpt_m_4_y2_m1',
		'ucpt_m_4_y2_m2',
		'ucpt_m_4_y2_m3',
		'ucpt_m_4_y2_m4',
		'ucpt_m_4_y2_m5',
		'ucpt_m_4_y2_m6',
		'ucpt_m_4_y2_m7',
		'ucpt_m_4_y2_m8',
		'ucpt_m_4_y2_m9',
		'ucpt_m_4_y2_m10',
		'ucpt_m_4_y2_m11',
		'ucpt_m_4_y2_m12',
		'ucpt_m_4_y3_m1',
		'ucpt_m_4_y3_m2',
		'ucpt_m_4_y3_m3',
		'ucpt_m_4_y3_m4',
		'ucpt_m_4_y3_m5',
		'ucpt_m_4_y3_m6',
		'ucpt_m_4_y3_m7',
		'ucpt_m_4_y3_m8',
		'ucpt_m_4_y3_m9',
		'ucpt_m_4_y3_m10',
		'ucpt_m_4_y3_m11',
		'ucpt_m_4_y3_m12',
		'ucpt_m_4_y4_m1',
		'ucpt_m_4_y4_m2',
		'ucpt_m_4_y4_m3',
		'ucpt_m_4_y4_m4',
		'ucpt_m_4_y4_m5',
		'ucpt_m_4_y4_m6',
		'ucpt_m_4_y4_m7',
		'ucpt_m_4_y4_m8',
		'ucpt_m_4_y4_m9',
		'ucpt_m_4_y4_m10',
		'ucpt_m_4_y4_m11',
		'ucpt_m_4_y4_m12',
		'ucpt_measure_5',
		'ucpt_m_5_y1_m1',
		'ucpt_m_5_y1_m2',
		'ucpt_m_5_y1_m3',
		'ucpt_m_5_y1_m4',
		'ucpt_m_5_y1_m5',
		'ucpt_m_5_y1_m6',
		'ucpt_m_5_y1_m7',
		'ucpt_m_5_y1_m8',
		'ucpt_m_5_y1_m9',
		'ucpt_m_5_y1_m10',
		'ucpt_m_5_y1_m11',
		'ucpt_m_5_y1_m12',
		'ucpt_m_5_y2_m1',
		'ucpt_m_5_y2_m2',
		'ucpt_m_5_y2_m3',
		'ucpt_m_5_y2_m4',
		'ucpt_m_5_y2_m5',
		'ucpt_m_5_y2_m6',
		'ucpt_m_5_y2_m7',
		'ucpt_m_5_y2_m8',
		'ucpt_m_5_y2_m9',
		'ucpt_m_5_y2_m10',
		'ucpt_m_5_y2_m11',
		'ucpt_m_5_y2_m12',
		'ucpt_m_5_y3_m1',
		'ucpt_m_5_y3_m2',
		'ucpt_m_5_y3_m3',
		'ucpt_m_5_y3_m4',
		'ucpt_m_5_y3_m5',
		'ucpt_m_5_y3_m6',
		'ucpt_m_5_y3_m7',
		'ucpt_m_5_y3_m8',
		'ucpt_m_5_y3_m9',
		'ucpt_m_5_y3_m10',
		'ucpt_m_5_y3_m11',
		'ucpt_m_5_y3_m12',
		'ucpt_m_5_y4_m1',
		'ucpt_m_5_y4_m2',
		'ucpt_m_5_y4_m3',
		'ucpt_m_5_y4_m4',
		'ucpt_m_5_y4_m5',
		'ucpt_m_5_y4_m6',
		'ucpt_m_5_y4_m7',
		'ucpt_m_5_y4_m8',
		'ucpt_m_5_y4_m9',
		'ucpt_m_5_y4_m10',
		'ucpt_m_5_y4_m11',
		'ucpt_m_5_y4_m12',
	);
	foreach( $plain_fields as $field ) {
		$key = $field;
		if ( isset( $_POST[$key] ) ) {
			$value = $_POST[$key];
			groups_update_groupmeta( $group_id, $field, $value );
		}
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
					'name' => 'Raw Data',
					'create_step_position' => 20
				);
				parent::init( $args );
			}
			function settings_screen( $group_id ) {
				// don't remove this function
				echo "Additional settings are planned for the future. Stay tuned!";
			}    
			function display() {
				/* Use this function to display the actual content of your group extension when the nav item is selected */
				global $bp;
				if (custom_field('ucpt_measure_1') == "") {
					echo "This group has not yet set measures.";
				}
				if (custom_field('ucpt_measure_1') != "") {
				?>
				<div style="background-color:#009150; padding: 20px; margin-top: 10px; margin-bottom: 20px;">
				<div style="overflow-x:auto; background-color:#fff; padding:10px;">
					<table border="1" bordercolor="#ededed" width="100%" cellpadding="5">
						<tr>
							<th>Measurements</th>
							<th>January 2017</th>
							<th>February 2017</th>
							<th>March 2017</th>
							<th>April 2017</th>
							<th>May 2017</th>
							<th>June 2017</th>
							<th>July 2017</th>
							<th>August 2017</th>
							<th>September 2017</th>
							<th>October 2017</th>
							<th>November 2017</th>
							<th>December 2017</th>
							<th>January 2018</th>
							<th>February 2018</th>
							<th>March 2018</th>
							<th>April 2018</th>
							<th>May 2018</th>
							<th>June 2018</th>
							<th>July 2018</th>
							<th>August 2018</th>
							<th>September 2018</th>
							<th>October 2018</th>
							<th>November 2018</th>
							<th>December 2018</th>
							<th>January 2019</th>
							<th>February 2019</th>
							<th>March 2019</th>
							<th>April 2019</th>
							<th>May 2019</th>
							<th>June 2019</th>
							<th>July 2019</th>
							<th>August 2019</th>
							<th>September 2019</th>
							<th>October 2019</th>
							<th>November 2019</th>
							<th>December 2019</th>
							<th>January 2020</th>
							<th>February 2020</th>
							<th>March 2020</th>
							<th>April 2020</th>
							<th>May 2020</th>
							<th>June 2020</th>
							<th>July 2020</th>
							<th>August 2020</th>
							<th>September 2020</th>
							<th>October 2020</th>
							<th>November 2020</th>
							<th>December 2020</th>
						</tr>
						<tr>
							<td>
								<?php echo custom_field('ucpt_measure_1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y1_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y1_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y1_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y1_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y1_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y1_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y1_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y1_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y1_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y1_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y1_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y1_m12'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y2_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y2_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y2_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y2_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y2_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y2_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y2_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y2_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y2_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y2_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y2_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y2_m12'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y3_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y3_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y3_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y3_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y3_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y3_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y3_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y3_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y3_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y3_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y3_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y3_m12'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y4_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y4_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y4_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y4_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y4_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y4_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y4_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y4_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y4_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y4_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y4_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_1_y4_m12'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo custom_field('ucpt_measure_2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y1_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y1_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y1_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y1_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y1_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y1_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y1_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y1_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y1_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y1_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y1_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y1_m12'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y2_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y2_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y2_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y2_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y2_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y2_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y2_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y2_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y2_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y2_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y2_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y2_m12'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y3_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y3_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y3_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y3_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y3_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y3_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y3_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y3_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y3_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y3_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y3_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y3_m12'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y4_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y4_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y4_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y4_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y4_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y4_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y4_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y4_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y4_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y4_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y4_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_2_y4_m12'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo custom_field('ucpt_measure_3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y1_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y1_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y1_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y1_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y1_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y1_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y1_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y1_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y1_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y1_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y1_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y1_m12'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y2_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y2_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y2_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y2_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y2_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y2_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y2_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y2_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y2_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y2_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y2_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y2_m12'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y3_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y3_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y3_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y3_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y3_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y3_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y3_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y3_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y3_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y3_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y3_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y3_m12'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y4_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y4_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y4_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y4_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y4_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y4_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y4_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y4_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y4_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y4_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y4_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_3_y4_m12'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo custom_field('ucpt_measure_4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y1_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y1_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y1_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y1_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y1_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y1_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y1_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y1_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y1_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y1_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y1_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y1_m12'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y2_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y2_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y2_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y2_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y2_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y2_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y2_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y2_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y2_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y2_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y2_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y2_m12'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y3_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y3_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y3_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y3_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y3_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y3_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y3_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y3_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y3_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y3_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y3_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y3_m12'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y4_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y4_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y4_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y4_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y4_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y4_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y4_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y4_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y4_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y4_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y4_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_4_y4_m12'); ?>
							</td>
						</tr>
						<tr>
							<td>
								<?php echo custom_field('ucpt_measure_5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y1_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y1_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y1_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y1_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y1_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y1_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y1_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y1_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y1_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y1_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y1_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y1_m12'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y2_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y2_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y2_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y2_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y2_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y2_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y2_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y2_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y2_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y2_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y2_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y2_m12'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y3_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y3_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y3_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y3_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y3_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y3_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y3_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y3_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y3_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y3_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y3_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y3_m12'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y4_m1'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y4_m2'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y4_m3'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y4_m4'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y4_m5'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y4_m6'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y4_m7'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y4_m8'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y4_m9'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y4_m10'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y4_m11'); ?>
							</td>
							<td>
								<?php echo custom_field('ucpt_m_5_y4_m12'); ?>
							</td>
						</tr>
					</table>
				</div></div>
				<?php
				}
			}
		} // end of class
		bp_register_group_extension( 'UCPT_Data_Pages' );
		 
		endif;
}
	
add_filter('bp_groups_default_extension', 'add_page_to_group_data' );
	
?>
