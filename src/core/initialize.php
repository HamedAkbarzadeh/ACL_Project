<?php
namespace App\Core;

defined('DS') ? null : define('DS' , DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT' ,DS.'xampp'.DS.'htdocs'.DS."PHP".DS.'ACL_Project'.DS.'src');


// include files
defined('INC_PATH') ? null : define('INC_PATH' , SITE_ROOT.DS.'includes');
// code files
defined('CORE_PATH') ? null : define('CORE_PATH' , SITE_ROOT.DS.'core');

require SITE_ROOT.DS."../vendor/autoload.php";
//load the config file first
    require_once(INC_PATH.DS."config.php");
    $db = \App\includes\getDBConnection();
    //core class
    require_once(CORE_PATH.DS."permission".DS."Permission.php");
    require_once(CORE_PATH.DS."role".DS."Role.php");

?>