<?php
namespace App\database\migrations;

include "../../includes/config.php";

class CreateDatabase{
    private $databaseName;
    function __construct($databaseName){
        $this->databaseName = $databaseName;
    }
    function createDatabase(){
        $sql = "CREATE DATABASE ".$this->databaseName;
        return $sql;
    }
}