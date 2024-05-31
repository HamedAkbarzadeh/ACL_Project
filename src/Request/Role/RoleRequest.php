<?php

namespace App\Request\Role;

class RoleRequest
{
    private $name;
    private $status;
    private $description;

    function __construct(array $data)
    {
        $this->name = $data['name'];
        $this->status = $data['status'];
        $this->description = $data['description'];
    }
    function validate()
    {
        $HasError = 0;
        if (!preg_match("/^[a-zA-z]*$/", $this->name)) {
            $ErrMsg = "Only alphabets and whitespace are allowed For name." .PHP_EOL;
            echo $ErrMsg;
            $HasError++;
        } 

        if (!preg_match("/^[0-1]$/", $this->status)) {
            $ErrMsg = "Only numeric (0-1) value is allowed For status.".PHP_EOL;
            echo $ErrMsg;
            $HasError++; 
        } 
        if (!preg_match("/^[a-zA-z\s]*$/", $this->description)) {
            $ErrMsg = "Only alphabets and whitespace are allowed For description.".PHP_EOL;
            echo $ErrMsg;
            $HasError++;
        }
 
        return $HasError == 0 ? true : false;
    }
}
