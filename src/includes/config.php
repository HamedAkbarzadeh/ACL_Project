<?php

namespace App\Includes;

use PDO;

function getDBConnection()
{

    $db_username = 'root';
    $db_password = '';
    $db_name = 'acl_project';
    $db_host = '127.0.0.1:3307';

    $db = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8', $db_username, $db_password);

    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $db;
}
define('APP_NAME', 'PHP REST API TUTORIAL');
