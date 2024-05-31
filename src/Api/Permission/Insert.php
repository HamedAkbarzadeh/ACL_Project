<?php

namespace App\Api\Permission;
use App\Core\Permission;

//header
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//initializing our api
include_once('../../core/initialize.php');


$data = array(
    'name' => $_POST['name'],
    'status' => $_POST['status'],
    'description' => $_POST['description'],
);

$new_permission = new Permission($db);

$new_permission->insert($data);
if($new_permission == true){
    echo "permission has been added successfully";
}else{
    echo "was not successfully";
}
