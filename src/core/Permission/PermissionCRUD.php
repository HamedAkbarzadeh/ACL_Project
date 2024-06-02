<?php
namespace App\Core;

use ConditionSqlTrait;

require_once "../../Services/Trait/ConditionSqlTrait.php";

class Permission{
    
    use ConditionSqlTrait;


    private $name;
    private $status;
    private $description;
    private $conn;
    

    public function __construct($db){
        $this->conn = $db;
    }

    public function insert($data){
        $this->name = $data['name'];
        $this->status = $data['status']; 
        $this->description = $data['description'];

        $query = "INSERT INTO `permissions` (`id` , `name` , `status` , `description` , `created_at`) VALUES (NULL , ? , ? , ? , ?)";
        $result = $this->conn->prepare($query);
        $result->bindValue(1 , $this->name);
        $result->bindValue(2 , $this->status);
        $result->bindValue(3 , $this->description);
        $result->bindValue(4 , time());
        if($result->execute()){
            return true;
        }else{
            return false;
        }
    } 
}