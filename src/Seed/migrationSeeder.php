<?php

namespace App\Seed;
include "../includes/config.php";

$sql = "CREATE TABLE Persmissions (
     id INT NOT NULL AUTO_INCREMENT primary key,
     name varchar(255) NOT NULL UNIQUE,
     discription varchar(255) NULL UNIQUE, 
     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     
)";
if($db->exec($sql) == false){
    echo $db->errorInfo();
}
