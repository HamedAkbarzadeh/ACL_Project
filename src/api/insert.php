<?php

namespace App\api;
use App\core\Permission;

//header
header('Access-Control_Allow_Origin: *');
header('Content-Type: application/json');

//initializing our api
include_once('../core/initialize.php');


$data = array(
    'name' => $_POST['name'],
    'status' => $_POST['status'],
    'date' => date('Y-m-d H:i:s'),
);

$new_permission = new Permission($db);

$new_permission->insert($data);
if($new_permission == true){
    echo "permission has been added successfully";
}else{
    echo "was not successfully";
}
