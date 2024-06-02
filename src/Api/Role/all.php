<?php

namespace App\Api\Role;

require "../../core/initialize.php";

use App\Core\Role;

//header
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');


$role = new Role($db);

var_dump($role->all('roles')->get());