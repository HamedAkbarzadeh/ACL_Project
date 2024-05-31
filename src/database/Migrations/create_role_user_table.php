<?php

namespace App\Database\Migrations;

class Create_role_user_table{
    function role_user_table(){
        $sql = "CREATE TABLE role_user(
            user_id INT,
            role_id INT, 
            CONSTRAINT fk_user_id2 FOREIGN KEY (user_id) REFERENCES users(id),
            CONSTRAINT fk_role_id FOREIGN KEY (role_id) REFERENCES roles(id)
            )";
            return $sql;
    }
}
