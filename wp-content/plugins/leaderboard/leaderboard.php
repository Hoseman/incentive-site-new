<?php
/**
* Plugin Name: Leaderboard v1.1
* Plugin URI: http://www.hosegood.10995.co.uk
* Description: Leaderboard plugin v1.1
* Author: Andrew Hosegood
* Author URI: http://www.achcreative.net
* Version: 1.1
* License: GPLv2
*/
session_start();

require_once(plugin_dir_path(__FILE__) . '/includes/leaderboard-results-admin.php');//admin page for the points results
require_once(plugin_dir_path(__FILE__) . '/includes/leaderboard-ajax.php');//page that handles ajax stuff
require_once(plugin_dir_path(__FILE__) . '/includes/leaderboard-scripts.php');//css and js files
require_once(plugin_dir_path(__FILE__) . '/includes/leaderboard-shortcodes.php');
require_once(plugin_dir_path(__FILE__) . '/includes/leaderboard-admin.php');//admin page




?>