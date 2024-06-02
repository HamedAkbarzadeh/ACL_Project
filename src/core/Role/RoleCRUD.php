<?php 

namespace App\Core;

require_once "../../Services/Trait/ConditionSqlTrait.php";

use ConditionSqlTrait;
use PDO;

class Role{
    
    use ConditionSqlTrait;


    private $name; 
    private $description; 
    private $status; 
    private $conn;
 

    function __construct($db){
        $this->conn = $db;
    }
    
    function insert($data){
        $this->name = $data['name'];
        $this->description = $data['description'];
        $this->status = $data['status'];
        
        $query = "INSERT INTO `roles` (`id` , `name` , `status` , `description` , `created_at`) VALUES (NULL , ? , ? , ? , ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1,$this->name);
        $stmt->bindValue(2,$this->status);
        $stmt->bindValue(3,$this->description);
        $stmt->bindValue(4,time());
        return $stmt->execute();
    } 
}