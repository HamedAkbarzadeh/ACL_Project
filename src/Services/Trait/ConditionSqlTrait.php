<?php

trait ConditionSqlTrait{
    private $sql;
    private $data;
    function all($tableName){
        $this->sql = "SELECT * FROM $tableName ";
        $stmt = $this->conn->prepare($this->sql);
        $stmt->execute();
        
        $this->data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($stmt->rowCount() > 0){
            return $this; 
        }
        return null;
        }
    function where($var , $condition , $value){
        $this->sql .= "WHERE $var $condition '$value' ";
        $stmt = $this->conn->prepare($this->sql);
        $stmt->execute();
        
        $this->data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($stmt->rowCount() > 0){
            return $this; 
        }
        return null;
    }
    function AndWhere($variable , $condtiotion , $value){
        $this->sql .= "AND $variable $condtiotion $value ";
        $stmt = $this->conn->prepare($this->sql);
        $stmt->execute();
        $this->data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($stmt->rowCount() > 0){
            return $this; 
        }
        return null;
    }

    function OrWhere($variable , $condtiotion , $value){
        $this->sql .= "OR $variable $condtiotion $value ";
        $stmt = $this->conn->prepare($this->sql);
        $stmt->execute();
        $this->data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($stmt->rowCount() > 0){
            return $this; 
        }
        return null;
    }
    function get(){
        return $this->data;
    }
}