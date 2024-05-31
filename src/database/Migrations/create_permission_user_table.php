<?php

namespace App\Database\Migrations;

class Create_permission_user_table{
    function permission_user_table(){
        $sql = "CREATE TABLE permission_user(
            user_id INT,
            permission_id INT,

            CONSTRAINT fk_user_id FOREIGN KEY (user_id) REFERENCES users(id),
            CONSTRAINT fk_permission_id FOREIGN KEY (permission_id) REFERENCES permissions(id)
            )";
            return $sql;
    }
}
