<?php
/**
 * @package WordPress
 * @subpackage Contact Form Builder Plugin
 * @since Contact Form Builder 1.0
 * 
 * Contact Form Builder Operator
 * Created by CMSMasters
 * 
 */


header('Content-type:text/html; charset=utf-8');


require('../../../../wp-load.php');


global $wpdb;


if ($_POST['type'] == 'form') {
    if ($_POST['option'] == 'try' && $_POST['data']) {
        $data = $_POST['data'];
        
        $try = $wpdb->get_results("SELECT slug FROM " . $wpdb->prefix . "cmsms_forms WHERE type = 'form' AND slug='" . $data . "'");
        
        echo $try[0]->slug;
    } elseif ($_POST['option'] == 'delete' && $_POST['data']) {
        $data = $_POST['data'];
        
        if ($wpdb->get_var("SELECT id FROM " . $wpdb->prefix . "cmsms_forms WHERE type = 'form' AND slug = '" . $data . "'") != '') {
            $wpdb->query("DELETE FROM " . $wpdb->prefix . "cmsms_forms WHERE parent_slug='" . $data . "'");
        } else {
            echo 'error';
        }
    } elseif ($_POST['option'] == 'edit' && $_POST['data']) {
        $data = $_POST['data'];
        
        if ($wpdb->get_var("SELECT id FROM " . $wpdb->prefix . "cmsms_forms WHERE type = 'form' AND slug = '" . $data . "'") != '') {
            $results = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "cmsms_forms WHERE parent_slug='" . $data . "' ORDER BY number ASC");
            
            for ($i = 0; $i < sizeof($results); $i++) {
                $results[$i]->value = unserialize($results[$i]->value);
                $results[$i]->description = unserialize($results[$i]->description);
                $results[$i]->parameters = unserialize($results[$i]->parameters);
            }
            
            $out = json_encode($results);
            
            echo $out;
        } else {
            echo 'error';
        }
    }
} elseif ($_POST['type'] == 'fields') {
    if ($_POST['option'] == 'add' && $_POST['data']) {
        $data = json_decode(stripslashes($_POST['data']));
        
        if ($wpdb->get_var("SELECT id FROM " . $wpdb->prefix . "cmsms_forms WHERE type = 'form' AND slug = '" . $data[0]->slug . "'") == '') {
            foreach ($data as $data_cell) {
                $wpdb->query($wpdb->insert($wpdb->prefix . 'cmsms_forms', array('number' => $data_cell->number, 'slug' => $data_cell->slug, 'parent_slug' => $data_cell->parent_slug, 'type' => $data_cell->type, 'label' => $data_cell->label, 'value' => serialize($data_cell->value), 'description' => serialize($data_cell->description), 'parameters' => serialize($data_cell->parameters)), array('%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s')));
            }
        } else {
            echo 'error';
        }
    } elseif ($_POST['option'] == 'delete' && $_POST['data']) {
        $data = $_POST['data'];
        
        if ($wpdb->get_var("SELECT slug FROM " . $wpdb->prefix . "cmsms_forms WHERE id = '" . $data . "'") != '') {
            $wpdb->query("DELETE FROM " . $wpdb->prefix . "cmsms_forms WHERE id='" . $data . "'");
        } else {
            echo 'error';
        }
    } elseif ($_POST['option'] == 'update' && $_POST['data']) {
        $data = json_decode(stripslashes($_POST['data']));
        
        if ($wpdb->get_var("SELECT id FROM " . $wpdb->prefix . "cmsms_forms WHERE type = 'form' AND slug = '" . $data[0]->slug . "'") != '') {
            foreach ($data as $data_cell) {
                if ($data_cell->id != '') {
                    $wpdb->query($wpdb->update($wpdb->prefix . 'cmsms_forms', array('number' => $data_cell->number, 'slug' => $data_cell->slug, 'parent_slug' => $data_cell->parent_slug, 'type' => $data_cell->type, 'label' => $data_cell->label, 'value' => serialize($data_cell->value), 'description' => serialize($data_cell->description), 'parameters' => serialize($data_cell->parameters)), array('id' => $data_cell->id), array('%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s'), array('%d')));
                } else {
                    $wpdb->query($wpdb->insert($wpdb->prefix . 'cmsms_forms', array('number' => $data_cell->number, 'slug' => $data_cell->slug, 'parent_slug' => $data_cell->parent_slug, 'type' => $data_cell->type, 'label' => $data_cell->label, 'value' => serialize($data_cell->value), 'description' => serialize($data_cell->description), 'parameters' => serialize($data_cell->parameters)), array('%d', '%s', '%s', '%s', '%s', '%s', '%s', '%s')));
                }
            }
        } else {
            echo 'error';
        }
    } else {
        echo 'error';
    }
}

