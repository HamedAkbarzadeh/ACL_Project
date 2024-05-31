<?php

namespace App\Database\Migrations;

class create_permission_role_table{
    function permission_roleTable(){
        $sql = "CREATE TABLE permission_role(
            permission_id INT,
            role_id INT,
            CONSTRAINT fk_permission FOREIGN KEY (permission_id) REFERENCES Permissions(id),
            CONSTRAINT fk_role FOREIGN KEY (role_id) REFERENCES Roles(id)
        )";

        return $sql;
    } 
}