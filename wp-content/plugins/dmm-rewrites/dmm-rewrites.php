<?php
/**
 * @package dmm_rewrites
 * @version 0.99
 */
/*
Plugin Name: DMM Rewrites
Description: This plugin is used to add custom rewrite rules to this instance of Wordpress.
Author: Tim Hysniu
Version: 0.99
*/

function dmm_rewrites_add_query_vars($aVars) {
	$aVars[] = "BoatID";
	$aVars[] = "BoatModel";
	return $aVars;
}
add_filter('query_vars', 'dmm_rewrites_add_query_vars');

function dmm_rewrites_add_rewrite_rules($aRules) {
	$aNewRules = array('boat-details/([^/]*)/([0-9]+)$' => 'index.php?page_id=123&BoatID=$matches[2]&BoatModel=$matches[1]');
	$aRules = $aNewRules + $aRules;
	return $aRules;
}
add_filter('rewrite_rules_array', 'dmm_rewrites_add_rewrite_rules');

function dmm_rewrites_activate()
{
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'dmm_rewrites_activate' );

?>
