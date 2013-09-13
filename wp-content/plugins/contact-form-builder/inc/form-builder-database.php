<?php
/**
 * @package WordPress
 * @subpackage Contact Form Builder Plugin
 * @since Contact Form Builder 1.0
 * 
 * Contact Form Builder Install/Uninstall Function
 * Created by CMSMasters
 * 
 */


function form_builder_install() {
	global $wpdb;
	
	
	$table = $wpdb->prefix . 'cmsms_forms';
	
	$sql = "CREATE TABLE IF NOT EXISTS $table ( 
		id INT(4) UNSIGNED NOT NULL AUTO_INCREMENT, 
		number INT(4) NOT NULL, 
		slug VARCHAR(255) NOT NULL, 
		parent_slug VARCHAR(255) NOT NULL, 
		type VARCHAR(20) NOT NULL, 
		label VARCHAR(255) NOT NULL, 
		value TEXT NULL, 
		description TEXT NULL, 
		parameters VARCHAR(255) NULL, 
		UNIQUE KEY id (id) 
	) DEFAULT CHARSET = utf8;";
	
	
	$wpdb->query($sql);
}



function form_builder_uninstall() {
	global $wpdb;
	
	
	$table = $wpdb->prefix . 'cmsms_forms';
	
	$sql = "DROP TABLE IF EXISTS " . $table;
	
	
	$wpdb->query($sql);
}

