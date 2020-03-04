<?php

date_default_timezone_set('Europe/Budapest');

// ******************* TODO *******************
// - Billingo-t beintegrálni a KM_MVC
// - PayLike-ot beintegrálni a KM_MVC
// ********************************************

// Config file
$KM_Config = array();

// gyökérkönyvtár elérési útvonal
$KM_Config['site_name']         = "SITE_NAME";
$KM_Config['site_url']          = "SITE_URL";

// adatbázis beállítások
$KM_Config['host']      = 'localhost';
$KM_Config['username']  = 'username';
$KM_Config['password']  = 'password';
$KM_Config['database']  = 'database';

// debug info
$KM_Config['debug_mode']  = true;

// SMTP Config
$KM_Config['smtp_host']         = 'HOST';
$KM_Config['smtp_secure']       = 'tls';
$KM_Config['smtp_port']         =  587;
$KM_Config['smtp_username']     = 'EMAIL';
$KM_Config['smtp_password']     = 'PASSWORD';
$KM_Config['smtp_from_email']   = 'EMAIL';
$KM_Config['smtp_from_name']    = 'NAME';
$KM_Config['smtp_reply_email']  = 'EMAIL';

// API SECRET
$KM_Config['api_secret']  = "random";

// DEFINE - ezzel nem kell foglalkozni, csak ha új beállítást adunk hozzá!
define("SITE_NAME", $KM_Config['site_name']);
define("SITE_URL", $KM_Config['site_url']);
define("DB_HOST", $KM_Config['host']);
define("DB_USERNAME", $KM_Config['username']);
define("DB_PASSWORD", $KM_Config['password']);
define("DB_DATABASE", $KM_Config['database']);
define("DEBUG_MODE", $KM_Config['debug_mode']);
define("SMTP_HOST", $KM_Config['smtp_host']);
define("SMTP_SECURE", $KM_Config['smtp_secure']);
define("SMTP_PORT", $KM_Config['smtp_port']);
define("SMTP_USERNAME", $KM_Config['smtp_username']);
define("SMTP_PASSWORD", $KM_Config['smtp_password']);
define("SMTP_FROM_EMAIL", $KM_Config['smtp_from_email']);
define("SMTP_FROM_NAME", $KM_Config['smtp_from_name']);
define("SMTP_REPLY_EMAIL", $KM_Config['smtp_reply_email']);
define("API_SECRET", $KM_Config['api_secret']);