<?php 
namespace App\database\seeders;

require "../../../vendor/autoload.php";
include "../../includes/config.php"; 

use PDO;
use App\database\migrations\Roles;

class DatabaseSeeder{
    
    private $db;
    function __construct(PDO $db){
        $this->db = $db;
    }
    function tableExists($tableName) {
        $query = $this->db->prepare("SELECT COUNT(*)
                                     FROM information_schema.tables 
                                     WhERE table_name = :table_name");
        $query->execute([
            'table_name' => $tableName
        ]);

        return $query->fetchColumn() > 0;
    }
    function CreateTableRole(){
        $role = new Roles();
        $sql = $role->Role();
        if($this->tableExists('roles')){
            echo "roles table is exists in database";
            return;
        }
        if($this->db->exec($sql)){
            echo "successfully added role Table";
        }else{
            echo "Failed to Create Table";
        }
    }
    
    
}

$db = \App\includes\getDBConnection();
$seed = new DatabaseSeeder($db);
$seed->CreateTableRole();