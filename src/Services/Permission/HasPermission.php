<?php

include "../../includes/config.php";
class HasPermission
{
    private $conn;
    function __construct()
    {
        $this->conn = \App\Includes\getDBConnection();
    }
    function HasPermission($user_id, $permission_id)
    {
        if ($this->InUserPermissions($user_id, $permission_id) || $this->PermissionTroughInRole($user_id, $permission_id)) {
            return 1;
        }
        return 0;
    }
    function PermissionTroughInRole($user_id, $permission_id)
    { 
        $sql = "SELECT * FROM role_user r
        JOIN permission_role p
        on r.role_id = p.role_id AND r.user_id = ? AND p.permission_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $user_id);
        $stmt->bindValue(2, $permission_id);
        $stmt->execute();
        $result = $stmt->fetch();
        if ($result != null) {
            return true;
        }
        return false;
    }
    function InUserPermissions($user_id, $permission_id)
    {
        $sql = "SELECT * FROM permission_user WHERE user_id = ? AND permission_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(1, $user_id);
        $stmt->bindValue(2, $permission_id);
        $stmt->execute();
        $result = $stmt->fetch();
        if ($result == null) {
            return false;
        }
        return true;
    }
}
