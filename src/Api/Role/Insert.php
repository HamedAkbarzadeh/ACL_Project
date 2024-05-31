<?php
namespace App\Api\Permission;

require "../../core/initialize.php";
use App\Core\Role;
use App\Request\Role\RoleRequest;

//header
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');


$role = new Role($db);

$data =[
    'name' => $_POST['name'],
    'status' => $_POST['status'],
    'description' => $_POST['description'],
];

$roleRequest = new RoleRequest($data);
$result = $roleRequest->validate();

if($result){
    $new_role = $role->insert($data);

    if($new_role == true){
        echo "role has been added successfully";
    }else{
        echo "was not successfully";
    }
}
