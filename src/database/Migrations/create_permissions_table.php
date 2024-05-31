<?php
namespace App\Database\Migrations;


class create_permissions_table{
   
    function PermissionTable(){
        $sql = "CREATE TABLE Permissions(
            id INT AUTO_INCREMENT PRIMARY KEY,
            name varchar(255) NOT NULL UNIQUE,
            status TINYINT DEFAULT 0,
            description varchar(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP  
        )";
        return $sql;
    }
}