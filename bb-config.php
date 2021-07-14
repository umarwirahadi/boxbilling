<?php 
return array (
  'debug' => false,
  'salt' => '40a9c7820c155217dd815497e6d2819f',
  'url' => 'http://localhost',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => true,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => '/usr/src/myapp/bb-data',
  'path_logs' => '/usr/src/myapp/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'mysql-server',
    'name' => 'boxbillingdb',
    'user' => 'root',
    'password' => 'rahasiaumum'
    // 'port'=>'3308'
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => '/usr/src/myapp/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);