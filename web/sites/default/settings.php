<?php


$databases = array();
/**
*/

$config_directories = array();


$settings['hash_salt'] = 'tq4lTqpfTnnn9bN0A6BIujVBQsHBgreP2vTuLq6XsFbmrlx6kzsDUi40V6pORWv6YohNhhUOEg';


$settings['update_free_access'] = FALSE;


$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';


$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

/**
 * The default number of entities to update in a batch process.
 *
 * This is used by update and post-update functions that need to go through and
 * change all the entities on a site, so it is useful to increase this number
 * if your hosting configuration (i.e. RAM allocation, CPU speed) allows for a
 * larger number of entities to be processed in a single batch run.
 */
$settings['entity_update_batch_size'] = 50;



$config_directories['sync'] = '../config/sync';
$databases['default']['default'] = array (
  'database' => 'drupal8site',
  'username' => 'root',
  'password' => 'all4Jesus',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

$settings['install_profile'] = 'standard';


/**
 * Load local development override configuration, if available.
 *
 * Use settings.local.php to override variables on secondary (staging,
 * development, etc) installations of this site. Typically used to disable
 * caching, JavaScript/CSS compression, re-routing of outgoing emails, and
 * other things that should not happen on development and testing sites.
 *
 * Keep this code block at the end of this file to take full effect.
 */
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
   include $app_root . '/' . $site_path . '/settings.local.php';
}
