<?php 
namespace App\Database\Migrations;

class create_users_table{

    function UserTable(){
        $sql = "CREATE TABLE users(
            id INT AUTO_INCREMENT PRIMARY KEY,
            firs_name varchar(255) NULL,
            last_name varchar(255) NULL,
            mobile varchar(255) NULL UNIQUE,
            email varchar(255) NOT NULL UNIQUE,
            password varchar(255) NOT NULL
        )";
        return $sql;
    }
}