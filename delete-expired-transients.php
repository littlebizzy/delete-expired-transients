<?php
/*
Plugin Name: Delete Expired Transients
Plugin URI: https://www.littlebizzy.com/plugins/delete-expired-transients
Description: Deletes all expired transients upon activation and on a daily basis thereafter via WP-Cron to maintain a cleaner database and improve performance.
Version: 1.0.1
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Prefix: DLEXTR
*/

// Plugin namespace
namespace LittleBizzy\DeleteExpiredTransients;

// Admin Notices module
require_once dirname(__FILE__).'/admin-notices.php';
DLEXTR_Admin_Notices::instance(__FILE__);

/**
 * Admin Notices Multisite check
 * Uncomment //return to disable this plugin on Multisite installs
 */
require_once dirname(__FILE__).'/admin-notices-ms.php';
if (false !== \LittleBizzy\DeleteExpiredTransients\Admin_Notices_MS::instance(__FILE__)) {
	//return;
}

// Block direct calls
if (!function_exists('add_action'))
	die;

// Plugin constants
const FILE = __FILE__;
const PREFIX = 'dlextr';
const VERSION = '1.0.1';

// Loader
require_once dirname(FILE).'/helpers/loader.php';

// Run the main class
Helpers\Runner::start('Core\Core', 'instance');
