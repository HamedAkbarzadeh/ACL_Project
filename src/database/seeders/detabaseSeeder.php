<?php 
namespace App\Database\Seeders;

require "../../../vendor/autoload.php";
include "../../includes/config.php";

use App\database\migrations\create_permission_role_table;
use App\database\migrations\Create_permission_user_table;
use App\database\migrations\create_permissions_table;
use App\database\migrations\Create_role_user_table;
use App\database\migrations\create_roles_table;
use App\database\migrations\create_users_table;
use PDO;

class DatabaseSeeder{
    
    private $db;
    function __construct(PDO $db){
        $this->db = $db;
    }
    function tableExists($tableName) {
        $query = $this->db->prepare("SELECT COUNT(*)
                                     FROM information_schema.tables 
                                     WHERE table_name = :table_name");
        $query->execute([
            'table_name' => $tableName
        ]);

        return $query->fetchColumn() > 0;
    }

    // /// migrations Tables /// //

    //role
    function CreateTableRole(){
        $role = new create_roles_table();
        $sql = $role->RoleTable();
        // if($this->tableExists('roles')){
        //     echo "roles table is exists in database" . PHP_EOL;
        //     return;
        // }
        if($this->db->exec($sql)){
            echo "successfully ti added roles Table" . PHP_EOL;
        }else{
            echo "Failed to Create Table" . PHP_EOL;
        }
    }
    
    //permission
    function createTablePermission(){
        $permission = new create_permissions_table();
        $sql = $permission->PermissionTable();
        // if($this->tableExists('permissions')){
        //     echo "permissions table is exists in database " . PHP_EOL;
        //     return;
        // }
        if($this->db->exec($sql)){
            echo "successfully to added permissions Table" . PHP_EOL;
        }else{
            echo "Failed to Create Permissions Table" . PHP_EOL;
        }
    }

    //permission_role
    function createTablePermission_role(){
        $permissions_role = new create_permission_role_table();
        $sql = $permissions_role->permission_roleTable();
        // if($this->tableExists('permission_role')){
        //     echo "permission_role table is exists in database " . PHP_EOL;
        //     return;
        // }
        if($this->db->exec($sql)){
            echo "successfully to added permission_role Table" . PHP_EOL;
        }else{
            echo "Failed to Create permission_role Table" . PHP_EOL;
        }
    }
    
    //users
    function createTableUsers(){
        $users = new create_users_table();
        $sql = $users->UserTable();
        // if($this->tableExists('users')){
        //     echo "users table is exists in database " . PHP_EOL;
        //     return;
        // }
        if($this->db->exec($sql)){
            echo "successfully to added users Table" . PHP_EOL;
        }else{
            echo "Failed to Create users Table" . PHP_EOL;
        }
    }
    
    //permission_user
    function createTablePermission_user(){
        $permission_user = new Create_permission_user_table();
        $sql = $permission_user->permission_user_table();
        // if($this->tableExists('permission_user')){
        //     echo "permission_user table is exists in database " . PHP_EOL;
        //     return;
        // }
        if($this->db->exec($sql)){
            echo "successfully to added permission_user Table" . PHP_EOL;
        }else{
            echo "Failed to Create permission_user Table" . PHP_EOL;
        }
    }

    //role_user
    function createTableRole_user(){
        $role_user = new Create_role_user_table();
        $sql = $role_user->role_user_table();
        // if($this->tableExists('role_user')){
        //     echo "role_user table is exists in database " . PHP_EOL;
        //     return;
        // }
        if($this->db->exec($sql)){
            echo "successfully to added role_user Table" . PHP_EOL;
        }else{
            echo "Failed to Create role_user Table" . PHP_EOL;
        }
    }
}

$db = \App\includes\getDBConnection();
$seed = new DatabaseSeeder($db);
// $seed->CreateTableRole();
// $seed->createTablePermission();
// $seed->createTablePermission_role();
// $seed->createTableUsers();
// $seed->createTablePermission_user();
// $seed->createTableRole_user();