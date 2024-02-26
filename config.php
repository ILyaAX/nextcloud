<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'ocsem7hhg5rb',
  'passwordsalt' => 'HDQPWInWirS9VyNHaXG7eFzUluSFQS',
  'secret' => '+zXz0EYbHryXYezC0M0xzaYrXltBkGP6KqXL+LV0GH+2VsqA',
  'trusted_domains' => 
  array (
    0 => '<YOUR-DOMAIN1>',
    1 => '<YOUR-DOMAIN2>'
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'pgsql',
  'version' => '28.0.2.5',
  'overwrite.cli.url' => 'https://<YOUR-DOMAIN>',
  'overwriteprotocol' => 'https',
  'dbname' => 'nextcloud',
  'dbhost' => 'postgres-nextcloud',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'oc_ax',
  'dbpassword' => '<YOUR-PASS>',
  'installed' => true,
  'default_phone_region' => 'RU',
  'default_timezone' => 'Asia/Novosibirsk',
  'auth.bruteforce.protection.enabled' => true,
  'maintenance_window_start' => 2,
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'redis-nextcloud',
    'password' => '<YOUR-REDIS-PASS>',
    'port' => 6379,
  ),
  'app_install_overwrite' => 
  array (
    0 => 'ncdownloader',
    1 => 'ocdownloader',
  ),
);
