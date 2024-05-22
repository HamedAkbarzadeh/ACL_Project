<?php

namespace App\database\migrations;


class Roles{

    function Role(){
        $sql ="CREATE TABLE Roles(
            id INT AUTO_INCREMENT PRIMARY KEY,
            name varchar(255) UNIQUE,
            description varchar(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
        )";
        return $sql;
    }
}