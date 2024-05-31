<?php

namespace App\Database\Migrations;


class create_roles_table{

    function RoleTable(){
        $sql ="CREATE TABLE Roles(
            id INT AUTO_INCREMENT PRIMARY KEY,
            name varchar(255) UNIQUE,
            status TINYINT DEFAULT 0, 
            description varchar(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
        )";
        return $sql;
    }
}