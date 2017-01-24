<?php
/************************************************/
/*	DEFINED										*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/************************************************/


// Create the file directory separatpr as a short variable so this 
// application can be on either Windows or Unix hosting.

defined('DS') ? null : define('DS' , DIRECTORY_SEPARATOR);

// This identifies the cloation of the include files from the perspective of 
// the hard drive.

defined('DOC_ROOT') ? null : define('DOC_ROOT' ,'/var/www/html/php/itp240/htdocsInclude/MyApplicationFramework/');

defined('WEB_ROOT') ? null : define('WEB_ROOT' , 'MyAppcatioinFramework/');

/************************************************/
/*	Require Once								*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/************************************************/

require_once(DOC_ROOT . 'functions.php');
?>