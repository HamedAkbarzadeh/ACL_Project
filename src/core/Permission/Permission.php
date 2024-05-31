<?php
namespace App\Core;


class Permission{
    
    private $name;
    private $status;
    private $description;
    private $date;
    private $conn;
    

    public function __construct($db){
        $this->conn = $db;
    }

    public function insert($data){
        $this->name = $data['name'];
        $this->status = $data['status'];
        $this->date = $data['date'];
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
    public function readAll(){
        
    }

}