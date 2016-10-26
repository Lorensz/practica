<?php
  define('HTTP_SERVER', 'http://localhost');
  define('HTTPS_SERVER', 'http://localhost');
  define('ENABLE_SSL', false);
  define('HTTP_COOKIE_DOMAIN', 'localhost');
  define('HTTPS_COOKIE_DOMAIN', 'localhost');
  define('HTTP_COOKIE_PATH', '/toma/');
  define('HTTPS_COOKIE_PATH', '/toma/');
  define('DIR_WS_HTTP_CATALOG', '/toma/');
  define('DIR_WS_HTTPS_CATALOG', '/toma/');
  define('DIR_WS_IMAGES', 'images/');

  define('DIR_WS_DOWNLOAD_PUBLIC', 'pub/');
  define('DIR_FS_CATALOG', 'C:/xampp/apache/conf/htdocs/toma/');
  define('DIR_FS_ADMIN', 'admin/');
  define('DIR_FS_WORK', 'C:/xampp/apache/conf/htdocs/toma/includes/work/');
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
  define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');
  define('DIR_FS_BACKUP', 'C:/xampp/apache/conf/htdocs/toma/' . DIR_FS_ADMIN . 'backups/');
  define('DIR_FS_CACHE', DIR_FS_CATALOG . 'cache/');
  define('DIR_FS_CACHE_ADMIN', DIR_FS_CACHE . DIR_FS_ADMIN);

  define('DB_SERVER', 'localhost');
  define('DB_SERVER_USERNAME', 'root');
  define('DB_SERVER_PASSWORD', '');
  define('DB_DATABASE', 'toma');
  define('DB_DATABASE_CLASS', 'mysql');
  define('DB_TABLE_PREFIX', 'toc_');
  define('USE_PCONNECT', 'false');
  define('STORE_SESSIONS', 'mysql');
?>